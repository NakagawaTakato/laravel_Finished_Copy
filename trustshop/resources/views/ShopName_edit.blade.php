@extends('layouts.app')

@section('main')

<div class="main">
  <div class="flex center merchandise">
    
    <form class="merchandise-form" action="/shop_edit/ShopName_edit/ShopName_edit_thanks" method="POST">
      @csrf
      <div class="make-form__group">

        <div class="make-form__group__name">ショップ名　　　　　　<input class="make-form__group__name__input" type="text" name="name" value="{{ $shop->name }}"/>
        @error('name')
          <p class="error">{{ $message }}</p>
        @enderror
        </div>

        <div class="make-form__group__nameTextArea">ショップ説明　　　　　<textarea class="make-form__group__name__input" type="text" name="detail" rows="15">{{$shop->detail}}</textarea>
        @error('detail')
          <p class="error">{{ $message }}</p>
        @enderror
        </div>

        <input type="hidden" name="shop_id" value="{{$shop->id}}">
        <button class="make-form__group__button" type="submit">編集</button>

      </div>
    </form>

  </div>
</div>
@endsection



