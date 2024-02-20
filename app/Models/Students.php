<?php

namespace App\Models;

class Students
{
    private static $students = [
        [
            "id" => 1,
            "nis" => 823456,
            "nama" => "Aan Kurniawan",
            "alamat" => "Bumi",
            "kelas" => "11 PPLG-1"
        ],
        [
            "id" => 2,
            "nis" => 823457,
            "nama" => "Aaron Ikhwan Saputra",
            "alamat" => "Bumi",
            "kelas" => "11 PPLG-1"
        ],
        [
            "id" => 3,
            "nis" => 823458,
            "nama" => "Acaryanandana Alif Saputra",
            "alamat" => "Bumi",
            "kelas" => "11 PPLG-1"
        ],
        [
            "id" => 4,
            "nis" => 823459,
            "nama" => "Danish Praditya Saputra",
            "alamat" => "Bumi",
            "kelas" => "11 PPLG-1"
        ],
        [
            "id" => 5,
            "nis" => 823460,
            "nama" => "Yakaria Yahya",
            "alamat" => "Bumi",
            "kelas" => "11 PPLG-1"
        ],
    ];

    public static function all()
    {
        return self::$students;
    }
}
