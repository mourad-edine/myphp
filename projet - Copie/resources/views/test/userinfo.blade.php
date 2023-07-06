@extends('test.page.app')
@section('contenu')
     

<section style="background-color: #eee;">
  <div class="container py-2">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">profil utilisateur</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="{{asset('web/Avatar-Profile-PNG-HD-Image.png')}}" class="rounded-circle img-fluid" style="width: 150px;">
              
            <h5 class="my-3">{{ $user->nom }}</h5>
            <p class="text-muted mb-1">profil</p>
            <p class="text-muted mb-4"></p>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">nom complet</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $user->nom }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $user->email }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">numero</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(097) 234-5678</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $user->adress }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
          <div class="col-md-12">
            <div class="">
              <div class="">
                <table class="table table-hover">
                <thead class="table-dark">
                    <tr>

                    <th>nom prof</th>
                    <th>abonnement</th>
                    <th>durée</th>
                    <th>état payement</th>
                    <th>
                        action
                    </th>
                     </tr>
                </thead>
                <tbody>
                    @foreach($user->profs as $prof)
                     
                      
                       <tr>
                       <td>{{ $prof->nom }}</td>
                       <td>{{ $prof->prix }}000 ar/mois</td>
                       <form action="{{ route('validation.setting')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $prof->prix }}00" name="prix">
                       <td><input class="form-control" type="number" min='1' max='12' style="width: 100px;" name="total" required></td>
                       <td> 
                        @if($prof->pivot->payement == false) 
                          <p class="text-danger">non payé</p>
                        @else
                        <p class="text-success">payé</p>
                        @endif
                        </td>
                       
                       <td><button class="btn btn-success">payer</button></td>
                       </form>
                       </tr>

                    @endforeach
                    </form>
                </tbody>    
                </table>
              </div>
            </div>
          </div>
        </div>
  </div>
</section>

@endsection