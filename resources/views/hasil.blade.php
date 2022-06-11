<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK Pembimbing Skripsi</title>
    <link rel="stylesheet" href="/css/style4.css">
</head>
<body>
<div class="overlay"></div>
    <div class="card-container">
        <div class="card">
            <div class="card-image one"></div>
            <div class="card-text">
            @foreach($dosen1 as $d1)
                <h2 class="name">{{ $d1->nama }}</h2>
                <p>{{ $d1->email }}</p>
                <p>{{ $d1->nidn }}</p>
	        @endforeach
            </div>
            <div class="card-recommended">
                <h2>Recommended</h2>
            </div>
        </div>
        <div class="card">
            <div class="card-image two"></div>
            <div class="card-text">
            @foreach($dosen2 as $d2)
                <h2 class="name">{{ $d2->nama }}</h2>
                <p>{{ $d2->email }}</p>
                <p>{{ $d2->nidn }}</p>
	        @endforeach
            </div>
        </div>
        <div class="card">
            <div class="card-image three"></div>
            <div class="card-text">
            @foreach($dosen3 as $d3)
                <h2 class="name">{{ $d3->nama }}</h2>
                <p>{{ $d3->email }}</p>
                <p>{{ $d3->nidn }}</p>
	        @endforeach
            </div>
        </div>
        <form action="/Ajukan" method="get">
        <div class="ajukanarea">
            <input type="submit" value="KEMBALI KE HOME" class="submit">
        </div>
        </form>
    </div>
</body>
</html>
