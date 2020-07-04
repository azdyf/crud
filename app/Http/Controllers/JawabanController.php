<?php

namespace App\Http\Controllers;

use App\Models\JawabanModel;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function store($pertanyaan_id, Request $request)
    {
        $jawaban = JawabanModel::save($pertanyaan_id, $request->all());
        return redirect('/pertanyaan/' . $pertanyaan_id);
    }
}
