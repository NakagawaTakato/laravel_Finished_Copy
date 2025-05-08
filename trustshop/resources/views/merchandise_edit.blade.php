@extends('layouts.app')

@section('main')
<div class="main">
  <div class="flex align-items-center center">
    <div class="make">
      <h1 class="make-title">{{$name->main}}</h1>

      <form class="make-form" action="merchandise_registration" method="POST">
        @csrf
        <div class="make-form__item">
          
          <button class="make-form__button-create" type="submit">商品作成</button>

        </div>
      </form>
    </div>
  </div>

  @foreach($merchandises as $key => $merchandise)
  <div class="flex center">
    <div class="edit">
      <table class="edit__group">
        <tr>
          <td>
            <p class="edit__group-form__name">{{$merchandise->name}}</p>
          </td>

          <form class="edit__group-form" action="merchandise_redact" method="POST">
            @csrf
            <td class="edit__group-form__td">
              <input type="hidden" name="merchandise_id" value="{{ $merchandise->id }}">
              <input type="hidden" name="transformation_id" value="{{$transformations[$key]->id}}">
              <button class="edit__group-form__button" type="submit">商品更新</button>
            </td>
          </form>

          <form class="edit__group-form" action="/merchandise_edit/cancel" method="POST">
            @method('DELETE')
            @csrf
            <td class="edit__group-form__td">
              <input type="hidden" name="id" value="{{ $merchandise->id }}">
              <button class="edit__group-form__destroy" type="submit" onclick="return delete_alert(this)">商品削除</button>
            </td>
          </form>

        </tr>
      </table>
    </div>
  </div>
  @endforeach
</div>
@endsection
