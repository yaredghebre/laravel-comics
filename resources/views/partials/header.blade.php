<div class="bg-light">

    <nav class="navbar navbar-expand-lg d-flex align-items-center justify-content-center">
        <a class="navbar-brand" href="#">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </a>
    
        <div class="">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
    
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/comics')}}">Comics</a>
                </li>
    
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/credits')}}">Credits</a>
                </li>
    
                <form class="form-inline my-2 my-lg-0 d-flex">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </ul>
        </div>
    </nav>
</div>

<div class="jumbotron-container">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
</div>