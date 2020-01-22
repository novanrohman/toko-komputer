<?php
include 'config.php'
?>

<!doctype html>
<html lang="en">

<head>
    <title>Tambah Produk | Toko Komputer</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Toko Komputer</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container col-md-5">
        <!-- kode barang -->
        <div class="form-group mt-5">
            <label for="">Kode Barang</label>
            <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                placeholder="Masukkan Kode Barang">
        </div>
        <!-- Nama barang -->
        <div class="form-group">
            <label for="">Nama Barang</label>
            <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                placeholder="Masukkan Nama Barang">
        </div>
        <!-- Tipe Barang -->
        <div class="form-group">
            <label for="">Tipe Barang</label>
            <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                placeholder="Masukkan Tipe Barang">
        </div>
        <!-- Kategori Barang -->
        <div class="form-group">
            <label for="">Kategori</label>
            <select class="form-control">
                <option selected desibled>Pilih Kategori</option>
                <option value="">Komputer</option>
                <option value="">Laptop</option>
                <option value="">VGA</option>
            </select>
        </div>
        <!-- Harga barang -->
        <div class="form-group">
            <label for="">Harga Barang Rp.</label>
            <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                placeholder="Masukkan Harga Barang">
        </div>
        <!-- Spesifikasi -->
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Spesifikasi</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <!-- Stok -->
        <div class="form-group mb-5">
            <label for="">Jumlah Barang Masuk</label>
            <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                placeholder="Masukkan Jumlah Barang">
        </div>
    </div>

    <div class="container mb-5 col-md-5">
        <div class="ml-auto">
            <button type="button" name="" id="" class="btn btn-danger" btn-lg btn-block">Batal</button>
            <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block">Simpan</button>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>