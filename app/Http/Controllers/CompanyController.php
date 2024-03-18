<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function companies()
    {
        $companies = Company::paginate(6);
        return view('pages.home', compact('companies'));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'code' => 'required|unique:companies',
            'vat_code' => 'nullable|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|max:20',
            'email' => 'required|max:255',
            'activity' => 'required|max:255',
            'director' => 'required|max:255',
        ]);

        Company::create($validatedData);

        return redirect('/companies')->with('success', 'Kompanija sėkmingai sukurta!');
    }

    public function show($id)
    {
        $company = Company::findOrFail($id);
        return view('pages.show', compact('company'));
    }

    public function edit($id)
    {
        $company = Company::find($id);
        return view('pages.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'code' => 'required|unique:companies',
            'vat_code' => 'nullable|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|max:20',
            'email' => 'required|max:255',
            'activity' => 'required|max:255',
            'director' => 'required|max:255',

        ]);

        $company = Company::find($id);
        $company->update($request->all());
        return redirect('/')->with('success', 'Įmonė atnaujinta sėkmingai.');
    }

    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();
        return redirect('/')->with('success', 'Įmonė ištrinta sėkmingai.');
    }

    public function searchBtTitle()
    {
        return view('pages.search');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        
        $companies = Company::where('title', 'like', "%$query%")->get();
        
        if ($companies->isEmpty()) {
            return view('pages.no_results');
        }
        
        return view('pages.search_results', ['companies' => $companies]);
    }
}   