<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="logo.png">
	<title>Dewan Bootstrap - Navbar</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-dark bg-danger fixed-top">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    Dewan Komputer
	  </a>
	</nav>

	<nav class="navbar fixed-top navbar-light bg-info">
	  <a class="navbar-brand text-white" href="#">Fixed top</a>
	</nav>

	<nav class="navbar fixed-bottom navbar-light bg-dark">
	  <a class="navbar-brand text-white" href="#">Fixed bottom</a>
	</nav>

	<div class="container" style="margin-bottom: 100px;">
		<h2 align="center" style="margin: 60px 10px 10px 10px;">Demo Navbar Bootstrap 4</h2>
		<p align="center">Besar dan kecilkan layar/browser atau masuk ke menu Responsive Design untuk melihat tampilan dengan layar kecil.</p>
		<hr>

		<h3>Brand</h3>
		<!-- As a link -->
		<nav class="navbar navbar-light bg-success mb-3">
		  <a class="navbar-brand" href="#">Navbar</a>
		</nav>

		<!-- Just an image -->
		<nav class="navbar navbar-light bg-danger mb-3">
		  <a class="navbar-brand" href="#">
		    <img src="logo.png" width="60" height="30" alt="">
		  </a>
		</nav>

		<!-- Image and text -->
		<nav class="navbar navbar-light bg-info mb-3">
		  <a class="navbar-brand" href="#">
		    <img src="logo.png" width="60" height="30" class="d-inline-block align-top" alt="">
		    Bootstrap
		  </a>
		</nav>
		<hr>

		<h3>Nav</h3>
		<nav class="navbar navbar-expand-lg navbar-light bg-success mb-3">
		  <a class="navbar-brand" href="#">Dewan Komputer</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Features</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Pricing</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
		      </li>
		    </ul>
		  </div>
		</nav>

		<nav class="navbar navbar-expand-lg navbar-light bg-primary mb-3">
		  <a class="navbar-brand" href="#">Dewan Komputer</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Features</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Pricing</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
		      </li>
		    </ul>
		  </div>
		</nav>

		<nav class="navbar navbar-expand-lg navbar-light bg-warning mb-3">
		  <a class="navbar-brand" href="#">Dewan Komputer</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Features</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Pricing</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Dropdown link
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item" href="#">Action</a>
		          <a class="dropdown-item" href="#">Another action</a>
		          <a class="dropdown-item" href="#">Something else here</a>
		        </div>
		      </li>
		    </ul>
		  </div>
		</nav>
		<hr>

		<h3>Mixed</h3>
		<nav class="navbar navbar-expand-lg navbar-light bg-danger">
		  <a class="navbar-brand text-white" href="#">Dewan Komputer</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarText">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link text-white" href="#">Features</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link text-white" href="#">Pricing</a>
		      </li>
		    </ul>
		    <span class="navbar-text text-white">
		      Navbar text with an inline element
		    </span>
		  </div>
		</nav>
		<hr>
		<h2 align="center" class="text-danger">TAMPILAN MODE RESPONSIVE DESIGN</h2>
		<hr>
		<h3>Brand Tidak Tampil Saat Dalam Mode Responsive Design</h3>
		<nav class="navbar navbar-expand-lg navbar-light bg-info">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		    <a class="navbar-brand" href="#">Hidden brand</a>
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Link</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
		</nav>
		<hr>

		<h3>Menu Hamburger sebelah kanan dan Brand sebelah Kiri</h3>
		<nav class="navbar navbar-expand-lg navbar-light bg-primary">
		  <a class="navbar-brand" href="#">Dewan Komputer</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Link</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search">
		      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
		</nav>
		<hr>

		<h3>Menu Hamburger sebelah kiri dan Brand sebelah Kanan</h3>
		<nav class="navbar navbar-expand-lg navbar-light bg-success">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <a class="navbar-brand" href="#">Dewan Komputer</a>

		  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Link</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
		</nav>
		<hr>

		<h3>Eksternal Konten</h3>
		<div class="pos-f-t">
		  <div class="collapse" id="navbarToggleExternalContent">
		    <div class="bg-dark p-4">
		      <h5 class="text-white h4">Collapsed content</h5>
		      <span class="text-muted">Toggleable via the navbar brand.</span>
		    </div>
		  </div>
		  <nav class="navbar navbar-dark bg-dark">
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		  </nav>
		</div>
	</div>

</body>
</html>