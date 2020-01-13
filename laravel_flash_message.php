<?php

=======Same url redirect===
$msg = array('alert'=>'success','message'=>'User details updated successfully!');
return redirect()->back()->with($msg);

=====Other url redirect=======
return redirect('webpanel/userList')->with($msg);

====Session flash message set=======
@if($alert = Session::get('alert'))
    <div class="alert alert-{{$alert}} alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button> 
      <strong>{{ Session::get('message') }}</strong>
    </div>
@endif

======Session Set and Session Get======
Session::put('admin_id',$data->user_id); 
$admin_id = Session::get('admin_id');

=====