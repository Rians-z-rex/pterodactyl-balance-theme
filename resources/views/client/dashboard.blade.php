@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<style>
    /* === FUTURISTIC GRADIENT STYLE === */
    body {
        background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
        color: #fff;
        font-family: 'Poppins', sans-serif;
    }

    .balance-card {
        background: linear-gradient(120deg, #6a11cb, #2575fc);
        border-radius: 18px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.4);
        padding: 30px;
        text-align: center;
        color: #fff;
        transition: 0.3s;
    }

    .balance-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.6);
    }

    .balance-amount {
        font-size: 2.5rem;
        font-weight: bold;
        text-shadow: 0 0 10px rgba(255,255,255,0.4);
    }

    .balance-actions button {
        background: #00d4ff;
        border: none;
        padding: 10px 25px;
        color: #111;
        border-radius: 10px;
        cursor: pointer;
        font-weight: 600;
        transition: 0.3s;
    }

    .balance-actions button:hover {
        background: #00b5d9;
    }

    .packages {
        margin-top: 40px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    .package-card {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 20px;
        border-radius: 16px;
        text-align: center;
        transition: 0.3s;
    }

    .package-card:hover {
        background: rgba(255, 255, 255, 0.1);
        transform: translateY(-5px);
    }

    .package-card h3 {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .package-card button {
        margin-top: 15px;
        background: linear-gradient(45deg, #6a11cb, #2575fc);
        border: none;
        color: #fff;
        padding: 8px 20px;
        border-radius: 8px;
        cursor: pointer;
    }

    .package-card button:hover {
        opacity: 0.9;
    }
</style>

<div class="container py-5">
    <h1 class="text-center mb-5">Selamat Datang, {{ $user->username }} 👋</h1>

    <div class="balance-card mx-auto" style="max-width: 500px;">
        <h2>Saldo Anda</h2>
        <div class="balance-amount">Rp {{ number_format($user->balance, 0, ',', '.') }}</div>
        <p class="mt-2 text-sm opacity-80">Gunakan saldo Anda untuk membeli server baru</p>

        <div class="balance-actions mt-4">
            <button onclick="window.location.href='/topup'">Top Up</button>
            <button onclick="window.location.href='/transactions'">Riwayat</button>
        </div>
    </div>

    <h2 class="mt-5 mb-3 text-center">💠 Paket Server</h2>

    <div class="packages">
        <div class="package-card">
            <h3>Server Kecil</h3>
            <p>1 CPU Core • 1GB RAM • 1GB Storage</p>
            <p><strong>Rp 2.000</strong></p>
            <button>Beli Sekarang</button>
        </div>

        <div class="package-card">
            <h3>Server Basic</h3>
            <p>2 CPU Core • 2GB RAM • 2GB Storage</p>
            <p><strong>Rp 3.000</strong></p>
            <button>Beli Sekarang</button>
        </div>

        <div class="package-card">
            <h3>Server Pro</h3>
            <p>9 CPU Core • 9GB RAM • 9GB Storage</p>
            <p><strong>Rp 10.000</strong></p>
            <button>Beli Sekarang</button>
        </div>
      
        <div class="package-card">
            <h3>Server Dasar</h3>
            <p>3 CPU Core • 3GB RAM • 3GB Storage</p>
            <p><strong>Rp 4.000</strong></p>
            <button>Beli Sekarang</button>
        </div>
      
        <div class="package-card">
            <h3>Server Sedang</h3>
            <p>4 CPU Core • 4GB RAM • 4GB Storage</p>
            <p><strong>Rp 5.000</strong></p>
            <button>Beli Sekarang</button>
        </div>
      
        <div class="package-card">
            <h3>Server Elite</h3>
            <p>5 CPU Core • 5GB RAM • 5GB Storage</p>
            <p><strong>Rp 6.000</strong></p>
            <button>Beli Sekarang</button>
        </div>

        <div class="package-card">
            <h3>Server Large</h3>
            <p>6 CPU Core • 6GB RAM • 6GB Storage</p>
            <p><strong>Rp 7.000</strong></p>
            <button>Beli Sekarang</button>
        </div>

        <div class="package-card">
            <h3>Server High</h3>
            <p>7 CPU Core • 7GB RAM • 7GB Storage</p>
            <p><strong>Rp 8.000</strong></p>
            <button>Beli Sekarang</button>
        </div>

        <div class="package-card">
            <h3>Server Standar</h3>
            <p>8 CPU Core • 8GB RAM • 8GB Storage</p>
            <p><strong>Rp 9.000</strong></p>
            <button>Beli Sekarang</button>
        </div>

        <div class="package-card">
            <h3>Server High Pro</h3>
            <p>Unli CPU Core • Unli RAM • Unli Storage</p>
            <p><strong>Rp 15.000</strong></p>
            <button>Beli Sekarang</button>
        </div>
    </div>
</div>
@endsection
