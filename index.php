
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text.css" href="C:\xampp\htdocs\demo\youtube\sty\style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .carousel-inner img {
    width: 100%;
    max-height: 80vh;
    }
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    .img-fluid {
    max-width: 100%!importants;
    height: 350px!important;
    }
  </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">services</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner"> <!-- Adjust this value to your preference -->
    <div class="carousel-item active">
      <img src="image/a1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Caption for Image 1</h5>
        <p>Some description or additional information about Image 1.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/a2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Caption for Image 2</h5>
        <p>Some description or additional information about Image 2.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/a4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Caption for Image 3</h5>
        <p>Some description or additional information about Image 3.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section class="my-5"> 
    <div class="py-5">
      <h2 class="text-center fw-bold">About Us</h2> <!-- Fixed typo here -->
    </div>
    <div class="container-fluid">
      <div class="row justify-content-end">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="image/us.jpg" class="img-fluid" alt="..."> <!-- Fixed typo here -->
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-4">i am ___________</h2>
          <p class="py-3">Welcome to [Your Shop Name], where style meets comfort! At [Your Shop Name], we are passionate about
             providing our customers with the latest trends in footwear without compromising on quality. Established 
             with a commitment to deliver premium footwear that not only complements your style but also ensures 
             maximum comfort, we take pride in curating a diverse collection that caters to every taste and occasion.
          </p> 
          <a href="about.php" class="btn btn-success">click hear for mor</a>  
      </div>
    </div>
  </section>    
</body>
</html>
