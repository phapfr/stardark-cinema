<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Phim;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        $config         = Config::orderByDESC('id')->first();
        $danhSachPhim   = Phim::where('tinh_trang', '>', 0)->get();
        return view('AdminRocker.page.CauHinh.index', compact('config', 'danhSachPhim'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Config::create($data);
        
        toastr()->success('Cấu hình thành công');

        return redirect()->back();
    }
}
