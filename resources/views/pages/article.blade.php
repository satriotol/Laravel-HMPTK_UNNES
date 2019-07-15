@extends('layouts.default')
@section('content')
<style>
    .article {
        margin-top: 66px;
        padding-top: 100px;
        ;
        padding-bottom: 100px;
    }

    .module {
        background-color: white;
        padding
    }

</style>

<body>
    <div class="latar-lihat-berita container-fluid">
        <div class="article container">
            <div class="row">
                <div class="col-md-3">
                    <div class="module">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo illum omnis quo pariatur
                            tempora
                            eaque
                            eos dolores optio quos consequuntur, modi corrupti odit provident incidunt id dignissimos,
                            exercitationem repellat saepe. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Quisquam
                            tempora veniam voluptates deleniti animi ducimus enim blanditiis libero atque deserunt
                            minima
                            iure
                            dolor magnam provident, ex cumque. Dolor, delectus alias.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo illum omnis quo pariatur
                        tempora
                        eaque
                        eos dolores optio quos consequuntur, modi corrupti odit provident incidunt id dignissimos,
                        exercitationem repellat saepe. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Quisquam
                        tempora veniam voluptates deleniti animi ducimus enim blanditiis libero atque deserunt
                        minima
                        iure
                        dolor magnam provident, ex cumque. Dolor, delectus alias.</p>
                </div>
                <div class="col-md-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo illum omnis quo pariatur
                        tempora
                        eaque
                        eos dolores optio quos consequuntur, modi corrupti odit provident incidunt id dignissimos,
                        exercitationem repellat saepe. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Quisquam
                        tempora veniam voluptates deleniti animi ducimus enim blanditiis libero atque deserunt
                        minima
                        iure
                        dolor magnam provident, ex cumque. Dolor, delectus alias.</p>
                </div>
                <div class="col-md-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo illum omnis quo pariatur
                        tempora
                        eaque
                        eos dolores optio quos consequuntur, modi corrupti odit provident incidunt id dignissimos,
                        exercitationem repellat saepe. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Quisquam
                        tempora veniam voluptates deleniti animi ducimus enim blanditiis libero atque deserunt
                        minima
                        iure
                        dolor magnam provident, ex cumque. Dolor, delectus alias.</p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo illum omnis quo pariatur
                        tempora
                        eaque
                        eos dolores optio quos consequuntur, modi corrupti odit provident incidunt id dignissimos,
                        exercitationem repellat saepe. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Quisquam
                        tempora veniam voluptates deleniti animi ducimus enim blanditiis libero atque deserunt
                        minima
                        iure
                        dolor magnam provident, ex cumque. Dolor, delectus alias.</p>
                </div>
                <div class="col-md-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo illum omnis quo pariatur
                        tempora
                        eaque
                        eos dolores optio quos consequuntur, modi corrupti odit provident incidunt id dignissimos,
                        exercitationem repellat saepe. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Quisquam
                        tempora veniam voluptates deleniti animi ducimus enim blanditiis libero atque deserunt
                        minima
                        iure
                        dolor magnam provident, ex cumque. Dolor, delectus alias.</p>
                </div>
                <div class="col-md-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo illum omnis quo pariatur
                        tempora
                        eaque
                        eos dolores optio quos consequuntur, modi corrupti odit provident incidunt id dignissimos,
                        exercitationem repellat saepe. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Quisquam
                        tempora veniam voluptates deleniti animi ducimus enim blanditiis libero atque deserunt
                        minima
                        iure
                        dolor magnam provident, ex cumque. Dolor, delectus alias.</p>
                </div>
                <div class="col-md-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo illum omnis quo pariatur
                        tempora
                        eaque
                        eos dolores optio quos consequuntur, modi corrupti odit provident incidunt id dignissimos,
                        exercitationem repellat saepe. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Quisquam
                        tempora veniam voluptates deleniti animi ducimus enim blanditiis libero atque deserunt
                        minima
                        iure
                        dolor magnam provident, ex cumque. Dolor, delectus alias.</p>
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
