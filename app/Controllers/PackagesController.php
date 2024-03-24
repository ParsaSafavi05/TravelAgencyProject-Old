<?php
use App\Http\BaseController;

class PackagesController extends BaseController{
    public function index()
    {
        return $this->view('packages/index', ['']);
    }

    public function readmore()
    {
        return $this->view('packages/readmore',['']);
    }
}