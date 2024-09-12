<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm()
    {
//        $contact = $request->only(['familyname', 'name', 'gender', 'email', 'area_code', 'local_number', 'subscriber_number', 'address', 'building_nam', 'content']);
//        $check = $request->only(['familyname', 'name']);
  //      return $check;
        return view('confirm');
    }

    public function thanks()
    {
        return view('thanks');
    }

    public function admin()
    {
        $authors = Author::Paginate(7);
        return view('admin', ['authors' => $authors]);
    }
}
