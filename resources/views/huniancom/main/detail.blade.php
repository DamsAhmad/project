@extends('huniancom.layouts.mainrent')

@section('content')
    @if ($hunians)
        <div class="container">
            <div class="row row-cols-2">
                <div class="col-12">
                    <div class="col-6">
                        <div>

                            <div class="pro-img-details">
                                <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    src={{ asset('storage/' . $hunians->gambar) }}>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <h2 class="pro-d-title">
                            <strong>{{ $hunians->nama }}</strong>
                        </h2>
                        <div class="m-bot15"> <strong>Lokasi : </strong><span
                                class="pro-price">{{ $hunians->lokasi }}</span>
                        </div>

                        <div class="product_meta">
                            <span class="posted_in"> <strong>Fasilitas:</strong>
                                <p>Kamar Mandi :
                                    {{ $hunians->jumlah_kamar_mandi }}
                                </p>
                                <p>Kamar Tidur :
                                    {{ $hunians->jumlah_kamar_tidur }}
                                </p>
                        </div>
                        <div class="m-bot15"> <strong>Harga : </strong>Rp.
                            </span><span class="pro-price">{{ $hunians->harga }}</span>
                        </div>

                        <div class="m-bot15"> <strong>Pemilik : </strong>
                            </span><span class="pro-price">{{ $hunians->user->name }}</span>
                        </div>
                    </div>
                    {{-- <p>
                        <button class="btn btn-round btn-danger" type="button"><i class="fa fa-shopping-cart"></i>
                            Beli Rumah
                        </button>
                    </p> --}}
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Beli Hunian
                    </button>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Transaksi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{-- <p>
                            <h5><strong>Nama Unit :</strong>
                                {{ $hunianss->nama }}
                            </h5>
                            </p>
                            <p>
                            <h6><strong>Alamat :</strong>
                                {{ $hunianss->lokasi }}
                            </h6>
                            </p>
                            <p>
                            <h6><strong>Fasilitas :</strong>
                            </h6>
                            <p><strong> - Kamar Mandi :</strong>
                                {{ $hunianss->jumlah_kamar_mandi }}
                            </p>
                            <p><strong> - Kamar Tidur :</strong>
                                {{ $hunianss->jumlah_kamar_tidur }}
                            </p>
                            <p><strong>Harga :</strong>
                                Rp. {{ $hunianss->harga }}
                            </p> --}}

                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name='nama'
                                        value="{{ old('nama', $hunians->nama) }}" id="nama" disabled>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name='lokasi'
                                        value="{{ old('lokasi', $hunians->lokasi) }}" id="lokasi" disabled>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="jmlh_kamar_tdur" class="col-sm-2 col-form-label">Kamar Tidur</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name='jumlah_kamar_tidur'
                                        value="{{ old('jumlah_kamar_tidur', $hunians->jumlah_kamar_tidur) }} "id="jumlah_kamar_tidur"
                                        disabled>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="jmlh_kamar_mndi" class="col-sm-2 col-form-label">Kamar Mandi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name='jumlah_kamar_mandi'
                                        value="{{ old('jumlah_kamar_mandi', $hunians->jumlah_kamar_mandi) }}"
                                        id="jumlah_kamar_mandi" disabled>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name='harga'
                                        value="{{ old('harga', $hunians->harga) }}" id="harga" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                            <form action="/transaksi/store" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success">Beli Hunian</button>
                                <input name="hunian_id" type="hidden" value="{{ $hunians->id }}">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endif
@endsection

{{-- <div class="form-group">
            <label>Quantity</label>
            <input type="quantiy" placeholder="1" class="form-control quantity">
        </div> --}}
