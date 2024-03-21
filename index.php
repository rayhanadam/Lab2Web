<?php

if (isset($_POST['submit'])) {
  $nama = $_POST["nama"];
  $pekerjaan = $_POST["pekerjaan"];

  if ($pekerjaan == "Software Engineer") {
    $gaji = 25000000;
  } else if ($pekerjaan == "Data Analyst") {
    $gaji = 20000000;
  } else if ($pekerjaan == "Graphics Designer") {
    $gaji = 15000000;
  } else if ($pekerjaan == "Web Developer") {
    $gaji = 18000000;
  } else if ($pekerjaan == "Network Enginer") {
    $gaji = 11000000;
  } else if ($pekerjaan == "DevOps Enginer") {
    $gaji = 25500000;
  } else {
    $gaji = 0;
  }

  $tanggal_lahir = new DateTime($_POST['tanggal_lahir']);

  $hari_ini = new DateTime('today');
  $tahun = $tanggal_lahir->diff($hari_ini)->y;
  $bulan = $tanggal_lahir->diff($hari_ini)->m;
  $hari = $tanggal_lahir->diff($hari_ini)->d;

  $umur = $tahun . " tahun " . $bulan . " bulan " . $hari . " hari ";
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lab2Web</title>
  <style>
  body {
    background-color: lightgrey;
  }

  .card {
    display: flex;
    justify-content: space-evenly;
    padding: 30px 80px;

  }

  .form {
    width: 400px;
    display: flex;
    flex-direction: column;
    gap: 14px;
    padding: 30px 20px;
    background-color: skyblue;

    border-radius: 4px;
    box-shadow: 2px 4px 4px 2px rgba(0, 0, 0, 0.5);
  }

  .data {
    font-size: 18px;
    font-family: "Fira Code";
    width: 400px;
  }

  .form-group {
    display: flex;
    flex-direction: column;
  }

  .form-group label,
  .form-group select>option {
    font-family: "Fira Code";
    font-size: 18px;
    margin-bottom: 8px;
  }

  .form-group input,
  .form-group select,
  button,
  h1 {
    padding: 8px 12px;
    font-family: "Fira Code";
  }

  button {
    background-color: tomato;
    color: white;
    cursor: pointer;
  }

  button:hover {
    background-color: black;
    color: white;
  }

  span {
    background: lightgrey;
    padding: 4px 8px;
    color: blak;
  }
  </style>
</head>

<body>
  <div class="card">
    <form action="" class="form" method="post">
      <h1 style="text-align: center;"> Formulir Karyawan</h1>
      <div class="form-group">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" required>
      </div>
      <div class="form-group">
        <label for="tanggalahir">Tanggal Lahir :</label>
        <input type="date" name="tanggal_lahir" id="tanggalahir" required>
      </div>
      <div class="form-group">
        <label for="pekerjaan">Pekerjaan :</label>
        <select name="pekerjaan" id="pekerjaan" required>
          <option value="Software Enginer">Software Enginer</option>
          <option value="Network Enginer">Network Enginer</option>
          <option value="Data Analyst">Data Analyst</option>
          <option value="Graphics Designer">Graphics Designer</option>
          <option value="Web Developer">Web Developer</option>
          <option value="DevOps Engineer">DevOps Enginer</option>
        </select>
      </div>
      <div class="form-group">
        <button type="submit" name="submit" class="btn">Simpan</button>
      </div>
    </form>

    <div class="data">
      <h1>Data Karyawan</h1>
      <hr>
      <p>Nama : <span><?= $nama ?? "-"; ?> </span></p>
      <p>Pekerjaan : <span> <?= $pekerjaan ?? "-"; ?></span></p>
      <p>Gaji :<span> Rp. <?= number_format($gaji ?? 0, 0, "", ".") ?? "-"; ?> -;</span></p>
      <p>Umur : <span> <?= $umur ?? "-"; ?></span></p>
    </div>
  </div>
</body>

</html>