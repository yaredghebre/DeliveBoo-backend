@if (session('message'))
    <div class="container w-50 ms_alert_handle z-1 position-absolute ">

        <div class="alert alert-success text-center">
            <strong> {{ session('message') }}</strong>
        </div>
    </div>
@endif
