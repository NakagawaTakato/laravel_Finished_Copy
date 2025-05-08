@extends('layouts.app')

@section('main')
<div class="main">
    <div class="flex align-items-center center">
        <div class="merchandise-detail">
            <h1 class="merchandise-detail__title">登録した商品</h1>
            @foreach($merchandises as $key => $merchandise)
                <div class="merchandise-detail__content">
                    <h2 class="merchandise-detail__name">{{$merchandise->name}}</h2>
                    <p class="merchandise-detail__description">{{$merchandise->description_details}}</p>
                </div>
            @endforeach

            <a href="/" class="return__button">戻る</a>
        </div>

    </div>


</div>
@endsection

