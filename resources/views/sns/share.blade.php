@extends('layouts.app')

@section('title', 'SNS投稿機能')

@section('content')
<section id="sns-share">
    <h2 class="text-xl font-semibold mb-4">SNS投稿機能</h2>
    <p class="mb-6">学習の進捗や旅行計画をSNSでシェアしましょう。</p>
    <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Twitterにシェア</button>
    <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 ml-4">Facebookにシェア</button>
</section>
@endsection
