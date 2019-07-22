@extends('layouts.default')
@section('content')

<body>
    <div class="latar-lihat-berita container-fluid">
        <div class="article container-fluid">
            <div class="row">
                <div class="col-md-3 jarak">
                    <a href="">
                        <div class="module text-center">
                            <i class="fa fa-briefcase color1 ot-circle">
                            </i>
                            <p>PRESS RELEASE</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 jarak">
                    <a href="article/event">
                        <div class="module text-center">
                            <i class="fa fa-briefcase color1 ot-circle">
                            </i>
                            <p>EVENT</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 jarak">
                    <a href="">
                        <div class="module text-center">
                            <i class="fa fa-briefcase color1 ot-circle">
                            </i>
                            <p>CHEMIST</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 jarak">
                    <a href="">
                        <div class="module text-center">
                            <i class="fa fa-briefcase color1 ot-circle">
                            </i>
                            <p>ADVOKASI</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 jarak">
                    <a href="">
                        <div class="module text-center">
                            <i class="fa fa-briefcase color1 ot-circle">
                            </i>
                            <p>OPREC</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 jarak">
                    <a href="">
                        <div class="module text-center">
                            <i class="fa fa-briefcase color1 ot-circle">
                            </i>
                            <p>MATERI</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 jarak">
                    <a href="">
                        <div class="module text-center">
                            <i class="fa fa-briefcase color1 ot-circle">
                            </i>
                            <p>CERC</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 jarak">
                    <a href="">
                        <div class="module text-center">
                            <i class="fa fa-briefcase color1 ot-circle">
                            </i>
                            <p>STORE</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(".nav-link").each(function () {
            if ((window.location.pathname.indexOf($(this).attr('href'))) > -1) {
                $(this).addClass('activeMenuItem');
            }
        });

        function switchdropdown() {
            if ($("#bs-example-navbar-collapse-1").is(':hidden')) {
                $("#bs-example-navbar-collapse-2").css("visibility", "visible");
            }
            if ($("#bs-example-navbar-collapse-2").is(':visible')) {
                $("#bs-example-navbar-collapse-2").css("visibility", "hidden");
            }
        }

        $(document).ready(function () {
            $('#bs-example-navbar-collapse-2').css("visibility", "hidden");
        });

    </script>
    @stop
