@extends('layouts.default')
@section('content')
<style>
    .jarak-about {
        margin-top: 66px;
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .about {
        background-color: white;
        padding: 30px;
        border: 1px solid grey;
        border-radius: 10px;
    }

    .about p {
        text-align: justify;
    }

    h2 {
        font-size: 50px;
        font-weight: 900;
        color: #B3B3BB;
    }

    .img-about {
        width: 100%;
        max-width: 500px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .hr-about{
        border: 2px solid #B3B3BB;
        width: 10%;
    }

    .background-image {
        background: linear-gradient(rgba(255, 255, 255, 0.90), rgb(255, 255, 255, 0.90)),
            url(../images/texture.jpg) repeat 0 0 / 12.5% auto !important;
    }

</style>
<section>
    <div class="container-fluid background-image">
        <div class="jarak-about">
            <div class="container about">
                <h2 class="text-center mb-2">ABOUT</h2>
                <hr class="hr-about mb-5">
                <img class="img-about mb-5" src="images/demo/fak_teknik.jpg" alt="">
                <p>Himpunan Mahasiswa Profesi Teknik Kimia FT UNNES adalah organisasi yang bergerak untuk memberikan
                    wadah
                    aspirasi
                    dan fasilitator bagi seluruh mahasiswa teknik kimia FT UNNES . Himpro teknik kimia berawal dari
                    sebuah
                    komunitas
                    yang didirikan pada awal pendirian prodi teknik kimia Unnes. Teknik kimia FT UNNES berdiri pada
                    tahun
                    2007,
                    namun organisasi HMPTK FT-UNNES baru terbentuk pada tahun 2010. Organisasi ini memiliki tujuan untuk
                    mengarahkan
                    dan mengembang potensi dari teknik kimia FT-UNNES agar nanti siap berkonstribusi atau berkarya di
                    dunia
                    nyata
                    (Global). Profesional dan loyalitas Himpro Teknik Kimia FT-UNNES diprioritaskan dalam setiap
                    kegiatan
                    yang
                    dilaksanakan. Saat ini Himpro Teknik Kimia FT-UNNES memiliki pengurus 53 orang dan terbagi menjadi
                    Pengurus
                    Harian dan 7 departemen , antara lain :</p>
                <h2 class="text-center mt-5 mb-2">VISION</h2>
                <hr class="hr-about mb-5">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, modi impedit earum natus
                    perferendis sunt. Ducimus quibusdam suscipit consequuntur dolore. Unde iusto ducimus hic ad
                    asperiores maiores atque culpa adipisci?</p>
                <h2 class="text-center mt-5 mb-2">MISSION</h2>
                <hr class="hr-about mb-5">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor totam soluta accusantium consequuntur?
                    Ipsum eos quasi alias quas maiores, voluptatem aperiam autem, ullam reiciendis dolore officia natus
                    quia, at et?</p>
            </div>
        </div>
    </div>

</section>
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
