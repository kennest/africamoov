<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $africa_day=Pack::where(['label'=>'AFRICA DAY'])->get()->load('destinations.circuits.checkpoints');
        $africa_week_end=Pack::where(['label'=>'AFRICA WEEKEND'])->get()->load('destinations.circuits.checkpoints');
        $africa_my_pack=Pack::where(['label'=>'MY PACK AFRICA'])->get()->load('destinations.circuits.checkpoints');
        //dd($africa_day);
        return view('index',[
            'africa_day'=>$africa_day,
            'africa_week_end'=>$africa_week_end,
            'africa_my_pack'=>$africa_my_pack
            ]);
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function reservationForm($pack){
        $view=null;
        $data=null;
        switch ($pack){
            case "AFRICA_DAY":
                $data=Pack::where(['label'=>'AFRICA DAY'])->first()->load('destinations.circuits.checkpoints');
                //dd($data->destinations()->get());
                $view='forms.reservation-africaday';
                break;
            case "AFRICA_WEEK_END":
                $data=Pack::where(['label'=>'AFRICA WEEKEND'])->first()->load('destinations.circuits.checkpoints');
                //dd($data);
                $view='forms.reservation-africaweekend';
                break;
            case "AFRICA_MY_PACK":
                $data=Pack::where(['label'=>'AFRICA MY PACK'])->first()->load('destinations.circuits.checkpoints');
                //dd($data);
                $view='forms.reservation-africaweekend';
                break;
        }
        return view($view,['data'=>$data]);
    }


     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function makeReservation(Request $request){
                dd($request);
    }
}
