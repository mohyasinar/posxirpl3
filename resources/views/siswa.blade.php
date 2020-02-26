<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Halaman Siswa</title>
    <style type="text/css">
    h2{
        font family:'Franklin Ghotic Medium','Arial Narrow',Arial, sans-serif;
        <color: aqua;
    }
    table,tr,td{
        border: 1px solid black;
        border collapse: collapse;
    }
    </style>
</head>
<body>
<h2>{{ $nama}}</h2>
<table>
<tr>
<td>Biodata</td>
<td>
    <ol>
    @foreach($data as $d)
    <li> {{$d}} <li>
    @endforeach
    </ol>
    </td>
    </tr>
    </table>
    
</body>
</html>