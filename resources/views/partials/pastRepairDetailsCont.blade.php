<table>
          <thead>
            <tr>
              <th class="bigger1">User Id</th>
              <th class="bigger2">First name</th>
              <th class="bigger2">Last Name</th>
              <th class="bigger4">Email</th>
              <th class="bigger4">Phone</th>
            </tr>
          </thead>
          <tbody>  </tbody>
</table>

           @foreach($users as $user)
           <tr>
                 <td><input class="bigger1" type="text" name="id"  value="{{$user->id}} " Readonly/> </td>
          	    <td><input class="bigger3" type="text" name="firstname"  value="{{$user->firstname}} " Readonly/> </td>
                <td><input class="bigger3" type="text" name="lastname"  value="{{$user->lastname}}" Readonly /> </td>
                <td><input class="bigger4" type="text" name="email"  value="{{$user->email}}" Readonly/> </td>
                <td><input class="bigger2" type="text" name="phone"  value="{{$user->phone}} " Readonly></td>
           </tr>
           <p>If phone number input is blank request number from customer:</p>

              <form method="post" action="/customerNumber">
                 {{csrf_field()}}
                 <input class="bigger3" type="hidden" name="id"  value="{{$user->id}} "/>
                 <label for="time">Phone Number </label>
                 <input class="bigger2" type="tel" pattern="[0-9]{5}[0-9]{6}" name="phone"  value="" required>
                 <button type="submit" class="btn btn-success" > Update Phone </button>
             </form>
             @endforeach
