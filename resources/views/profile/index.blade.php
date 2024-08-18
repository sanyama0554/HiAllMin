@extends('layouts.app')

@section('title', 'プロフィールページ')

@section('content')
<section id="profile">
    <h2 class="text-xl font-semibold mb-4">プロフィールページ</h2>
    <p class="mb-6">プロフィールを更新して、あなたの情報を管理しましょう。</p>
    <form class="space-y-4">
        <input type="text" placeholder="名前" required class="w-full p-2 border rounded">
        <input type="email" placeholder="メールアドレス" required class="w-full p-2 border rounded">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">更新</button>
    </form>
</section>
@endsection
