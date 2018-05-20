@extends('main')

@section('title')
	
	@section('content')
		<div class="row">
			<div class="col-md-12">
				<h1>部落格</h1>
			</div>
		</div>

		@foreach($posts as $post)
			<div class="row">
				<div class="col-md-8 ol-md-offset-2">
					<h2>{{ $post->title }}</h2>
					<h5>發佈時間: {{ date('M j, Y',strtotime($post->created_at))}}<h5/>
					
					<p>{{ mb_substr($post->body, 0, 250, 'UTF-8') }}
						{{ strlen($post->body) > 250 ? '...':'' }}</p>
					
					<a href="{{route('blog.single',$post->slug)}}" class="btn btn-primary">繼續閱讀</a>
				</div>
			</div>
		@endforeach
		<div class="row">
			<div class="col-md-12">
				<div class="text-center">
					{!!$posts->links()!!}
				</div>
			</div>
		</div>
	@endsection
