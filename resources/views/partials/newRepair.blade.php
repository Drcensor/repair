



<form method="post" action="/repairDetails">
  {{csrf_field()}}

  @foreach($users as $user)
  <input class="bigger3" type="hidden" name="id"  value=" {{$user->id}} "/>
  <input class="bigger3" type="text" name="firstname"  value=" {{$user->firstname}} "/>
  <input class="bigger3" type="text" name="lastname"  value=" {{$user->lastname}} "/>
  <br><br>
  @endforeach

 <p>Choose a device and Make below:</p>

 <select name="items" size="4">
  <option value="laptop">Laptop</option>
  <option value="desktop">Desktop</option>
  <option value="tablet">Tablet</option>
  <option value="phone">Phone</option>
</select>&nbsp;&nbsp;&nbsp;

 <select name="make" size="4">
  <option value="dell">Dell</option>
  <option value="lenovo">Lenovo</option>
  <option value="acer">Acer</option>
  <option value="hp">HP</option>
  <option value="asus">Asus</option>
  <option value="microsoft">Microsoft</option>
  <option value="razer">Razer</option>
  <option value="samsung">Samsung</option>
  <option value="apple">Apple</option>
  <option value="huawei">Huawei</option>
  <option value="nokia">Nokia</option>
  <option value="sony">Sony</option>
  <option value="htc">HTC</option>
</select><br><br>

 <label for="time">Todays Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
 <input name="created_at" type="text" value="<?php echo  date("Y/m/d") ; ?>"><br />
 <label for="time">Complete Date </label>
 <input type="date" name="completed_at">

<br><br>
<label for="time">Repair Issue&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
 <textarea name="message1" style="width:600px; height:100px;">some text</textarea>
<br /><br />
<label for="time">Device condition&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
 <textarea name="message2" style="width:600px; height:100px;">some text</textarea>
<br /><br />
<button type="submit" class="btn btn-success" > Send </button>
</form>
