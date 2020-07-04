<?php

namespace App\Http\Controllers;

use App\Models\JawabanModel;
use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaan = PertanyaanModel::getAll();
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create()
    {
        return view('pertanyaan.form');
    }

    public function store(Request $request)
    {
        $pertanyaan_baru = PertanyaanModel::save($request->all());
        return redirect('/pertanyaan');
    }

    public function show($id)
    {
        $p = PertanyaanModel::findById($id);
        $jawaban = JawabanModel::getByQuestion($id);
        return view('pertanyaan.show', compact('p'), compact('jawaban'));
    }

    public function edit($id)
    {
        $p = PertanyaanModel::findById($id);
        return view('pertanyaan.edit', compact('p'));
    }

    public function update($id, Request $request)
    {
        $p = PertanyaanModel::update($id, $request->all());
        return redirect('/pertanyaan');
    }

    public function destroy($id)
    {
        PertanyaanModel::destroy($id);
        return redirect('/pertanyaan');
    }
}
