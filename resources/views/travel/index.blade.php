@extends('layouts.app')

@section('title', '旅行計画')

@section('content')
<section id="travel">
    <h2 class="text-xl font-semibold mb-4">旅行計画機能</h2>
    <p class="mb-6">旅行計画を投稿し、他のユーザーからフィードバックを受けましょう。</p>
    <form class="space-y-4">
        <textarea placeholder="旅行計画を入力..." required class="w-full p-2 border rounded"></textarea>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">投稿</button>
    </form>
</section>
@endsection
