@extends('app')

@section('content')

    <h2 class="text-center page-header">SCADA Monitoring <small>web based</small></h2>
    <!-- <div class="row">
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="/images/scada.jpg" alt="...">
            </a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="/images/scada.jpg" alt="...">
            </a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="/images/scada.jpg" alt="...">
            </a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="/images/scada.jpg" alt="...">
            </a>
        </div>

    </div>
    -->
    <div class="alert alert-info"><strong>Interested in SCADA Monitoring?</strong> <a href="http://scada.alxtech.net" target="_blank">Click here to checkout the newest version in action</a>.</div>
    <h3>Description of the project</h3>
    <p>This web based SCADA Monitoring system collects, stores, and quickly analyzes data sent to it from pre-installed controllers, sensors and relays.
    the original system was designed for heavy mobile use.  We give utility workers the ability to view their network's status at anytime,
    on any internet enabled device.</p>
    <p class="lead text-center">Watch the system in action:</p>
    <div class="embed-responsive embed-responsive-16by9">
        End User View, on a mobile device.
        <video id="end-user" class="video-js vjs-default-skin" controls preload="none" width="640" height="264"
               data-setup="{}">
            <source src="https://s3.amazonaws.com/alxtech/site/mobile-view2.mp4" type='video/mp4' />
            <p class="vjs-no-js">you don't have JS? weird.</p>
        </video>
    </div>

    <div class="embed-responsive embed-responsive-16by9">
        Admin view, on a laptop (or tablet).
        <video id="end-user" class="video-js vjs-default-skin" controls preload="none" width="640" height="264"
               data-setup="{}">
            <source src="https://s3.amazonaws.com/alxtech/site/admin-video.mp4" type='video/mp4' />
            <p class="vjs-no-js">you don't have JS? weird.</p>
        </video>
    </div>



@endsection

@section('styles')
    <link href="/videojs/video-js.css" rel="stylesheet" type="text/css">
@endsection

@section('scripts')
    <script src="/videojs/video.js"></script>
@endsection