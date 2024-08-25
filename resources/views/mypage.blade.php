@extends('layouts.app')

@section('title', 'マイページ')

@section('content')
<section id="mypage">
    <h2 class="text-xl font-semibold mb-4">マイページ</h2>
    <p class="mb-6">ようこそ、{{ Auth::user()->username }}さん！</p>
    <div class="mb-6">
        <p><strong>名前:</strong> {{ Auth::user()->username }}</p>
        <p><strong>メールアドレス:</strong> {{ Auth::user()->email }}</p>
        <!-- 他のユーザー情報をここに追加 -->
    </div>
</section>
@endsection