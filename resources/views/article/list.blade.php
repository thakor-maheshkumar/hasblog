@extends('master.layouts')
@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<a href="{{url('article/add')}}">Add Article</a>
		<div id="content">
			@foreach($article as $articles)
			<div class="title">
				<a href='{{url("article/show/{$articles->id}")}}'><h2>{{$articles->title}}<h2></a>
			</div>
			<p>
				<img src="{{asset('')}}assets/dist/img/ap.jpeg">
			</p>
			{{$articles->body}}
			<p>
				
			</p>
			@endforeach
		</div>
	</div>
</div>
@endsection