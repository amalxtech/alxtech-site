@extends('app')

@section('content')

    <div class="jumbotron">
        <h1>Creative Solutions</h1>
        <p class="lead">We make complex tasks simple through technology and business procedures.</p>
    </div>

    <h2 class="text-center" style="margin-top:-20px;">Our Projects</h2>
    <p class="lead text-center">Here are some unique projects we have worked on.</p>

    <div class="row">
        <div class="col-sm-6 col-md-6">
            <div class="thumbnail">
                <a href="/scada-monitoring"><img src="/images/scada.jpg" alt="web based scada monitoring"></a>
                <div class="caption">
                    <h3>SCADA Monitoring</h3>
                    <p><a href="/scada-monitoring">View Details</a></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-6">
            <div class="thumbnail">
                <img src="/images/dispatch.jpg" alt="web based dispatching system">
                <div class="caption">
                    <h3>Utility Dispatching</h3>
                    <p>Details Coming Soon</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-6">
            <div class="thumbnail">
                <img src="/images/readiness.jpg" alt="web based room inventory system">
                <div class="caption">
                    <h3>Room Readiness</h3>
                    <p>Details Coming Soon</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-6">
            <div class="thumbnail">
                <img class="img-rounded" src="/images/comps4kids.jpg" alt="comps for kids">
                <div class="caption">
                    <h3>Comps for Kids</h3>
                    <p>Details Coming Soon</p>
                </div>
            </div>
        </div>
    </div>

@endsection
