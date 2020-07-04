<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class JawabanModel
{
    public static function getByQuestion($id)
    {
        $jawaban = DB::table('jawaban')
            ->where('pertanyaan_id', $id)
            ->get();
        return $jawaban;
    }

    public static function save($pertanyaan_id, $request)
    {
        // data_token dibuang

        return DB::table('jawaban')->insert([
            'isi' => $request['isi'],
            'profile_id' => 0,
            'pertanyaan_id' => $pertanyaan_id,
            'jawaban_terbaik' => 0,
            'created_at' => Carbon::now()
        ]);
    }
}
