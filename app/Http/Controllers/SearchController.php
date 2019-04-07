<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class SearchController extends Controller
{
  public function searchUser(Request $request)
  {
          $request->validate([
              'search' => 'required|string|max:25',
          ]);


      $exists = DB::table('users')
                      ->Where('lastname', 'like', '%' . request('search') . '%')
                      ->exists();
      $users = DB::table('users')
                      ->Where('lastname', 'like', '%' . request('search') . '%')
                      ->get();

          if ($exists) {
            
                            return view('/usersDetails', compact('users'));
          }else {

            return view('/usersDetails', compact('exists', 'users'));
          }
      // $users = DB::table('users')
      //                 ->where('firstname', 'like', '%' . request('search') . '%')
      //                 ->orWhere('lastname', 'like', '%' . request('search') . '%')
      //                 ->get();



  }

  public function selDetails()
  {
    $users = DB::table('users')->get();

      return view('/usersDetails', compact('users'));
  }
}
