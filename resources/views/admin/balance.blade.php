@extends('layouts.admin')

@section('title', 'Kelola Saldo Pengguna')

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #1f1c2c, #928dab);
        font-family: 'Poppins', sans-serif;
        color: #fff;
    }

    .balance-admin {
        background: rgba(255,255,255,0.05);
        backdrop-filter: blur(10px);
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        color: #fff;
    }

    th, td {
        padding: 12px;
        text-align: center;
    }

    th {
        background-color: rgba(255,255,255,0.15);
    }

    tr:nth-child(even) {
        background-color: rgba(255,255,255,0.05);
    }

    .btn {
        border: none;
        padding: 8px 16px;
        border-radius: 10px;
        cursor: pointer;
        transition: 0.3s;
        font-weight: 600;
    }

    .btn-add {
        background: linear-gradient(45deg, #00c6ff, #0072ff);
        color: #fff;
    }

    .btn-reduce {
        background: linear-gradient(45deg, #ff512f, #dd2476);
        color: #fff;
    }

    .btn:hover {
        opacity: 0.8;
    }

    .form-inline {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .form-inline input {
        width: 100px;
        border-radius: 8px;
        border: none;
        padding: 5px 10px;
    }

    .success-message {
        background: rgba(0, 255, 100, 0.2);
        border-left: 5px solid #00ff7f;
        padding: 10px;
        border-radius: 8px;
        margin-bottom: 15px;
    }
</style>

<div class="container py-5">
    <h1 class="text-center mb-4">💎 Kelola Saldo Pengguna</h1>

    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <div class="balance-admin">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Pengguna</th>
                    <th>Email</th>
                    <th>Saldo (Rp)</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td><strong>Rp {{ number_format($user->balance, 0, ',', '.') }}</strong></td>
                        <td>
                            <form action="{{ route('admin.balance.add', $user->id) }}" method="POST" class="form-inline">
                                @csrf
                                <input type="number" name="amount" placeholder="Jumlah">
                                <button type="submit" class="btn btn-add">Tambah</button>
                            </form>

                            <form action="{{ route('admin.balance.reduce', $user->id) }}" method="POST" class="form-inline" style="margin-top:8px;">
                                @csrf
                                <input type="number" name="amount" placeholder="Jumlah">
                                <button type="submit" class="btn btn-reduce">Kurangi</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
