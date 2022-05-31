@extends('layout')
@section('main-content')


<div class="prodcut-t p-5">

  <p> <b>Sản Phẩm Yêu Thích</b></p>

</div>

<style>
  #love {
    color: red;


  }
</style>
<div class="row p-4 ">

  @foreach($data as $item)
  <div class="col-2">
    <img src="{{ asset('img/'.$item->product->image)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><a href="{{ url('product/'.$item->id)}}">{{$item->product->name}}</a></h5>
      <p class="card-text">{{ $item->product->price}}</p>
      <div class="product-btns">
        <div class="add-to-wishlist"><a href=""><i class="fa fa-heart-o" id="love"></i></a></div>


      </div>

      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>





  @endforeach


</div>
@endsection