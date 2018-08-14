@extends('main')
	@section('title','| View Post')

	@section('content')
		<div class="row">
			<div class="col-md-8">
				@if($post->image !== null)
					<img src="{{asset('images/' . $post->image)}}" alt="This is a photo">
				@endif

				<h1>{{$post->title}}</h1>
				<p class="lead">{!!$post->body!!}</p>

				<hr>

				<div class="tags">
					@foreach($post->tags as $tag)
						<span class="label label-default">{{$tag->name}}</span>
					@endforeach
				</div>

				<div id="backend-comments" class="table-margin-top">
					<h3><small>共有 </small>{{$post->comments()->count()}} <small> 則留言</small></h3>
					<table class="table">
						<thead>
							<th>姓名</th>
							<th>電子信箱</th>
							<th>留言</th>
							<th></th>
						</thead>
						<tbody>
							@foreach($post->comments as $comment)
								<tr>
									<td>{{$comment->name}}</td>
									<td>{{$comment->email}}</td>
									<td>{{$comment->comment}}</td>
									<td>
										<a href="{{route('comments.edit', $comment->id)}}" class="btn btn-primary btn-xs">
											<span class="glyphicon glyphicon-pencil"></span>
										</a>
										<a href="{{route('comments.delete', $comment->id)}}" class="btn btn-danger btn-xs">
											<span class="glyphicon glyphicon-trash"></span>
										</a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-md-4">
				<div class="well">
					<dl class="dl-horizontal">
						<label for="slu">Url:</label>
						<p><a href="{{route('blog.single',$post->slug)}}">{{ route('blog.single',$post->slug) }}</a></p>
					</dl>
					<dl class="dl-horizontal">
						<label for="slu">文章分類:</label>
						<p>{{ $post->category->name }}</p>
					</dl>
					<dl class="dl-horizontal">
					  <label>建立時間: </label>
					  <p>{{date('Y-m-d-l G.i.s A',strtotime($post->created_at))}}</p>
					</dl>
					<dl class="dl-horizontal">
					  <label>上次更新時間: </label>
					  <p>{{date('Y-m-d-l G.i.s A',strtotime($post->created_at))}}</p>
					</dl>
					<hr>
					<div class="row">
						<div class="col-md-6">
							{!!Html::linkRoute('posts.edit','編輯',array($post->id),array('class' => 'btn btn-primary btn-block'))!!}
						</div>
						<div class="col-md-6">
							{!!Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE'])!!}
							{!!Form::Submit('刪除',['class'=>'btn btn-danger btn-block'])!!}
							{!!Form::close()!!}
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							{!!Html::linkRoute('posts.index','<< See All Posts',[],
							['class' => 'btn btn-default btn-block btn-h1-spacing'])!!}
						</div>
					</div>
				</div>
			</div>
		</div>
		
	@endsection