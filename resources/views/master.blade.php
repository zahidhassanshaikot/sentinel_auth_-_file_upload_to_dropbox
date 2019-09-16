<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- beauty font ROBOTO -->
<link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
<style>


/* Font ROBOTO */
.roboto{
    font-family: 'Roboto', sans-serif !important; 
}

/* custom background for panel  */
.container{ 
    padding-top: 50px !important;
    background-color: #f5f5f5 !important;  
}

/* custom background header panel */
.custom-header-panel{
    background-color: #004b8e !important;
    border-color: #004b8e !important;
    color: white;
}

.no-margin-form-group {
    margin: 0 !important;
}
.requerido {
    color: red;
}
.btn-orange-md {
    background: #FF791F !important;
    border-bottom: 3px solid #ae4d13 !important;
    color: white;
}

.btn-orange-md:hover {
    background: #d86016 !important;
    color: white !important;
}

</style>

<nav class="navbar navbar-expand-sm bg-light">
    <ul class="navbar-nav">
        @if(!Sentinel::check())
      <li class="nav-item">
        <a class="nav-link" href="/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/register">Registration</a>
      </li>
      @else
      <li class="nav-item">
          <form action="/logout" method="POST" id="logout-form">
@csrf
          </form>
        <a class="nav-link" href="#" onclick="document.getElementById('logout-form').submit()">Logout</a>
      </li>
      @endif
    </ul>
  </nav>

@yield('container')