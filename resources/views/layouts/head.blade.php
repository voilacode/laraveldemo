<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Title -->
  <title>Home</title>
  <!-- Meta Description -->
  <meta name="description"
    content="The test assesses a candidate's English skills under four sections – Reading, Writing, Speaking and Listening. Suitable for: Students seeking admission in graduate programs in countries where English is the first language.">
  <!-- Bootstrap 5 Link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" href="{{  asset('css/style.css') }}" rel="preload" as="style" />
</head>
<body style="background-color: #f7f7ff;">
	  <!---Header-->
    <header style="background-color: #01579b;">
      <div class="container px-lg-5" >
        <nav class="navbar navbar-expand-lg bg-body-tertiary  ">
          <div class="container-fluid">
            <a class="navbar-brand text-decoration-none text-white fw-bold" href="{{ route('index')}}">CodeCLR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon navbar-light"></span>
            </button>            

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              
              <form class="d-flex mx-auto my-2 navsearch" style="width: 43.5vw;" role="search">
                <input class="form-control rounded-0" type="search" placeholder="Search" aria-label="Search">
                <button class="btn text-white rounded-0 text-danger" type="submit" style="background-color: #3d80d7;">Search</button>
              </form>

              <ul class="navbar-nav mb-2 mb-lg-0 d-flex" style="flex-direction: row;">
                <li class="nav-item col-6 text-center">
                  <a class="nav-link btn me-3 text-white px-2 my-2 text-center navbtn" style="background-color:rgb(9, 178, 245);" aria-current="page" href="./login_page.html">Login</a>
                </li>
                <li class="nav-item col-6">
                  <a class="nav-link btn text-white px-2 my-2 text-center navbtn" style="background-color: rgb(193, 91, 91);" href="./reset_password.html">Register</a>
                </li>
              </ul>
              
            </div>
          </div>
        </nav>
      </div>
    </header>