<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/style2.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Toko Toraja</title>
    <style>
      .card img{
        width: 290px;
      }
      .card{
        width: 290px;
        margin-left: 70px;
      }
    </style>
  </head>
  <body>
  <header>
        <center>
        <h1>TOKO ONLINE<br>OLEH-OLEH KHAS TORAJA</h1>
        <nav>
			<ul>
				<button><li><a href="http://localhost/projectuas1/websitetoko.php">Beranda</a></li></button>
				<button><li><a href="http://localhost/projectuas1/kaintenun.php">Kain Tenun</a></li></button>
        <button><li><a href="http://localhost/projectuas1/tas.php">Tas</a></li></button>
				<button><li><a href="http://localhost/projectuas1/aksesoris.php">Aksesoris</a></li></button>
				<button><li><a href="http://localhost/projectuas1/pakaian.php">Pakaian</a></li></button>
			</ul>
		</nav>
        </center>
    </header>
    <br>
    <br>
    <div class="row row-cols-1 row-cols-md-3">
  <div class="col mb-4">
    <div class="card h-100 bg-light">
      <img src="img/aksesoris3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">
          <center>
        <?php
include "koneksi.php";
$tampildata = 'SELECT nama FROM aksesoris WHERE id = 1';
$query = mysqli_query($koneksi, $tampildata);
while ($row = mysqli_fetch_array($query))
{
    echo '<td>'. $row ['nama'].'</td>';
}
?> </center>
        </h5>
        <center>
        <class type="button" class="btn btn-outline-dark">
        <?php
include "koneksi.php";
$tampildata = 'SELECT harga FROM aksesoris WHERE id = 1';
$query = mysqli_query($koneksi, $tampildata);
while ($row = mysqli_fetch_array($query))
{
    echo '<td>'. $row ['harga'].'</td>';
}
?> </center>
        </class>
        <br>
        <center><a href="http://localhost/projectuas1/beli.php" class="btn btn-dark">Beli</a></center>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card h-100 bg-light">
      <img src="img/aksesoris2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">
          <center>
        <?php
include "koneksi.php";
$tampildata = 'SELECT nama FROM aksesoris WHERE id = 3';
$query = mysqli_query($koneksi, $tampildata);
while ($row = mysqli_fetch_array($query))
{
    echo '<td>'. $row ['nama'].'</td>';
}
?> </center>
        </h5>
        <center>
        <class type="button" class="btn btn-outline-dark">
        <?php
include "koneksi.php";
$tampildata = 'SELECT harga FROM aksesoris WHERE id = 3';
$query = mysqli_query($koneksi, $tampildata);
while ($row = mysqli_fetch_array($query))
{
    echo '<td>'. $row ['harga'].'</td>';
}
?> </center>
        </class>
        <br>
        <center><a href="http://localhost/projectuas1/beli.php" class="btn btn-dark">Beli</a></center>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card h-100 bg-light">
      <img src="img/aksesoris1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">
          <center>
        <?php
include "koneksi.php";
$tampildata = 'SELECT nama FROM aksesoris WHERE id = 4';
$query = mysqli_query($koneksi, $tampildata);
while ($row = mysqli_fetch_array($query))
{
    echo '<td>'. $row ['nama'].'</td>';
}
?> </center>
        </h5>
        <center>
        <class type="button" class="btn btn-outline-dark">
        <?php
include "koneksi.php";
$tampildata = 'SELECT harga FROM aksesoris WHERE id = 4';
$query = mysqli_query($koneksi, $tampildata);
while ($row = mysqli_fetch_array($query))
{
    echo '<td>'. $row ['harga'].'</td>';
}
?> </center>
        </class>
        <br>
        <center><a href="http://localhost/projectuas1/beli.php" class="btn btn-dark">Beli</a></center>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card h-100 bg-light">
      <img src="img/aksesoris5.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">
          <center>
        <?php
include "koneksi.php";
$tampildata = 'SELECT nama FROM aksesoris WHERE id = 5';
$query = mysqli_query($koneksi, $tampildata);
while ($row = mysqli_fetch_array($query))
{
    echo '<td>'. $row ['nama'].'</td>';
}
?> </center>
        </h5>
        <center>
        <class type="button" class="btn btn-outline-dark">
        <?php
include "koneksi.php";
$tampildata = 'SELECT harga FROM aksesoris WHERE id = 5';
$query = mysqli_query($koneksi, $tampildata);
while ($row = mysqli_fetch_array($query))
{
    echo '<td>'. $row ['harga'].'</td>';
}
?> </center>
        </class>
        <br>
        <center><a href="http://localhost/projectuas1/beli.php" class="btn btn-dark">Beli</a></center>
      </div>
    </div>
  </div>
  

</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>