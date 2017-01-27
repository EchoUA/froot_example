<?php

namespace App\Http\Controllers;

use App\CouponPrices;
use App\Coupons;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CouponController extends WrapperController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupons::with('price')->get();

        return view('coupon.index', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prices = CouponPrices::lists('name', 'id');

        $coupon_link = $this->generateCode();

        return view('coupon.create', compact('prices', 'coupon_link'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Coupons $coupons
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Coupons $coupons)
    {
        $coupons->create($request->all());

        return redirect('coupons');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Coupons $coupons
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupons $coupons)
    {
        $prices = CouponPrices::lists('name', 'id');

        return view('coupon.edit', compact('coupons', 'prices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Coupons $coupons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupons $coupons)
    {
        $coupons->update($request->all());

        return redirect('coupons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Coupons $coupons
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupons $coupons)
    {
        $coupons->delete();

        return back();
    }


    /**
     * Generate new code
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    protected function generateNewCode(Request $request)
    {
        if (\Session::token() == $request->_token) {

            return \Response::json( array(
                'status' => 200,
                'message' => 'Successfully generated',
                'code' => $this->generateCode()
            ), 200);
        }
    }

    /**
     * Generate Code
     *
     * @return string
     */
    private function generateCode()
    {
        return md5(uniqid(rand(), true));
    }
}
