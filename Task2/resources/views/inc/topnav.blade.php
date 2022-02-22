
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #97FCC7;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TBC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('product')}}">product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('ourteam')}}">Our Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('aboutus')}}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contactus')}}">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('studentCreate')}}">Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('studentList')}}">List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('adminList')}}">Admin List</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>