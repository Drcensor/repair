@if (count($users) < 1)
<p>There are no Customers by that name in the database. Please register as a New Customer</p>


@else
<table>
    <tbody>
            <thead>
              <tr>
                <th class="bigger3">User Id</th>
                <th class="bigger2">First name</th>
                <th class="bigger2">Last Name</th>
                <th class="bigger4">Email</th>
                <th class="bigger3">Select</th>
              </tr>
            </thead>

            </tbody></table>



 @foreach($users as $used)
                        <form method="post" action="pastRepairDetails">
                            {{csrf_field()}}

                              <tr>
                            <td><input class="bigger3" type="text" name="id"  value="{{$used->id}}"/> </td>
                            <td><input class="bigger3" type="text" name="firstname"  value="{{$used->firstname}} "/> </td>
                            <td><input class="bigger3" type="text" name="lastname"  value="{{$used->lastname}}" /> </td>
                            <td><input class="bigger4" type="text" name="email"  value="{{$used->email}}" /> </td>
                            <td><button type="submit" class="btn btn-success" > Select </button></td>
                            </tr>
                          </form><br>


              @endforeach

              @endif
