@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="mb-4">
    <h1 class="page-title">Dashboard</h1>
    <p class="text-secondary" style="font-size:13px;">
        Selamat datang di halaman administrator Scevra Parfume.
    </p>
</div>

<!-- INFORMASI ADMIN -->
<div class="stat-card mb-4">
    <div class="stat-label">Administrator</div>

    <h5 class="fw-semibold mt-2">
        {{ Auth::user()->nama_pengguna }}
    </h5>

    <span class="badge bg-success">
        {{ Auth::user()->role }}
    </span>
</div>

<!-- RINGKASAN -->
<div class="row g-3">

    <div class="col-md-4">
        <div class="stat-card">
            <div class="stat-label">Total Produk</div>
            <div class="stat-number">—</div>
            <small class="text-secondary">
                Jumlah produk parfum
            </small>
        </div>
    </div>

    <div class="col-md-4">
        <div class="stat-card">
            <div class="stat-label">Pesanan Masuk</div>
            <div class="stat-number">—</div>
            <small class="text-secondary">
                Jumlah pesanan pelanggan
            </small>
        </div>
    </div>

    <div class="col-md-4">
        <div class="stat-card">
            <div class="stat-label">Total Voucher</div>
            <div class="stat-number">—</div>
            <small class="text-secondary">
                Voucher yang tersedia
            </small>
        </div>
    </div>

</div>

<!-- INFORMASI -->
<div class="stat-card mt-4">
    <h6 class="fw-semibold mb-2">
        Informasi Sistem
    </h6>

    <p class="text-secondary mb-0" style="font-size:13px;">
        Selamat bekerja. Silakan gunakan menu navigasi
        untuk mengelola produk, pesanan, dan voucher
        Scevra Parfume.
    </p>
</div>

@endsection