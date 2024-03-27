<?php

namespace App\Controllers;

namespace App\Controllers\Admin;


use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        $data['title'] = 'Helpdesk | Dashboard';
        return view('admin/dashboard', $data);
    }
}
