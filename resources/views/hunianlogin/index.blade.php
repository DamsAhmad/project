@extends('layout.template')

@section('konten')
            <!-- START DATA -->
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>

                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href="{{ url('index/create') }}" class="btn btn-primary">+ Tambah Data</a>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-2">Nama</th>
                            <th class="col-md-2">Lokasi</th>
                            <th class="col-md-2">Harga</th>
                            <th class="col-md-2">Kamar Tidur</th>
                            <th class="col-md-2">Kamar Mandi</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    @foreach($hunian as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->lokasi }}</td>
                        <td>{{ $p->harga }}</td>
                        <td>{{ $p->jumlah_kamar_tidur}}</td>
                        <td>{{ $p->jumlah_kamar_mandi}}</td>
                        <td>
                            <a href='{{ url('index/'.$p->id.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                            {{-- <a href='' class="btn btn-danger btn-sm">Del</a> --}}
                            <form action="{{ url('index/'. $p->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </table>

          </div>
          <!-- AKHIR DATA -->

@endsection
