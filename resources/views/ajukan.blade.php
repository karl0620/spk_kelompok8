@extends('\navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SPK Pembimbing Skripsi</title>
    <link href="/css/style3.css" rel="stylesheet">
</head>
<body>
@section('navbar')
<div class="overlay"></div>
      <form action="/AjukanSuccess" method="post" class="box">
          @csrf
        <div class="header">
            <h2>FORM PENGAJUAN</h2>
        </div>
        <div class="pengajuanarea">
            <input type="text" class="nama" id="nama" name="nama" value="{{ auth()->user()->nama }}" disabled>
            <input type="text" class="nim" id="tnim" name="tnim" value="{{ auth()->user()->nim }}" disabled>
            <input type="hidden" id="nim" name="nim" value="{{ auth()->user()->nim }}" required>
            <input type="text" class="judul" id="judul" name="judul" placeholder="judul" required>
            <select class="kompetensi" id="kompetensi" name="kompetensi" required>
                <option>Pilih Kompetensi</option>
                <option value='1'>Jaringan Komputer</option>
                <option value='2'>Mobile Programing</option>
                <option value='3'>Web Programing</option>
                <option value='4'>UI/UX Design</option>
                <option value='5'>Information Security</option>
                <option value='6'>Data Analyst</option>
            </select>
            <select class="jumlah" id="jumlah" name="jumlah" required>
                <option>Pilih Jumlah Bimbingan</option>
                <option value='1'>Lebih dari 10</option>
                <option value='2'>Kurang dari 10</option>
            </select>
            <select class="jabatan" id="jabatan" name="jabatan" required>
                <option>Pilih Jabatan</option>
                <option value='1'>WD 1</option>
                <option value='2'>WD 2</option>
                <option value='3'>WD 3</option>
                <option value='4'>Dosen</option>
            </select>
            <input type="submit" value="SUBMIT" class="ajukan">
            <a href="/Home">
                <input type="button" class="ajukan" value="CANCEL">
            </a>
        </div>
    </form>
@endsection
</body>
</html>
