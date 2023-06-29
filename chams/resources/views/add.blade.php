@extends('layout.app')


@section('content')

<form action="{{ route('ajout.verif') }}" method="POST">
<h2 class="text-success m-4">créer votre devinette</h2>
<div class="mt-5">
     @csrf
    <input type="text" class="form-control m-4" name="questions">
    <input type="text" class="form-control m-4" name="reponses">
    <button type="submit" class="btn btn-primary m-4"> ajouter </button>
</div>

</form>


@endsection