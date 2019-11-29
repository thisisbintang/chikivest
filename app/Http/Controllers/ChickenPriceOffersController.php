<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ChickenPriceOffer;
use Illuminate\Http\Request;
use Auth;

class ChickenPriceOffersController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:seller');
    }

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
            $chickenpriceoffers = ChickenPriceOffer::where('codePriceOffer', 'LIKE', "%$keyword%")
                ->orWhere('chickenPriceOffer', 'LIKE', "%$keyword%")->orWhere('seller_id', Auth::user()->id)
                ->paginate($perPage);
        } else {
            $chickenpriceoffers = ChickenPriceOffer::where('seller_id', Auth::user()->id)->paginate($perPage);
        }

        return view('chicken-price-offers.index', compact('chickenpriceoffers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $getRow = ChickenPriceOffer::orderBy('id', 'DESC')->get();
        $rowCount = $getRow->count();

        $lastId = $getRow->first();
        $offerCode = "KPH00001";

        if ($rowCount > 0) {
            if ($lastId->id < 9) {
                $offerCode = "KPH0000" . '' . ($lastId->id + 1);
            } else if ($lastId->id < 99) {
                $offerCode = "KPH000" . '' . ($lastId->id + 1);
            } else if ($lastId->id < 999) {
                $offerCode = "KPH00" . '' . ($lastId->id + 1);
            } else if ($lastId->id < 9999) {
                $offerCode = "KPH0" . '' . ($lastId->id + 1);
            } else {
                $offerCode = "KPH" . '' . ($lastId->id + 1);
            }
        }
        return view('chicken-price-offers.create', compact('offerCode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Requests\ChickenPriceOfferFormValidation $request)
    {

        $requestData = $request->all();

        ChickenPriceOffer::create([
            'codePriceOffer' => $request['codePriceOffer'],
            'chickenPriceOffer' => $request['chickenPriceOffer'],
            'seller_id' => Auth::user()->id,
        ]);

        return redirect()->route('chicken-price-offers.index')->with('flash_message', 'ChickenPriceOffer added!');
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
        $chickenpriceoffer = ChickenPriceOffer::findOrFail($id);

        return view('chicken-price-offers.show', compact('chickenpriceoffer'));
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
        $chickenpriceoffer = ChickenPriceOffer::findOrFail($id);

        return view('chicken-price-offers.edit', compact('chickenpriceoffer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Requests\ChickenPriceOfferFormValidation $request, $id)
    {

        $requestData = $request->all();

        $chickenpriceoffer = ChickenPriceOffer::findOrFail($id);
        $chickenpriceoffer->update($requestData);

        return redirect()->route('chicken-price-offers.index')->with('flash_message', 'ChickenPriceOffer updated!');
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
        ChickenPriceOffer::destroy($id);

        return redirect('chicken-price-offers')->with('flash_message', 'ChickenPriceOffer deleted!');
    }
}
