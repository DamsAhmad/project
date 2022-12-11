@extends('layout.template')

@section('konten')
    <!-- START FORM -->
    <form action='/dashboard/hunian/update/{{ $hunian->id }}' method='POST'>
        @method('PUT')
        @csrf
        <input type="hidden">
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div>
                <p class="text-center"> Edit Data Hunian </p>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="{{ old('nama', $hunian->nama) }}"
                        id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='lokasi' value="{{ old('lokasi', $hunian->lokasi) }}"
                        id="lokasi">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='harga' value="{{ old('harga', $hunian->harga) }}"
                        id="harga">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jmlh_kamar_tdur" class="col-sm-2 col-form-label">Jumlah Kamar Tidur</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jumlah_kamar_tidur'
                        value="{{ old('jumlah_kamar_tidur', $hunian->jumlah_kamar_tidur) }} "id="jumlah_kamar_tidur">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jmlh_kamar_mndi" class="col-sm-2 col-form-label">Jumlah Kamar Mandi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jumlah_kamar_mandi'
                        value="{{ old('jumlah_kamar_mandi', $hunian->jumlah_kamar_mandi) }}" id="jumlah_kamar_mandi">
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
