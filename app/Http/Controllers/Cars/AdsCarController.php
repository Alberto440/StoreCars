<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use App\Models\car_dates;
use Illuminate\Support\Facades\Auth;

class AdsCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = car_dates::orderBy('id', 'DESC')->get();

        if(Auth::user()->hasPermissionTo('View Role List')){
            return view('car.MyAdsAdmin', compact('cars'));
        }else{
           return view('car.MyAds', compact('cars'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = car_dates::find($id);
        $data->delete();
        return redirect('admin/advertised-cars');
    }

}
