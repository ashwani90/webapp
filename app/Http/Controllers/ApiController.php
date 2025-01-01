<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ApiController extends Controller
{

    public function subscribe(Request $request)
    {
        $email = $request->input('email');
        $status = $request->input('status');
        $subs = DB::table('subscriptions')->where('email', $email)->get();
        if (count($subs) > 0 ) {
            $data = [
                "message" => "Already subscribed",
                "status" => 7
            ];
            return response()->json($data, 201);
        }

        $data = DB::table('subscriptions')->insert(
            array(
                   'email'   =>   $email,
                   'status'  =>   $status,
            )
       );

        $data = [
            "message" => "Successfully subscribed",
            "status" => 7
        ];
        return response()->json($data, 201);
    }

    public function addContact(Request $request) {
        $email = $request->input('email');
        $name = $request->input('name');
        $phone = $request->input('phone');
        $company = $request->input('company');
        $textVal = $request->input('textVal');

        $data = DB::table('contacts')->insert(
            array(
                   'email'   =>   $email,
                   'cust_name'  =>   $name,
                   'phone' => $phone,
                   'company' => $company,
                   'message' => $textVal
            )
        );
        if ($data) {
            $data = [
                "message" => "Successfully Added contact info",
                "status" => 7
            ];
        } else {
            $data = [
                "message" => "Not able to add contact",
                "status" => 6
            ];
        }


        return response()->json($data, 201);

    }

}
