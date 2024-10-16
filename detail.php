<?php
include "database.php";
$db = new Database();

// Pastikan ID ada di URL dan valid
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $detail = $db->editData($id); // Mengambil data berdasarkan ID
    
    // Cek apakah data dengan ID tersebut ditemukan
    if (empty($detail)) {
        echo "Data tidak ditemukan untuk ID: " . $id;
        exit;
    }
} else {
    echo "ID tidak ditemukan!";
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="card" style="width: 500px;">
    <img src="https://i.pinimg.com/236x/da/82/7a/da827a5d4ac17958e2ed839454bb0d4d.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Data Orang</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dolorem non omnis culpa quia neque fuga maxime consectetur minima, minus quis distinctio labore ipsum veniam repellat consequuntur recusandae perspiciatis! Magnam.</p>
    </div>
      <ul class="list-group list-group-flush">
        <?php
        // Menampilkan data di dalam elemen list
        foreach ($detail as $dataUser) {
        ?>
            <li class="list-group-item">Nama: <?php echo $dataUser["nama"]; ?></li>
            <li class="list-group-item">Alamat: <?php echo $dataUser["alamat"]; ?></li>
            <li class="list-group-item">No HP: <?php echo $dataUser["nohp"]; ?></li>
        <?php
        }
        ?>
      </ul>
        <div class="card-body">
            <a href="index.php" class="btn btn-primary">Kembali</a>
        </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
