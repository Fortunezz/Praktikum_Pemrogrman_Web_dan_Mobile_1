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
              <th>vokal</th>
              <th>Konsonan</th>
            </tr>
          </thead>

          <?php
           // mendeklarasiakan masukan data pada array
            $names= ["Martin Karunia", "Billy", "Susiana", "Budianto"];
            function konsonan($kalimat) {
            $a = substr_count($kalimat, 'a');
            $i = substr_count($kalimat, 'i');
            $u = substr_count($kalimat, 'u');
            $e = substr_count($kalimat, 'e');
            $o = substr_count($kalimat, 'o');

            $count = ($a+$i+$u+$e+$o);

            return $count;
          }

          function vokal($kalimat) {
            $jumlah = strlen($kalimat);
            $a = substr_count($kalimat, 'a');
            $i = substr_count($kalimat, 'i');
            $u = substr_count($kalimat, 'u');
            $e = substr_count($kalimat, 'e');
            $o = substr_count($kalimat, 'o');

            $count = $jumlah - ($a+$i+$u+$e+$o);

            return $count;
        }

    ?>
 <!-- // menampilkan semua data pada array menggunakan perulangan foreach -->
           <?php foreach ($names as $name) :  ?>

                    <tr>
                        <td><?php echo $name."<br>"; ?></td>
                        <td><?= vokal(  $name);  ?></td>
                        <td><?= konsonan( $name);  ?></td>
                    </tr>            
	                  <?php endforeach; ?>   



      </table>
</body>
</html>