<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input Anggota</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Input Anggota</h4>
        </div>

        <div class="card-body">

            <form action="/anggota/store" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama">
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Masukkan Email">
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-floppy"></i> Simpan
                </button>

                <a href="/mahasiswa" class="btn btn-secondary">
                    <i class="bi bi-arrow-return-left"></i> Kembali
                </a>

            </form>

        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>