@extends('huniancom.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Pengguna</h1>
    </div>
    <div class="pb-3">
        <form class="d-flex" action="{{ url('') }}" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}"
                placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
    </div>
    <div class="pb-3 mt-4">
        <a href='/dashboard/hunian/user/create' class="btn btn-primary">+ Tambah Data</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th class="text-center" scope="col">ID</th>
                    <th class="text-center" scope="col">Nama</th>
                    <th class="text-center" scope="col">Username</th>
                    <th class="text-center" scope="col">Email</th>
                    <th class="text-center" scope="col">Jenis Kelamin</th>
                    <th class="text-center" scope="col">Nomor Telepon</th>
                    <th class="text-center" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $u)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        {{-- <td class="text-center"><img src={{ asset('storage/'. $h->gambar)  }} class="rounded-circle" style="width:40px;height:40px;"/></td> --}}
                        <td class="text-center">{{ $u->name }}</td>
                        <td class="text-center">{{ $u->username }}</td>
                        <td class="text-center">{{ $u->email }}</td>
                        <td class="text-center">{{ $u->jenis_kelamin }}</td>
                        <td class="text-center">{{ $u->nomor_telepon }}</td>
                        <td class="text-center">
                            <a href="/dashboard/hunian/user/{{ $u->id }}/edit" class="badge bg-info">
                                <span data-feather="edit"></span></a>
                            <form action="/dashboard/hunian/user/{{ $u->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Anda Yakin Ingin Menghapus?')"><span
                                        data-feather="trash-2"></span></button>
                            </form>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
