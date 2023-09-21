<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tentang kami</title>
</head>
<body>
    <center>
    <h1>Nama : Fifit Sholikhatul Mufalah</h1>
    <h1>No   : 10  {{$nama}} ,  {{$kelas}}</h1>

    @if($nama=='admin')
    <a href ="">Ke Halaman Admin</a>
    @elseif($nama=='user')
    <a href ="">Ke Halaman USER</a>
    @else
    <h2>Anda Bukan Admin dan User</h2>
    @endif

    @switch($buah)
    @case(1)
    First Case...
    @break

    @case(2)
    second case...

    @default
    
    @endswitch
    <br>

    @foreach ($buah as $nama)
   {{ $nama }}</br>
   @endforeach


</center>
  

</body>
</html>