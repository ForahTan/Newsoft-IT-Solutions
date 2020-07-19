@extends('layouts.app')

@section('content')

<div class="row section" id="header">
    <div class="left-side-container col-md-5 text-center text-md-left align-right align-self-center">
        <h1 class="wow animate__animated animate__lightSpeedInLeft"><b>An App For Anything<br> And Everything</b></h1>
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
    <div class="right-side-container col-md-7 background wow animate__animated animate__fadeIn">
        <img src="{{ asset('images/group 263.png') }}"
            class="img-fluid photo-absolute first-phone ">
        <img src="{{ asset('images/group 264.png') }}"
            class="img-fluid photo-absolute second-phone">
    </div>
</div>

<div class="row big-top-bottom-container section" id="what_is_lobbi">
    {{-- Bridging Relationship  --}}
    <div class="col-md-6 left-side-container order-1 order-md-1">
        <img src="{{ asset('images/Cloud_1.svg') }}" class="img-fluid animation_component animate__animated animate__shakeX animate__infinite infinite animate__slower" style="position: absolute;">
        <img src="{{ asset('images/Group 232.svg') }}" class="img-fluid">
    </div>
    <div class="col-md-6 right-side-container pt-md-5 order-2 order-md-2">
        <div class="line line-left"></div>
        <h1 class="orange-text title-padding-top wow animate__animated animate__lightSpeedInRight"><b>Bridging
                Relationships</b></h1>
        <p>Texting, voice & video call your fingertips</p>
        <div class="text-center">
            <button class='btn btn-primary mr-md-5 text-center mb-2 mb-md-0'>Learn More</button>
            <button class='btn btn-secondary text-center'>Learn More</button>
        </div>
    </div>

    {{-- Capturing Moment --}}
    <div class="col-md-6 pt-md-5 left-side-container order-4 order-md-3">
        <h1 class="orange-text title-padding-top wow animate__animated animate__lightSpeedInLeft"><b>Capturing
                Moments</b></h1>
        <p>Keep & share your precious experiences <br> with others</p>
        <button class='btn btn-secondary'>Learn More</button>
        <div class="line line-right"></div>
    </div>

    <div class="col-md-6 right-side-container text-right order-3 order-md-4">
        <img src="{{ asset('images/Cloud_2.svg') }}" class="img-fluid animation_component animate__animated animate__shakeX animate__infinite infinite animate__slower" style="position: absolute;">
        <img src="{{ asset('images/Group 233.svg') }}" class="img-fluid">
    </div>

    {{-- Digitalizing Transactions --}}
    <div class="col-md-6 left-side-container order-5 order-md-5">
        <img src="{{ asset('images/Money.svg') }}" class="img-fluid animation_component animate__animated animate__flash animate__infinite infinite animate__slower" style="position: absolute;">
        <img src="{{ asset('images/Group 234.svg') }}" class="img-fluid">
    </div>
    <div class="col-md-6 right-side-container pt-md-5 order-6 order-md-6">
        <div class="line line-left"></div>
        <h1 class="orange-text title-padding-top wow animate__animated animate__lightSpeedInRight"><b>Digitalizing
                Transactions</b></h1>
        <p>Secure platform to perform online transactions</p>
        <button class='btn btn-secondary'>Learn More</button>
    </div>
</div>

<div class="row big-top-bottom-container section" id="why_lobbi">
    <div class="col-md-12 text-center pb-md-5 wow animate__animated animate__fadeIn">
        <h1><b>Why Lobbi</b></h1>
        <p>A lot of amazing cool feature</p>
    </div>

    <div class="col-md left-side-container text-center text-md-right order-2 order-md-1 wow animate__animated animate__flipInX">
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

    <div class="col-md right-side-container text-center text-md-left order-3 order-md-3  wow animate__animated animate__flipInX">
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

<div class="row justify-content-center big-top-bottom-container section" id="review">
    <div class="col-md-12 text-center pb-md-5 wow animate__animated animate__fadeIn">
        <h1><b>Review</b></h1>
        <p>kind words from app users</p>
    </div>

    <div class="col-md-8 swiper-container container-both-side wow animate__animated animate__zoomInDown">
        <div class="swiper-wrapper">
            <div class="swiper-slide text-center pb-md-5 pb-2">
                <img src="{{ asset('images/Ellipse.png') }}" class='img-fluid p-md-3'>
                <div class="row">
                    <div class="col text-right d-none d-md-block">
                        <img src="{{ asset('images/left-quotes.svg') }}" class="img-fluid">
                    </div>
                    <div class="col-md-7 text-center text-image-container">
                        <p class="comment pb-md-4">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
                            quam
                            nihil molestiae
                            vel. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse nihil molestiae
                            vel</p>

                        <div class="line line-center"></div>

                        <p>Setephanie Elise <br>
                            <small><b>App User</b></small>
                        </p>

                    </div>
                    <div class="col text-left d-none d-md-block">
                        <img src="{{ asset('images/right-quotes.svg') }}" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="swiper-slide text-center pb-md-5 pb-2">
                <img src="{{ asset('images/Ellipse.png') }}" class='img-fluid p-md-3'>
                <div class="row">
                    <div class="col text-right d-none d-md-block">
                        <img src="{{ asset('images/left-quotes.svg') }}" class="img-fluid">
                    </div>
                    <div class="col-md-7 text-center text-image-container">
                        <p class="comment pb-md-4">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
                            quam
                            nihil molestiae
                            vel. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse nihil molestiae
                            vel</p>

                        <div class="line line-center"></div>

                        <p>Setephanie Elise <br>
                            <small><b>App User</b></small>
                        </p>

                    </div>
                    <div class="col text-left d-none d-md-block">
                        <img src="{{ asset('images/right-quotes.svg') }}" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="swiper-slide text-center pb-md-5 pb-2">
                <img src="{{ asset('images/Ellipse.png') }}" class='img-fluid p-md-3'>
                <div class="row">
                    <div class="col text-right d-none d-md-block">
                        <img src="{{ asset('images/left-quotes.svg') }}" class="img-fluid">
                    </div>
                    <div class="col-md-7 text-center text-image-container">
                        <p class="comment pb-md-4">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
                            quam
                            nihil molestiae
                            vel. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse nihil molestiae
                            vel</p>

                        <div class="line line-center"></div>

                        <p>Setephanie Elise <br>
                            <small><b>App User</b></small>
                        </p>

                    </div>
                    <div class="col text-left d-none d-md-block">
                        <img src="{{ asset('images/right-quotes.svg') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<div class="row background big-top-bottom-container wow animate__animated animate__fadeIn section" id="download_this_app">
    <div class="col-md-6 left-side-container text-center pb-md-5 ">
        <h3><b>Download This App Now</b></h3>
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
    <div class="col-md-6 right-side-container text-center">
        <h3><b>Stay with Us</b></h3>
        <form>
            @csrf
            <div class="input-group">
                <input type="email" class="form-control" id="email" placeholder="Your Email Address">
                <div class="input-group-append">
                    <button class="subscribe-button" type="button">Subscribe</button>
                </div>
            </div>
        </form>

        <p class="text-left"><small>I hereby confirm that I understand & accept you Privacy Policy and Term & Condition
                of use of
                website</small></p>
    </div>
</div>

<div class="row big-top-bottom-container justify-content-center section" id="faq">
    <div class="col-md-12 text-center pb-md-5 wow animate__animated animate__fadeIn">
        <h1><b>FAQs</b></h1>
        <p>Have a question? Look here</p>
    </div>

    <div class="col-md-6 left-side-container">
        <div id="accordion">

            <div class="card">
                <div class="card-header" id="headingOne" style="background-color:rgba(0,0,0,.03);">
                    <div class="row">
                        <div class="col-md-11 col-10">
                            <p><b>What is Lobbi?</b></p>
                        </div>
                        <div class="col-md-1 col-1">
                            <p class="mb-0">
                                <button class="btn-link text-right" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                    <div class="card-body">
                        <p>Quis autem vel eum iure reprehenderit qui un ea voluptate velit esse quam nihil molestiae
                            consequatur vel illum qui dolorem eum fugiat quo</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwo">
                    <div class="row">
                        <div class="col-md-11  col-10">
                            <p><b>How do I sign up for Lobbi?</b></p>
                        </div>
                        <div class="col-md-1 col-1">
                            <p class="mb-0">
                                <button class="btn-link text-right" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="true" aria-controls="collapseTwo">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                    <div class="card-body">
                        <p>Quis autem vel eum iure reprehenderit qui un ea voluptate velit esse quam nihil molestiae
                            consequatur vel illum qui dolorem eum fugiat quo</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingThree">
                    <div class="row">
                        <div class="col-md-11  col-10">
                            <p><b>What make Lobbi different from others app?</b></p>
                        </div>
                        <div class="col-md-1 col-1">
                            <p class="mb-0">
                                <button class="btn-link text-right" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                    <div class="card-body">
                        <p>Quis autem vel eum iure reprehenderit qui un ea voluptate velit esse quam nihil molestiae
                            consequatur vel illum qui dolorem eum fugiat quo</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingFour">
                    <div class="row">
                        <div class="col-md-11  col-10">
                            <p><b>What I can do with Lobbi e-wallet?</b></p>
                        </div>
                        <div class="col-md-1 col-1">
                            <p class="mb-0">
                                <button class="btn-link text-right" data-toggle="collapse" data-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>

                <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                    <div class="card-body">
                        <p>Quis autem vel eum iure reprehenderit qui un ea voluptate velit esse quam nihil molestiae
                            consequatur vel illum qui dolorem eum fugiat quo</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingFive">
                    <div class="row">
                        <div class="col-md-11  col-10">
                            <p><b>How do I sign up for Lobbi?</b></p>
                        </div>
                        <div class="col-md-1 col-1">
                            <p class="mb-0">
                                <button class="btn-link text-right" data-toggle="collapse" data-target="#collapseFive"
                                    aria-expanded="false" aria-controls="collapseFive">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>

                <div id="collapseFive" class="collapse" aria-labelledby="headingFive">
                    <div class="card-body">
                        <p>Quis autem vel eum iure reprehenderit qui un ea voluptate velit esse quam nihil molestiae
                            consequatur vel illum qui dolorem eum fugiat quo</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingSix">
                    <div class="row">
                        <div class="col-md-11  col-10">
                            <p><b>How do I sign up for Lobbi?</b></p>
                        </div>
                        <div class="col-md-1 col-1">
                            <p class="mb-0">
                                <button class="btn-link text-right" data-toggle="collapse" data-target="#collapseSix"
                                    aria-expanded="false" aria-controls="collapseSix">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>

                <div id="collapseSix" class="collapse" aria-labelledby="headingSix">
                    <div class="card-body">
                        <p>Quis autem vel eum iure reprehenderit qui un ea voluptate velit esse quam nihil molestiae
                            consequatur vel illum qui dolorem eum fugiat quo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 align-self-end right-side-container text-right">
        <img src="{{ asset('images/Vector.png') }}" class="img-fluid">
    </div>
</div>

<div class="row big-top-bottom-container justify-content-center section" id="follow_our_news">
    <div class="col-md-12 text-center pb-md-5 wow animate__animated animate__fadeIn">
        <h1><b>Follow Our News</b></h1>
        <p>Iorem ipsum dolor sit amet</p>
    </div>
    <div class="col-md left-side-container">
        <div class="card wow animate__animated animate__pulse">
            <img class="card-img-top" src="{{ asset('images/blank_image.svg') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                @php
                $text= "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                a galley of type and scrambled it to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.";
                @endphp

                <p class="card-text">{{Str::limit(strip_tags($text),150)}}</p>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <small>2 days ago</small>
                    </div>
                    <div class="col text-right">
                        <a href="#"><small>Read More</small></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md">
        <div class="card wow animate__animated animate__pulse">
            <img class="card-img-top" src="{{ asset('images/blank_image.svg') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                @php
                $text= "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                a galley of type and scrambled it to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.";
                @endphp

                <p class="card-text">{{Str::limit(strip_tags($text),150)}}</p>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <small>2 days ago</small>
                    </div>
                    <div class="col text-right">
                        <a href="#"><small>Read More</small></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md right-side-container">
        <div class="card wow animate__animated animate__pulse">
            <img class="card-img-top" src="{{ asset('images/blank_image.svg') }}" alt="Card image cap">
            <div class="card-body ">
                <h5 class="card-title">Special title treatment</h5>
                @php
                $text= "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                a galley of type and scrambled it to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.";
                @endphp

                <p class="card-text">{{Str::limit(strip_tags($text),150)}}</p>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <small>2 days ago</small>
                    </div>
                    <div class="col text-right">
                        <a href="#"><small>Read More</small></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row big-top-bottom-container justify-content-center section " id="get_in_touch">
    <div class="col-md-12 background"></div>
    <div class="col-md-12 text-center pb-md-5 pt-md-5 wow animate__animated animate__fadeIn">
        <h1><b>Get In Touch</b></h1>
        <p>It all starts with a conversion. Let's talk</p>
    </div>

    <div class="col-md-5 left-side-container pb-3 pb-md-0 wow animate__animated animate__flipInX">
        <h1 class='orange-text'>lobbi</h1>
        <hr>
        {{-- Address --}}
        <div class="row">
            <div class="col-md-5">
                <p><img src="{{ asset('images/address.svg') }}" class='img-fluid'>
                    Address</p>
            </div>
            <div class="col-md-1 d-none d-md-block">
                |
            </div>
            <div class="col-md-6">
                <p>29, Level 10, The Boulevard Office, Lingkaran Syed Putra, Mid Valley City, 59200 Kuala Lumpur</p>
            </div>
        </div>
        {{-- Working Hours --}}
        <div class="row">
            <div class="col-md-5">
                <p>
                    <img src="{{ asset('images/working_hours.svg') }}" class='img-fluid'>
                    Working Hours
                </p>
            </div>
            <div class="col-md-1 d-none d-md-block">
                |
            </div>
            <div class="col-md-6">
                <p>9am - 6pm</p>
            </div>
        </div>
        {{-- Tel --}}
        <div class="row">
            <div class="col-md-5">
                <p>
                    <img src="{{ asset('images/tel.svg') }}" class='img-fluid'>
                    Tel
                </p>
            </div>
            <div class="col-md-1 d-none d-md-block">
                |
            </div>
            <div class="col-md-6">
                <p>014 - 963 9067</p>
            </div>
        </div>
        {{-- Email --}}
        <div class="row">
            <div class="col-md-5">
                <p><img src="{{ asset('images/email.svg') }}" class='img-fluid'>
                    Address</p>
            </div>
            <div class="col-md-1 d-none d-md-block">
                |
            </div>
            <div class="col-md-6">
                <p>hello@lobbi.com.my</p>
            </div>
        </div>
        <hr>
        <h6>Connect with us. Spread the words.</h6>
        <a href="#"><img src="{{ asset('images/facebook.svg') }}" class="img-fluid"></a>
        <a href="#"><img src="{{ asset('images/instagram.svg') }}" class="img-fluid \"></a>
    </div>

    <div class="col-md-6 left-side-container right-side-container text-right wow animate__animated animate__flipInX">
        <h6 class='text-left'>Drop us for business opportunity</h6>
        <form>
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="name" name='name' placeholder="Name">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <textarea class="form-control" id="message" rows="3" placeholder="Message"></textarea>
            </div>
            <button type="submit" class="orange-text">Submit ></button>
        </form>
    </div>
</div>
@endsection