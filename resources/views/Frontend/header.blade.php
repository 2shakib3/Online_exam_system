<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color:#00838F">
   <a class="navbar-brand" href="{{ route('user') }}">Online Exam system</a>
   <button class="navbar-toggler btn-success" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarCollapse">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
         <a class="nav-link" href="{{ route('user.exam') }}">Join Exam</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="{{ route('user.test') }}">Test</a>
       </li>
       <li class="nav-item">
         <a class="nav-link disabled" href="#"></a>
       </li>
     </ul>
     <form class="form-inline mt-2 mt-md-0">
       <button class="btn btn-success my-2 my-sm-0" type="submit">Login</button>
     </form>
   </div>
 </nav>
