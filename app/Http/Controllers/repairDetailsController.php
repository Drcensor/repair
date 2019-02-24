<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\User;
use DB;


class repairDetailsController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }

  public function selDetails()
  {
    $users = DB::table('users')
                    ->where('id', '=', id())
                    ->get();

      return view('/pastRepairDetails', compact('users'));
  }

  public function selDetailsNow()
  {
   $users = DB::table('users')
                   ->latest()
                   ->where('id', $_POST['id'])
                   ->get();

      return view('/pastRepairDetails', compact('users'));
  }
}
