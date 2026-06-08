@extends('template2')

@section('title', 'Tambah Data Nilai Kuliah')

@section('konten')
    <center>

        <br />
        <br />

        <div class="card" style="width: 60%; text-align: left;">
            <div class="card-header">
                Form Tambah Data Nilai Kuliah
            </div>

            <div class="card-body">
                <form action="/nilaikuliahsimpan" method="post">
                    @csrf

                    <div class="row mb-3">
                        <label for="NRP" class="col-sm-3 col-form-label">NRP (Max 6)</label>
                        <div class="col-sm-9">
                            <input type="text" name="NRP" id="NRP" class="form-control" maxlength="6"
                                required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="NilaiAngka" class="col-sm-3 col-form-label">Nilai Angka</label>
                        <div class="col-sm-9">
                            <input type="number" name="NilaiAngka" id="NilaiAngka" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="SKS" class="col-sm-3 col-form-label">SKS</label>
                        <div class="col-sm-9">
                            <input type="number" name="SKS" id="SKS" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="offset-sm-3 col-sm-9">
                            <input type="submit" value="Simpan Data" class="btn btn-primary">
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <br />
        <br />
        <a href="/nilaikuliah" class="btn btn-info" style="color: white;">Kembali</a>
    </center>
@endsection
