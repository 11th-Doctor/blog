@extends('main')

@section('title',"| {$post->title}")

	@section('content')
		<div class="row">
			<div class="col-md-8 col-md-offset-2"></div>
			<h1>{{ $post->title }}</h1>
			<p>{{ $post->body }}</p>
			<hr>
			<p>發佈類別: {{ $post->category->name }}</p>
		</div>
	@endsection

