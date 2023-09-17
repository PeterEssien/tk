<?php
require('db.php');
include("auth.php");
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>ROI LEDGER Wallet</title>
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<meta name="msapplication-TileColor" content="#43b380" />
	<meta name="theme-color" content="#43b380" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="mobile-web-app-capable" content="yes" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="MobileOptimized" content="320" />
	<link rel="shortcut icon" href="./dist/ico/favicon.ico">
	<link rel="icon" type="image/png" sizes="32x32" href="./dist/ico/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./dist/ico/favicon-16x16.png">
	<link rel="manifest" href="./dist/ico/site.webmanifest">
	<link rel="mask-icon" href="./dist/ico/safari-pinned-tab.svg" color="#43b380">
	<link href="./dist/css/tabler.min.css" rel="stylesheet" />
	<link href="./dist/css/style.css" rel="stylesheet" />
	<style>
		body {
			display: none;
		}

	</style>
</head>

<body class="antialiased">
	<div class="page">
		<header class="navbar navbar-expand-lg navbar-dark navbar-overlap">
			<div class="container-xl">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a href="" class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
					<img src="./dist/img/turtlecoin-logo.svg" alt="Tabler" class="navbar-brand-image">
				</a>
				<div class="navbar-nav flex-row order-md-last">
					<div class="nav-item d-none d-md-flex">
						<a href="#" class="nav-link mode-toggle">
							<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
								<path stroke="none" d="M0 0h24v24H0z"></path>
								<circle cx="12" cy="12" r="9"></circle>
								<line x1="12" y1="3" x2="12" y2="21"></line>
								<path d="M12 9l4.65 -4.65"></path>
								<path d="M12 14.3l7.37 -7.37"></path>
								<path d="M12 19.6l8.85 -8.85"></path>
							</svg>
						</a>
					</div>
					
				<div class="collapse navbar-collapse" id="navbar-menu">
					<div class="d-flex flex-column flex-lg-row flex-fill align-items-stretch align-items-lg-center">
						<ul class="navbar-nav">
							
							
							<li class="nav-item">
								<a class="nav-link" href="https://www.roiledger.com/login.php">
									<span class="nav-link-icon d-lg-inline-block">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z"></path>
											<polyline points="14 3 14 8 19 8"></polyline>
											<path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
											<line x1="9" y1="9" x2="10" y2="9"></line>
											<line x1="9" y1="13" x2="15" y2="13"></line>
											<line x1="9" y1="17" x2="15" y2="17"></line>
										</svg>
									</span>
									<span class="nav-link-title">
										Logout
									</span>
								</a>
							</li>
						</ul>
						<div class="ml-lg-auto pl-lg-4 py-2 py-md-0 order-last flex-grow-1 flex-md-grow-1">
							<div>
								<div class="input-icon">
									<span class="input-icon-addon">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z"></path>
											<circle cx="10" cy="10" r="7"></circle>
											<line x1="21" y1="21" x2="15" y2="15"></line>
										</svg>
									</span>
									<input type="text" id="searchValue" class="form-control form-control-dark" placeholder="Search by Block Height / Hash, Transaction Hash, or Payment Id">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="content">
			<div class="container-xl">
				<!-- Page title -->
				<div class="page-header text-white">
					<div class="row align-items-center">
						<div class="col-auto">
							<h2 class="page-title">
								ROI LEDGER Wallet
							</h2>
						</div>
					</div>
				</div>
				<div class="row row-Augk row-cards">
					<div class="col-lg-4">
						<div class="col-12">

							<div class="card">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div class="subheader">Balance</div>
									</div>
									<div class="h1 mb-3"><?php echo $_SESSION['profits']; ?> USD</div>
									<div class="d-flex mb-2">
										<div>USDT</div>
										<div class="ml-auto">
											<span class="text-green d-inline-flex align-items-center lh-1">
												7.21% <svg xmlns="http://www.w3.org/2000/svg" class="icon ml-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
													<path stroke="none" d="M0 0h24v24H0z"></path>
													<polyline points="3 17 9 11 13 15 21 7"></polyline>
													<polyline points="14 7 21 7 21 14"></polyline>
												</svg>
											</span>
										</div>
									</div>
									<div class="d-flex">
										<div>BTC</div>
										<div class="ml-auto">
											<span class="text-green d-inline-flex align-items-center lh-1">
												5.87% <svg xmlns="http://www.w3.org/2000/svg" class="icon ml-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
													<path stroke="none" d="M0 0h24v24H0z"></path>
													<polyline points="3 17 9 11 13 15 21 7"></polyline>
													<polyline points="14 7 21 7 21 14"></polyline>
												</svg>
											</span>
										</div>
									</div>
								</div>
							</div>

							<div class="card">
								<!-- Cards navigation -->
								<ul class="nav nav-tabs" data-toggle="tabs">
									<li class="nav-item col-6">
										<a href="#tab-top-1" class="nav-link justify-content-center active" data-toggle="tab">Withdraw</a>
									</li>
									<li class="nav-item col-6">
										<a href="#tab-top-2" class="nav-link justify-content-center" data-toggle="tab">Deposit</a>
									</li>
								</ul>
								<div class="tab-content">
									<!-- Content of card #1 -->
									<div id="tab-top-1" class="tab-pane show active">
										<div class="card-body">
											<div class="mb-3">
												<label class="form-label">Wallet Address:</label>
												<textarea rows="3" class="form-control" placeholder="Wallet Address"></textarea>
											</div>
											<div class="mb-3">
												<label class="form-label">Your Payment ID:</label>
												<input type="text" class="form-control" placeholder="Payment ID">
											</div>
											<div class="mb-3">
												<label class="form-label">Amount :</label>
												<div class="input-group input-group-flat">
													<input type="text" class="form-control" placeholder="Min withdrawal amount: 100">
													<span class="input-group-text">
														<a href="#" class="input-group-link">MAX</a>
													</span>
												</div>
											</div>
											<div class="mb-3">
												<label class="form-label">Remark:</label>
												<input type="text" class="form-control" placeholder="Remark">
											</div>
											<div class="form-footer">
												<button type="submit" class="btn btn-primary btn-block">Withdraw</button>
											</div>
										</div>
									</div>
									<!-- Content of card #2 -->
									<div id="tab-top-2" class="tab-pane">
										<div class="card-body">
											<div class="mb-3">
												<div class="d-flex">
													<label class="form-label">USDT Wallet Address:</label>
													<div class="ml-auto form-label">
														<a href="deposit.html" class="small">Deposit Other Coins</a>
													</div>
												</div>
												<textarea rows="3" class="form-control">TD5QhqTXur2UtAnrKfD6PEecNkn5nxcisN</textarea>
											</div>
											<img class="card-img-top border" src="./dist/img/937c215d-72fb-433c-be35-fb835de95273.jpeg" alt="QR-CODE">
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-lg-8">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Transaction History</h4>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<footer class="footer footer-transparent">
				<div class="container">
					<div class="row text-center align-items-center flex-row-reverse">
						<div class="col-lg-auto ml-lg-auto">
							
							
						</div>
						<div class="col-12 col-lg-auto mt-3 mt-lg-0">
							Copyright © 2023 Powerd By
							<a href="https://turtlepay.io/" target="_blank" class="link-secondary">ROI LEDGER</a>.
							This website is licensed under BitLicense. 
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<!-- Libs JS -->
	<script src="./dist/js/bootstrap.bundle.min.js"></script>
	<!-- Tabler Core -->
	<script src="./dist/js/tabler.min.js"></script>
	<!-- Dark Mode -->
	<script src="./dist/js/dark-mode.js"></script>
	<script>
		document.body.style.display = "block"

	</script>
</body>

</html>
