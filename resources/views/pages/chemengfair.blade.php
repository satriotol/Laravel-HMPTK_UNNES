@extends('layouts.default')
@section('content')

<body>
    <div class="latar-lihat-berita container-fluid">
        <div class="article container-fluid">
            <div class="row">
                <div class="col-md-4 jarak">
                    <a href="chemengfair/semnas">
                        <div class="module text-center">
                            <i class="fa fa-briefcase color1 ot-circle">
                            </i>
                            <p>SEMINAR NASIONAL</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 jarak">
                    <a href="chemengfair/iso">
                        <div class="module text-center">
                            <i class="fa fa-briefcase color1 ot-circle">
                            </i>
                            <p>ISO</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 jarak">
                    <a href="chemengfair/cesa">
                        <div class="module text-center">
                            <i class="fa fa-briefcase color1 ot-circle">
                            </i>
                            <p>CESA</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 jarak">
                    <a href="chemengfair/s2c">
                        <div class="module text-center">
                            <i class="fa fa-briefcase color1 ot-circle">
                            </i>
                            <p>S2C</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 jarak">
                    <a href="chemengfair/ception">
                        <div class="module text-center">
                            <i class="fa fa-briefcase color1 ot-circle">
                            </i>
                            <p>CEPTION</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 jarak">
                    <a href="chemengfair/chemengawards">
                        <div class="module text-center">
                            <i class="fa fa-briefcase color1 ot-circle">
                            </i>
                            <p>CHEMENG AWARDS</p>
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
