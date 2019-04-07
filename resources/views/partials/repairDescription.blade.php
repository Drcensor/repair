

<div class="container">


<div id="accordion">

<div class="card">
   @foreach($repairinfo as $reinfo)
<div class="card-header">
<a class="card-link" data-toggle="collapse" href="#collapse{{$reinfo->id}}">
 Previous Repair Item: <input class="bigger1" type="text" name="repairinfo_id"  value=" {{$reinfo->id}} "/>
</a>
</div>
<div id="collapse{{$reinfo->id}}" class="collapse" data-parent="#accordion">
<div class="card-body">
  <form method="post" action="/pastRepairDetails">
            {{csrf_field()}}

          @foreach($users as $user)
          <input class="bigger3" type="hidden" name="id"  value=" {{$user->id}} "/>
          <input class="bigger3" type="text" name="firstname"  value=" {{$user->firstname}} "/>
          <input class="bigger3" type="text" name="lastname"  value=" {{$user->lastname}} "/><br><br>
          @endforeach

          <input class="bigger3" type="hidden" name="users_id"  value=" {{$reinfo->users_id}} "/><br>
          <label for="time">Device:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
          <input name="items" type="text" value="{{$reinfo->items}}">&nbsp;&nbsp;&nbsp;
          <label for="time">Make:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
          <input name="make" type="text" value="{{$reinfo->make}}">&nbsp;&nbsp;&nbsp;

          <br>
          <label for="time">Start Date:&nbsp; </label>
          <input name="created_at" type="text" value="{{ date('d-m-Y', strtotime(($reinfo->created_at)))}}">&nbsp;&nbsp;&nbsp;
          <label for="time">Complete Date:&nbsp; </label>
          <input name="completed_at" type="text" value="{{date('d-m-Y', strtotime(($reinfo->completed_at))) }}">
          <br>
          <label for="time">Repair Description:&nbsp; </label>
          <input name="message1" style="width:565px; height:100px;" value="{{$reinfo->message1}}">
          <br><label for="time">Description of the condition of the Device:&nbsp; </label>
          <input name="message2" style="width:565px; height:100px;" value="{{$reinfo->message2}}">
          <br><br>
          <button type="submit" class="btn btn-success" onclick="myFunction()" > Print This Repair Page To PDF </button>
          <br><br>
          </form>
</div>
</div>
@endforeach
</div>


</div>
</div>
