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
                            <th>Nama Anggota</th>
                            <th>Email</th>
                            <th>No. Kartu Anggota</th>
                            <th>Tanggal Aktivasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($anggotas as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->email  }}</td>
                                <td><span
                                        class="badge bg-info text-dark">{{ $anggota->kartuAnggota->nomor_kartu ?? '-' }}</span>
                                </td>
                                <td>{{ $anggota->kartuAnggota->tanggal_aktivasi ?? '-' }}</td>
                                <td></td>
                                <td>
                                    <a href="/anggota/edit/{{ $data->id }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>

                                    <form action="/anggota/delete/{{ $data->id }}" method="POST" class="d-inline">
                                        @csrf

                                        <button type="submit" class="btn btn-danger btn-sm">
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