@extends('layout.app')

    @section('bg')
    <img src="assets/bg.jpg" class="bg-img">
    @endsection

    @section('content')

    <div class="quote">
        "BE HOME
        LIKE NOWHERE
        ELSE."
    </div>

    <div class="d-flex justify-content-around">

        <div>
            <img src="assets/4.jpg">
        </div>

        <div class="text">
            THE LARGO SERIES
            </br>
            </br>
            <a href="/largo">
                <button type="button" class="btn">VIEW COLLECTION</button>
            </a>
        </div>

    </div>

    <div class="section2">
        <div class="d-flex justify-content-around">

            <div class="text">
                THE SEGUE SERIES
                </br>
                </br>
                <a href="/segue">
                    <button type="button" class="btn">VIEW COLLECTION</button>
                </a>
            </div>

            <div>
                <img src="assets/b1.jpg">
            </div>

        </div>
    </div>

    @endsection