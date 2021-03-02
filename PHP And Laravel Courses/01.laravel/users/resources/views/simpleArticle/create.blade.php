

@extends('simpleLayout')

@section('head')
<link href="/css/bulma.css" rel="stylesheet"/>
@endsection

@section('content')

<div id="wrapper">

    <div id="page" class="container">
        <h1>
            new Atricle
        </h1>
    </div>

<form method = "POST" action="/simpleArticles">
    @csrf
    <div class="field">
        <label class="label" for = "title">Name</label>
        <div class="control">
          <input class="input" type="text" name="title" id="title">
        </div>
      </div>

      <div class="field">
        <label class="label" for = "excerpt">excerpt</label>
        <div class="control">
          <textarea class="texrarea"  name="excerpt" id="excerpt"> </textarea>

        </div>
      </div>

      <div class="field">
        <label class="label" for = "body">body</label>
        <div class="control">
          <textarea class="texrarea"  name="body" id="body"> </textarea>
        </div>
      </div>

      <div class="field is-grouped">
        <div class="control">
          <button class="button is-link">Submit</button>
        </div>



</div>


</form>


@endsection
