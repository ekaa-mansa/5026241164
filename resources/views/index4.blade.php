@extends('templatefix')

@section('title', 'Data Bus')

@section('konten')
    <center>

        <br />
        <br />
        <h2>Bus</h2>
        <br />

        <table class="table table-striped table-hover">
            <tr>
                <th>Kode Bus</th>
                <th>Merk Bus</th>
                <th class="text-center">Jumlah Bus</th>
                <th class="text-center">Tersedia</th>
                <th class="text-center">Opsi</th>
            </tr>
            @foreach ($bus as $data)
                <tr>
                    <td>{{ $data->kodebus }}</td>
                    <td>{{ $data->merkbus }}</td>
                    <td class="text-center">{{ $data->jumlahbus }}</td>
                    <td class="text-center">{{ $data->tersedia }}</td>
                    <td class="text-center">
                        <a href="/bushapus/{{ $data->kodebus }}" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>

        <br />
        <a href="/bustambah" class="btn btn-primary">Tambah Data Baru</a>

        <br />
        <br />

    </center>
@endsection
