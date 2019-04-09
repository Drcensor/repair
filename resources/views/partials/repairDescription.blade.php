

<div class="container">


<div id="accordion">

<div class="card">
   @foreach($repairinfo as $reinfo)
<div class="card-header">
<a class="card-link" data-toggle="collapse" href="#collapse{{$reinfo->id}}">
 Previous Repair Item: <input class="bigger1" type="text" name="repairinfo_id"  value=" {{$reinfo->id}} " Readonly/>
</a>
</div>
<div id="collapse{{$reinfo->id}}" class="collapse" data-parent="#accordion">
<div class="card-body">
  <form method="post" action="/pastRepairDetails">
            {{csrf_field()}}

          @foreach($users as $user)
          <input class="bigger3" type="hidden" name="id"  value=" {{$user->id}} " Readonly/>
          <input class="bigger3" type="text" name="firstname"  value=" {{$user->firstname}} " Readonly/>
          <input class="bigger3" type="text" name="lastname"  value=" {{$user->lastname}} " Readonly/><br><br>
          @endforeach

          <input class="bigger3" type="hidden" name="users_id"  value=" {{$reinfo->users_id}} " Readonly/><br>
          <label for="time">Device:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
          <input name="items" type="text" value="{{$reinfo->items}}" Readonly>&nbsp;&nbsp;&nbsp;
          <label for="time">Make:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
          <input name="make" type="text" value="{{$reinfo->make}}" Readonly>&nbsp;&nbsp;&nbsp;

          <br>
          <label for="time">Start Date:&nbsp; </label>
          <input name="created_at" type="text" value="{{ date('d-m-Y', strtotime(($reinfo->created_at)))}}" Readonly>&nbsp;&nbsp;&nbsp;
          <label for="time">Complete Date:&nbsp; </label>
          <input name="completed_at" type="text" value="{{date('d-m-Y', strtotime(($reinfo->completed_at))) }}" Readonly>
          <br>
          <label for="time">Repair Description:&nbsp; </label>
          <input name="message1" style="width:565px; height:100px;" value="{{$reinfo->message1}}" Readonly>
          <br><label for="time">Description of the condition of the Device:&nbsp; </label>
          <input name="message2" style="width:565px; height:100px;" value="{{$reinfo->message2}}" Readonly>
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
