@extends('layouts.app')

@section('content')

 <h1>タスク管理新規作成ページ</h1>
 
 {!! Form::model($task, ["route" => "tasks.store"]) !!}
  
  {!! Form::label("content", "メッセージ:") !!}
  {!! Form::text("content") !!}
  
  {!! Form::submit("投稿") !!}
  
 {!! Form::close() !!}
@endsection