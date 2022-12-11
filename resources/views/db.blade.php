<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tes CRUD database</title>
</head>
<body>
    <h2>Tes CRUD</h2>
    <h3>Data Pengguna</h3>

    <a href="/pengguna/tambah"> + Tambah Pengguna Baru</a>

    <br/>
    <br/>

    <table border="1">
		<tr>
			<th>Nama</th>
            <th>Email</th>
            <!-- <th>Username</th> -->
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>Telepon</th>
            <th>Tanggal Lahir</th>
            <th>Opsi</th>
		</tr>
        @foreach($pengguna as $p)
        <tr>
			<td>{{ $p->name }}</td>
            <td>{{ $p->email }}</td>
            <!-- <td>{{ $p->username }}</td> -->
			<td>{{ $p->jenis_kelamin }}</td>
			<td>{{ $p->alamat }}</td>
			<td>{{ $p->nomor_telepon }}</td>
            <td>{{ $p->tanggal_lahir }}</td>
            <td>
                <a href="/pengguna/edit/{{ $p->id_pengguna }}">Edit</a>
				|
				<a href="/pengguna/hapus/{{ $p->id_pengguna }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>