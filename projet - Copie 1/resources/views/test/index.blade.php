@extends('test.page.app')
@section('contenu')
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


       @if(Session::get('modif'))
       <div class="alert alert-success alert-dismissible fade show">
            {{ Session::get('modif') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>

       </div>

       @endif

       @if(Session::get('pasmodif'))
       <div class="alert alert-danger alert-dismissible fade show">
            {{ Session::get('pasmodif') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>

       </div>

       @endif

       @if(Session::get('efface'))
       <div class="alert alert-danger alert-dismissible fade show">
            {{ Session::get('efface') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
       </div>

       @endif

       @if(Session::get('pasefface'))
       <div class="alert alert-danger alert-dismissible fade show">
            {{ Session::get('pasefface') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
       </div>

       @endif
		   <div class="main-content">
			  <div class="row">
			    
				<div class="col-md-12">
				<div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
          <h2 class="ml-lg-2">Gerer client</h2> 
           
        </div>
        <div class="col-sm-6 p-0 d-flex justify-content-lg-end justify-content-center">
            <form action="{{ route('client.setting') }}" method="GET" class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="requette" style="width : 300px; height : 35px">
              <button class="btn btn-success" type="submit" style="height: 35px;">rechercher</button>
            </form>

          <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal" style="height: 35px;">ajouter client</a>
        </div>
      </div>
    </div>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>
            <span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
          </th>
          <th>Name</th>
          <th>Email</th>
          <th>Address</th>
          <th>date de création</th>
          <th>reservation</th>
          <th>Actions 1</th>
          <th>action 2</th>
        </tr>
      </thead>
      <tbody>
        @foreach($post as $posts)
        <tr>
          <td>
            <span class="custom-checkbox">
			<input type="checkbox" id="checkbox1" name="options[]" value="1">
			<label for="checkbox1"></label>
							</span>
          </td>
          <td>{{ $posts->nom }}</td>
          <td>{{ $posts->email }}</td>
          <td>{{ $posts->adress }}</td>
          <td>{{ $posts->created_at }}</td>
          <td>{{$posts->profs->count()}}</td>
          <td>
            <a href="#editEmployeeModal{{ $posts->id }}" class="edit" data-toggle="modal">
			<i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
            <a href="#deleteEmployeeModal{{ $posts->id }}" class="delete text-danger" data-toggle="modal">
			<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
          </td>
          <td><a href="{{ route('recherche.setting',['id' => $posts->id ]) }}" class="btn btn-secondary text-white" >reserver</a></td>
        </tr>
        @include('test.modal')
        @endforeach
      </tbody>
    </table>
    @include('test.modaladd')
  </div>
</div>


@endsection
