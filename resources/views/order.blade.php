@extends('layout')
@section('main-content')

@foreach($data as $item)
<div class="row" style="padding-left:300px">

    <div class="col-1">
    
    <img height="80px" width="80px" src="{{ asset('img/'.$item->product->image)}}" alt="">
   

    </div>
    <div class="col-3">

  
    
    <div class="card border-success mb-3" style="max-width: 80rem;">
  <div class="card-header bg-transparent border-success">{{ $item->product_name }}</div>
  <div class="card-body text-success">
    <h5 class="card-title">{{ number_format($item->money) }} VND</h5>
   
  </div>
  
</div>

    </div>
</div>
@endforeach
  
@endsection