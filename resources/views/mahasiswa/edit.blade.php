<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-warning">
            <h4 class="mb-0">Edit Mahasiswa</h4>
        </div>

        <div class="card-body">

            <form action="/mahasiswa/update/{{ $mahasiswa->id }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="text" name="nim" value="{{ $mahasiswa->nim }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="bi bi-pencil"></i> Update
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