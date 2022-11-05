@extends('layout.common')

@section('title', 'ユーザー作成ページ')

@include('layout.header')
@section('content')

  {{-- ユーザー情報入力フォーム --}}
  <form method="POST" action="{{ route('user.confirm')}}">
    @csrf
    <div class="form-inner">
      <label for="user-name">名前:</label>
      <input id="user-name" type="text" name="name">

      <label for="user-email">メールアドレス:</label>
      <input type="email" name="email">

      <label for="user-password">パスワード:</label>
      <input type="password" name="password">

      <input type="submit" value="確認する">
      <input type="reset" value="初期化する">
    </div>
  </form>
@endsection

@include('layout.submenu')
@include('layout.footer')