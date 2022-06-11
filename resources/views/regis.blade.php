<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK Pembimbing Skripsi</title>
    <link href="/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="overlay"></div>
    <form action="/RegisSuccess" method="post" class="box">
        @csrf
        <div class="header">
            <h1>REGISTRATION</h1>
            <p>ACCOUNT</p>
        </div>
        <div class="loginarea">
            <input type="text" class="nim" id="nim" name="nim" placeholder="NIM" autofocus required>
            <input type="text" class="nim" id="nama" name="nama" placeholder="Nama" required>
            <input type="text" class="nim" id="email" name="email" placeholder="Email" required>
            <input type="password" class="password" name="password" id="password" placeholder="Password" required>
            <input type="password" class="password" name="cpassword" id="cpassword" placeholder="Confirm Password" required>
            <input type="submit" value="REGIS" class="submit">
            <a class="ajukan" href="/">CANCEL</a>
        </div>
    </form>

</body>
</html>
