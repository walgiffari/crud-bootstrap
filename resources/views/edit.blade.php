<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 style="text-align: center">Tambah Data Pegawai</h1>
<div class="container">
<form action="{{ route('edit_store') }}" method="post">
    @csrf
    <input type="hidden" value="{{ $data_pegawai->id }}" name="id">
    <div class="mb-3 ">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Contoh : Ayi Amaliac">
        @error('nama')
        <div class="kesalahan" style="color: red;">
        <span>{{$message}}</span>
        </div>
        @enderror
    </div>
    <div class="mb-3 ">
        <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
        <input type="text" name="jabatan" class="form-control" id="exampleFormControlInput1" placeholder="Contoh : Pegawai Swasta">
        @error('jabatan')
        <div class="kesalahan" style="color: red;">
        <span>{{$message}}</span>
        </div>
        @enderror
    </div>
    <div class="mb-3 ">
        <label for="exampleFormControlInput1" class="form-label">Umur</label>
        <input type="text" name="umur" class="form-control" id="exampleFormControlInput1" placeholder="Contoh : 17 Tahun">
        @error('umur')
        <div class="kesalahan" style="color: red;">
        <span>{{$message}}</span>
        </div>
        @enderror
    </div>
    <div class="mb-3 ">
        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="Contoh : GG Langgar">
        @error('alamat')
        <div class="kesalahan" style="color: red;">
        <span>{{$message}}</span>
        </div>
        @enderror
    </div>
    <div class="mb-3 ">
        <button type="submit" class="btn btn-primary">Tambah Data</button>  
    </div>
</form>
   
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>