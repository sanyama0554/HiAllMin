@extends('layouts.app')

@section('title', 'ユーザー登録・ログイン')

@section('content')
<section id="login">
    <h2 class="text-xl font-semibold mb-4">ユーザー登録・ログイン</h2>
    <p class="mb-6">新しいアカウントを作成するか、既存のアカウントでログインしてください。</p>
    
    @if ($errors->any())
        <div class="bg-red-500 text-white p-4 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="space-y-4" method="POST" action="{{ route('login') }}">
        @csrf
        <input type="text" name="username" placeholder="ユーザー名" required class="w-full p-2 border rounded">
        <input type="password" name="password" placeholder="パスワード" required class="w-full p-2 border rounded">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">ログイン</button>
    </form>
</section>
@endsection