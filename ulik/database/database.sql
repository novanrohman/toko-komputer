CREATE DATABASE IF NOT EXISTS toko_komputer;

CREATE TABLE IF NOT EXISTS data_barang(
    kode_barang varchar (100) PRIMARY KEY NOT NULL,
    nama_barang varchar(200) NOT NULL,
    tipe-barang varchar(100) NOT NULL,
    kategori varchar (10),
    harga_barang int(20) NOT NULL,
    spesifikasi text,
    stok int(7) NOT NULL
);

CREATE TABLE IF NOT EXISTS kategori(
    id int(20) PRIMARY KEY AUTO_INCREMENT,
    nama_kategori char(30)
);

CREATE TABLE IF NOT EXISTS nota(
    id_nota int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    kode_barang varchar(100) NOT NULL,
    nama_barang varchar(200) NOT NULL,
    harga_satuan int(20) NOT NULL,
    jumlah_barang int(10) NOT NULL,
    total int(50) NOT NULL
);