<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class C_Faculty extends Controller
{
    public function index()
    {
        $data = DB::select('select * from faculty');

        return view('pages.faculty.table', [
            'data' => $data,
            'title' => 'Data Fakultas',
            'bread_item' => 'Fakultas',
            'bread_item_active' => 'Data Fakultas',
        ]);
    }

    public function read($id)
    {
        $data = DB::select('select * from faculty where id = :id', ['id' => $id]);

        return view('pages.faculty.read', [
            'data' => $data,
            'title' => 'Detail Fakultas',
            'bread_item' => 'Fakultas',
            'bread_item_active' => 'Detail Fakultas',
        ]);
    }

    // lanjut disiniiii
    public function add()
    {
        // Get the last faculty record's ID
        $lastFaculty = DB::table('faculty')->last();

        // Determine the new ID
        $newId = $lastFaculty ? $lastFaculty->id + 1 : 1;

        dd($newId);

        // return redirect('/faculty');
    }

    public function delete($id)
    {
        // delete record
        $deleted = DB::delete('delete from faculty where id = :id', ['id' => $id]);

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
        $data = DB::select('select * from faculty where id = :id', ['id' => $id]);

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
        $updated = DB::update(
            '
        update Faculty 
        set faculty_name = :faculty_name, updated_at = :updated_at
        where id = :id',
            [
                'faculty_name' => $faculty_name,
                'updated_at' => $updated_at,
                'id' => $id
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
