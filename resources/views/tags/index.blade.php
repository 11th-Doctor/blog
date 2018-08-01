@extends('main')

@section('title', '| Tags')

@section('content')
	<div class="row">
		<div class="col-md-8">
			<h1>文章標籤</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>標籤名稱</th>
					</tr>
				</thead>
				<tbody>
					@foreach($tags as $tag)
						<tr>
							<th>{{ $tag->id }}</th>
							<td><a href="{{route('tags.show',$tag->id)}}">{{ $tag->name}}</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div> {{--End of col-md-8 --}}

		<div class="col-md-4">
			<div class="well">
				{!! Form::open(['route'=>'tags.store', 'method'=>'POST']) !!}
					<h2>新增一個新的標籤</h2>
					{{Form::label('name','標籤名稱:')}}
					{{Form::text('name', null ,['class' => 'form-control'])}}
					{{Form::submit('建立一個新的標籤', ['class' => 'btn btn-primary btn-block btn-h1-spacing'])}}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection