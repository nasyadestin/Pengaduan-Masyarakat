<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container-scroller">
	<div class="container-fluid page-body-wrapper full-page-wrapper">
	  <div class="row w-100 m-0">
		<div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
		  <div class="card col-lg-5 mx-auto my-5 rounded">
			<div class="card-body px-5 py-5">
			  <h4 class="card-title text-center text-left mb-3">Register Kotak Aduan Desa Bendungan</h4>
			  <form method="POST" action="/register">
				@csrf
              <div class="form-group">
				  <label>NIK</label>
				  <input type="text" name="nik" class="form-control p_input">
				</div>
				<div class="form-group">
				  <label>Nama</label>
				  <input type="text" name="nama" class="form-control p_input">
				</div>
				<div class="form-group">
				  <label>Username</label>
				  <input type="text"name="username" class="form-control p_input">
				</div>
				<div class="form-group">
				  <label>Password </label>
				  <input type="password" name="password" class="form-control p_input">
				  <input type="hidden" name="role" value="petugas">
				</div>
				<div class="form-group">
				  <label>No Telp </label>
				  <input type="number" name="telp" class="form-control p_input">
				</div>
				<div class="d-flex justify-content-between mt-4">
                    <p class="">Sudah punya akun? <a href="{{ url('/login') }}">Login</a> </p>
                    <button type="submit" class="btn-daftar btn btn-secondary col-5">Daftar</button>
                </div>
            </form>
            
		  </div>
		</div>
		<!-- content-wrapper ends -->
	  </div>
	  <!-- row ends -->
	</div>
	<!-- page-body-wrapper ends -->
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>