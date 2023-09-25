<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Menu Makanan</title>
</head>
<body>
  <h1>Menu Makanan</h1>

  <?php

  // Database connection
  $conn = mysqli_connect("localhost", "root", "", "menu_makanan");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Get menu items
  $sql = "SELECT * FROM menu";
  $result = mysqli_query($conn, $sql);

  // Display menu items
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="menu-item">
        <h2><?php echo $row["nama"]; ?></h2>
        <p><?php echo $row["deskripsi"]; ?></p>
        <ul class="varian">
          <?php

          // Get variants
          $sql_varian = "SELECT * FROM varian WHERE id_menu = " . $row["id"];
          $result_varian = mysqli_query($conn, $sql_varian);

          if (mysqli_num_rows($result_varian) > 0) {
            while ($row_varian = mysqli_fetch_assoc($result_varian)) {
              ?>
              <li>
                <input type="radio" name="varian_<?php echo $row["id"]; ?>" value="<?php echo $row_varian["id"]; ?>"> <?php echo $row_varian["nama"]; ?> (Rp. <?php echo $row_varian["harga"]; ?>)</li>
              <?php
            }
          } else {
            ?>
            <li>Tidak ada varian</li>
            <?php
          }
          ?>
        </ul>
        <input type="number" name="jumlah_<?php echo $row["id"]; ?>" value="1">
        <p>Total: Rp. <?php echo $row["harga"]; ?></p>
      </div>
      <?php
    }
  } else {
    echo "Tidak ada menu makanan";
  }

  // Close database connection
  mysqli_close($conn);

  ?>

  <button type="submit">Kirim Pesanan</button>
</body>
</html>
