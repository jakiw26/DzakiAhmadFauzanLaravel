<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dokumen</title>
  </head>
  <body>
    <h1>Input Mahasiswa</h1>
    <form action="/mahasiswa/store" method="POST">
        @csrf
        Nama : <input type="text" name="nama"></br></br>
        NIM : <input type="text" name="nim"></br></br>
        Jurusan : <input type="text" name="jurusan"></br></br>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
  </body>
</html>