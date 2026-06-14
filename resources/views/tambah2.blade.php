@extends('templatefix')

@section('title', 'Beli Barang')

@section('konten')
    <center>

        <br />
        <br />

        <div class="card" style="width: 60%; text-align: left;">
            <div class="card-header">
                Form Pembelian Barang
            </div>

            <div class="card-body">
                <form action="/keranjangbelanjasimpan" method="post">
                    @csrf

                    <div class="row mb-3">
                        <label for="KodeBarang" class="col-sm-3 col-form-label">Kode Barang</label>
                        <div class="col-sm-9">
                            <input type="number" name="KodeBarang" id="KodeBarang" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Jumlah" class="col-sm-3 col-form-label">Jumlah Pembelian</label>
                        <div class="col-sm-9">
                            <input type="number" name="Jumlah" id="Jumlah" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Harga" class="col-sm-3 col-form-label">Harga per item</label>
                        <div class="col-sm-9">
                            <input type="number" name="Harga" id="Harga" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="offset-sm-3 col-sm-9">
                            <input type="submit" value="Simpan" class="btn btn-primary">
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <br />
        <br />
        <a href="/keranjangbelanja" class="btn btn-info" style="color: white;">Kembali</a>
    </center>
@endsection
