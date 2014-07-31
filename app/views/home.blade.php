@extends('layouts.default')

@section('content')
    <div class="row-fluid slider-content">
        <div class="span12 slider">
            <div class="flexslider">
                <ul class="slides">
                    <li class="da-slider">

                        <div class="da-slide row">
                            <div class="span5">
                                <h2>Mail pictures from anywhere.</h2>
                                <p>Wether you're travelling in America, or your own neighborhood, Foldagrams are always
                                    easy to send.  Just upload a photo, write a message and provide an address...that's it! All Foldagrams
                                    are mailed on your behalf from right here in the U.S., no matter where YOU are!</p>
                                <a href="#popup" data-toggle="modal" class="da-link create" onClick="_gaq.push(['_trackEvent', 'Main', 'Click', 'Foldagram Order2']);">Click Here to Get Started!</a>
                                <a href="#video" class="da-link video" data-toggle="modal" onClick="_gaq.push(['_trackEvent', 'Main', 'Click', 'Video2']);">See the Foldagram Video!</a>
                            </div>
                            <div class="da-img span5"><img src="img/slide2.png" alt="image01" /></div>
                        </div>
                    </li>
                    <li>
                        <div class="da-slide row">
                            <div class="span5">
                                <h2>New Visitors: Welcome!</h2>
                                <p>Thank you for visiting the Foldagram!  Feel free to learn a little more about us with the video below,
                                    or go ahead and start creating Foldagrams.  You can always pre-purchase credits, or just pay for your
                                    orders one at a time.  Questions, comments?  Use our contact form!</p>
                                <a href="#popup" data-toggle="modal" class="da-link create" onClick="_gaq.push(['_trackEvent', 'Main', 'Click', 'Foldagram Order']);">Click Here to Get Started!</a>
                                <a href="#video" class="da-link video" data-toggle="modal" onClick="_gaq.push(['_trackEvent', 'Main', 'Click', 'Video']);">See the Foldagram Video!</a>
                            </div>
                            <div class="da-img span5"><img src="img/slide3.png" alt="image01" /></div>
                        </div>
                    </li>
                    <li>
                        <div class="da-slide row">
                            <div class="span5">
                                <h2>Share your work!</h2>
                                <p>To date, there hasn't been a good method for sharing your photography.  Sure, you can
                                    put it on facebook or any other website, but the best photos need to be printed.  Foldagram
                                    makes it easy to send someone a beautiful print, hassle free!</p>
                                <a href="#popup" data-toggle="modal" class="da-link create" onClick="_gaq.push(['_trackEvent', 'Main', 'Click', 'Foldagram Order2']);">Click Here to Get Started!</a>
                                <a href="#video" class="da-link video" data-toggle="modal" onClick="_gaq.push(['_trackEvent', 'Main', 'Click', 'Video2']);">See the Foldagram Video!</a>
                            </div>
                            <div class="da-img span5"><img src="img/slide1.png" alt="image01" /></div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="row-fluid fguid">
        <div class="span4 you-click">
            <h2>You Click</h2>
            <img src="img/photo.png" />
            <ul>
                <li>Upload a photo and write a message</li>
                <li>fill out the addresses</li>
                <li>Buy one at a time or start an account</li>
            </ul>
        </div>
        <div class="span4 we-send">
            <h2>We Send</h2>
            <img src="img/fly.png" />
            <ul>
                <li>Your custom Foldagram is printed</li>
                <li>We stamp it for you</li>
                <li>Foldagrams are mailed weekdays at noon</li>
            </ul>
        </div>
        <div class="span4 they-fold">
            <h2>They Fold</h2>
            <img src="img/mail.png" />
            <ul>
                <li>Open the Foldagram</li>
                <li>Fold into standing positions</li>
                <li>Skip the fridge magnets and picture frames!</li>
            </ul>
        </div>
    </div>
@stop