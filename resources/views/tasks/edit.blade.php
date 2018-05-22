@extends('layouts.app')

@section('content')

<h1>id: {{ $task->id }} のタスク編集ページ</h1>



{!! Form::model($task,["route" => ["tasks.update", $task->id], "method" => "put"]) !!}


  {!! Form::label("status", "タスクリスト:") !!}
  {!! Form::text("status") !!}
  
  {!! Form::label("content", "タスク管理:") !!}
  {!! Form::text("content") !!}
  

{!! Form::submit("更新") !!}

{!! Form::close() !!}

@endsection