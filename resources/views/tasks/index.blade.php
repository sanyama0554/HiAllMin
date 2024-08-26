@extends('layouts.app')

@section('title', '課題管理')

@section('content')
<section id="tasks">
    <h2 class="text-xl font-semibold mb-4">課題管理</h2>
    <p class="mb-6">現在の進捗を確認し、課題を提出しましょう。</p>
    
    @foreach ($assignments as $type => $tasks)
        <h3 class="text-lg font-semibold mb-2">{{ ucfirst($type) }} 課題</h3>
        <ul class="space-y-2">
            @foreach ($tasks as $task)
                <li>{{ $task->title }}: {{ $task->content }}</li>
            @endforeach
        </ul>
    @endforeach
</section>
@endsection