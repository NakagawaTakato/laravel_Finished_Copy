@extends('layouts.app')

@section('main')
<div class="main">
  <div class="flex center merchandise">
    
    <form class="merchandise-form" action="merchandise_thanks" method="POST">
      @csrf
      <div class="make-form__group">
        <div class="make-form__group__name">商品名　　　　　　<input class="make-form__group__name__input" type="text" name="name"></div>
        <p class="make-form__group__error">
          @error('name')
              {{ $message }}
          @enderror
        </p>

        <div class="make-form__group__name">値段　　　　　　　<input class="make-form__group__name__input" type="text" name="description"></div>
        <p class="make-form__group__error">
          @error('description')
              {{ $message }}
          @enderror
        </p>

        <div class="make-form__group__nameTextArea">商品説明　　　　　<textarea class="make-form__group__name__InputFour" name="description_details_short" rows="3"></textarea></div>
        <p class="make-form__group__error">
          @error('description_details_short')
              {{ $message }}
          @enderror
        </p>

        <div class="make-form__group__nameTextArea">商品説明（詳しく）<textarea class="make-form__group__name__InputThree" name="description_details" rows="5"></textarea></div>
        <p class="make-form__group__error">
          @error('description_details')
              {{ $message }}
          @enderror
        </p>

        <div class="make-form__group__name">商品数　　　　　　<input class="make-form__group__name__input" type="text" name="numbers"/>
        </div>
        <p class="make-form__group__error">
          @error('numbers')
              {{ $message }}
          @enderror
        </p>

        <button class="make-form__group__button" type="submit">作成</button>

      </div>
    </form>

  </div>
</div>
@endsection
