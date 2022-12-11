@extends('huniancom.layouts.main')

@section('container')
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th class="text-center" scope="col">No</th>
                    <th class="text-center" scope="col">Nama</th>
                    <th class="text-center" scope="col">Tanggal Transaksi</th>
                    <th class="text-center" scope="col">Nama Unit</th>
                    <th class="text-center" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $h)
                    <tr>
                        @if (is_null($h))
                            <td class="text-center">Data Tidak Ada</td>
                        @else
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $h->user->name }}</td>
                            <td class="text-center">{{ $h->created_at }}</td>
                            <td class="text-center">{{ $h->harga }}</td>
                            <td class="text-center">{{ $h->nama }}</td>
                        @endif
                        {{-- <td class="text-center">{{ $h-> }}</td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
