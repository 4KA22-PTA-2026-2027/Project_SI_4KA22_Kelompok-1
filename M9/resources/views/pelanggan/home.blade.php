<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Pelanggan - Scevra</title>
</head>

<body>

    <h1>Selamat Datang di Scevra Parfume</h1>

    <p>Halo, {{ Auth::user()->nama_pengguna }}!</p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>

</body>

</html>