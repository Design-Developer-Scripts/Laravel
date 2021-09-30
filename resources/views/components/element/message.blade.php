@if(!empty(session('success')))
<div class="container-fluid alert bg-success" role="alert" id="status">
    <div class="container pt-4 pb-4 text-light">
    {{session('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
</div>
@endif

@if(!empty(session('error')))
<div class="container-fluid alert bg-danger" role="alert" id="status">
    <div class="container pt-4 pb-4 text-light">
    {{session('error')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
</div>
@endif