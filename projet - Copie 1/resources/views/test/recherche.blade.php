@extends('test.page.app')
@section('contenu')

<h3 class="mt-2 mx-5 d-flex">
  {{ $client->nom}} 
</h3> 
<div class="d-flex mx-5">
  @forelse($client->profs as $prof)
       <p>{{ $prof->nom }} => </p><p class="text-success">réservé</p><i class="material-icons mt-2">done</i>
       
  @empty
       <p class="text-warning">pas encore de prof reservé</p>     
  @endforelse
  </div> 
      @if(Session::get('success'))
       <div class="alert alert-success alert-dismissible fade show">
            {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
       </div>

       @endif

       @if(Session::get('echec'))
       <div class="alert alert-danger alert-dismissible fade show">
            {{ Session::get('echec') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>

       </div>

       @endif

<form action="{{ route('recherche.setting',[$id]) }}" method="GET" class="d-flex mt-5">
        <input class="form-control me-2 mx-4" type="search" placeholder="Search" aria-label="Search" name="requette" style="width: 700px;">
        <button class="btn btn-outline-success" type="submit">Search</button>
</form>       

<div class="mx-5">
        <p class="text-success">
                recherchez le coach avec son nom ou avec son numero IP
        </p>
        <p class="text-success">
                un client ne peut pas reserver 2 fois le même coach!
        </p>

        <p>
                
        </p>
</div>

<table class="table table-hover">
      <thead>
        <tr>

          <th>Name</th>
          <th>Email</th>
          <th>Address</th>
          <th>date de création</th>
        </tr>
      </thead>
      <tbody>
     @if(isset($coach))
     @if(count($coach) > 0)
     
       @foreach($coach as $coaches)
       
        <tr>
          <td><a href="#deleteEmployeeModal{{ $coaches->id }}" class="text-success" data-toggle="modal">{{ $coaches->nom }}</a></td>
          <td><a href="#deleteEmployeeModal{{ $coaches->id }}" data-toggle="modal">{{ $coaches->email }}</a></td>
          <td><a href="#deleteEmployeeModal{{ $coaches->id }}" data-toggle="modal">{{ $coaches->adress }}</a></td>
          <td><a href="#deleteEmployeeModal{{ $coaches->id }}" data-toggle="modal"><p>le{{ $coaches->created_at }}</p></a></td>
        </tr>
        @include('test.modalve')
       @endforeach
       @else
          <tr>
            <td></td>
            <td class="text-danger">pas trouvé !</td>
            <td></td>
            <td></td>
          </tr>
       @endif
      @endif

      </tbody>
    </table>

@endsection
