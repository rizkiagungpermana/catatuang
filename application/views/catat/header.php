<header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <h1>Catat Uang</h1>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a href="<?= base_url('catatuang/index'); ?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?= base_url('catatuang/table'); ?>">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="<?= base_url('catatuang/form'); ?>">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <h1 class="text-muted">Catat Uang</h1>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a href="<?= base_url('catatuang/index'); ?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Table Pemasukan & Pengeluaran</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?= base_url('catatuang/tablepemasukan'); ?>">Pemasukan</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('catatuang/tablepengeluaran'); ?>">Pengeluaran</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Input Pemasukan & Pengeluaran</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?= base_url('catatuang/formpemasukan'); ?>">Pemasukan</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('catatuang/formpengeluaran'); ?>">Pengeluaran</a>
                                </li>
                            </ul>
                        </li>
                        
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- PAGE CONTAINER-->
		<div class="page-container">
			<!-- HEADER DESKTOP-->
			<header class="header-desktop">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="header-wrap">
							<form class="form-header" action="" method="POST">
								</button>
							</form>
							<div class="header-button">
								<div class="noti-wrap">
									
								<div class="account-wrap">
									<div class="account-item clearfix js-item-menu">
										<div class="image">
											<img src="<?= baseurl;?>/assets/images/icon/avatar-01.jpg" alt="admin" />
										</div>
										<div class="content">
											<a class="js-acc-btn" href="#">Admin</a>
										</div>
										<div class="account-dropdown js-dropdown">
											<div class="info clearfix">
												<div class="image">
													<a href="#">
														<img src="<?= baseurl;?>/assets/images/icon/avatar-01.jpg" alt="admin" />
													</a>
												</div>
												<div class="content">
													<h5 class="name">
														<a href="#">Admin</a>
													</h5>
													<span class="email">admin@localhost.com</span>
												</div>
											</div>
											<div class="account-dropdown__footer">
												<a href="<?= base_url('catatuang/logout') ?>">
													<i class="zmdi zmdi-power"></i>Logout</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- HEADER DESKTOP-->