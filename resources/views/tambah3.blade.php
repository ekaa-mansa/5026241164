@extends('templatefix')

@section('title', 'Tambah Bus')

@section('konten')
    <center>

        <br />
        <br />

        <div class="card" style="width: 60%; text-align: left;">
            <div class="card-header">
                Form Tambah Bus
            </div>

            <div class="card-body">
                <form action="/bussimpan" method="post">
                    @csrf

                    <div class="row mb-3">
                        <label for="KodeBus" class="col-sm-3 col-form-label">Merk Bus</label>
                        <div class="col-sm-9">
                            <input type="text" name="MerkBus" id="MerkBus" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Jumlah" class="col-sm-3 col-form-label">Jumlah Bus</label>
                        <div class="col-sm-9">
                            <input type="number" name="JumlahBus" id="Jumlah" class="form-control" required>
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
        <a href="/bus" class="btn btn-info" style="color: white;">Kembali</a>
    </center>
@endsection
