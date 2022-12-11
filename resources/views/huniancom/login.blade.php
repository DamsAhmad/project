@extends('layout.tempLogin')

@section('konten')
{{-- <div class="container-fluid"> --}}
    <div class="row no-gutter ">
        <div class="col-lg-6 d-none d-md-flex bg-image"></div>
        {{-- split --}}
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">
                {{-- content --}}
                <div class="container">
                    <div class="row">
                        {{-- <div class="d-md-flex align-items-center h-md-100 p-5 justify-content-center"> --}}
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                  </div>
                                @endif

                                @if (session()->has('loginErrors'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('loginErrors') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif

                                <h1 class="h3 mb-3 fw-normal text-center"> Login</h1>
                                <form action="/login" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control rounded-bottom" id="email" autofocus required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control rounded-top" id="password" required>
                                    </div>
                                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                                </form>
                                <small class="d-block text-center mt-3">Belum Punya Akun? <a href="/register">Daftar Sekarang</a></small>
                            </div>
                                {{-- </main> --}}
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
            {{-- <main class="form-signin w-100 m-auto"> --}}
            </div>
        </div>
    </div>
{{-- </div> --}}
@endsection
