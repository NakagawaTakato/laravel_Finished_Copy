@extends('layouts.app')

@section('main')
<div class="main">
  <!-- ショップ名 -->
  <h1 class="detail-name" >{{$name->main}}</h1>

  <p class="detail-explanation">{!! $name->detail !!}</p>

  <!-- 商品一覧 -->
  <div class="flex wrap shops">
    @foreach($merchandises as $key => $merchandise)
      <div class="shop-cardTwo">

        <!-- オーナーのみ(商品詳細説明) -->
        @if(auth()->user()->role === 'owner')
          <!-- 商品詳細へページ遷移 -->
          <form action="/merchandise_detail" method="POST">
            @csrf
            <input type="hidden" name="merchandise_id" value="{{$merchandise->id}}">
            <input type="hidden" name="merchandise_name" value="{{$merchandise->name}}">
            <input type="hidden" name="merchandise_description" value="{{$merchandise->description_details}}">
            <button type="submit" class="shop-card-form__button">{{$merchandise->name}}</button>
          </form>
        @else
          <p>{{$merchandise->name}}</p>
        @endif


        <div class="shop-card__group">
          <img class="shop-card__group__img" src="{{ $merchandise->image }}" alt="" />
          <!-- 在庫がないとsoldout表示 -->
          @if(isset($transformations[$key]) && $transformations[$key]->numbers == 0)
            <div class="shop-card__group__soldout"><span class="shop-card__group__soldout__span">品切れ中</span></div>
          @endif
        </div>
        <p class="shop-card__text">本体価格{{$merchandise->description}}万円</p>


        <!-- 全て表示ではなく店の商品 -->
        @if(auth()->user()->role === 'owner')
        @else
          @if(isset($transformations[$key]) && $transformations[$key]->name == $name->main)
            @if($transformations[$key]->numbers == 0)
              <form action="/mypage" method="POST">
                <button type="submit" class="shop-card__get" disabled>
                  購入ボタン
                </button>
                <p>在庫：{{$transformations[$key]->numbers}}</p>
              </form>
            @else
              <form action="/thanks" method="POST">
                @csrf
                <input type="hidden" name="transformation_id" value="{{$transformations[$key]->id}}">
                <button type="submit" class="shop-card__get">
                  購入ボタン
                </button>
                <p>在庫：{{$transformations[$key]->numbers}}</p>
              </form>
            @endif
          @endif
        @endif

        <!-- オーナーのみ(商品登録) -->
        @if(auth()->user()->role === 'owner')
          @if(isset($transformations[$key]) && $transformations[$key]->is_favorite == false)
            <form action="/favorite_merchandise" method="POST">
              @csrf
              <input type="hidden" name="transformation_id" value="{{$transformations[$key]->id}}">
              <input type="hidden" name="merchandise_id" value="{{$merchandise->id}}">
              <button class="shop-card__button" type="submit">登録する</button>
            </form>
          @else
            <form action="/favorite_merchandise" method="POST">
              @csrf
              <button class="shop-card__button" type="submit" disabled>登録する</button>
            </form>
          @endif

        @endif

        
        <!-- 商品説明 -->
        <div class="shop-card__area">
            <button class="shop-card__area btn">{{$merchandise->description_details_short}}</button>
        </div>
  
        <dialog class="shop-card__modal">
            <div class="shop-card__modal__inner">
                <p class="shop-card__modal__inner__text">{{$merchandise->description_details}}</p>
                <div class="shop-card__modal__inner__close">
                    <button class="shop-card__modal__inner__close btn">閉じる</button>
                </div>
            </div>
        </dialog>


      </div>
    @endforeach
  </div>

</div>
@endsection