@extends('main')

	@section('title',' | Create New Post')

	@section('stylesheets')
		{!!Html::style('css/parsley.css')!!}
	@endsection

	@section('content')
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1 >新增貼文</h1>
				<hr>

				{!! Form::open(['route' => 'posts.store','id' => 'form']) !!}
		   			{{Form::label('title','標題:')}}
		   			{{Form::text('title',null,['class'=>'form-control','required'=>'','maxlength'=>'255 '])}}
		   			{{Form::label('body','本文:')}}
		   			{{Form::textarea('body',null,['class'=>'form-control','required'=>''])}}
		   			{{Form::submit('新增貼文',['class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'])}}
				{!! Form::close() !!}
			</div>
		</div>
	@endsection

	@section('scripts')
		{!!Html::script('js/parsley.min.js')!!}
		<script>
			$('#form').parsley();
		</script>
	@endsection