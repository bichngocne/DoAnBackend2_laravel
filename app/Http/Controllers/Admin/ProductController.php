<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SanPham;

class ProductController extends Controller
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
    function ListProduct(){
        $listSp=DB::table("sanpham")
        ->join('loaisanpham','sanpham.id_loaisp','=','loaisanpham.id')
        ->paginate(5);       
        return view("management_admin.showproduct",compact("listSp"));
    }
    //Man hinh them SP
    function AddScreenProduct(){
        $listLsp=DB::table("loaisanpham")->get();
        $listkm=DB::table("khuyenmai")->get();
        return view("management_admin.add_product")->with('listLsp',$listLsp)->with('listkm',$listkm);
    }
    //Chuc nang them SP
    function AddProduct(Request $request){
        $request->validate([
            'product_name'=>'required',
            'product_desc'=>'required',
            'number_of_product'=>'required|integer|min:0',
            'product_price'=>'required|integer|min:0',
            'product_img'=>'required',        
            'category'=>'required',
            'promotional'=>'required',
        ]);
        $data=$request->all();
        $get_img=$request->file('product_img');
        $data['product_img']=$get_img->getClientOriginalName();
        $get_img->move("uploads",$get_img->getClientOriginalName());
        if($data['promotional']==-1){
            $data['promotional']=null;
        }
        $check=$this->create($data);
        return redirect()->route('listProduct');
    }
    //Man hinh chinh sua SP
    function EditScreenProduct($id){
        $sp=DB::table('sanpham')->where('sp_id',$id)->get();
        $listLsp=DB::table("loaisanpham")->get();
        $listkm=DB::table("khuyenmai")->get();
        return view("management_admin.edit_product")->with('listLsp',$listLsp)->with('listkm',$listkm)->with('sp',$sp);
    }
    //Chuc nang chinh sua SP
    function EditProduct($id,Request $request){
        $request->validate([
            'product_name'=>'required',
            'product_desc'=>'required',
            'number_of_product'=>'required|integer|min:0',
            'product_price'=>'required|integer|min:0',
            'product_img'=>'required',        
            'category'=>'required',
            'promotional'=>'required',
        ]);
        $data=$request->all();
        $get_img=$request->file('product_img');
        $data['product_img']=$get_img->getClientOriginalName();
        $get_img->move("uploads",$get_img->getClientOriginalName());
        DB::table('sanpham')->where("sp_id",$id)->update(['tensp'=>$data['product_name']]);
        DB::table('sanpham')->where("sp_id",$id)->update(['mota'=>$data['product_desc']]);
        DB::table('sanpham')->where("sp_id",$id)->update(['soluong'=>$data['number_of_product']]);
        DB::table('sanpham')->where("sp_id",$id)->update(['gia'=>$data['product_price']]);
        DB::table('sanpham')->where("sp_id",$id)->update(['hinhanh'=>$data['product_img']]);
        DB::table('sanpham')->where("sp_id",$id)->update(['id_loaisp'=>$data['category']]);
        if($data['promotional']==-1){
            $data['promotional']=null;
        }
        DB::table('sanpham')->where("sp_id",$id)->update(['id_khuyenmai'=>$data['promotional']]);
        return redirect()->route('listProduct');    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        //
        return SanPham::create([
            'tensp'=>$data['product_name'],
            'mota'=>$data['product_desc'],
            'soluong'=>$data['number_of_product'],
            'gia'=>$data['product_price'],
            'hinhanh'=>$data['product_img'],        
            'id_loaisp'=>$data['category'],
            'id_khuyenmai '=>$data['promotional'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
