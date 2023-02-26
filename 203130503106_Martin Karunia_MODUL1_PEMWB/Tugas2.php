<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- membuat title di atas webnya -->
  <title>BAB 1</title>
  <!-- judul -->
  <h1>Tugas  Laporan Modul 1</h1>

</head>
<body>
    <!-- Membuat tabel untuk Tempat Nama -->
      <table border="1" cellpadding="10" cellspacing="1">
          <thead>
            <tr>
               <th>Nama</th>
              <th>Jumlah Huruf</th>
              <th>jumlah kata</th>
            </tr>
          </thead>

        <?php
        // mendeklarasiakan masukan data pada array
            $names= ["Martin Karunia", "Billy", "Susiana", "Budianto"];



    ?>
    <!-- // menampilkan semua data pada array menggunakan perulangan foreach -->
           <?php foreach ($names as $name) :  ?>

                    <tr>
                        <td><?php echo $name."<br>"; ?></td>
                        <td><?php echo strlen($name)."<br>"; ?></td>
                        <td><?php echo str_word_count($name)."<br>"; ?></td>
                    </tr>            
	                  <?php endforeach; ?>    
      </table>
</body>
</html>