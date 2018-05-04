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
					  <dt>建立時間: </dt>
					  <dd>{{date('Y-m-d-l G.i.s A',strtotime($post->created_at))}}</dd>
					</dl>
					<dl class="dl-horizontal">
					  <dt>上次更新時間: </dt>
					  <dd>{{date('Y-m-d-l G.i.s A',strtotime($post->created_at))}}</dd>
					</dl>
					<hr>
					<div class="row">
						<div class="col-md-6">
							{!!Html::linkRoute('posts.edit','編輯',array($post->id),array('class' => 'btn btn-primary btn-block'))!!}
						</div>
						<div class="col-md-6">
							{!!Html::linkRoute('posts.destroy','刪除',array($post->id),array('class' => 'btn btn-danger btn-block'))!!}
						</div>
					</div>
				</div>
			</div>
		</div>
		
	@endsection