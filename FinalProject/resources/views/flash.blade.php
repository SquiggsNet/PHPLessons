@if(session()->has('flash_message'))
    <div class="alert {{session('flash_message_level')}} alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{session('flash_message')}}
    </div>
@endif