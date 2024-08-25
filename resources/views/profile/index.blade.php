@extends('layouts.app')

@section('title', 'プロフィールページ')

@section('content')
<section id="profile">
    <h2 class="text-xl font-semibold mb-4">プロフィールページ</h2>
    <p class="mb-6">プロフィールを更新して、あなたの情報を管理しましょう。</p>
    <div class="mb-6">
        <p><strong>名前:</strong> {{ $user->username }}</p>
        <p><strong>メールアドレス:</strong> {{ $user->email }}</p>
        <p><strong>年齢:</strong> {{ $profile->age ?? 'なし' }}</p>
        <p><strong>性別:</strong> {{ $profile->gender ?? 'なし' }}</p>
        <p><strong>所在地:</strong> {{ $profile->location ?? 'なし' }}</p>
        <p><strong>自己紹介:</strong> {{ $profile->bio ?? 'なし' }}</p>
        <p><strong>興味:</strong> {{ $profile->interests ?? 'なし' }}</p>
        <p><strong>話せる言語:</strong> {{ $profile->languages_spoken ?? 'なし' }}</p>
        <p><strong>訪れた場所:</strong> {{ $profile->visited_places ?? 'なし' }}</p>
        <p><strong>旅行の好み:</strong> {{ $profile->travel_preferences ?? 'なし' }}</p>
    </div>
    <a href="{{ route('profile.edit') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">編集</a>
</section>
@endsection