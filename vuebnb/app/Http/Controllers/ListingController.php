<?php

namespace App\Http\Controllers;

use App\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function get_listing_api(Listing $listing){
        return $listing->toJson();
    }
}
