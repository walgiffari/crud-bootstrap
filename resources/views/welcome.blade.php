<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Hello, world!</title>
  </head>
  <body>

    <h1 class="judul">Data Pegawai</h1>
    <p class="text-cari">Cari Data Pegawai</p>
    <form action="{{ route('index') }}">
      <input type="text" name="search" class="search" placeholder="Cari Nama Pegawai..."> <button>Submit</button> 
    </form>
    <button type="button" class="btn-tambah btn btn-primary">+ Tambah Pegawai Baru</button>
    <table border="1" class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Umur</th>
      <th scope="col">Alamat</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
@foreach ($data as $item)
  <tbody class="table-striped">
    <tr>
       <td>{{ $item->id }}</td>
       <td>{{ $item->nama }}</td>
       <td>{{ $item->jabatan }}</td>
       <td>{{ $item->umur }}</td>
       <td>{{ $item->alamat }}</td>
       <td> <button type="button" class="btn btn-warning">Edit</button> <button type="button" class="btn btn-danger">Hapus</button></td>
      </tr>
    </tbody>
@endforeach
</table>
<div class="deskripsi">
<p>Halaman : {{ $data->currentPage() }}</p>
<p>Jumlah Data : {{ $data->total() }}</p>
<p>Data Per Halaman : {{ $data->perPage() }}</p>
</div>
{{ $data->links() }}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>