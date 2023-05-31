<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class CompanyController extends Controller
{
    public function Show(): View
    {
        return View('company.company', ['companies' => Company::All()]);
    }

    public function Details(Company $company): View
    {
        return View('company.company', ['companies' => Company::All(),
            'company' => $company]);
    }

    public function Delete(): View
    {
        $values = request()->all();
        $company = Company::all()->where('id', $values['Id'])->firstOrFail();
        $company->delete();

        return view('company.company', ['companies' => Company::all()]);
    }

    /**
     * @throws ValidationException
     */
    public function Update(): View
    {
        $company = Company::all()->where('id', Request()->input('Id'))->firstOrFail();
        $values = Validator::make(request()->all(), [
            'companyName' => ['required', 'max:35', Rule::unique('companies')->ignore($company)],
            'taxNumber' => ['required', 'max:25'],
            'phoneNumber' => ['required', 'max:30'],
            'emailAddress' => ['required', 'max:35'],
        ])->validated();
        
        $company = Company::find(Request()->input('Id'));
        $company->companyName = $values['companyName'];
        $company->taxNumber = $values['taxNumber'];
        $company->phoneNumber = $values['phoneNumber'];
        $company->emailAddress = $values['emailAddress'];
        $company->save();

        return view('company.company', ['companies' => Company::all(),
            'company' => $company]);
    }

    public function CreateForm(): View
    {
        return view('company.company', ['companies' => Company::all(),
            'newCompany' => true]);
    }

    /**
     * @throws ValidationException
     */
    public function Create(): RedirectResponse|View
    {
        $validator = Validator::make(request()->all(), [
            'companyName' => ['required', 'max:35', 'unique:companies'],
            'taxNumber' => ['required', 'max:25'],
            'phoneNumber' => ['required', 'max:30'],
            'emailAddress' => ['required', 'max:35'],
        ]);

        $values = $validator->validated();

        $company = new Company();
        $company->companyName = $values['companyName'];
        $company->taxNumber = $values['taxNumber'];
        $company->phoneNumber = $values['phoneNumber'];
        $company->emailAddress = $values['emailAddress'];
        $company->save();

        return view('company.company', ['companies' => Company::all()]);
    }
}
