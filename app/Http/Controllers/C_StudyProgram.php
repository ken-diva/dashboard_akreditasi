<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class C_StudyProgram extends Controller
{
    public function table()
    {
        $data = DB::table('study_program')
            ->join("faculty", "faculty.id", "=", "study_program.faculty_id")
            ->select("faculty.faculty_name", "study_program.*")
            ->get();

        $faculty_data = DB::table('faculty')->get();

        return view('pages.prodi.table', [
            'data' => $data,
            'faculty_data' => $faculty_data,
            'title' => 'Data Program Studi',
            'bread_item' => 'Program Studi',
            'bread_item_active' => 'Data Program Studi',
        ]);
    }

    public function detail($id)
    {
        $data = DB::table('study_program')
            ->join("faculty", "faculty.id", "=", "study_program.faculty_id")
            ->select("faculty.faculty_name", "study_program.*")
            ->where('study_program.id', $id)
            ->first();

        $list_faculty = DB::table('faculty')->get();

        if ($data) {

            $level_formatted = "";
            if ($data->level == 1) {
                $level_formatted = "S1";
            } else if ($data->level == 2) {
                $level_formatted = "S2";
            } else if ($data->level == 3) {
                $level_formatted = "S3";
            } else if ($data->level == 4) {
                $level_formatted = "D4";
            } else if ($data->level == 5) {
                $level_formatted = "D5";
            }

            return response()->json([
                'id' => $data->id,
                'selected_option_id' => $data->faculty_id,
                'options' => $list_faculty,
                'studyprogram_name' => $data->studyprogram_name,
                'faculty_id' => $data->faculty_id,
                'level' => $data->level,
                'accreditation_status' => $data->accreditation_status,
                'national_accreditation' => $data->national_accreditation,
                'national_accrediation_grade' => $data->national_accrediation_grade,
                'date_national_accreditation' =>
                date('d F Y', strtotime($data->date_national_accreditation)),
                'expired_national_accreditation' => date('d F Y', strtotime($data->expired_national_accreditation)),
                'international_accreditaton' => $data->international_accreditaton,
                'international_accrediation_grade' => $data->international_accrediation_grade,
                'date_international_accreditation' => date('d F Y', strtotime($data->expired_international_accreditation)),
                'expired_international_accreditation' => date('d F Y', strtotime($data->expired_international_accreditation)),
            ]);
        } else {
            return response()->json(['error' => 'Item not found'], 404);
        }

        // return view('pages.study_program.detail', [
        //     'data' => $data,
        //     'title' => 'Detail Program Studi',
        //     'bread_item' => 'Program Studi',
        //     'bread_item_active' => 'Detail Program Studi',
        // ]);
    }

    // public function detail_edit($id)
    // {
    //     $data_studyprogram = DB::table('study_program')
    //         ->join("faculty", "faculty.id", "=", "study_program.faculty_id")
    //         ->select("faculty.faculty_name", "study_program.*")
    //         ->where('study_program.id', $id)
    //         ->first();

    //     $list_faculty = DB::table('faculty')->get();

    //     return response()->json([
    //         'id' => $data_studyprogram->id,
    //         'selected_option_id' => $data_studyprogram->faculty_id,  // Mengirim faculty_id untuk selected
    //         'options' => $list_faculty
    //     ]);
    // }


    public function add()
    {
        $faculty_data = DB::table('faculty')->get();

        return view('pages.study_program.add', [
            'faculty_data' => $faculty_data,
            'title' => 'Tambah Program Studi',
            'bread_item' => 'Program Studi',
            'bread_item_active' => 'Tambah Program Studi',
        ]);
    }

    public function add_data(Request $request)
    {

        // $date = $request->input('expired_national_accreditation');
        // $tes = Carbon::createFromFormat('m/d/Y', $date)->format('Y-m-d 00:00:00');
        // dd($tes);
        // Validate the incoming request data
        $request->validate([
            'studyprogram_name' => 'required|string|max:255',
        ]);

        // Get the last study_program record's ID
        $laststudy_program = DB::table('study_program')->orderByDesc('id')->first();

        // Determine the new ID
        $newId = $laststudy_program ? $laststudy_program->id + 1 : 1;

        // get value
        $studyprogram_name = $request->input('studyprogram_name');
        $faculty_id = $request->input('faculty_id');
        $level = $request->input('level');
        $accreditation_status = $request->input('accreditation_status');
        $national_accreditation = $request->input('national_accreditation');
        $national_accrediation_grade = $request->input('national_accrediation_grade');
        $date_national_accreditation = $request->input('date_national_accreditation');
        $expired_national_accreditation = $request->input('expired_national_accreditation');
        $international_accreditaton = $request->input('international_accreditaton');
        $international_accrediation_grade = $request->input('international_accrediation_grade');
        $date_international_accreditation = $request->input('expired_international_accreditation');
        $expired_international_accreditation = $request->input('expired_international_accreditation');
        $created_at = Carbon::now();
        $updated_at = Carbon::now();

        $added = DB::table('study_program')->insert([
            'id' => $newId,
            'faculty_id' => $faculty_id,
            'studyprogram_name' => $studyprogram_name,
            'level' => $level,
            'accreditation_status' => $accreditation_status,
            'national_accreditation' => $national_accreditation,
            'national_accrediation_grade' => $national_accrediation_grade,
            'date_national_accreditation' => Carbon::createFromFormat('m/d/Y', $date_national_accreditation)->format('Y-m-d 00:00:00'),
            'expired_national_accreditation' => Carbon::createFromFormat('m/d/Y', $expired_national_accreditation)->format('Y-m-d 00:00:00'),
            'international_accreditaton' => $international_accreditaton,
            'international_accrediation_grade' => $international_accrediation_grade,
            'date_international_accreditation' => Carbon::createFromFormat('m/d/Y', $date_international_accreditation)->format('Y-m-d 00:00:00'),
            'expired_international_accreditation' => Carbon::createFromFormat('m/d/Y', $expired_international_accreditation)->format('Y-m-d 00:00:00'),
            'created_at' => $created_at,
            'updated_at' => $updated_at
        ]);

        // for notification
        if ($added > 0) {
            session()->flash('add_success', 'Data Program Studi berhasil ditambahkan!');
        } else {
            session()->flash('add_failed', 'Data Program Studi gagal ditambahkan!');
        }

        return redirect('/study_program');
    }

    public function delete($id)
    {
        // delete record
        $deleted = DB::table('study_program')->where('id', $id)->delete();

        // for notification
        if ($deleted > 0) {
            session()->flash('delete_success', 'Data Program Studi berhasil dihapus!');
        } else {
            session()->flash('delete_failed', 'Data Program Studi gagal dihapus!');
        }

        return redirect('/study_program');
    }

    // just for view
    public function update($id)
    {
        $data = DB::table('study_program')
            ->join("faculty", "faculty.id", "=", "study_program.faculty_id")
            ->select("faculty.faculty_name", "study_program.*")
            ->where('study_program.id', $id)
            ->get();

        return view('pages.study_program.update', [
            'data' => $data,
            'title' => 'Detail Program Studi',
            'bread_item' => 'Program Studi',
            'bread_item_active' => 'Detail Program Studi',
        ]);
    }

    public function update_data($id, Request $request)
    {
        // // Validate the incoming request data
        $request->validate([
            'studyprogram_name' => 'required|string|max:255',
        ]);

        // get value
        $studyprogram_name = $request->input('studyprogram_name');
        $level = $request->input('level');
        $accreditation_status = $request->input('accreditation_status');
        $national_accreditation = $request->input('national_accreditation');
        $national_accrediation_grade = $request->input('national_accrediation_grade');
        $date_national_accreditation = $request->input('date_national_accreditation');
        $expired_national_accreditation = $request->input('expired_national_accreditation');
        $international_accreditaton = $request->input('international_accreditaton');
        $international_accrediation_grade = $request->input('international_accrediation_grade');
        $date_international_accreditation = $request->input('expired_international_accreditation');
        $expired_international_accreditation = $request->input('expired_international_accreditation');
        $updated_at = Carbon::now();

        $updated = DB::table('study_program')
            ->where('id', $id)
            ->update(
                [
                    'studyprogram_name' => $studyprogram_name,
                    'level' => $level,
                    'accreditation_status' => $accreditation_status,
                    'national_accreditation' => $national_accreditation,
                    'national_accrediation_grade' => $national_accrediation_grade,
                    'date_national_accreditation' => $date_national_accreditation,
                    'expired_national_accreditation' => $expired_national_accreditation,
                    'international_accreditaton' => $international_accreditaton,
                    'international_accrediation_grade' => $international_accrediation_grade,
                    'date_international_accreditation' => $date_international_accreditation,
                    'expired_international_accreditation' => $expired_international_accreditation,
                    'updated_at' => $updated_at,
                ]
            );

        return response()->json(['success' => 'Data Program Studi berhasil diupdate!']);

        // // for notification
        // if ($updated > 0) {
        //     session()->flash('update_success', 'Data Program Studi berhasil diupdate!');
        // } else {
        //     session()->flash('update_failed', 'Data Program Studi gagal diupdate!');
        // }

        // for notification
        if ($updated > 0) {
            return response()->json(['success' => 'Data Program Studi berhasil diupdate!']);
        } else {
            return response()->json(['failed' => 'Data Program Studi gagal diupdate!']);
        }

        // return redirect('/study_program');
    }
}
