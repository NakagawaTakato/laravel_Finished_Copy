@extends('layouts.app')

@section('main')
<div class="main">
  <div class="flex wrap shops">
    @foreach($shops as $shop)
    <div class="shop-card">
      <img class="shop-card__img" src="{{ $shop->image }}" alt="" />
      <div class="flex center">
        <form action="/mypage" method="POST" >
          @csrf
          <input type="hidden" name="shop_id" value="{{$shop->id}}">
          <button type="submit" class="shop-card__registration">{{$shop->name}}</button>
        </form>
      </div>
    </div>
    @endforeach
    
  </div>
</div>
@endsection
