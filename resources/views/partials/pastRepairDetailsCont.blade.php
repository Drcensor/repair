<table>
                                    <thead>
                                      <tr>
                                        <th class="bigger3">User Id</th>
                                        <th class="bigger2">First name</th>
                                        <th class="bigger2">Last Name</th>
                                        <th class="bigger4">Email</th>

                                      </tr>
                                    </thead>
                                    <tbody>  </tbody>
                          </table>

                                       @foreach($users as $user)

                                        <form method="post" action="/pastRepairDetails">

                                           {{csrf_field()}}

                                       <tr>
                                             <td><input class="bigger3" type="text" name="id"  value="{{$user->id}} "/> </td>
                    	                	    <td><input class="bigger3" type="text" name="firstname"  value="{{$user->firstname}} "/> </td>
                                            <td><input class="bigger3" type="text" name="lastname"  value="{{$user->lastname}}" /> </td>
                    	                      <td><input class="bigger4" type="text" name="email"  value="{{$user->email}}" /> </td>
                                            <td><button type="submit" class="btn btn-success" > Select </button></td>


                                          </tr>
                                         </form>
                                         @endforeach
