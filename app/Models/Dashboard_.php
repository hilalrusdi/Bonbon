<?php

namespace App\Models;

class Dashboard
{
    private static $dashboard_text = [
        [
            "tittle" => "aku adalah aku",
            "slug" => "judul pertama",
            "body" => "telah kamu mengikuti beberapa tahapan pembuatan outline diatas, maka ada baiknya kamu melihat contoh outline sebelum membuat karya tulis seperti dibawah ini. Cukup scroll saja layarny"
        ],
        [
            "tittle" => "kamu adalah kamu",
            "slug" => "judul kedua",
            "body" => "telah kamu mengikuti beberapa tahapan pembuatan outline diatas, maka ada baiknya kamu melihat contoh outline sebelum membuat karya tulis seperti dibawah ini. Cukup scroll saja layarny"
        ]
    ];

    public static function all()
    {
        return self::$dashboard_text;
    }

}
