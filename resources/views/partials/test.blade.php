<form method="post" action="/repairDetails2">
  {{csrf_field()}}
   @foreach($users as $user)
  <input class="bigger3" type="hidden" name="users_id"  value=" {{$user->id}} "/>
   @endforeach
 <p>Choose a device and Make below:</p>

 <!-- <select name="items" size="4">
  <option value="laptop">Laptop</option>
  <option value="desktop">Desktop</option>
  <option value="tablet">Tablet</option>
  <option value="phone">Phone</option>
</select>&nbsp;&nbsp;&nbsp; -->


<br /><br />
<button type="submit" class="btn btn-success" > Send </button>
</form>
