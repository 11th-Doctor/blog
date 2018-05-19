@extends('main')
	@section('title','| View Post')

	@section('content')
		<div class="row">
			<div class="col-md-8">
				<h1>{{$post->title}}</h1>
				<p class="lead">{{$post->body}}</p>
			</div>
			<div class="col-md-4">
				<div class="well">
					<dl class="dl-horizontal">
						<label for="slu">Url:</label>
						<p><a href="{{$post->slug}}">{{url($post->slug)}}</a></p>
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