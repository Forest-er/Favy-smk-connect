<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class DashboardController extends Controller
{
    public function showDashboard($role)
    {
        $roleData = Role::where('name', $role)->first();

        if (!$roleData) {
            abort(404, 'Role tidak ditemukan');
        }

        switch ($roleData->name) {
            case 'client':
                return view('client.dashboard', ['role' => $roleData]);
            case 'worker':
                return view('freelancer.dashboard', ['role' => $roleData]);
            case 'admin':
                return view('admin.dashboard', ['role' => $roleData]);
            default:
                abort(403, 'Role tidak diizinkan.');
        }
    }
}

