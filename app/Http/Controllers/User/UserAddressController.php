<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\DiaChi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'hoten' => 'required',
            'sdt' => 'required',
            'tinh' => 'required',
            'huyen' => 'required',
            'xa' => 'required',
            'diachicuthe' => 'required',
        ]);
        $user = Auth::user();
        // dd($user);die();
        $userID = $user->id;
        // Tạo đối tượng địa chỉ mới
        $diaChi = new DiaChi();
        $diaChi->id_user = $userID;
        $diaChi->tinh = $request->input('tinh');
        $diaChi->huyen = $request->input('huyen');
        $diaChi->xa = $request->input('xa');
        $diaChi->cuThe = $request->input('diachicuthe');
        // Lưu địa chỉ mới vào cơ sở dữ liệu
        $diaChi->save();
        //cap nhat ho ten địa chỉ user
        User::where('id', $userID)->update(['hoten' =>  $request->input('hoten'), 'sdt' => $request->input('sdt')]);
        return redirect()->back()->withErrors('Vui lòng nhập dữ liệu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
