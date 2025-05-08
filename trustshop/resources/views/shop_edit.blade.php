@extends('layouts.app')

@section('main')
<div class="todo__alert">
  @if(session('message'))
  <div class="todo__alert--success">
    {{ session('message') }}
  </div>
  @endif
  @if ($errors->any())
  <div class="todo__alert--danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
</div>

<div class="main">
  <div class="flex align-items-center center">
    <div class="make">
      <form class="make-form" action="/shop_edit/ShopName_registration" method="POST">
        @csrf
        <div class="make-form__item">

          <button class="make-form__button-create" type="submit">ショップ作成</button>

        </div>
      </form>
    </div>
  </div>

  @foreach ($shops as $shop)
    <div class="flex center">
      <div class="edit">
        <table class="edit__group">
          <tr>
              <td>
                <form action="/merchandise_edit" method="POST" >
                  @csrf
                  <input type="hidden" name="shop_id" value="{{$shop->id}}">
                  <button type="submit" class="edit__group-form__shop">{{$shop->name}}</button>
                </form>
              </td>

              <td class="edit__group-form__td">
                <form class="edit__group-form" action="/shop_edit/ShopName_edit" method="POST">
                  @csrf
                  <input type="hidden" name="shop_id" value="{{$shop->id}}">
                  <button class="edit__group-form__update" type="submit">ショップ更新</button>
                </form>
              </td>

            <form class="edit__group-form" action="/shop_edit/delete" method="POST">
              @method('DELETE')
              @csrf
              <td class="edit__group-form__td">
                <input type="hidden" name="id" value="{{ $shop['id'] }}">
                <button class="edit__group-form__destroy" type="submit" onclick="return delete_alert(this)">ショップ削除</button>
              </td>
            </form>

          </tr>
        </table>
      </div>
    </div>
  @endforeach
</div>
@endsection
