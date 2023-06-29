@extends('layout.app')
@section('content')
<main class="container">
  <div class="bg-light p-5 rounded">
    <h1 class="mb-3">Tentez de deviner</h1>
    @foreach($post as $posts)
    <div>
      <p>
        <p>{{ $posts->question }}</p>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample{{$posts->id}}">
             reponse 
        </button>
      </p>
      <div class="collapse" id="collapseExample{{$posts->id}}">
        <div class="card card-body bg-success text-white">
             {{ $posts->reponse }}
         </div>
      </div>
    </div>
    <a class="btn btn-secondary" href="{{ route('edit.text',['id'=> $posts->id ]) }}">modifier</a>
    @endforeach

  </div>
</main>
@endsection