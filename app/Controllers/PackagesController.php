<?php
use App\Http\BaseController;
use App\Models\DB;


class PackagesController extends BaseController{
    public function index()
    {


        $packages = DB::table('packages')
        ->select('packages.packages_id, packages.package_name, packages.package_price, destinations.destination_name, hotels.hotel_rating')
        ->join('destinations','packages.destination_id','destinations.destination_id')
        ->join('hotels','packages.hotel_id','hotels.hotel_id')
        ->get();

        
        return $this->view('packages/index', ['result' => $packages]);
    }

    public function readmore()
    {
        return $this->view('packages/readmore',['']);
    }
}