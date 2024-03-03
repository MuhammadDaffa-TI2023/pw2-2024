<?php
    $customer = isset($_POST["nama_customer"]) ? $_POST["nama_customer"] : "";
    $produk = isset($_POST["radio1"]) ? $_POST["radio1"] : "";
    $jumlah = isset($_POST["select"]) ? $_POST["select"] : "";

    // harga setiap produk
    $hargaTV = 4200000;
    $hargaKulkas = 3100000;
    $hargaMesinCuci = 3800000;

    // hitung total harga
    $totalHarga = 0;
    if ($produk == "TV") {
        $totalHarga = $hargaTV * $jumlah;
    } elseif ($produk == "KULKAS") {
        $totalHarga = $hargaKulkas * $jumlah;
    } elseif ($produk == "MESIN CUCI") {
        $totalHarga = $hargaMesinCuci * $jumlah;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<form method="post" action="form_belanja.php">
  <h2>Belanja Online</h2>
  <div class="form-group row">
    <label for="nama_customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="nama_customer" name="nama_customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih produk</label> 
    <div class="col-8">
      <label class="custom-control custom-radio">
        <input name="radio1" type="radio" class="custom-control-input" value="TV"> 
        <span class="custom-control-indicator"></span> 
        <span class="custom-control-description">TV</span>
      </label>
      <label class="custom-control custom-radio">
        <input name="radio1" type="radio" class="custom-control-input" value="KULKAS"> 
        <span class="custom-control-indicator"></span> 
        <span class="custom-control-description">KULKAS</span>
      </label>
      <label class="custom-control custom-radio">
        <input name="radio1" type="radio" class="custom-control-input" value="MESIN CUCI"> 
        <span class="custom-control-indicator"></span> 
        <span class="custom-control-description">MESIN CUCI</span>
      </label>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <select id="select" name="select" class="custom-select">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<div class="card p-3 shadow-sm">
  <h5>Nama Customer : <?= $customer ?></h5>
  <h5>Produk Pilihan : <?= $produk ?></h5>
  <h5>Jumlah Beli : <?= $jumlah ?></h5>
  <h5>Total Belanja : <?= $totalHarga ?></h5>
</div>

</body>
</html>
