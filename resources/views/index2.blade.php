@extends('template2')

@section('title', 'Data Nilai Kuliah')

@section('konten')
    <center>

        <br />
        <br />
        <h2>Latihan EAS PWEB - Nilai Kuliah</h2>
        <br />

        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
            @foreach ($nilaikuliah as $data)
                @php
                    // Logika Konversi Nilai Angka ke Huruf
                    if ($data->NilaiAngka <= 40) {
                        $nilaiHuruf = 'D';
                    } elseif ($data->NilaiAngka >= 41 && $data->NilaiAngka <= 60) {
                        $nilaiHuruf = 'C';
                    } elseif ($data->NilaiAngka >= 61 && $data->NilaiAngka <= 80) {
                        $nilaiHuruf = 'B';
                    } else {
                        $nilaiHuruf = 'A';
                    }

                    // Logika Perhitungan Bobot
                    $bobot = $data->NilaiAngka * $data->SKS;
                @endphp

                <tr>
                    <td>{{ $data->ID }}</td>
                    <td>{{ $data->NRP }}</td>
                    <td>{{ $data->NilaiAngka }}</td>
                    <td>{{ $data->SKS }}</td>
                    <td><strong>{{ $nilaiHuruf }}</strong></td>
                    <td>{{ $bobot }}</td>
                </tr>
            @endforeach
        </table>

        <br />
        <a href="/nilaikuliahtambah" class="btn btn-primary">Tambah Data Baru</a>
        <br />
        <br />

    </center>
@endsection
