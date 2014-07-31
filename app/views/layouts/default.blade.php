<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
        <title>{{ $title }}</title>
        <meta name="viewport" content="width=device-width">
        <link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" type="text/css">
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-responsive.min.css') }}
        {{ HTML::style('css/style.css') }}
        {{ HTML::style('css/slider.css') }}

        <script type="text/javascript">
            var base_url = 'http://localhost/';
            var total_itme = "0";
        </script>


        {{ HTML::script('js/jquery.js') }}
        {{ HTML::script('js/slider.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}




        {{ HTML::style('css/jquery-ui-git.css') }}
        {{ HTML::script('js/jquery-ui-git.js') }}
        {{ HTML::script('js/jquery.limit.js') }}

        {{ HTML::script('js/jquery.flexslider.js') }}

        {{ HTML::script('js/global.js') }}
        {{ HTML::script('js/jquery.validate.js') }}
    </head>
    <body class="{{ $class }}">
        <div class="container">
            <div class="row-fluid header">
                <div class="span4 logo">
                    <a href="{{ URL::to('/') }}"><img class="logo" src="{{ URL::asset('img/logo.png') }}"</a>
                </div>
                <div class="span3 menu">
                    <ul>
                        <li>
                            <a href="#popup" data-toggle="modal">
                                Create Foldagram
                            </a>
                        </li>
                        <li>
                            {{ link_to_route('pcredit', 'Purchase Credits') }}
                        </li>
                        <li>
                            {{ link_to_route('cart', 'Cart') }}
                        </li>
                        <li>
                            {{ link_to_route('contact', 'Contact') }}
                        </li>
                        <li>
                            {{ link_to_route('userlogin', 'Login') }}
                        </li>
                        <li>
                            {{ link_to_route('register', 'Register') }}
                        </li>
                    </ul>
                </div>
                <div class="span2 social">
                    <a href="https://www.facebook.com/TheFoldagram" target="_blank"><img class="facebook" src="{{ URL::to('/') }}/img/img_trans.png"</a>
                    <a href="https://www.twitter.com/TheFoldagram" target="_blank"><img class="twit" src="{{ URL::to('/') }}/img/img_trans.png"</a>
                    <a href="https://www.pinterest.com/TheFoldagram" target="_blank"><img class="ping" src="{{ URL::to('/') }}/img/img_trans.png"</a>
                </div>
            </div>



            @yield('inner-banner')
            <div class="row-fluid content">
                @yield('content')
            </div>

            <div class="row-fluid subscribe-form">
                <div class="span12 subscribe-content">

                    @if ($errors->any())
                        <ul>
                            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                        </ul>
                    @endif

                    {{ Form::open(array('url' => '/subscribe')); }}
                    {{ Form::label('something', 'Sign up for our newsletter and updates!'); }}
                    {{ Form::text('email', null, array('class' => 'input-large', 'placeholder' => '' )); }}
                    {{ Form::submit('Subscribe'); }}
                    {{ Form::close(); }}
                </div>
            </div>

            <div class="row-fluid footer">
                <div class="span8 footer-menu">
                    <ul>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                    </ul>
                </div>
                <div class="span4 copyright">
                    <h4>Foldagram is patent pending</h4>
                    <p>&copy;Copyright all encompassing productions 11c, 2014</p>
                </div>
            </div>
        </div>
        @include('foldagram')
    </body>
</html>