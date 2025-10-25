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
    public function profile() {
        return view('client.profile.index');
    }
     public function freelancer()
    {
        return view('auth.register.freelancer');
    }
public function getTaskDetail($id)
{
    $task = Task::with('user', 'jurusan', 'skills', 'portfolio')->findOrFail($id);
    return view('client.partials.task_popup', compact('task'));
}

}
