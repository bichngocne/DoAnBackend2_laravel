@extends('admin_layout')
@section('admin_content')
<h6 class="font-weight-bolder mb-0">Product</h6>
<div class="a">
    <div class="searcha">
        <form action="" method="GET">
            <div class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="seek" placeholder="Type product name here...">
                <button type="submit" class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank">Search</button>
            </div>
            @csrf

        </form>
    </div>
    <br>
    <div class="searcha">
        <form action="" method="GET">
            <div class="input-group">
                <select name="arrange" class="form-control" id="product-parent">
                    <option value="iprice">
                        Gradually increase in price
                    </option>
                    <option value="dprice">
                        Gradually decrease in price
                    </option>
                </select>
                <button type="submit" class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank">Arrange</button>
            </div>
            @csrf

        </form>
    </div>
</div>
<br>
<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
        <tr style="text-align:  center;">
            <th>ID</th>
            <th>Product name</th>
            <th>Decription</th>
            <th>Count</th>
            <th>Price</th>
            <th>Image</th>
            <th>Category</th>
            <th>Coupon</th>
            <th>Create_at</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listSp as $item)
        <tr>
            <td style="text-align: center;">
                <p class="fw-bold mb-1">{{ $item->sp_id }}</p>
            </td>
            <td style="text-align: center;">
                {{$item->tensp}}
            </td>
            <td style="text-align: center;">
                <?php
                if (strlen($item->mota) > 80)
                    echo substr($item->mota, 0, 80) . "...";
                else
                    echo $item->mota;
                ?>
            </td>
            <td style="text-align: center;">
                {{$item->soluong}}
            </td>
            <td style="text-align: center;">
                {{$item->gia}}
            </td>
            <td style="text-align: center;">
                <img src="{{asset('/uploads/'.$item->hinhanh)}}" alt="" height="100px" width="100px">
            </td>
            <td style="text-align: center;">
                {{$item->tenloaisanpham}}
            </td>
            <td style="text-align: center;">
                
            </td>
            <td style="text-align: center;">
                {{$item->created_at}}
            </td>
            <td style="text-align: center;">
                <a href="" type="button" class="btn btn-info">Edit</a>
                <a onclick="return confirm('Are you sure you want delete?')" href="" type="button" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection