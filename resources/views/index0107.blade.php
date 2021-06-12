<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Data Dokter</title>
<style>

table{
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}
thead {
    background-color : #FF7F50;
}
th, td {
    text-align: left;
    padding: 8px;
}
tr:nth-child(even){background-color: #FFE4C4}
.tambah{
    padding: 8px 16px;
    text-decoration: none;
}

</style>
<head>

<body>
    
    <div style="overflow-x: auto">
    <button>
    <a href="{{route('dokter.create')}}" class="btn btn-secondary btn-lg">Tambah Dokter</a>
    </button>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Nama</th>
                <th>Jabatan</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($dokter as $sw)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $sw->nama }}</td>
                <td>{{ $sw->jabatan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    </div>
</body>
