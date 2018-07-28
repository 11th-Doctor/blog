@extends('main')

@section('title','| Categories')

@section('content')
	<div class="row">
		<div class="col-md-8">
			<h1>文章分類</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>分類名稱</th>
					</tr>	
				</thead>
				<tbody>
					@foreach($categories as $category)
						<tr>
							<th>{{ $category->id }}</th>
							<td>{{ $category->name }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div> <!-- end of col-md-8 -->

		<div class="col-md-4">
			<div class="well">
				{!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
				<h2>新增一個新的分類</h2>
				{{ Form::label('name','分類名稱:') }}
				{{ Form::text('name', null, ['class' => 'form-control']) }}
				{{Form::submit('建立一個新的分類',['class' => 'btn btn-primary btn-block btn-h1-spacing'])}}
			{!! Form::close()!!}
			</div>
		</div>
	</div>
@endsection

