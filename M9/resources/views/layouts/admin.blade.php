<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Scevra Parfume</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f8f9fa;
            margin: 0;
        }

        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: #393E46;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            padding: 25px 18px;
        }

        .brand {
            font-family: Georgia, serif;
            font-size: 27px;
            font-weight: bold;
            letter-spacing: 3px;
            text-align: center;
            margin-bottom: 5px;
        }

        .brand-subtitle {
            font-size: 10px;
            letter-spacing: 4px;
            text-align: center;
            color: #d1d5db;
            margin-bottom: 35px;
        }

        .menu-title {
            font-size: 11px;
            color: #bfc3ca;
            margin: 20px 10px 10px;
        }

        .sidebar a {
            display: block;
            color: #ffffff;
            text-decoration: none;
            padding: 12px 14px;
            margin-bottom: 7px;
            border-radius: 6px;
            font-size: 13px;
            transition: .2s;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #ffffff;
            color: #393E46;
        }

        .main-content {
            margin-left: 250px;
            padding: 30px;
        }

        .topbar {
            background: white;
            padding: 18px 25px;
            border-radius: 8px;
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .04);
        }

        .page-title {
            font-size: 24px;
            font-weight: 700;
            color: #393E46;
        }

        .stat-card {
            background: white;
            border: 1px solid #eeeeee;
            border-radius: 8px;
            padding: 22px;
            height: 100%;
        }

        .stat-label {
            font-size: 13px;
            color: #777;
        }

        .stat-number {
            font-size: 26px;
            font-weight: 700;
            color: #393E46;
            margin-top: 10px;
        }

        .btn-dark-custom {
            background: #393E46;
            color: white;
            border: none;
            padding: 9px 16px;
            border-radius: 5px;
            font-size: 13px;
        }

        .btn-dark-custom:hover {
            background: #222831;
            color: white;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: relative;
                width: 100%;
                min-height: auto;
            }

            .main-content {
                margin-left: 0;
                padding: 18px;
            }

            .brand-subtitle {
                margin-bottom: 15px;
            }
        }
    </style>

    @stack('styles')
</head>

<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="brand">SCEVRA</div>
        <div class="brand-subtitle">PARFUME</div>

        <div class="menu-title">MENU UTAMA</div>

        <a href="{{ route('admin.dashboard') }}"
            class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            Dashboard
        </a>

        <a href="#">
            Kelola Menu
        </a>

        <a href="#">
            Pesanan Masuk
        </a>

        <a href="#">
            Kelola Voucher
        </a>

        <div class="menu-title">LAINNYA</div>

        <a href="#">
            Lihat Web User
        </a>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit"
                class="btn w-100 text-start text-white"
                style="font-size:13px; padding:12px 14px;">
                Keluar / Logout
            </button>
        </form>

    </aside>

    <!-- MAIN CONTENT -->
    <main class="main-content">

        <div class="topbar">
            <div>
                <div class="fw-semibold" style="font-size:14px;">
                    Administrator
                </div>
                <div class="text-secondary" style="font-size:11px;">
                    Scevra Parfume
                </div>
            </div>

            <div class="text-end">
                <div class="fw-semibold" style="font-size:13px;">
                    {{ Auth::user()->nama_pengguna }}
                </div>
                <div class="text-success" style="font-size:11px;">
                    ● Online
                </div>
            </div>
        </div>

        @yield('content')

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')

</body>

</html>