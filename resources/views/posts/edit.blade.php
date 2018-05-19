@extends('main')

@section('title','| Edit')

@section('content')

	<div class="row">
		{!!Form::model($post,['route' => ['posts.update',$post->id],'method'=>'PUT'])!!}
		<div class="col-md-8">
			{{Form::label('title','標題:')}}
			{{Form::text('title',null,['class' => 'form-control input-lg'])}}
			{{Form::label('slug','代稱',['class'=>'form-spacing-top'])}}
			{{Form::text('slug',null,['class'=>'form-control'])}}
			{{Form::label('body','本文:',['class' => 'form-spacing-top'])}}
			{{Form::textarea('body',null,['class' => 'form-control'])}}
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
						{!!Html::linkRoute('posts.show','取消',array($post->id),array('class' => 'btn btn-danger btn-block'))!!}
					</div>
					<div class="col-md-6">
						{!!Form::submit('儲存修改',['class'=>'btn btn-success btn-block'])!!}
					</div>
				</div>
			</div>
		</div>
		{!!Form::close()!!}
	</div> <!--end of .row -->

@endsection
