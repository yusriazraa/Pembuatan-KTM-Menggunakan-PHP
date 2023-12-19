<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Cetak KTM</title>
    <link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body style="background: linear-gradient(90deg, red, green);" >
    <div class="container ">
        <div class="row justify-content-center p-5">
            <div class="col-md-3">
                <img class="w-100" src="img/logo-stmik.png" alt="">
            </div>
            <div class="col-md-5 bg-light p-4 rounded-4">
                <div class="d-flex justify-content-center">
                    <img src="img/badge-1.png" class="w-50" alt="">
                </div>
                <h3 class="text-center">Form Cetak KTM</h3>
                <p class="text-center text-secondary opacity-25">STMIK TASIKMALAYA & UNPER TASIKMALAYA</p>
                <form method="POST" action="cetak_ktm.php">
                    <div class="mb-3 mt-3">
                        <label for="nim" class="form-label">NIM :</label>
                        <input type="text" class="form-control" id="nim" placeholder="Masukan NIM" name="nim">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="nama" class="form-label">Nama Lengkap :</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Lengkap" name="nama">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin :</label>
                        <select for="jenis_kelamin" class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value=""> --- Pilih Jenis Kelamin ---</option>
                            <option value="Laki-laki"> Laki-laki</option>
                            <option value="Perempuan"> Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir :</label>
                        <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukan Tempat Lahir" name="tempat_lahir">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir :</label>
                        <input type="date" class="form-control" id="tanggal_lahir" placeholder="Masukan Tanggal Lahir" name="tanggal_lahir">
                    </div>
                    <div class="mb-3">
                        <label for="prodi" class="form-label">Program Studi : </label>
                        <select for="prodi" class="form-control" id="prodi" name="prodi">
                            <option value="">--- Pilih Program Studi ---</option>
                            <option value="Teknik Informatika"> Teknik Informatika</option>
                            <option value="Teknik Sipil"> Teknik Sipil</option>
                            <option value="Agro Teknologi"> Agro Teknologi</option>
                            <option value="Agri Bisnis"> Agri Bisnis</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success mt-4">Cetak KTM</button>
                </form>
            </div>
            <div class="col-md-3"><img class="w-100" src="img/logo-unper.png" alt=""></div>
        </div>
    </div>
</body>
</html>