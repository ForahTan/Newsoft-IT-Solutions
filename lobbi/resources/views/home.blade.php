@extends('layouts.app')


@section('content')

<div class="row" id="header">
    <div class="left-side-container col-md-5 text-center text-md-left align-right align-self-center">
        <h1><b>An App For Anything<br> And Everything</b></h1>
        <p>The most useful app you'll ever use</p>
        <div class="btn-group">
            <button class="btn btn-primary btn-no-right-border">
                <img src="{{ asset('images/icons8-android-os.svg') }}" class="img-fluid icon orange-icon">
                Android
            </button>
            <button class="btn btn-primary btn-no-left-border">
                <img src="{{ asset('images/icons8-apple-logo.svg') }}" class="img-fluid icon orange-icon">
                IOS
            </button>
        </div>
    </div>
    <div class="right-side-container col-md-7 background">
        <img src="{{ asset('images/group 263.png') }}" class="img-fluid photo-absolute first-phone">
        <img src="{{ asset('images/group 264.png') }}" class="img-fluid photo-absolute second-phone">
    </div>
</div>

<div class="row big-top-bottom-container" id="what_is_lobbi">
    {{-- Bridging Relationship  --}}
    <div class="col-md-6 left-side-container order-1 order-md-1">
        <img src="{{ asset('images/Group 232.png') }}" class="img-fluid">
    </div>
    <div class="col-md-6 right-side-container pt-md-5 order-2 order-md-2">
        <div class="line line-left"></div>
        <h1 class="orange-text title-padding-top"><b>Bridging Relationships</b></h1>
        <p>Texting, voice & video call your fingertips</p>
        <button class='btn btn-primary'>Learn More</button>
    </div>

    {{-- Capturing Moment --}}
    <div class="col-md-6 pt-md-5 left-side-container order-4 order-md-3">
        <h1 class="orange-text title-padding-top"><b>Capturing Moments</b></h1>
        <p>Keep & share your precious experiences <br> with others</p>
        <button class='btn btn-primary'>Learn More</button>
        <div class="line line-right"></div>
    </div>

    <div class="col-md-6 right-side-container text-right order-3 order-md-4">
        <img src="{{ asset('images/Group 233.png') }}" class="img-fluid">
    </div>

    {{-- Digitalizing Transactions --}}
    <div class="col-md-6 left-side-container order-5 order-md-5">
        <img src="{{ asset('images/Group 234.png') }}" class="img-fluid">
    </div>
    <div class="col-md-6 right-side-container pt-md-5 order-6 order-md-6">
        <div class="line line-left"></div>
        <h1 class="orange-text title-padding-top"><b>Digitalizing Transactions</b></h1>
        <p>Secure platform to perform online transactions</p>
        <button class='btn btn-primary'>Learn More</button>
    </div>
</div>

<div class="row big-top-bottom-container" id="why_lobbi">
    <div class="col-md-12 text-center">
        <h1><b>Why Lobbi</b></h1>
        <p class="pb-md-5">A lot of amazing cool feature</p>
    </div>

    <div class="col-md left-side-container text-center text-md-right order-2 order-md-1">
        <div class="text-image-container">
            <img src="{{ asset('images/Group-2.png') }}" class="img-fluid">
            <h5>RELIABLE MESSAGING</h5>
            <p class="pb-4">Quis autem vel eum iure reprehendrit
                qui in ea voluptate velit esse quam nihil molestiae vel</p>
        </div>

        <div class="text-image-container">
            <img src="{{ asset('images/Group 261.png') }}" class="img-fluid">
            <h5>MOMENTS</h5>
            <p class="pb-4">This is short description to explain the features of sharing moments through Lobbi App
                voluptate
                velit esse</p>
        </div>

        <div class="text-image-container">
            <img src="{{ asset('images/wallet.png') }}" class="img-fluid">
            <h5>SECURE E-WALLET</h5>
            <p class="pb-4">This is short description to explain the features of e-wallet eg easy, secure or instant
                voluptate velit esse</p>
        </div>

    </div>
    <div class="col-md-4 text-center pb-4 pb-md-0 order-1 order-md-2">
        <img src="{{ asset('images/Group.png') }}" class="img-fluid">
    </div>

    <div class="col-md right-side-container text-center text-md-left order-3 order-md-3">
        <div class="text-image-container right">
            <img src="{{ asset('images/Ellipse 2.png') }}" class="img-fluid">
            <h5>COMMUNICATIONS</h5>
            <p class="pb-4">Quis autem vel eum iure reprehendrit
                qui in ea voluptate velit esse quam nihil<br> molestiae vel</p>
        </div>

        <div class="text-image-container right">
            <img src="{{ asset('images/Group-1.png') }}" class="img-fluid">
            <h5>BUSINESS ACCOUNT</h5>
            <p class="pb-4">Quis autem vel eum iure reprehendrit
                qui in ea voluptate velit esse quam nihil<br> molestiae vel</p>
        </div>

        <div class="text-image-container right">
            <img src="{{ asset('images/Ellipse 2.png') }}" class="img-fluid">
            <h5>CONVENIENT</h5>
            <p class="pb-4">Quis autem vel eum iure reprehendrit
                qui in ea voluptate velit esse quam nihil<br> molestiae vel</p>
        </div>
    </div>
</div>

@endsection