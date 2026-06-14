@extends('templatefix')

@section('title', 'Data Keranjang Belanja')

@section('konten')
    <center>

        <br />
        <br />
        <h2>Keranjang Belanja</h2>
        <br />

        <table class="table table-striped table-hover">
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            @foreach ($keranjangbelanja as $kb)
                @php
                    $total = $kb->Jumlah * $kb->Harga;
                @endphp

                <tr>
                    <td>{{ $kb->ID }}</td>
                    <td>{{ $kb->KodeBarang }}</td>
                    <td>{{ $kb->Jumlah }}</td>

                    <td>{{ number_format($kb->Harga, 0, ',', '.') }}</td>
                    <td>{{ number_format($total, 0, ',', '.') }}</td>

                    <td>
                        <a href="/keranjangbelanja/hapus/{{ $kb->ID }}" class="btn btn-danger">Batal</a>
                    </td>
                </tr>
            @endforeach
        </table>

        <br />
        <a href="/keranjangbelanjatambah" class="btn btn-primary">Beli</a>
        <br />
        <br />

    </center>
@endsection
