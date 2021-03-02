@extends('simpleLayout')

@section('head')
    <link href="/css/bulma.css" rel="stylesheet" />
@endsection


@section('content')


    <div id="wrapper">

        <div id="page" class="container">
            <h1>
                updates Atricle
            </h1>
            <form method="POST" action="/simpleArticles/{{$article->id}}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input class="input" type="text" name="title" id="title" value=" {{ $article->title }} ">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>

                    <div class="control">
                        <textarea class="textarea" name="excerpt" id="excerpt">{{ $article->excerpt }}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>

                    <div class="control">
                        <textarea class="textarea" name="body" id="body">{{ $article->body }}</textarea>
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>


        </div>



    @endsection
