<?php

namespace App\Http\Controllers;

use App\Models\BankingDetail;
use Illuminate\Http\Request;

class BankingDetailController extends Controller
{
    public function index()
    {
        //
        $banking_details = BankingDetail::all();
        return view('admin.banking_details.index', compact('banking_details'));
    }

    public function create()
    {
        //
        return view('admin.banking_details.create');
    }

    public function store(Request $request)
    {
        //

        $banking_detail = BankingDetail::create(request()->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]));


        return back()->with('message', 'banking_detail added successfully');
    }


    public function show(BankingDetail $banking_detail)
    {
        //
        return view('admin.banking_details.show', compact('banking_detail'));
    }


    public function edit(BankingDetail $banking_detail)
    {
        //
        return view('admin.banking_details.edit', compact('banking_detail'));
    }

    public function update(Request $request, BankingDetail $banking_detail)
    {
        //
        $banking_detail->update(request()->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]));


        return back()->with('message', 'faq category updated successfully');
    }

    public function destroy(BankingDetail $banking_detail)
    {
        //
        $banking_detail->delete();

        return redirect('/admin/banking_detail')->with('message', 'banking_detail deleted successfully');
    }
}
