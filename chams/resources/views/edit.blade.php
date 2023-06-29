@extends('layout.app')


@section('content')
@foreach($post->comments as $comment)
<hr>
<div>{{ $comment->indice }}</div>

@endforeach
<form action="{{ route('edit.verif') }}" method="POST">
<h2 class="text-success m-4">modifier votre post</h2>
<div class="mt-5">
     @csrf
    <input type="hidden" class="form-control m-4" name="ids" value="{{ $post->id }}">
    <input type="text" class="form-control m-4" name="nouveauquestion" value="{{ $post->question }}">
    <input type="text" class="form-control m-4" name="nouveaureponse" value="{{ $post->reponse }}">
    <button type="submit" class="btn btn-primary m-4">modifier</button>
</div>

</form>


@endsection