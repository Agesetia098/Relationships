<?php

namespace App\Http\Controllers\Admin;

use Auth;
use View;
use App\Models\Mapel;
use App\Models\Phone;
use App\Models\School;
use App\Models\Biodata;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\MapelsRequest;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Phone\PhoneStoreRequest;

class PhoneController extends Controller
{
    public function index()
    {
        // $phone = Phone::where('user_id', Auth::id())->first();
        // $bio = Auth::user()->biodata;
        $sekolah = User::where('id', Auth::id())->get();
        return view('admin.siswa.index', compact('sekolah'));
        return view('admin.layout.sidebar', compact('sekolah'));
    }

    public function create()
    {
        return view('admin.siswa.create');
    }
    public function store(MapelsRequest $request)
    {
         $data = $request->validated();
         Mapel::create([
            'id' => Auth::user()->id,
            'nilai' => $data['nilai'],
            'keterangan' => $data['keterangan']
        ]);
        return redirect()->route('admin.siswas.index');
    }
    public function nilai(){
        $nilai = Mapel::where('id', Auth::id())->get();
        return view('admin.siswa.nilai', compact('nilai'));
    }
}
