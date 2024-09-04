<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class C_Faculty extends Controller
{
    public function index()
    {
        return view('pages.dashboard', [
            'title' => 'Dashboard',
            'bread_item' => 'Dashboard',
            'bread_item_active' => 'Dashboard',
        ]);
    }

    public function table()
    {
        // $data = DB::select('select * from faculty');
        $data = DB::table('faculty')->get();

        return view('pages.faculty.table', [
            'data' => $data,
            'title' => 'Data Fakultas',
            'bread_item' => 'Fakultas',
            'bread_item_active' => 'Data Fakultas',
        ]);
    }

    public function detail($id)
    {
        // $data = DB::select('select * from faculty where id = :id', ['id' => $id]);
        $data = DB::table('faculty')->where('id', $id)->get();

        return view('pages.faculty.detail', [
            'data' => $data,
            'title' => 'Detail Fakultas',
            'bread_item' => 'Fakultas',
            'bread_item_active' => 'Detail Fakultas',
        ]);
    }

    public function add()
    {
        return view('pages.faculty.add', [
            'title' => 'Tambah Fakultas',
            'bread_item' => 'Fakultas',
            'bread_item_active' => 'Tambah Fakultas',
        ]);
    }

    public function add_data(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'faculty_name' => 'required|string|max:255',
        ]);

        // Get the last faculty record's ID
        $lastFaculty = DB::table('faculty')->orderByDesc('id')->first();

        // Determine the new ID
        $newId = $lastFaculty ? $lastFaculty->id + 1 : 1;

        // get value
        $faculty_name = $request->input('faculty_name');
        $created_at = Carbon::now();
        $updated_at = Carbon::now();

        $added = DB::table('faculty')->insert([
            'id' => $newId,
            'faculty_name' => $faculty_name,
            'created_at' => $created_at,
            'updated_at' => $updated_at
        ]);

        // for notification
        if ($added > 0) {
            session()->flash('add_success', 'Data Fakultas berhasil ditambahkan!');
        } else {
            session()->flash('add_failed', 'Data Fakultas gagal ditambahkan!');
        }

        return redirect('/faculty');
    }

    public function delete($id)
    {
        // delete record
        // $deleted = DB::delete('delete from faculty where id = :id', ['id' => $id]);
        $deleted = DB::table('faculty')->where('id', $id)->delete();

        // for notification
        if ($deleted > 0) {
            session()->flash('delete_success', 'Data Fakultas berhasil dihapus!');
        } else {
            session()->flash('delete_failed', 'Data Fakultas gagal dihapus!');
        }

        return redirect('/faculty');
    }

    // just for view
    public function update($id)
    {
        // $data = DB::select('select * from faculty where id = :id', ['id' => $id]);
        $data = DB::table('faculty')->where('id', $id)->get();

        return view('pages.faculty.update', [
            'data' => $data,
            'title' => 'Detail Fakultas',
            'bread_item' => 'Fakultas',
            'bread_item_active' => 'Detail Fakultas',
        ]);
    }

    public function update_data($id, Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'faculty_name' => 'required|string|max:255',
        ]);

        // get value
        $faculty_name = $request->input('faculty_name');
        $updated_at = Carbon::now();

        // update data
        // $updated = DB::update(
        //     '
        // update Faculty 
        // set faculty_name = :faculty_name, updated_at = :updated_at
        // where id = :id',
        //     [
        //         'faculty_name' => $faculty_name,
        //         'updated_at' => $updated_at,
        //         'id' => $id
        //     ]
        // );

        $updated = DB::table('faculty')
            ->where('id', $id)
            ->update(
                [
                    'faculty_name' => $faculty_name,
                    'updated_at' => $updated_at,
                ]
            );

        // for notification
        if ($updated > 0) {
            session()->flash('update_success', 'Data Fakultas berhasil diupdate!');
        } else {
            session()->flash('update_failed', 'Data Fakultas gagal diupdate!');
        }

        return redirect('/faculty');
    }
}
