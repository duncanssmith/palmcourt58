<!DOCTYPE html>
<html>
    @section('head')
        @include('layout.head')
    @show
    <body data-spy="scroll" data-target="#pcp-navbar" data-offset="90">

        @section('nav')
            @include('layout.nav')
        @show
        <div id="content">
            <ul class="list-group">
                <li id="section-item-1" href="#section-1" class="list-group-item section photo " data-toggle="collapse">Palm Court Pavilion</li>
                <div id="section-1" class="container section collapse">
                    <div class="row">
                        <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                           <h1 class="title">Palm Court Pavilion </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                            @include('partials.text_1')
                        </div>
                    </div>
                    <div class="row video">
                        <div class="col-lg-10 col-md-6 col-sm-4 col-xs-2">
                            @include('partials.you-tube-video')
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                            @include('partials.opening_times')

                        </div>
                    </div>
                </div>

                <li id="section-item-2" href="#section-2" class="list-group-item section photo section-link-2" data-toggle="collapse">Menus
                <div id="section-2" class="container section collapse">
                    <div class="row top-row">
                        <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                            <h1 class="title">Menu</h1>
                        </div>
                    </div>
                    <div class="row middle-row">
                        <div class="col-md-8 col-md-offset-0">
                            <div id="menus">
                                <ul class="list-group">
                                    @foreach ($menus as $menu)
                                        <li class="list-group-item" id="menuLink-{{ $menu->id }}" data-toggle="collapse" href="#menu-{{ $menu->id }}">
                                            <a class="#menuLink{{ $menu->id }}" title="View menu" id="#menu-{{ $menu->id }}">
                                                {{ $menu->title }}
                                                <i class="fa fa-chevron-down"></i>&nbsp;
                                            </a>&nbsp;
                                            <a href="{{ $menu->path }}" target="_blank" title="Download">
                                                <i class="fa fa-cloud-download"></i>&nbsp;
                                            </a>
                                        </li>
                                        <div class="menu collapse" id="menu-{{ $menu->id }}">
                                            @if ($menu->extension == 'pdf')
                                                <embed src="../storage/{{ $menu->path }}?page=1&toolbar=0&navpanes=0@scrollbar=0&view=fit"
                                                    type="application/pdf"
                                                    width="100%" height="600px"/>
                                            @else
                                                <img src="../storage/{{ $menu->path }}" width="30%"/>
                                            @endif
                                        </div>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <li id="section-item-3" href="#section-3" class="list-group-item section photo section-link-3" data-toggle="collapse">Views
                <div id="section-3" class="container section collapse">
                    <div class="row top-row">
                        <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                            <h1 class="title">Views</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                            {{--<div class="fotorama" data-nav="thumbs">--}}
                                @foreach ($carouselImages as $image)
                                    <img src="/media/images/{{ $image }}" width="40px" />
                                @endforeach
                            {{--</div>--}}

                        </div>
                    </div>
                </div>

                <li id="section-item-4" href="#section-4" class="list-group-item section photo section-link-4" data-toggle="collapse">Functions
                <div id="section-4" class="container section collapse">
                    <div class="row top-row">
                        <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                            <h1 class="title">Functions</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                            @include('partials.text_2')
                        </div>
                        <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                            @include('partials.text_3')
                        </div>
                        <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                            <p class="download-box">
                                <a href="/media/images/Documents/2018/06/Functions.pdf" target="_blank" title="Download Functions info">Functions information <i class="fa fa-download"></i></a><br>
                                <h1>Please call us on 01903 212 011 for a quote</h1>
                            </p>
                        </div>
                    </div>
                </div>

                <li id="section-item-5" href="#section-5" class="list-group-item section photo section-link-5" data-toggle="collapse">About
                <div id="section-5" class="container section collapse">
                    <div class="row top-row">
                        <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                            <h1 class="title">About us</h1>
                        </div>
                    </div>
                    <div class="row middle-row">
                        <div class="col-lg-5 col-md-4 col-sm-4 col-xs-3">
                            @include('partials.address')
                        </div>
                        {{--<div class="col-lg-8 col-md-5 col-sm-4 col-xs-3">--}}
                        <div class="col-lg-7 col-md-8 col-sm-8 col-xs-4">
                             @include('partials.text_4')
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
                             @include('partials.text_5')
                        </div>
                    </div>
                    <div class="row bottom-row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
                            @include('partials.opening_times')
                        </div>
                    </div>
                    <div class="row bottom-row">
                        <div class="col-lg-10 col-md-12 col-sm-6 col-xs-4">
                            <div class="google-map-container">
                                <h1>How to find us</h1>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.9094489491195!2d-0.36574868437995894!3d50.81431636896051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTDCsDQ4JzUxLjUiTiAwwrAyMSc0OC44Ilc!5e0!3m2!1sen!2suk!4v1451944856246" width="100%" height="400px" frameborder="2" style="border:2px; padding:4px;" ></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </body>
    @section('foot')
        @include('layout.foot')
    @show
</html>
