@extends('layouts.app')

@section('main')
<div class="main">
  <div class="flex center merchandise">
    
    <form class="merchandise-form" action="/shop_edit/ShopName_registration/ShopName_registration_thanks" method="POST">
      @csrf
      <div class="make-form__group">
        <div class="make-form__group__name">ショップ名　　　　　　<input class="make-form__group__name__input" type="text" name="name">
        @error('name')
          <p class="error">{{ $message }}</p>
        @enderror
        </div>

        <div class="make-form__group__nameTextArea">ショップ説明　　　　　<textarea class="make-form__group__name__input" type="text" name="detail" rows="15"></textarea>
        @error('detail')
          <p class="error">{{ $message }}</p>
        @enderror
        </div>

        <button class="make-form__group__button" type="submit">作成</button>

      </div>
    </form>

  </div>
</div>
@endsection
