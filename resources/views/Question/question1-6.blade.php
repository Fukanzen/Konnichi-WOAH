@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">ど いたしまして</h3>
    <h3 class="question1">Do itashimashite</h3>

    <div class="choices">
        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">You're welcome</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">Thank you</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">For you</h4>
        </button>
    </div>

</div>

{{-- <div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div> --}}


@endsection

