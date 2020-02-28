@extends('master.layouts')
@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>{{$article->title}}</h2>
			</div>
			<p>
				<img src="{{asset('')}}assets/dist/img/ap.jpeg">
			</p>
			{{$article->body}}
			<p style="margin-top:1em">
				@foreach($article->tags as $tag)
					<a href="/article/list?tag={{$tag->name}}">{{$tag->name}}</a>
				@endforeach
			</p>
		</div>
	</div>
</div>
@endsection