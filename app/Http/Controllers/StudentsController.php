<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::paginate(20);
        return view('student.all', [
            "title" => "Student",
            "students" => $students,
            "page" => $students->currentPage(),
            "hasnext" => $students->hasMorePages()
        ]);
    }

    public function detail(int $id)
    {
        return view('student.detail', [
            "title" => "Student Details",
            "student" => Student::find($id)
        ]);
    }

    /* public function add()
    {
        return view('student.add', [
            "title" => "Add Student Data",
            "classes" => Kelas::all()
        ]);
    } */

    /* public function edit(Student $student)
    {
        return view('student.edit', [
            "title" => "Edit Student Data",
            "student" => $student,
            "classes" => Kelas::all()
        ]);
    } */

    public function new(Request $req)
    {
        $validate = $req->validate([
            "nis" => "required",
            "nama" => "required",
            "kelas_id" => "required",
            "tanggal_lahir" => "required",
            "alamat" => "required"
        ]);

        $result = Student::create($validate);
        if ($result) {
            if (Auth::check()) {
                return redirect("/dashboard/students")->with("success", "Data siswa berhasil ditambah");
            } else {
                return redirect("/students")->with("success", "Data siswa berhasil ditambah");
            }
        }
    }

    public function destroy(int $id)
    {
        $result = Student::destroy($id);
        if ($result) {
            if (Auth::check()) {
                return redirect("/dashboard/students")->with("success", "Data siswa berhasil dihapus");
            } else {
                return redirect("/students")->with("success", "Data siswa berhasil dihapus");
            }
        }
    }

    public function modify(Request $req, int $id)
    {
        $validate = $req->validate([
            "nis" => "required",
            "nama" => "required",
            "kelas_id" => "required",
            "tanggal_lahir" => "required",
            "alamat" => "required"
        ]);

        $result = Student::where('id', $id)->update($validate);

        if ($result) {
            if (Auth::check()) {
                return redirect("/dashboard/students")->with("success", "Data berhasil diubah");
            } else {
                return redirect("/students")->with("success", "Data berhasil diubah");
            }
        }
    }
}
