@if (session('message'))
    <div class="container ms_alert_handle z-600 position-absolute">
        <div class="ms_popup-message alert alert-success text-center position-absolute">
            <img src="{{asset('img/success.gif')}}" alt="">
            <div class="d-flex align-items-center">
                <strong> {{ session('message') }}</strong>
            </div>
        </div>
    </div>
@endif
