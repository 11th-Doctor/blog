@extends('main')
	
	@section('title', ' | Comment Edit')

	@section('content')
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{{Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'PUT'])}}
					{{Form::label('name','姓名:')}}
					{{Form::text('name', $comment->name, ['class' => 'form-control' , 'disabled' => 'disabled'])}}
					{{Form::label('email','電子信箱:')}}
					{{Form::text('email', $comment->email, ['class' => 'form-control', 'disabled' => 'disabled'])}}
					{{Form::label('comment', '留言:')}}
					{{Form::textarea('comment', null, ['class' => 'form-control'])}}

					{{Form::submit('編輯留言', ['class' => 'btn btn-success btn-block btn-h1-spacing'])}}
				{{Form::Close()}}
			</div>
		</div>
	@endsection