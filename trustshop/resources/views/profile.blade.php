@extends('layouts.app')

@section('main')
<div class="main">
  <form class="auth-card" action="{{ route('profile.profile_thanks') }}" method="post">
      @csrf
      @method('PATCH')
      <div class="auth-card__ttl">Profile Edit</div>

      <div class="form-check">
          <input class="form-check-input" type="radio" name="role" value="user" id="flexRadioDefault1" {{ $user->role === 'user' ? 'checked' : '' }}>
          <label class="form-check-label" for="flexRadioDefault1">
              ユーザー権限
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="role" value="owner" id="flexRadioDefault2" {{ $user->role === 'owner' ? 'checked' : '' }}>
          <label class="form-check-label" for="flexRadioDefault2">
              オーナー権限
          </label>
      </div>

      <div class="auth-card__profile">
          <img class="auth-card__profile__img" src="/img/username.png" alt="username-icon" width="25px" />
          <p class="auth-card__profile__text">{{ $user->name }}</p>
      </div>
      <div class="auth-card__profile">
          <img class="auth-card__profile__img" src="/img/email.png" alt="email-icon" width="25px" />
          <p class="auth-card__profile__text">{{ $user->email }}</p>
      </div>
      <div class="auth-card__btn">
          <input type="submit" value="更新" />
      </div>
  </form>

</div>
@endsection
