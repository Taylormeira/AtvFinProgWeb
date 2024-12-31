@if(session('msg'))
<div class="mesage">

    <div class="alert alert-success">
        {{session('msg')}}
    </div>
    
</div>
@endif