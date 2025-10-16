<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BalanceController extends Controller
{
    /**
     * Menampilkan saldo user di dashboard.
     */
    public function index()
    {
        $user = Auth::user();
        return view('client.dashboard', ['user' => $user]);
    }

    /**
     * Halaman admin untuk mengatur saldo user.
     */
    public function adminIndex()
    {
        $users = User::all();
        return view('admin.balance', compact('users'));
    }

    /**
     * Menambah saldo user oleh admin.
     */
    public function addBalance(Request $request, $id)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0',
        ]);

        $user = User::findOrFail($id);
        $user->balance += $request->amount;
        $user->save();

        return redirect()->back()->with('success', 'Saldo berhasil ditambahkan!');
    }

    /**
     * Mengurangi saldo user oleh admin.
     */
    public function reduceBalance(Request $request, $id)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0',
        ]);

        $user = User::findOrFail($id);
        $user->balance = max(0, $user->balance - $request->amount);
        $user->save();

        return redirect()->back()->with('success', 'Saldo berhasil dikurangi!');
    }

    /**
     * Mengurangi saldo secara otomatis (misalnya saat user buat server).
     */
    public function deductBalance($userId, $amount)
    {
        $user = User::find($userId);
        if ($user && $user->balance >= $amount) {
            $user->balance -= $amount;
            $user->save();
            return true;
        }
        return false;
    }
}
