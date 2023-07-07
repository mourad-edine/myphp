@extends('test.page.app')
@section('contenu')


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
        
        <form class="d-flex" method="GET" action="{{ route('abonnement.setting')}}">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="requette">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
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
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        
      @if(isset($clients))
       @if(count($clients) > 0)
     
         @foreach($clients as $client)
        <tr>
          <td>
            <span class="custom-checkbox">
			<input type="checkbox" id="checkbox1" name="options[]" value="1">
			<label for="checkbox1"></label>
							</span>
          </td>
          <td><a href="{{route('information.setting',['id' => $client->id ])}}">{{ $client->nom }}</a></td>
          <td>{{ $client->email }}</td>
          <td>{{ $client->adress }}</td>
          <td>{{ $client->created_at }}</td>
          <td>
            <a href="#editEmployeeModal{{ $client->id }}" class="edit" data-toggle="modal">
			<i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
            <a href="#deleteEmployeeModal{{ $client->id }}" class="delete" data-toggle="modal">
			<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
          </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td></td>
            <td class="text-danger">pas trouvé !</td>
            <td></td>
            <td></td>
          </tr>
        @endif
      @else
    
        @foreach($client as $clien)
        <tr>
          <td>
            <span class="custom-checkbox">
			<input type="checkbox" id="checkbox1" name="options[]" value="1">
			<label for="checkbox1"></label>
							</span>
          </td>
          <td><a href="{{route('information.setting',['id' => $clien->id ])}}">{{ $clien->nom }}</a></td>
          <td>{{ $clien->email }}</td>
          <td>{{ $clien->adress }}</td>
          <td>{{ $clien->created_at }}</td>
          <td>
            <a href="#editEmployeeModal{{ $clien->id }}" class="edit" data-toggle="modal">
			<i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
            <a href="#deleteEmployeeModal{{ $clien->id }}" class="delete" data-toggle="modal">
			<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
          </td>
        </tr>
        @endforeach
    @endif
      </tbody>
    </table>
    
  </div>
</div>



@endsection
