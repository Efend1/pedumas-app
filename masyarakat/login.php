<?php
include '../src/koneksi.php';

session_start();

if (isset($_SESSION["login"])) {
  header("Location: masyarakat/dashboard.php");
}

if(isset($_POST['btnMasuk'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $data = mysqli_query($koneksi, "SELECT * FROM dat_masyarakat WHERE username = '$username'");
  
  if(mysqli_num_rows($data) === 1){
    $baris = mysqli_fetch_assoc($data);
    
    if($password == $baris['password']){
      header("Location: dashboard.php");
			$_SESSION['id'] = $baris['id'];
			$_SESSION['login'] = true;
			$_SESSION['nik'] = $baris['nik'];
			$_SESSION['nama'] = $baris['nama'];
			$_SESSION['telp'] = $baris['telp'];
			$_SESSION['username'] = $baris['username'];
			$_SESSION['alamat'] = $baris['alamat'];
			exit;
    }else{
			echo "<script>alert('username atau Password anda salah!')</script>";
    }
  }else{
			echo "<script>alert('username atau Password anda salah!')</script>";
  }
}


?>


<head>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	
	<title>PEDUMAS SITU | LOGIN</title>
	
	<link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    />
</head>
<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Pengaduan Masyarakat Kelurahan Situ</h1>
							<p class="lead">
								Silahkan lakukan login dengan akun anda!
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form action="" method="POST">
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input class="form-control form-control-lg" type="text" name="username" placeholder="Username" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Password" />
										</div>
										<a href="daftar.php">Daftar akun baru ?</a>
										<div class="text-end">
											<button name="btnMasuk" type="submit" class="btn btn-lg btn-primary">Masuk</button>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>
</body>