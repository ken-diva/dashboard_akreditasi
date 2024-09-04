<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class C_StudyProgram extends Controller
{
    public function table()
    {
        // $data = DB::select('select * from study_program');
        $data = DB::table('study_program')
            ->join("faculty", "faculty.id", "=", "study_program.faculty_id")
            ->select("faculty.faculty_name", "study_program.*")
            ->get();

        return view('pages.study_program.table', [
            'data' => $data,
            'title' => 'Data Program Studi',
            'bread_item' => 'Program Studi',
            'bread_item_active' => 'Data Program Studi',
        ]);
    }

    public function detail($id)
    {
        // $data = DB::select('select * from study_program where id = :id', ['id' => $id]);
        $data = DB::table('study_program')->where('id', $id)->get();

        return view('pages.study_program.detail', [
            'data' => $data,
            'title' => 'Detail Program Studi',
            'bread_item' => 'Program Studi',
            'bread_item_active' => 'Detail Program Studi',
        ]);
    }

    public function add()
    {
        return view('pages.study_program.add', [
            'title' => 'Tambah Program Studi',
            'bread_item' => 'Program Studi',
            'bread_item_active' => 'Tambah Program Studi',
        ]);
    }

    public function add_data(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'study_program_name' => 'required|string|max:255',
        ]);

        // Get the last study_program record's ID
        $laststudy_program = DB::table('study_program')->orderByDesc('id')->first();

        // Determine the new ID
        $newId = $laststudy_program ? $laststudy_program->id + 1 : 1;

        // get value
        $study_program_name = $request->input('study_program_name');
        $created_at = Carbon::now();
        $updated_at = Carbon::now();

        $added = DB::table('study_program')->insert([
            'id' => $newId,
            'study_program_name' => $study_program_name,
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
        // $deleted = DB::delete('delete from study_program where id = :id', ['id' => $id]);
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
        // $data = DB::select('select * from study_program where id = :id', ['id' => $id]);
        $data = DB::table('study_program')->where('id', $id)->get();

        return view('pages.study_program.update', [
            'data' => $data,
            'title' => 'Detail Program Studi',
            'bread_item' => 'Program Studi',
            'bread_item_active' => 'Detail Program Studi',
        ]);
    }

    public function update_data($id, Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'study_program_name' => 'required|string|max:255',
        ]);

        // get value
        $study_program_name = $request->input('study_program_name');
        $updated_at = Carbon::now();

        // update data
        // $updated = DB::update(
        //     '
        // update study_program 
        // set study_program_name = :study_program_name, updated_at = :updated_at
        // where id = :id',
        //     [
        //         'study_program_name' => $study_program_name,
        //         'updated_at' => $updated_at,
        //         'id' => $id
        //     ]
        // );

        $updated = DB::table('study_program')
            ->where('id', $id)
            ->update(
                [
                    'study_program_name' => $study_program_name,
                    'updated_at' => $updated_at,
                ]
            );

        // for notification
        if ($updated > 0) {
            session()->flash('update_success', 'Data Program Studi berhasil diupdate!');
        } else {
            session()->flash('update_failed', 'Data Program Studi gagal diupdate!');
        }

        return redirect('/study_program');
    }
}
