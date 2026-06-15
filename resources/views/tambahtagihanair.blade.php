@extends('templatefix')

@section('title', 'Kode Soal tagihan_air')

@section('konten')
    <center>

        <br />
        <br />

        <div class="card" style="width: 60%; text-align: left;">
            <div class="card-header">
                Form Tambah Tagihan Air
            </div>

            <div class="card-body">
                <form action="/eassimpan" method="post" onsubmit="return validasiForm()">
                    @csrf

                    <div class="row mb-3">
                        <label for="NoMeteran" class="col-sm-3 col-form-label">No. Meteran</label>
                        <div class="col-sm-9">
                            <input type="text" name="NoMeteran" id="NoMeteran" class="form-control" maxlength="6"
                                required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="MeterAwal" class="col-sm-3 col-form-label">Meter Awal</label>
                        <div class="col-sm-9">
                            <input type="number" name="MeterAwal" id="MeterAwal" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="MeterAkhir" class="col-sm-3 col-form-label">Meter Akhir</label>
                        <div class="col-sm-9">
                            <input type="number" name="MeterAkhir" id="MeterAkhir" class="form-control" required>
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
        <a href="/eas" class="btn btn-info" style="color: white;">Kembali</a>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function validasiForm() {
            let meterAwal = parseInt(document.getElementById('MeterAwal').value);
            let meterAkhir = parseInt(document.getElementById('MeterAkhir').value);

            let batasan = meterAwal + 20;

            if (meterAkhir <= batasan) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Meter Akhir harus lebih dari (Meter Awal + 20).",
                    icon: "error"
                });
                return false;
            }

            if (isNaN(meterAwal) || isNaN(meterAkhir)) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Isian meteran harus berupa angka.",
                    icon: "error"
                });
                return false;
            }

            return true;
        }
    </script>
@endsection
