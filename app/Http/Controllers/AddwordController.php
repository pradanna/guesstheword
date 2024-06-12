<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theword;

class AddwordController extends Controller
{
    public function index()
    {
        $addwords = Theword::all();
        return view('addword', compact('addwords'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kata' => 'required|string',
        ]);

        Theword::create($request->all());

        return redirect()->route('addwords.index');
    }

    public function destroy($id)
    {
        $addword = Theword::findOrFail($id);
        $addword->delete();

        return redirect()->route('addwords.index')->with('success', 'Kata berhasil dihapus.');
    }

    public function checkWord(Request $request)
    {
        $request->validate([
            'kata' => 'required|string',
        ]);

        $wordExists = Theword::where('kata', $request->kata)->exists();

        if ($wordExists) {
            // Redirect ke halaman lain jika kata ditemukan
            return redirect()->to('/congrats'); // Ganti '/desired-page' dengan URL tujuan Anda
        } else {
            // Tampilkan alert jika kata tidak ditemukan
            return redirect()->back()->with('error', 'Sorry, the answer you entered is wrong');
        }
    }
}
