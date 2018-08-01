@extends('main')
	
	@section('title', "| $tag->name")
	
	@section('content')
		<div class="row">
			<div class="col-md-8">
				<h1>{{$tag->name}} 標籤 <small>{{ $tag->posts()->count() }} 則貼文</small></h1>
			</div> <!--end of col-md-8-->
			<div class="col-md-2 col-md-offset-2">
				<a href="{{route('tags.edit', $tag->id)}}" class="btn btn-primary pull-right btn-block" style="margin-top: 20px">編輯</a>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>標題</th>
							<th>標籤</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($tag->posts as $post)
							<tr>
								<th> {{$post->id}} </th>
								<td> {{$post->title}} </td>
								<td>
									@foreach($post->tags as $tag)
										<span class="label label-default">{{ $tag->name }}</span>
									@endforeach
								</td>
								<td> <a href="{{route('posts.show',$post->id)}}" class="btn btn-default btn-xs">檢視</a></td>
							</tr>
						@endforeach
					</tbody>	
				</table>
			</div>
		</div>
	@endsection