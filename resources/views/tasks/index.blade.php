@extends('layouts.app')

@section('content')

<h1>タスク管理</h1>
 @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>{!! link_to_route("tasks.show", $task->id,["id" => $task->id]) !!} : {{ $task->content }}</li>
                {!! link_to_route("task.create", "新規メッセージの投稿") !!}
            @endforeach
        </ul>
    @endif

@endsection