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

//directs to the repair details page
  public function selDetails()
  {
    $users = DB::table('users')
                    ->where('id', $_POST['id'])
                    ->get();

      $repairinfo = DB::table('repairinfo')
                                ->latest()
                                ->where('users_id', $_POST['id'])
                                ->get();

      return view('/pastRepairDetails', compact(['users', 'repairinfo']));
  }

//directs to the pastrepairdetailss page
  public function selDetailss()
  {
    $users = DB::table('users')
                    ->where('id', $_POST['users_id'])
                    ->get();

      return view('/pastRepairDetailss', compact('users'));
  }


//inserts into the repairinfo database table
  public function repairDetailsNow()
  {
   $users = DB::table('users')
                   ->latest()
                   ->where('id', $_POST['id'])
                   ->get();
  // $users = DB::table('users')->Update(
  //   [
  //     'phone' => $_POST['phone']
  //   ])
  //   ;

   $repairs = DB::table('repairinfo')->insert(
            [
               'users_id' => $_POST['id'],
               'items' => $_POST[ 'items'],
               'make' => $_POST['make'],
               'created_at' => $_POST[ 'created_at'],
               'completed_at' => $_POST['completed_at'],
               'message1' => $_POST[ 'message1'],
               'message2' => $_POST['message2']

            ]);    //inserting a order to db
    $repairinfo = DB::table('repairinfo')
                              ->latest()
                              ->where('users_id', $_POST['id'])
                              ->get();


      return view('/pastRepairDetails', compact(['users', 'repairs', 'repairinfo']));
  }




//sets up repair form page
  public function repairDetails3()
  {
   $users = DB::table('users')
                   ->latest()
                   ->where('id', $_POST['users_id'])
                   ->get();

      return view('/pastRepairDetailss', compact('users'));
  }

  public function phoneUpdate()
  {

    $users = DB::table('users')
                    ->latest()
                    ->where('id', $_POST['id'])
                    ->get();

         $updates =  DB::table('users')
            ->where('id',  $_POST['id'])
            ->update([
            'phone' => request('phone'),
        ]);

        $repairinfo = DB::table('repairinfo')
                                  ->latest()
                                  ->where('users_id', $_POST['id'])
                                  ->get();

        $users = DB::table('users')
                        ->latest()
                        ->where('id', $_POST['id'])
                        ->get();
      return view('/pastRepairDetails', compact('updates', 'users', 'repairinfo'));
  }



}
