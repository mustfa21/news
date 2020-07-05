<?php

namespace App\Http\Controllers;

use App\Http\Requests\offerRequst;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getoffer()
    {

   return Offer::get();


//        return view('welcome',compact('obj'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(offerRequst $request)

    {




////        $valid = Validator::make($request->all());
//        if($valid ->fails()){
//            return redirect()->back()->withErrors($valid)->withInputs($request->all());
//
//        }

        Offer::create([
            'name' => $request->name ,
            'photo' =>$request->photo
        ]);
        return redirect()->back()->with(['success'=>'تم اضافه عرض ']);


    }


////    protected  function  getstuts(){
////        return   $stuts=[
////            'name' => 'required',
////            'photo' => 'required',
////        ];
////
////    }
//    protected  function  getmsg(){
//        return   $msg=[
//            'name.required' =>__('messages.offer name'),
//            'photo.required'=>'the fild is required'
//        ];
//    }


}
