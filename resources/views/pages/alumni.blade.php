@extends('layouts.default')
@section('content')
<style>
    .form-jarak {
        margin-top: 66px;
        padding-top: 30px;
        padding-bottom: 30px;

    }

    .form-alumni {
        background-color: white;
        padding: 20px;
        border: 1px solid grey;
        border-radius: 10px;
    }

    .background-image {
        background: linear-gradient(rgba(255, 255, 255, 0.90), rgb(255, 255, 255, 0.90)),
            url(../images/texture.jpg) repeat 0 0 / 12.5% auto !important;
    }

</style>
<section>
    <div class="background-image">
        <div class="container">
            <div class="form-jarak">
                <div class="form-alumni">
                    <div class="text-center">
                        <h2>FORMULIR</h2>
                        <h2>ISI DATA ALUMNI</h2>
                    </div>
                    <br><br>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">@example.com</span>
                        </div>
                    </div>
                    <label for="basic-url">Your vanity URL</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                        </div>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">With textarea</span>
                        </div>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <br><br>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary">SIMPAN</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@stop
