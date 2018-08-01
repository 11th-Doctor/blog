@extends('main')

	@section('title', "| 編輯標籤")

	@section('content')
		{{Form::model($tag, ['route' => ['tags.update',$tag->id], 'method' => "PUT"])}}
			{{Form::label('name', "標籤:")}}
			{{Form::text('name', null, ['class' => 'form-control'])}}
			{{Form::submit("儲存變更", ['class' => 'btn btn-success btn-h1-spacing'])}}
		{{Form::close()}}
	@endsection
	