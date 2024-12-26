<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class appController extends Controller
{
    function home(Request $request){
        return view('Pages.home');
    }

    function about(Request $request){
        return view('Pages.about');
    }

    function login(Request $request){
        return view('Pages.login');
    }

    function hi(Request $request){

            $email=$request->input("email");

            if($email){
                return response()->json(["status"=>"success","message"=>"Form submitted successfully"]);
           }else{
                return response()->json(["status"=>"failed","message"=>"Form submission failed"]);
             }
}


      function ipAddress(Request $request){

            $clientIp=$request->getClientIp();
            return response($clientIp);
      }

}
