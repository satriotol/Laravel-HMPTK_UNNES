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
                            <p>GA</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 jarak">
                    <a href="">
                        <div class="module text-center">
                            <img class="" src="images/departemen/HRD.png" alt="">
                            </i>
                            <p class="mt-3">HRD</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 jarak">
                    <a href="">
                        <div class="module text-center">
                            <img class="" src="images/departemen/PRC.png" alt="">
                            </i>
                            <p class="mt-3">PRC</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 jarak">
                    <a href="">
                        <div class="module text-center">
                            <img class="" src="images/departemen/SED.png" alt="">
                            </i>
                            <p class="mt-3">SED</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 jarak">
                    <a href="">
                        <div class="module text-center">
                            <img class="" src="images/departemen/RNT.png" alt="">
                            </i>
                            <p class="mt-3">RNT</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 jarak">
                    <a href="">
                        <div class="module text-center">
                            <img class="" src="images/departemen/STD.png" alt="">
                            </i>
                            <p class="mt-3">STD</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 jarak">
                    <a href="">
                        <div class="module text-center">
                            <img class="" src="images/departemen/SOCDEV.png" alt="">
                            </i>
                            <p class="mt-3">SOCDEV</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 jarak">
                    <a href="">
                        <div class="module text-center">
                            <img class="" src="images/departemen/TECHNO.png" alt="">
                            </i>
                            <p class="mt-3">TECHNO</p>
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
