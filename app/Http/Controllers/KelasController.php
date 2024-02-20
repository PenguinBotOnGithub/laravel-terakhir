<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelasController extends Controller
{
    public function index()
    {
        return view("kelas.all", [
            "title" => "Classes",
            "classes" => Kelas::all()
        ]);
    }

    /* public function add()
    {
        return view("kelas.add", [
            "title" => "Add Class",
        ]);
    } */

    public function create(Request $req)
    {
        $validated = $req->validate([
            "nama" => "required"
        ]);

        $result = Kelas::create($validated);

        if ($result) {
            if (Auth::check()) {
                return redirect("/dashboard/classes")->with("success", "Data kelas berhasil ditambah");
            } else {
                return redirect("/classes")->with("success", "Data kelas berhasil ditambah");
            }
        }
    }

    public function destroy(Kelas $kelas)
    {
        $result = Kelas::destroy($kelas->id);

        if ($result) {
            if (Auth::check()) {
                return redirect("/dashboard/classes")->with("success", "Data kelas berhasil dihapus");
            } else {
                return redirect("/classes")->with("success", "Data kelas berhasil dihapus");
            }
        }
    }

    /* public function edit(Kelas $kelas)
    {
        return view("kelas.edit", [
            "title" => "Edit Class",
            "class" => $kelas
        ]);
    } */

    public function modify(Request $req, int $id)
    {
        $validated = $req->validate([
            "nama" => "required"
        ]);

        $result = Kelas::where("id", $id)->update($validated);

        if ($result) {
            if (Auth::check()) {
                return redirect("/dashboard/classes")->with("success", "Data kelas berhasil diubah");
            } else {
                return redirect("/classes")->with("success", "Data kelas berhasil diubah");
            }
        }
    }

    public function detail(Kelas $kelas)
    {
        return view("kelas.detail", [
            "title" => "Detail Class",
            "class" => $kelas,
        ]);
    }
}
