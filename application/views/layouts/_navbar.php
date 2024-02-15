<div class="container-fluid ">
            <div class="container topbar bg-primary d-none d-lg-block">
                <div class="d-flex justify-content-between">
                    <div class="top-info ps-2">
                        <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">JL.Sukawarna No.39, Kota Bandung</a></small>
                        <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">NSCatering@gmail.com</a></small>
                    </div>
                </div>
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <a href="<?= base_url() ?>" class="navbar-brand"><h1 class="text-primary display-6">NS Catering</h1></a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                        	<a class="nav-item nav-link active" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link active" href="<?= base_url() ?>">Shop</a>
							<a href="contact" class="nav-item nav-link">Contact</a>						
						</div>
                        <div class="d-flex m-3 me-0">
							<div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Akun</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    <?php if (!$this->session->userdata('is_login')) { ?>
                                    	<a href="<?= base_url('login') ?>" class="dropdown-item">Login</a>
                                    	<a href="<?= base_url('register') ?>" class="dropdown-item">Daftar</a>
                                    <?php } else {?>
                                    <a href="<?= base_url('profile') ?>" class="dropdown-item">Profile</a>
									<a href="<?= base_url('myorder') ?>" class="dropdown-item">Orders</a>
									<a href="<?= base_url('logout') ?>" class="dropdown-item">Logout</a>
                                    <?php } ?>
                                </div>
                            </div>
							<?php if ($this->session->userdata('is_login') && $this->session->userdata('role') == 'admin') { ?>

                          	<div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Admin</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    <a href="<?= base_url('category') ?>" class="dropdown-item">Kategori</a>
									<a href="<?= base_url('product') ?>" class="dropdown-item">Produk</a>
									<a href="<?= base_url('order') ?>" class="dropdown-item">Order</a>
									<a href="<?= base_url('user') ?>" class="dropdown-item">Pengguna</a>
                                </div>
                            </div>
							
							<?php }?>
                            <a href="<?= base_url('cart') ?>" class="position-relative me-4 my-auto">
                                <i class="fa fa-shopping-bag fa-2x"></i>
                                <span class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1" style="top: -5px; left: 15px; height: 20px; min-width: 20px;"><?= getCart() ?></span>
                            </a>       
                        </div>   
                    </div>
                </nav>
            </div>
        </div>

<!-- <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url() ?>">NS Catering</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
			aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" id="dropdown-1" , data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">Manage</a>
					<div class="dropdown-menu" aria-labelledby="dropdown-1">
						
					</div>
				</li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="<?= base_url('cart') ?>" class="nav-link"><i class="fas fa-shopping-cart"></i> Cart(<?= getCart() ?>)</a>
				</li>
				<?php if (!$this->session->userdata('is_login')) : ?>
					<li class="nav-item">
						<a href="<?= base_url('login') ?>" class="nav-link">Login</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('register') ?>" class="nav-link">Register</a>
					</li>
				<?php else : ?>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" id="dropdown-2" , data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata("name") ?></a>
						<div class="dropdown-menu" aria-labelledby="dropdown-2">
							<a href="<?= base_url('profile') ?>" class="dropdown-item">Profile</a>
							<a href="<?= base_url('myorder') ?>" class="dropdown-item">Orders</a>
							<a href="<?= base_url('logout') ?>" class="dropdown-item">Logout</a>
						</div>
					</li>
				<?php endif ?>
			</ul>
		</div>
	</div>
</nav> -->