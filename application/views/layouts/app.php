<!doctype html>
<html lang="en">



<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Aplikasi toko online menggunakan CodeIgniter 3">
	<meta name="author" content="Amir Muhammad Hakim">

	<title><?= isset($title) ? $title : "NS Catering" ?> - Sewa Alat Catering Murah</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/navbar-fixed/">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	      <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="<?= base_url("/assets/lib/lightbox/css/lightbox.min.css") ?>"  rel="stylesheet">
        <link  href="<?= base_url("/assets/lib/owlcarousel/assets/owl.carousel.min.css") ?>" ] rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="<?= base_url("/assets/css/bootstrap.min.css") ?>"   rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url("/assets/css/style.css") ?>">
</head>

<body>
	<!-- Navbar -->
	<?php $this->load->view('layouts/_navbar') ?>
	<!-- End Navbar -->

	<!-- Content -->
	<?php $this->load->view($page) ?>
	<!-- End Content -->

	  <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
            <div class="container py-5">
                <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <a href="#">
                                <h1 class="text-primary mb-0">NS Catering</h1>
                                <p class="text-secondary mb-0">Peralatan Catering</p>
                            </a>
                        </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Contact</h4>
                            <p>Address: Jl.Sukawarna No.39 Kota Bandung</p>
                            <p>Email: NSCatering@gmail.com</p>
                            <p>Phone: +0812 3456 7890</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Footer End -->

<!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="<?= base_url("/assets/js/app.js") ?>"></script>

	<!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url("/assets/lib/easing/easing.min.js") ?>" 
    ></script>
    <script  src="<?= base_url("/assets/lib/waypoints/waypoints.min.js") ?>" 
 ></script>
    <script src="<?= base_url("/assets/lib/lightbox/js/lightbox.min.js") ?>" 
  ></script>
    <script src="<?= base_url("/assets/lib/owlcarousel/owl.carousel.min.js") ?>" 
></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>