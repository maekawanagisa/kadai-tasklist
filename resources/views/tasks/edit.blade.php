@extends('layouts.app')

@section('content')

<h1>id: {{ $task->id }} のタスク編集ページ</h1>

{!! Form::model($task,["route" => ["tasks.update", $task->id], "method" => "put"]) !!}

<div class="form-group">
  {!! Form::label("status", "タスクリスト:") !!}
  {!! Form::text("status",null, ["class" => "form-control"]) !!}
  </div>
  <div class="form-group">
  {!! Form::label("content", "タスク管理:") !!}
  {!! Form::text("content",null, ["class" => "form-control"]) !!}
  </div>

{!! Form::submit("更新",["class" => "btn btn-primary"]) !!}

{!! Form::close() !!}

@endsection