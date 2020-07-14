<?php

namespace App\Http\Controllers;

use App\Company;
use App\Product;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function show(Company $company)
    {
        //vraca sve proizvode kompanije
        return $company->products;
    }
}
