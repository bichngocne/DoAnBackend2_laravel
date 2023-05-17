@extends('admin_layout')
@section('admin_content')

<h6 class="font-weight-bolder mb-0">Edit Category</h6>
<hr>
<form style="width: 1500px;" action="{{ route('editcategories',$lsp->id) }}" method="post">
  @csrf
  <div class="form-group ">
    <label style="font-size:16px" class="font-weight-bolder mb-0"></label>
    <input type="text" name="category_name" class="form-control" id="category_name" value="{{ $lsp->tenloaisanpham }}" placeholder="Enter category name">
  </div>


  <hr>
  <button type="submit" name="add_category_product" class="btn btn-primary">Edit</button>

</form>


@endsection