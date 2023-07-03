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
          <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
		  <i class="material-icons">&#xE147;</i> <span>ajouter nouveau coach</span></a>
          <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
		  <i class="material-icons">&#xE15C;</i> <span>retour</span></a>
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
        @foreach($coach as $coachs)
        <tr>
          <td>
            <span class="custom-checkbox">
			<input type="checkbox" id="checkbox1" name="options[]" value="1">
			<label for="checkbox1"></label>
							</span>
          </td>
          <td>{{ $coachs->nom }}</td>
          <td>{{ $coachs->email }}</td>
          <td>{{ $coachs->adress }}</td>
          <td>{{ $coachs->created_at }}</td>
          <td>
            <a href="#editEmployeeModal{{ $coachs->id }}" class="edit" data-toggle="modal">
			<i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
            <a href="#deleteEmployeeModal{{ $coachs->id }}" class="delete" data-toggle="modal">
			<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
          </td>
        </tr>
       @include('test.modalcoach')
        @endforeach
        
      </tbody>
    </table>
    
  </div>
</div>



@endsection
