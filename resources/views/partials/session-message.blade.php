@if (session('message'))
    <div class="container w-50 ms_alert_handle z-600 position-relative">
        <div class="ms_popup-message alert alert-success text-center position-absolute">
            <img src="{{asset('img/success.gif')}}" alt="">
            <strong> {{ session('message') }}</strong>
        </div>
    </div>
@endif
