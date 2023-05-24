<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Validation\Validator;
use Illuminate\View\View;

class CompanyController extends Controller
{
    public function Show(): View
    {
        return View('company',['companies'=>Company::All()]);
    }
    public function Details($id): View
    {
        $companies = Company::All();
        $company = $companies->where('id',$id)->firstOrFail();
        return View('company',['companies'=>$companies,
            'company'=>$company]);
    }

    public function Delete():View
    {
        $values = request()->all();
        $company = Company::all()->where('id',$values['Id'])->firstOrFail();
        $company->delete();

        return view('company',['companies'=>Company::all()]);
    }

    public function Update(): View
    {
        $values = request()->all();

        $company = Company::find($values['Id']);
        $company->companyName = $values['companyName'];
        $company->taxNumber = $values['taxNumber'];
        $company->phoneNumber = $values['phoneNumber'];
        $company->emailAddress = $values['emailAddress'];
        $company->save();

        return view('company',['companies'=>Company::all(),
            'company'=>$company]);
    }

    public function CreateForm():View
    {
        return view('company', ['companies'=>Company::all(),
            'newCompany'=>true]);
    }

    public function Create(): View
    {
        request()->validate([
            'companyName' => 'required',
            'taxNumber' => 'required',
            'phoneNumber' => 'required',
            'emailAddress' => 'required',
        ]);

        $values = request()->all();

        $company = new Company();
        $company->companyName = $values['companyName'];
        $company->taxNumber = $values['taxNumber'];
        $company->phoneNumber = $values['phoneNumber'];
        $company->emailAddress = $values['emailAddress'];
        $company->save();

        return view('company',['companies'=>Company::all()]);
    }
}
