@extends('main')

@section('title',"| {$post->title}")

	@section('content')
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1>{{ $post->title }}</h1>
				<p>{{ $post->body }}</p>
				<hr>
				<p>發佈類別: {{ $post->category->name }}</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				@foreach($post->comments as $comment)
					<div class="comment">
						<p><strong>姓名:</strong> {{$comment->name}} </p>
						<p><strong>留言:</strong><br>{{$comment->comment}}</p><br>
						
					</div>
				@endforeach
			</div>
		</div>

		<div class="row">
			<div id="comment-form" class="col-md-8 col-md-offset-2">
				{{Form::open(['route' => ['comments.store',$post->id], 'method' => 'POST', 'style' => 'margin-top: 50px'])}}
					<div class="row">

							<div class="col-md-6">
								{{Form::label('name', '姓名:')}}
								{{Form::text('name', null, ['class' => 'form-control'])}}
							</div>

							<div class="col-md-6">
								{{Form::label('email', '電子信箱:')}}
								{{Form::text('email', null, ['class' => 'form-control'])}}
							</div>

							<div class="col-md-12">
								{{Form::label('comment', "留言:")}}
								{{Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5'])}}

								{{Form::submit('新增留言', ['class' => 'btn btn-success btn-block btn-h1-spacing'])}}
							</div>
					</div>
				{{Form::close()}}
			</div>
		</div>
	@endsection

