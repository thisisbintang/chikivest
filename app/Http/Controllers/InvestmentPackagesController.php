<?php

namespace App\Http\Controllers;

use App\Breeder;
use App\ChickenPriceOffer;
use App\DOC;
use App\Grazier;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\InvestmentPackage;
use App\OperationalGrazier;
use App\Seller;
use Illuminate\Http\Request;

class InvestmentPackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 5;

        if (!empty($keyword)) {
            $investmentpackages = InvestmentPackage::where('breeder_id', 'LIKE', "%$keyword%")
                ->orWhere('grazier_id', 'LIKE', "%$keyword%")
                ->orWhere('seller_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $investmentpackages = InvestmentPackage::paginate($perPage);
        }
        $breeders = Breeder::get();
        $graziers = Grazier::get();
        $sellers = Seller::get();
        return view('investment-packages.index', compact('investmentpackages', 'breeders', 'graziers', 'sellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $breeders = Breeder::get();
        $docs = DOC::get();
        $graziers = Grazier::get();
        $ogs = OperationalGrazier::get();
        $sellers = Seller::get();
        $cpos = ChickenPriceOffer::get();
        return view('investment-packages.create', compact('breeders', 'docs', 'graziers', 'ogs', 'sellers', 'cpos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Requests\InvestmenPackageFormValidation $request)
    {


        InvestmentPackage::create([
            'name' => $request['name'],
            'totalCapital' => $request['totalCapital'],
            'income' => $request['income'],
            'breeder_id' => $request['breeder_id'],
            'grazier_id' => $request['grazier_id'],
            'seller_id' => $request['seller_id'],
            'doc_id' => $request['doc_id'],
            'og_id' => $request['og_id'],
            'cpo_id' => $request['cpo_id'],
        ]);

        return redirect()->route('investment-packages.index')->with('flash_message', 'InvestmentPackage added!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $investmentpackage = InvestmentPackage::findOrFail($id);

        return view('investment-packages.show', compact('investmentpackage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $investmentpackage = InvestmentPackage::findOrFail($id);

        return view('investment-packages.edit', compact('investmentpackage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Requests\InvestmenPackageFormValidation $request, $id)
    {

        $requestData = $request->all();

        $investmentpackage = InvestmentPackage::findOrFail($id);
        $investmentpackage->update($requestData);

        return redirect()->route('investment-packages.index')->with('flash_message', 'InvestmentPackage updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        InvestmentPackage::destroy($id);

        return redirect()->route('investment-packages.index')->with('flash_message', 'InvestmentPackage deleted!');
    }
}
