<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="{{ asset('images/shoe.jpg') }}" alt="logo" class="img-fluid rounded-circle img-responsive" style="width: 50px; margin-left: 50px">
    <h5 class="p-2">Shoe App</h5>
    <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link text-dark" href="{{ '/' }}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ '/shoe' }}">Shoes</a>
        </li>
      </ul>
    <div class="collapse navbar-collapse" id="navbarText">
            <a href="{{ '/logout' }}" style="text-decoration: none; margin-right: 10px; color: black; margin-left: 85%"><i class="fa fa-sign-out"></i>&nbsp;Logout</a>
    </div>
</nav>

<style>
  a{
    margin-left: 20px;
  }
</style>
