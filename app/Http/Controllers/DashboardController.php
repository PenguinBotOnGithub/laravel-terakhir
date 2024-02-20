<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Kelas;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        return view("dashboard.home");
    }

    public function index_students(Request $req)
    {
        $filterType = $req->query("type", "nama");
        $filter = $req->query("filter", "");
        $students = null;
        switch ($filterType) {
            case 'nis':
                $students = Student::where("nis", "LIKE", "%$filter%")->paginate(20);
                break;
            case 'nama':
                $students = Student::where("nama", "LIKE", "%$filter%")->paginate(20);
                break;
            case 'alamat':
                $students = Student::where("alamat", "LIKE", "%$filter%")->paginate(20);
                break;
            default:
                Log::critical("ERROR: IMPOSSIBLE STATE");
                break;
        };
        return view("dashboard.students.all", [
            "students" => $students,
            // "page" => $students->currentPage(),
            // "hasnext" => $students->hasMorePages()
        ]);
    }

    public function index_classes()
    {
        return view("dashboard.classes.all", [
            "classes" => Kelas::all()
        ]);
    }

    public function detail_student(int $id)
    {
        return view('dashboard.students.detail', [
            "title" => "Student Details",
            "student" => Student::find($id)
        ]);
    }

    public function detail_class(Kelas $kelas)
    {
        return view("dashboard.classes.detail", [
            "class" => $kelas
        ]);
    }

    public function add_student()
    {
        return view('dashboard.students.add', [
            "title" => "Add Student Data",
            "classes" => Kelas::all()
        ]);
    }

    public function add_class()
    {
        return view("dashboard.classes.add");
    }

    public function edit_student(Student $student)
    {
        return view('dashboard.students.edit', [
            "title" => "Edit Student Data",
            "student" => $student,
            "classes" => Kelas::all()
        ]);
    }

    public function edit_class(Kelas $kelas)
    {
        return view("dashboard.classes.edit", [
            "class" => $kelas
        ]);
    }
}
