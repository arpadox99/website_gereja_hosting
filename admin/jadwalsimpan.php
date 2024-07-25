<?php

$id_jadwal = filter_var($_POST['id_jadwal'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$hari_tgl = filter_var($_POST['hari_tgl'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$waktu_ibadah = filter_var($_POST['waktu_ibadah'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$jenis_keg = filter_var($_POST['jenis_keg'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$lokasi_ibadah = filter_var($_POST['lokasi_ibadah'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if (empty($id_jadwal) || empty($hari_tgl) || empty($waktu_ibadah) || empty($jenis_keg) || empty($lokasi_ibadah)) {
  echo "<script>
          alert('Data Tidak Boleh Kosong');
          window.location.href = 'index.php?page=jadwal';
      </script>";
} else {
  try {
    $stmt = $con->prepare("SELECT * FROM jadwal_ibadah WHERE id_jadwal = ?");
    $stmt->bindValue(1, $id_jadwal);
    $stmt->execute();
    $jumlah = $stmt->rowCount();

    if ($jumlah > 0) {
      echo "<script>
              alert('Data Sudah Ada');
              window.location.href = 'index.php?page=jadwal';
          </script>";
    } else {
      $sql = "INSERT INTO jadwal_ibadah (hari_tgl, waktu_ibadah, jenis_keg, lokasi_ibadah) VALUES (:hari_tgl, :waktu_ibadah, :jenis_keg, :lokasi_ibadah)";
      $simpan = $con->prepare($sql);
      $simpan->bindValue(':hari_tgl', $hari_tgl);
      $simpan->bindValue(':waktu_ibadah', $waktu_ibadah);
      $simpan->bindValue(':jenis_keg', $jenis_keg);
      $simpan->bindValue(':lokasi_ibadah', $lokasi_ibadah);
      $simpan->execute();

      echo "<script>
              alert('Data Berhasil Disimpan');
              window.location.href = 'index.php?page=jadwal';
          </script>";
    }
  } catch (PDOException $e) {
    echo "<script>
            alert('Terjadi kesalahan: " . $e->getMessage() . "');
            window.location.href = 'index.php?page=jadwal';
        </script>";
  }
}
