@extends('simpleLayout')


@section('content')

<button type="button" onclick="window.location='/simpleArticles/create'">Create</button>

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
            @foreach ($articles as $article)
            <div class="title">
				<h2><a href="/simpleArticles/{{$article->id}}">  {{ $article->title }} </a></h2>
                <p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>
				<span class="byline">{{ $article->excerpt }} </span> </div>
                @endforeach



		</div>



@endsection
