<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>fitness</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('web/css/custom.css') }}">
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>
  <body>
  

<div class="wrapper">
        <div class="body-overlay"></div>
        <nav id="sidebar">
            <div class="sidebar-header d-flex"><i class="material-icons">dataset</i>fitness</h3>
            </div>
            <ul class="list-unstyled components">
			<li  class="active">
                    <a href="#" class="dashboard"><i class="material-icons">home</i>
					<span>Dashboard</span></a>
                </li>
		

                <li class="dropdown">
                    <a href="{{ route('client.setting') }}"
					class="dropdown-toggle">
					<i class="material-icons">person</i>client</a></li>
                
                <li class="dropdown">
                    <a href="{{ route('coach.setting') }}"
					class="dropdown-toggle">
					<i class="material-icons">apps</i><span>coach</span></a></li>
				
				 <li class="dropdown">
                    <a href="{{ route('abonnement.setting')}}"
					class="dropdown-toggle">
					<i class="material-icons">equalizer</i>
				
					
					<span>Abonnement & client</span></a>
                </li>

				  <li class="dropdown">
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" 
					class="dropdown-toggle">
					<i class="material-icons">extension</i><span>Materiel</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu4">
                        <li>
                            <a href="{{ route('image.setting') }}">liste materiel</a>
                        </li>
                        <li>
                            <a href="{{ route('materiel.setting') }}">ajouter Materiel</a>
                        </li>
                    </ul>
                </li>
				
				<li class="dropdown">
                    <a href="#"
					class="dropdown-toggle">
					<i class="material-icons">logout</i><span>se déconnecter</span></a></li>
           
        </nav>
		
		
		
		
		<!--------page-content---------------->
		
		<div id="content">
		   
		   <!--top--navbar----design--------->
		   
		   <div class="top-navbar">
		      <div class="xp-topbar">
                <div class="row"> 
                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                               <span class="material-icons text-white">signal_cellular_alt</span>
                         </div>
                    </div> 
                    <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                        <div class="xp-profilebar text-right">	
                        </div>
                    </div>
                </div> 
            </div>
		     <div class="xp-breadcrumbbar text-center">
                <h4 class="page-title">Dashboard</h4>  
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">administration</a></li>
                    <li class="breadcrumb-item active" aria-current="page">page d'accueil</li>
                  </ol>                
            </div>
			
		   </div>
		   
		   
        @yield('contenu')

			 <!---footer---->
			 
			 
		</div>
		
		<footer class="footer">
			    <div class="container-fluid">
				  <div class="footer-in">
                    <p class="mb-0 m-4"></p>
                </div>
				</div>
			 </footer>
</div>
</div>

  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="{{ asset('web/js/jquery-3.3.1.slim.min.js') }}"></script>
   <script src="{{ asset('web/js/popper.min.js') }}"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('web/js/jquery-3.3.1.min.js') }}"></script>
  </body>
  
  </html>

       