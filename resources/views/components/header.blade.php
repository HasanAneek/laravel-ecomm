<?php
    use App\Http\Controllers\ProductController;
    use \Illuminate\Support\Facades\Session;

    $total = 0;
    if(Session::has('user')){
        $total = ProductController::cartItem();
    }
?>

<nav class="navbar navbar-expand-lg navbar-light " style="background-color: rgba(0, 0, 0, 0.2);">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">e-comm</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/myorders">Orders</a>
                </li>

            </ul>
            <div class="d-flex">
                @if(\Illuminate\Support\Facades\Session::has('user'))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" >
                       {{ \Illuminate\Support\Facades\Session::get('user')['name'] }}
                    </a>
                    <ul class="dropdown-menu" style="background-color: #cccccc;" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                    </ul>
                </li>
                     <button class="btn btn-outline-success" type="submit"><a style="text-decoration: none;color: black;" href="/cartlist">Cart({{ ($total) }})</a> </button>
                @else
                    <a  href="/login" class="btn btn-outline-success" style="border: none" type="submit">Log In</a>
                    <a  href="/register" class="btn btn-outline-success" type="submit" style="border: none">Register</a>
                @endif
            </div>
        </div>
    </div>
</nav>
