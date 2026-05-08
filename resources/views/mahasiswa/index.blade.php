<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3>Daftar Mahasiswa</h3>
                <a href="/mahasiswa/create" class="btn btn-primary">
                    <i class="bi bi-plus-lg"></i>Tambah Mahasiswa
                </a>
            </div>
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th width="5%">No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Jurusan</th>
                        <th width="20%">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($mahasiswa as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->nim }}</td>
                        <td>{{ $data->jurusan }}</td>

                        <td>
                            <a href="/mahasiswa/edit/{{ $data->id }}" 
                               class="btn btn-warning btn-sm">
                               <i class="bi bi-pencil-square"></i> Edit
                            </a>

                            <form action="/mahasiswa/delete/{{ $data->id }}" 
                                  method="POST" 
                                  class="d-inline">
                                @csrf

                                <button type="submit" 
                                        class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>