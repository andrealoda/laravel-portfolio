<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return "index amministratore";
    }

    public function profile()
    {
        return "pagina profilo backoffice";
    }
}
