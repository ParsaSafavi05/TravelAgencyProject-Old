<?php
use App\Http\BaseController;

class DestinationsController extends BaseController{
    
    public function index()
    {
        return $this->view('destinations/index', ['']);
    }
    
}