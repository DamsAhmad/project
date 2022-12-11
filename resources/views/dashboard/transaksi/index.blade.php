@extends('huniancom.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Transaksi</h1>
    </div>
    <div class="pb-3">
        <form class="d-flex" action="{{ url('') }}" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}"
                placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
    </div>
    <div class="pb-3 mt-4">
        <a href='/dashboard/hunian/create/' class="btn btn-primary">+ Tambah Data</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th class="text-center" scope="col">No</th>
                    <th class="text-center" scope="col">Nama</th>
                    <th class="text-center" scope="col">Tanggal Transaksi</th>
                    <th class="text-center" scope="col">Nama Unit</th>
                    <th class="text-center" scope="col">Penjual</th>
                    <th class="text-center" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hunians as $h)
                    <tr>
                        @if (is_null($h->transaksi) || is_null($h->transaksi->created_at))
                            <td class="text-center">Data Tidak Ada</td>
                        @else
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $h->user->name }}</td>
                            <td class="text-center">{{ $h->transaksi->created_at }}</td>
                            <td class="text-center">{{ $h->harga }}</td>
                            <td class="text-center">{{ $h->nama }}</td>
                            <td class="text-center">
                                <a href="/dashboard/hunian/edit/{{ $h->id }}" class="badge bg-info">
                                    <span data-feather="edit"></span></a>
                                <form action="/dashboard/hunian/delete/{{ $h->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0"
                                        onclick="return confirm('Anda Yakin Ingin Menghapus?')"><span
                                            data-feather="trash-2"></span></button>
                                </form>
                                </a>
                            </td>
                        @endif
                        {{-- <td class="text-center">{{ $h-> }}</td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
