@extends('main')

@section('title','| All Posts')

@section('content')
	<div class="row">
		<div class="col-md-10">
			<h1>所有貼文</h1>
		</div>
		<div class="col-md-2">
			<a href="{{route('posts.create')}}" class="btn btn-primary btn-lg btn-h1-spacing">建立新貼文</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover">
			  <thead>
			  	<tr>
			  		<th>#</th>
			  		<th>標題</th>
			  		<th>本文</th>
			  		<th>建立時間</th>
			  		<th></th>
			  	</tr>
			  </thead>
			  <tbody>
			  	@foreach($posts as $post)
			  		<tr>
			  			<td>{{$post->id}}</td>
			  			<td>{{$post->title}}</td>
			  			<td>{!!mb_substr(strip_tags($post->body),0,45,'UTF-8')!!}
			  				{!!strlen(strip_tags($post->body)) >= 50 ? '...':''!!}
			  				</td>
			  			<td>{{date('Y-m-d H.i A',strtotime($post->created_at))}}</td>
			  			<td>
			  				<a href="{{route('posts.show',$post->id)}}" class="btn btn-default">繼續閱讀</a>
			  				<a href="{{route('posts.edit',$post->id)}}" class="btn btn-default">編輯</a>
			  			</td>
			  		</tr>
			  	@endforeach
			  </tbody>
			</table>
			<div class="col-md-12">
				<div class="text-center">
					{!!$posts->links()!!}
				</div>
			</div>
		</div>
	</div>
@endsection
