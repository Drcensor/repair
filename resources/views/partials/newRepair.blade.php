<form method="post" action="">
   @foreach($users as $user)
  <input class="bigger3" type="hidden" name="id"  value=" {{$user->id}} "/>
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
</select><br><br>
 <label for="time">Todays Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
 <input name="current_date" type="text" value="<?php echo  date("d/m/Y") ; ?>"><br />
 <label for="time">Complete Date </label>
 <input type="date" name="bday">
 <!-- <input id="demo1" type="text" size="25">&nbsp;&nbsp;<a href="javascript:NewCal('demo1','DDMMYYYY')">
     <i style="font-size:24px" class="fa" alt="Pick a date">&#xf073;</i></a> -->
<br><br>
<label for="time">Repair Issue&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
 <textarea name="message1" style="width:600px; height:100px;">some text</textarea>
<br /><br />
<label for="time">Device condition&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
 <textarea name="message2" style="width:600px; height:100px;">some text</textarea>
<br /><br />
<button type="submit" class="btn btn-success" > Send </button>
</form>
