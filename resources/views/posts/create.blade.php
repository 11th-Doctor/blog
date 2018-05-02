@extends('main')

	@section('title',' | Create New Post')

	@section('content')
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1 >新增貼文</h1>
				<hr>

				{!! Form::open(['route' => 'posts.store']) !!}
		   			{{Form::label('title','標題:')}}
		   			{{Form::text('title',null,['class'=>'form-control'])}}
		   			{{Form::label('body','本文:')}}
		   			{{Form::textarea('body',null,['class'=>'form-control'])}}
		   			{{Form::submit('新增貼文',['class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'])}}
				{!! Form::close() !!}
			</div>
		</div>
	@endsection