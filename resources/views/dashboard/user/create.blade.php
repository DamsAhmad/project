{{-- @extends('layout.template')

@section('konten')
    <!-- START FORM -->
    <form action='/dashboard/hunian/update/{{ $user->id }}' method='POST'>
        @method('PUT')
        @csrf
        <input type="hidden">
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div>
                <p class="text-center"> Edit Data Penggguna </p>
            </div>
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='name' value="{{ old('nama', $user->name) }}"
                        id="name">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='username' value="{{ old('lokasi', $user->username) }}"
                        id="username">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name='email' value="{{ old('email', $user->email) }}"
                        id="email">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jumlah_kamar_tidur'
                        value="{{ old('jenis_kelamin', $hunian->jumlah_kamar_tidur) }} "id="jumlah_kamar_tidur">
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
@endsection --}}

@extends('layout.tempLogin')

@section('konten')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Edit Pengguna</h1>
                <form action="/dashboard/hunian/user/create" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name"
                            class="form-control @error('name')
                    is-invalid @enderror" id="name"
                            placeholder="Nama Anda" required value="{{ old('name'), $user->name }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username"
                            class="form-control
                    @error('username')
                    is-invalid @enderror"
                            id="username" placeholder="Username Anda" required
                            value="{{ old('username'), $user->username }}">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email"
                            class="form-control
                    @error('email')
                    is-invalid @enderror"
                            id="email" placeholder="nama@contohmail.com" required
                            value="{{ old('email'), $user->email }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-select form-select" required name="jenis_kelamin">
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password"
                            class="form-control
                    @error('password')
                    is-invalid @enderror"
                            id="password" placeholder="Minimal 8 Karakter" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                        <input type="tel" name="nomor_telepon"
                            class="form-control
                    @error('nomor_telepon')
                    is-invalid @enderror"
                            id="nomor_telepon" placeholder="085177778888" required
                            value="{{ old('nomor_telepon'), $user->nomor_telepon }}">
                        @error('nomor_telepon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Simpan</button>
                </form>
            </main>
        </div>
    </div>
@endsection
