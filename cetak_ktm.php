
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Cetak KTM</title>
    <link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        $bulan_indonesia = array(
            "Januari",
            "Februari",
            "Maret",
            "April",
            "Mei",
            "Juni",
            "Juli",
            "Agustus",
            "September",
            "Oktober",
            "November",
            "Desember"
        );
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Cek apakah ada input yang kosong
            if (empty($_POST["nim"]) || empty($_POST["nama"]) || empty($_POST["jenis_kelamin"]) || empty($_POST["tempat_lahir"]) || empty($_POST["tanggal_lahir"]) || empty($_POST["prodi"])) {
                echo "<script>alert('Isi Terlebih dahulu form KTM!'); window.location.href='index.php';</script>";
                exit;
            }
        }
        // Ambil tanggal dari inputan user
        $tanggal_lahir = $_POST['tanggal_lahir'];

        // Pecah tanggal menjadi tiga bagian
        $pecah_tanggal = explode("-", $tanggal_lahir);

        // Ubah format tanggal
        $tanggal_baru = $pecah_tanggal[2] . " " . $bulan_indonesia[$pecah_tanggal[1] - 1] . " " . $pecah_tanggal[0];

    ?> 
    <div class="container">
        <div class="row justify-content-center p-5">
            <div class="col-md-6 bg-light p-3">
                <div class="printIn">
                    <img src="img/ktm-stmik.png" class="ktmImage rounded-5">
                    <div class="textIn text-white">
                        <h6 class="nim"> <?= $_POST['nim'] ?> </h6>
                        <h6 class="nama"><?= $_POST['nama'] ?> </h6>
                        <h6 class="ttl"> <?php echo"$_POST[tempat_lahir], $tanggal_baru";?> </h6>
                        <h6 class="prodi"> <?= $_POST['prodi'] ?> </h6>
                    </div>
                    <img class="photoIn" src="<?= $_POST['jenis_kelamin'] == "Perempuan" ? 'img/botak.png' : 'img/restu.png' ?>" alt="" srcset="">
                </div>
            </div>
            <div class="col-md-6 bg-light p-3">
                <div class="printIn">
                    <img src="img/ktm.jpg" class="ktmImage rounded-5">
                    <div class="textIn">
                        <h6 class="nim"> <?= $_POST['nim'] ?> </h6>
                        <h6 class="nama"><?= $_POST['nama'] ?> </h6>
                        <h6 class="ttl"> <?php echo"$_POST[tempat_lahir], $tanggal_baru";?> </h6>
                        <h6 class="prodi"> <?= $_POST['prodi'] ?> </h6>
                    </div>
                    <img class="photoIn" src="<?= $_POST['jenis_kelamin'] == "Perempuan" ? 'img/singer-guitar-6.png' : 'img/one-punch-man.png' ?>" alt="" srcset="">
                </div>
            </div>
            <a href="index.php" class="btn btn-danger mt-4 w-100 border border-1 border-white">Kembali</a>
        </div>
    </div>
</body>
<script>
    print();
</script>
</html>