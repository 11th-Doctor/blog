@extends('main')

	@section('title', '| Delete?')

	@section('content')
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1>刪除這則留言?</h1>
				<p> <strong> 姓名: </strong> {{$comment->name }} <br>
					 <strong>電子信箱: </strong> {{$comment->email }} <br>	
					 <strong> 留言: </strong> {{$comment->comment }} <br>
				</p>
				{{Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE'])}}
					{{Form::submit('確定刪除留言', ['class' => 'btn btn-danger btn-lg btn-block'])}}
				{{Form::close()}}
			</div>
		</div>
	@endsection