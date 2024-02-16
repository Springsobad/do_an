<?php

namespace App\Http\Controllers;

use App\Models\NguoiDung;
use Illuminate\Http\Request;

class NguoiDungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nguoidung = NguoiDung::paginate(5);
        return view('index', compact('nguoidung'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        NguoiDung::create($request->all());
        return redirect()->route('nguoidung.index')->with('thong bao', 'Them người dùng thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NguoiDung $nguoidung)
    {
        return view('edit', compact('nguoidung'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NguoiDung $nguoidung)
    {
        $nguoidung->update($request->all());
        return redirect()->route('nguoidung.index')->with('thong bao', 'Cập nhật thông tin thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NguoiDung $nguoidung)
    {
        $nguoidung->delete();
        return redirect()->route('nguoidung.index')->with('thong bao', 'Xóa thông tin thành công');
    }
}
