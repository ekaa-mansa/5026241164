@extends('templatefix')

@section('title', 'Kode Soal tagihan_air')

@section('konten')
    <center>

        <br />
        <br />
        <h2>Tagihan Air</h2>
        <br />

        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>No Meteran</th>
                <th>Penggunaan (m3)</th>
                <th>Total Tagihan</th>
            </tr>
            @foreach ($tagihan_air as $ta)
                @php
                    $penggunaan = $ta->MeterAkhir - $ta->MeterAwal;
                    $totalTagihan = $penggunaan * 5000;
                @endphp

                <tr>
                    <td>{{ $ta->ID }}</td>
                    <td>{{ $ta->NoMeteran }}</td>
                    <td>{{ $penggunaan }}</td>
                    <td>Rp {{ number_format($totalTagihan, 0, ',', '.') }}</td>
                </tr>
                </tr>
            @endforeach
        </table>

        <br />
        <a href="/eastambah" class="btn btn-primary">Input Tagihan Baru</a>
        <br />
        <br />

    </center>
@endsection
