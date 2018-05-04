<?php

namespace App\Http\Controllers\API;

use App\Business;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return Business :: orderBy( 'updated_at', 'desc' ) -> get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Business :: create( $request -> all() );
        return [
            'status' => 'success',
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function show(Business $business)
    {
        //
        return $business -> toArray();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Business $business)
    {
        //
        $business -> findOrFail( $business -> id );
        $business -> update( $request -> all() );
        return [
            'status' => 'success',
            'data'  => $business
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function destroy(Business $business)
    {
        //
         $business -> findOrFail( $business -> id );
        $business -> delete();
        return [
            'status' => 'success',
            'data'  => $business
        ];
    }
}
