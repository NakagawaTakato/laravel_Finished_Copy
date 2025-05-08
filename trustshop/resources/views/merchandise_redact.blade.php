@extends('layouts.app')

@section('main')
<div class="main">
  <div class="flex center merchandise">
    <form class="merchandise-form" action="{{ route('merchandise_edit_thanks') }}" method="POST">
      @csrf
      <input type="hidden" name="merchandise_id" value="{{ $merchandise->id ?? old('merchandise_id', session('merchandise_id')) }}">
      <input type="hidden" name="transformation_id" value="{{ $transformation->id ?? old('transformation_id', session('transformation_id')) }}">
      <div class="make-form__group">

        <div class="make-form__group__name">商品名　　　　　　<input class="make-form__group__name__input" type="text" name="name" value="{{ old('name', $merchandise->name ?? '') }}">
        </div>
        <p class="make-form__group__error">
          @error('name')
              {{ $message }}
          @enderror
        </p>

        <div class="make-form__group__name">値段　　　　　　　<input class="make-form__group__name__input" type="text" name="description" value="{{ old('description', $merchandise->description ?? '') }}">
        </div>
        <p class="make-form__group__error">
          @error('description')
              {{ $message }}
          @enderror
        </p>

        <div class="make-form__group__nameTextArea">商品説明　　　　　<textarea class="make-form__group__name__InputFour" name="description_details_short" rows="3">{{ old('description_details_short', $merchandise->description_details_short ?? '') }}</textarea>
        </div>
        <p class="make-form__group__error">
          @error('description_details_short')
              {{ $message }}
          @enderror
        </p>

        <div class="make-form__group__nameTextArea">商品説明（詳しく） <textarea class="make-form__group__name__InputThree" name="description_details" rows="5">{{ old('description_details', $merchandise->description_details ?? '') }}</textarea>
        </div>
        <p class="make-form__group__error">
          @error('description_details')
              {{ $message }}
          @enderror
        </p>


        <div class="make-form__group__name">商品数　　　　　　<input class="make-form__group__name__input" type="text" name="numbers" value="{{ old('numbers', $transformation->numbers ?? '') }}"/>
        </div>
        <p class="make-form__group__error">
          @error('numbers')
              {{ $message }}
          @enderror
        </p>
        

        <button class="make-form__group__button" type="submit">編集</button>
      </div>
    </form>
  </div>
</div>
@endsection