@extends('layouts.default')
@section('content')

<body>
    <section class="slide">
        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active peopleCarouselImg">
                    <img class="d-block w-100" src="../images/download.svg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Selamat Datang</h5>
                        <p>HIMPROTEKKIM UNNES</p>
                    </div>
                </div>
                <div class="carousel-item peopleCarouselImg">
                    <img class="d-block w-100" src="../upload/default.jpg" alt="Second slide">
                </div>
                <div class="carousel-item peopleCarouselImg">
                    <img class="d-block w-100" src="../upload/5c85fc638aac9.jpg" alt="Third slide">
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
                    <h2 class="main-page-title">ADVOKASI</h2>
                </div>
            </div>
        </div>
        <section class="isi-berita">
            <div class="container">
                <div class="penjelasan">
                    <h2>ADVOKASI</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos quibusdam quos, itaque iure nisi
                        tempora architecto. Possimus similique ducimus aut, obcaecati perspiciatis eius quae dicta ad?
                        Ipsa velit quos nobis? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae laborum
                        eaque rem. Fugit odit voluptates nisi vero saepe quam repellendus facilis id voluptatum, veniam
                        beatae laborum quo dolorem tempora provident? Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. Temporibus, libero molestias rem soluta quam exercitationem, pariatur dolor,
                        eaque quae ullam molestiae reprehenderit distinctio! Molestias, laudantium. Earum quas tempora
                        aspernatur minima. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati amet
                        eveniet aliquam nihil cumque architecto ex, necessitatibus aperiam ipsa ipsam velit ducimus
                        dolor vel sapiente aut ratione! Id, dolorem ipsum.</p>
                </div>
                <div class="row">
                    <div class="col-sm-8" style="text-align: justify">
                        <article>
                            <div class="contoh-berita">
                                <div class="foto-berita">
                                    <a href="">
                                        <img class="img-berita" src="../upload/default.jpg" alt="">
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
                                        <img class="img-berita" src="../upload/HIMPRO-logo.png" alt="">
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
                            <source src="../images/video99.mp4" type="video/mp4">
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
