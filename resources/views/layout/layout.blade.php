<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/headerstyle.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/cssff/all.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/webfonts/fa-brands-400.eot">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>User profile App</title>
</head>


<body class="bg-dark " style="background-color: black !important ;">

<header class="py-3 mb-3 border-bottom bg-warning " >
    <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 16fr;">
          <img class="bi me-2" width="40" height="40" src="images/logo.svg">

        <ul class="nav col-12 col-lg-auto me-lg-auto fw-bold text-dark">
          <li><a href="#" class="nav-link px-2 link-dark">Home</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">profile</a></li>
        </ul>
    </div>
    
</header>
    

@yield('content');

</body>

<footer class="bg-dark text-white pt-5" style="background-color: black !important ;">
    <div class="container text-center text-md-left">
      <div class="row text-center text-ms-left">
        

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-blod text-warning">Contact Us</h5>
          <p>
            Sluaimany, Chwarchra, SPU
          </p>
          <p>
            bakhtyar.774544@spu.edu.iq
          </p>
        </div>
        <hr class="mb-4">
        <div class="row align-items-center">
          <div class="col-md-6 col-lg-7">
            <p>Copyright @2022 All rights reserved by <strong class="text-warning">BAKHTYAR</strong> </p>
          </div>
          <div class="col-md-5 col-lg-4">
            <div class="text-center text-md-right">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <a href="https://twitter.com/Bakhtyar__" class="btn-floating btn-sm text-white" style="font-size: 20px;">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://github.com/Bakhtyar25" class="btn-floating btn-sm text-white" style="font-size: 20px;">
                    <i class="fab fa-github"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/bakhtyar-m-3a4472234/" class="btn-floating btn-sm text-white" style="font-size: 20px;">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>


</html>