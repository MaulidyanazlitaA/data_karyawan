<?php
include "helper/koneksi.php";
$id = $_POST['id'];
$query_tampil = "SELECT * FROM data_pegawai WHERE id = '$id'";
$tampil = mysqli_query($db, $query_tampil);
$data = mysqli_fetch_array($tampil)
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
                <div class="card shadow-lg">
                    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Edit Data Karyawan</h4>
                        <a href="index.php" class="btn btn-light btn-sm">Kembali</a>
                    </div>
                    <div class="card-body p-4">
                        <form action="helper/update_karyawan.php" method="POST">
                            <input type="hidden" name="id" value=" <?php echo $data['id']; ?>">
                            <div class="mb-3">
                                <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
                                <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="<?php echo $data['nama_pegawai']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" class="form-control" id="Jabatan" name="Jabatan" value="<?php echo $data['jabatan']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label d-block">Jenis Kelamin</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki" <?php if ($data['jenis_kelamin'] == "Laki-laki") echo "checked"; ?> required>
                                    <label class="form-check-label" for="laki-laki">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" <?php if ($data['jenis_kelamin'] == "Perempuan") echo "checked"; ?> required>
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label d-block"> Shift Kerja</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="Pagi 06.00-12.00" name="shift_keja" value="Pagi 06.00-12.00" <?php if ($data['shift_kerja'] == "Pagi 06.00-12.00") echo "checked"; ?> required>
                                    <label class="form-check-label" for="Pagi 06.00-12.00">Pagi 06.00-12.00</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>