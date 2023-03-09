<?php
session_start();
if( empty( $_SESSION['id_user'] ) ){
	//session_destroy();
	$_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
	header('Location: ./');
	die();
} else {
	include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Steam Mobil & Motor</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/jquery-ui.min.css" rel="stylesheet">

    <script src="js/jquery.min.js"></script>


	<style type="text/css">
	body {
	  min-height: 200px;
	  padding-top: 70px;
	  background-image: url("img/—Pngtree—sport\ car\ logo\ vector_6398339.png");
  	  background-size: 1450px 1100px;
	}
   @media print {
	   .container {
		   margin-top: -30px;
	   }
	   #tombol,
      .noprint {
         display: none;
      }
   }
   .jumbotron {
  border: 2px solid #ccc;
  border-radius: 10px;
  outline: 5px solid blue;
}
	</style>

  </head>

  <body>

    <?php include "menu.php"; ?>

    <div class="container">

	<?php
	if( isset($_REQUEST['hlm'] )){

		$hlm = $_REQUEST['hlm'];

		switch( $hlm ){
			case 'transaksi':
				include "transaksi.php";
				break;
			case 'laporan':
				include "laporan.php";
				break;
			case 'user':
				include "user.php";
				break;
			case 'biaya':
				include "biaya.php";
				break;
			case 'cetak':
				include "cetak_nota.php";
				break;
		}
	} else {
	?>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h2><b>Selamat Datang di Aplikasi Steam Mobil & Motor</b></h2>

        <p>Halo <strong><?php echo $_SESSION['nama']; ?></strong>, Anda login sebagai
			<strong>
			<?php
				if($_SESSION['level'] == 1){
					echo 'Admin.';
				} else {
						echo 'Petugas Kasir.';
				}
			?>
			</strong>
		</p>
      </div>
	<?php
	}
	?>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript, Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>

  </body>

</html>
<?php
}
?>
