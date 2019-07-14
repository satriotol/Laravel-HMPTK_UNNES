@extends('layouts.default')
@section('content')
<body>
    
    <section class="slide">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/download.svg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Selamat Datang</h5>
                        <p>HIMPROTEKKIM UNNES</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/download.svg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/download.svg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="isi">
        <div class="container">
            <div class="row">
                <div class="offset-sm-4 col-sm-4 text-center">
                    <h2 class="main-page-title">PRESS RELEASE</h2>
                </div>
            </div>
        </div>
        <section class="isi-berita">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8" style="text-align: justify">
                        <article>
                            <div class="contoh-berita">
                                <div class="foto-berita">
                                    <a href="">
                                        <img class="img-berita" src="upload/default.jpg" alt="">
                                    </a>
                                </div>
                                <div class="tampilan-berita">
                                    <div class="p-berita">
                                        <a href="">
                                            <h2>JUDUL</h2>
                                        </a>
                                        <p>Tanggal</p>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, quia
                                            tempore.
                                            Dolore
                                            eveniet
                                            cupiditate ex at nobis tempora voluptatum quaerat, a laborum labore nulla
                                            beatae
                                            quidem
                                            placeat
                                            eaque quibusdam quisquam?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article>
                            <div class="contoh-berita">
                                <div class="foto-berita">
                                    <a href="">
                                        <img class="img-berita" src="upload/HIMPRO-logo.png" alt="">
                                    </a>
                                </div>
                                <div class="tampilan-berita">
                                    <div class="p-berita">
                                        <a href="">
                                            <h2>JUDUL</h2>
                                        </a>
                                        <p>Tanggal</p>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, quia
                                            tempore.
                                            Dolore
                                            eveniet
                                            cupiditate ex at nobis tempora voluptatum quaerat, a laborum labore nulla
                                            beatae
                                            quidem
                                            placeat
                                            eaque quibusdam quisquam?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-4">
                        <h2 class="text-center main-page-title">VIDEO HMPTK</h2>
                        <video width="100%" height="240" controls>
                            <source src="images/video99.mp4" type="video/mp4">
                        </video>
                        <h2 class="text-center main-page-title">PENGUMUMAN</h2>
                        <article>
                            <a href="">
                                <h4>Lorem</h4>
                            </a>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius voluptates, vero
                                numquam
                                suscipit enim ut officia similique odio iure, distinctio esse aperiam consequatur
                                obcaecati
                                itaque omnis cupiditate repudiandae. Corrupti, praesentium!</p>
                        </article>
                        <article>
                            <a href="">
                                <h4>Lorem</h4>
                            </a>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius voluptates, vero
                                numquam
                                suscipit enim ut officia similique odio iure, distinctio esse aperiam consequatur
                                obcaecati
                                itaque omnis cupiditate repudiandae. Corrupti, praesentium!</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="footer">
        <section class="kontak">
            <div class="container">
                <div class="row">
                    <div class="text-center offset-sm-4 col-sm-4">
                        <h1>HUBUNGI KAMI</h1>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="" id="" rows="5"
                                    placeholder="Isi Pesan"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</buttons>
                        </form>
                    </div>
                </div>
            </div>
        </section>
</body>
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
