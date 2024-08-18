@extends('layouts.app')

@section('title', '課題管理')

@section('content')
<section id="tasks">
    <h2 class="text-xl font-semibold mb-4">課題管理</h2>
    <p class="mb-6">現在の進捗を確認し、課題を提出しましょう。</p>
    <ul class="space-y-2">
        <li>課題1: 状況 <progress max="100" value="80" class="w-full"></progress></li>
        <li>課題2: 状況 <progress max="100" value="50" class="w-full"></progress></li>
        <li>課題3: 状況 <progress max="100" value="20" class="w-full"></progress></li>
    </ul>
</section>
@endsection
