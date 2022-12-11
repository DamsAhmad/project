@extends('layout.tempLogin')

@section('konten')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Edit Pengguna</h1>
                <form action="/dashboard/hunian/user/" method="POST">
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
