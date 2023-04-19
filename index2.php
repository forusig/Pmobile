<html>
<head>
  <title>Latihan API</title>
</head>

<body>
  <center> <h1>Data Hadir Mahasiswa</h1> </center>
  <table border="1px">
    <tr bgcolor="grey">
      <th>No.</th>
      <th>NIM</th>
        <th>Nama</th>
        <th>Pertemuan 1</th>
        <th>Pertemuan 2</th>
        <th>Pertemuan 3</th>
        <th>Pertemuan 4</th>
    </tr>

    <?php
    $url = 'https://tifupb.id/tugas1';
    $data = file_get_contents($url);
    $mahasiswa = json_decode($data, true);
    $no = 1;
    foreach ($mahasiswa as $item) {
        echo "<tr>";
      echo "<td>" . $no . "</td>";
      echo "<td>" . $item['NIM'] . "</td>";
      echo "<td>" . $item['Nama'] . "</td>";
      echo "<td>" . $item['1'] . "</td>";
      echo "<td>" . $item['2'] . "</td>";
      echo "<td>" . $item['3'] . "</td>";
      echo "<td>" . $item['4'] . "</td>";
  
      echo"</tr>";
      $no += 1;
    }
    
    ?>
  </table>
</body>
</html>