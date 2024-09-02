<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class C_Auth extends Controller
{

  public function index()
  {
    if (session()->has('id')) {
      return redirect('/');
    }
    return view('auth.login', ['title' => 'Login']);
  }

  public function login(Request $request)
  {
    $username = $request->username;
    $password = $request->password;

    $response = Http::asForm()->post('https://gateway.telkomuniversity.ac.id/issueauth', [
      'username' => $username,
      'password' => $password,
    ]);

    if (!isset($response['token'])) {
      return redirect('/')->with('status', 'Login Gagal !');
    } else {
      session(['id' => $username]);
      session()->save();
      return view('index');
    }
  }

  public function logout()
  {
    if (session()->has('id')) {
      session()->flush();
      session()->save();
    }
    return redirect('/');
  }
}
