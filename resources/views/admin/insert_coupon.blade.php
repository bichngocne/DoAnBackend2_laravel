@extends('admin_layout')
@section('admin_content')

<h6 class="font-weight-bolder mb-0">Add Coupon</h6>
<hr>

<form style="width: 1200px;" action="{{ URL::to('add-coupon') }}" method="post">
  {{ csrf_field() }}
  <div class="form-group ">
    <label style="font-size:16px" class="font-weight-bolder mb-0">Tên khuyến mại</label>
    <input type="text" name="tenkhuyenmai" class="form-control" id="tenkhuyenmai" placeholder="">
    @if ($errors->has('tenkhuyenmai'))
    <span class="text-danger">{{ $errors->first('tenkhuyenmai') }}</span>
    @endif
  </div>
  <div class="form-group">
    <label style="font-size:16px" minlength="1" class="font-weight-bolder mb-0">Giá trị</label>
   
    <input type="number" name="giatri" class="form-control" id="giatri" placeholder="">
    @if ($errors->has('giatri'))
    <span class="text-danger">{{ $errors->first('giatri') }}</span>
    @endif
  </div>
  <button type="submit" name="add_coupon" class="btn btn-primary">Add</button>
  <hr>
</form>


@endsection