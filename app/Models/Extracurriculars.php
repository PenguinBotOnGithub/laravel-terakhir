<?php

namespace App\Models;

class Extracurriculars
{
    private static $extracurricular = [
        [
            "id" => 1234,
            "nama" => "Sepakbola",
            "nama_pembina" => "Pak Roni",
            "deskripsi" => "Sepakbola masa harus pake deskripsiin sih"
        ],
        [
            "id" => 1235,
            "nama" => "Futsal",
            "nama_pembina" => "Pak Bagas",
            "deskripsi" => "Kayak sepakbola tapi mainnya di lantai"
        ],
        [
            "id" => 1236,
            "nama" => "Bulutangkis",
            "nama_pembina" => "Pak Yanto",
            "deskripsi" => "Menangkis bulu dengan raket"
        ],
        [
            "id" => 1237,
            "nama" => "Bola Basket",
            "nama_pembina" => "Pak Alif",
            "deskripsi" => "Kayak futsal tapi mantulin sama lempar bola"
        ],
        [
            "id" => 1238,
            "nama" => "Bola Voli",
            "nama_pembina" => "Pak Awan",
            "deskripsi" => "Kayak basket tapi gak dimantulin"
        ],
    ];

    public static function all()
    {
        return self::$extracurricular;
    }
}
