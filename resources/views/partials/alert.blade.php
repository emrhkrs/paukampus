@if($errors)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="notification-section">
            {{$error}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endforeach
@endif

@if(session()->has('message'))

    <div class="alert alert-{{session('status')}} alert-dismissible fade show" role="alert" id="notification-section">
        {{session('message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif


<script>
    setTimeout(function () {
        $('.alert').slideUp(100);
    }, 6000);
</script>
