@extends('huniancom.layouts.mainrent')

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="pb-3">
                <form class="d-flex" action="{{ url('') }}" method="get">
                    <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}"
                        {{-- <input class="form-control me-1" type="search" name="katakunci" placeholder="Masukkan kata kunci" --}} aria-label="Search">
                    <button class="btn btn-secondary" type="submit">Cari</button>
                </form>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($hunians as $h)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                src={{ asset('storage/' . $h->gambar) }}>

                            <div class="card-body">
                                <h4 class="card-text">{{ $h->nama }}</h4>
                                <h6 class="card-text">{{ $h->lokasi }}</h6>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        @auth
                                            <a href="/detail/ {{ $h->id }}">
                                                <button type="submit" class="btn btn-sm btn-outline-secondary">Detail</button>
                                            </a>
                                        @else
                                            <form action="/login" method="GET">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-outline-secondary">Detail</button>
                                            </form>
                                        @endauth
                                    </div>
                                    <small class="text-muted">Rp. {{ $h->harga }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
