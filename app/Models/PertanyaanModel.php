<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PertanyaanModel
{
    public static function getAll()
    {
        $pertanyaan = DB::table('pertanyaan')->get();
        return $pertanyaan;
    }

    public static function save($data)
    {
        // data_token dibuang
        unset($data["_token"]);
        $data['created_at'] = Carbon::now();
        $pertanyaan_baru = DB::table('pertanyaan')->insert($data);
        return $pertanyaan_baru;
    }

    public static function findById($id)
    {
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        return $pertanyaan;
    }

    public static function update($id, $request)
    {
        return DB::table('pertanyaan')
            ->where('id', $id)
            ->update([
                'judul' => $request['judul'],
                'isi' => $request['isi'],
                'updated_at' => Carbon::now(),
            ]);
    }

    public static function destroy($id)
    {
        return DB::table('pertanyaan')
            ->where('id', $id)
            ->delete($id);
    }
}
