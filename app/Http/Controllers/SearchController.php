<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\courier;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $courier = \DB::table('couriers');
        if( $request->input('search')){
            $courier = $courier->where('tracking_number',$request->search);
        }
        $courier = $courier->paginate(10);
        
        return view('searchresult',compact('courier'));
        
    
       
    
    
    
    
    
    }
}

