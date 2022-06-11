@extends('\navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SPK Pembimbing Skripsi</title>
    <link href="/css/style2.css" rel="stylesheet">
</head>
<body>
@section('navbar')
    <form action="/Ajukan" method="get" class="box">
        <div class="text">
            <h1>KEJARLAH SARJANAMU, <br>MESKI SKRIPSI MENGHADANG MU</h1>
        </div>
        <div class="ajukanarea">
            <input type="submit" value="AJUKAN SKRIPSI" class="submit">
        </div>
    </form>
@endsection
</body>
</html>
