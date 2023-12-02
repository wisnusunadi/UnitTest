<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Club::all();
        return view('home', ['data' => $data]);
    }
    public function store(Request $request)
    {
        Club::create([
            'nama' => $request->nama,
            'negara' => $request->negara,
        ]);
        return redirect()->route('home');
    }
    public function update(Request $request, $id)
    {
        $data = Club::find($id);
        $data->nama = $request->nama;
        $data->negara = $request->negara;
        $data->save();
        return redirect()->route('home');
    }
    public function tambah()
    {
        $data = Club::all();
        return view('tambah', ['data' => $data]);
    }
    public function edit($id)
    {
        $data = Club::find($id);
        return view('edit', ['data' => $data]);
    }
    public function hapus($id)
    {
        $data = Club::find($id);
        $data->delete();
        return redirect()->route('home');
    }
}
