<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengunjung</title>
</head>
<body>
    <h3 align="center">Data Pengunjung</h3>
<table border="1" cellpadding="10" align="center">
<thead>
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Username</td>
        <td>Jenis Kelamin</td>
        <td>Password</td>
        <td>No Hp</td>
        <td>Email</td>
        <td>Alamat</td>
    </tr>
</thead>
<tbody>
    @php $no =1; @endphp
    @foreach($pengunjung as $data)
    <tr>
        <td>{{$no++}}</td>
        <td>{{$data->nama}}</td>
        <td>{{$data->username}}</td>
        <td>{{$data->jk}}</td>
        <td>{{$data->password}}</td>
        <td>{{$data->nohp}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->alamat}}</td>

    </tr>
    @endforeach
</tbody>
</table>
</body>
</html>