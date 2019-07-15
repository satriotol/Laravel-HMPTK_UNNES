@extends('layouts.default')
@section('content')
<style>
    .article {
        margin-top: 66px;
        padding-top: 30px;
        padding-bottom: 100px;
    }

    @media screen and (max-width: 700px) {
        .article {
            margin-top: 0px;
            padding-top: 66px;
            padding-bottom: 10px;
        }
    }

    .module {
        border-style: solid;
        border-color: #E6E6EA;
        border-radius: 10px;
        border-width: 1px;
        background-color: #EFEFF1;
        padding-top: 75px;
        padding-bottom: 75px;
    }
    .ot-circle {
        font-size: 75px;
        color: white;
        transition: all .3s;
    }
    .ot-circle:hover {
        color: #fed136;
    }

    @media screen and (max-width: 700px) {
        .jarak {
            margin-bottom: 40px;
        }
    }

</style>

<body>
    <div class="latar-lihat-berita container-fluid">
        <div class="article container-fluid">
            <div class="row">
                <div class="col-md-3 jarak">
                    <div class="module text-center">
                        <i class="fa fa-briefcase color1 ot-circle">
                        </i>
                        <br>
                        <p>
                            PRESS RELEASE
                        </p>
                    </div>
                </div>
                <div class="col-md-3 jarak">
                    <div class="module text-center">
                        <i class="fa fa-briefcase color1 ot-circle">
                        </i>
                        <br>
                        <p>
                            PRESS RELEASE
                        </p>
                    </div>
                </div>
                <div class="col-md-3 jarak">
                    <div class="module text-center">
                        <i class="fa fa-briefcase color1 ot-circle">
                        </i>
                        <br>
                        <p>
                            PRESS RELEASE
                        </p>
                    </div>
                </div>
                <div class="col-md-3 jarak">
                    <div class="module text-center">
                        <i class="fa fa-briefcase color1 ot-circle">
                        </i>
                        <br>
                        <p>
                            PRESS RELEASE
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3 jarak">
                    <div class="module text-center">
                        <i class="fa fa-briefcase color1 ot-circle">
                        </i>
                        <br>
                        <p>
                            PRESS RELEASE
                        </p>
                    </div>
                </div>
                <div class="col-md-3 jarak">
                    <div class="module text-center">
                        <i class="fa fa-briefcase color1 ot-circle">
                        </i>
                        <br>
                        <p>
                            PRESS RELEASE
                        </p>
                    </div>
                </div>
                <div class="col-md-3 jarak">
                    <div class="module text-center">
                        <i class="fa fa-briefcase color1 ot-circle">
                        </i>
                        <br>
                        <p>
                            PRESS RELEASE
                        </p>
                    </div>
                </div>
                <div class="col-md-3 jarak">
                    <div class="module text-center">
                        <i class="fa fa-briefcase color1 ot-circle">
                        </i>
                        <br>
                        <p>
                            PRESS RELEASE
                        </p>
                    </div>
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
