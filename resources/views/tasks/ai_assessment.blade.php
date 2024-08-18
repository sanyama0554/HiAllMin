@extends('layouts.app')

@section('title', '自由入力式課題')

@section('content')
<section id="ai-assessment">
    <h2 class="text-xl font-semibold mb-4">自由入力式課題</h2>
    <p class="mb-6">課題を入力し、AIによるフィードバックを受け取りましょう。</p>
    <form class="space-y-4">
        <textarea placeholder="ここに課題を入力してください..." required class="w-full p-2 border rounded"></textarea>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">提出</button>
    </form>
</section>
@endsection
