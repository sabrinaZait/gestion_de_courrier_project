<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Contacts</title>

 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    
    
  </ul>

  
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    
    <span class="brand-text font-weight-light">E-docs</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Acceuil
            </p>
          </a>
          
        </li>
        <li class="nav-item">
        
          <a href="/ajouter" class="nav-link">
            
            <i class="nav-icon fas fa-th"></i>
            <p>
              Ajouter
            
            </p>
          </a>
         
        </li>
        <li class="nav-item">
          <a href="/envoyer" class="nav-link">
          <i class="far fa-envelope"></i>  
            <p>
              Envoyer 
             
            </p>
          </a>
         
        </li>
        <li class="nav-item">
          <a href="/contacts" class="nav-link">
          <i class="fas fa-user-plus"></i>
            <p>
              contacts
              
            </p>
          </a>
          
        </li>
        
    </ul>
       
</nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">

<!-- Default box -->
<div class="card card-solid">
  <div class="card-body pb-0">
    <div class="row">
      @foreach ($contacts as $contact) 
      @if($contact->name !=  Auth::user()->name) 
      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
        <div class="card bg-light d-flex flex-fill">
          <div class="card-header text-muted border-bottom-0">
            
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-7">
                <h2 class="lead"><b>{{$contact->name}}</b></h2>
                <p class="text-muted text-sm"><b>e-mail: </b> {{$contact->email}} </p>
                <ul class="ml-4 mb-0 fa-ul text-muted">
                  <li class="small"><span class="fa-li"></span> </li>
                  <li class="small"><span class="fa-li"></span> </li>
                </ul>
              </div>
              <div class="col-5 text-center">
                <img src="{{asset('img/seclogo.jpg') }}" alt="user-avatar" class="img-circle img-fluid">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
              
            </div>
          </div>
        </div>
      </div>
      @endif
      @endforeach

    </div>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

</section>
  <!-- /.content -->
</div>

    
  


  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->

</body>
</html>
