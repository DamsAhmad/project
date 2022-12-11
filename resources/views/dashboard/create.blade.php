@extends('layout.template')

@section('konten')
     <!-- START FORM -->
     <form action='{{ url('dashboard') }}' method='post' enctype="multipart/form-data">
    @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div>
                <p class="text-center">Input Data Hunian </p>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='lokasi' id="lokasi">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='harga' id="harga">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jmlh_kamar_tdur" class="col-sm-2 col-form-label">Jumlah Kamar Tidur</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jumlah_kamar_tidur' id="jumlah_kamar_tidur">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jmlh_kamar_mndi" class="col-sm-2 col-form-label">Jumlah Kamar Mandi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jumlah_kamar_mandi' id="jumlah_kamar_mandi">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="gambar" class="col-sm-2 col-form-label">Gambar Hunian</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name='gambar' id="gambar">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </form>
        </div>
        <!-- AKHIR FORM -->

@endsection
