<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function dashboard() {
        return view('client.dashboard');
    }

    public function explore() {
        return view('client.explore.index');
    }

    public function showFreelancer($id) {
        return view('client.explore.show', compact('id'));
    }

    public function orders() {
        return view('client.orders.index');
    }

    public function messages() {
        return view('client.messages.index');
    }

    public function settings() {
        return view('client.settings.index');
    }
}
