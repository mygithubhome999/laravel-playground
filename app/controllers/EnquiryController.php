<?php

class EnquiryController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Enquiry Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'EnquiryController@showBooking');
    |
    */

    public function index()
    {
        //$enquries = Enquiry::all()->take(10000)->get();
                                //->where('forward_seller_at','>',DB::raw('(NOW()-INTERVAL 1 MONTH)'));
        $enquries = DB::table('ab4s_enquiry')->orderBy('id','desc')->take(10000)->get();
        return Response::json($enquries);
    }
}