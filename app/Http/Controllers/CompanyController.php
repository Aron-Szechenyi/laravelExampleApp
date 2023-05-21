<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CompanyController extends Controller
{
    public function List(): View
    {
        return View('company');
    }
}
