@extends('layout.main')
@section('title','Tic Tac Toe')
@section('content')
<section class="d-flex justify-content-center bg-secondary container-fluid flex-column"
    style="width: 100%; padding-top:100px; height:100vh;">
    <div class="text-center mb-4">
        <h1 class="font-monospace"><span class="text-warning">Let's Play </span><b>Tic Tac Toe</b></h1>
    </div>
    <div class="text-center" style="margin-bottom: 15px">
        <h3 class="font-monospace">Player <span class="display-player playerX">X</span>'s Turn!</h3>
    </div>
    <div class="bg-white mb-4" id="tictactoe">
        <div class="tille"></div>
        <div class="tille"></div>
        <div class="tille"></div>
        <div class="tille"></div>
        <div class="tille"></div>
        <div class="tille"></div>
        <div class="tille"></div>
        <div class="tille"></div>
        <div class="tille"></div>
    </div>
    <div class="text-center mb-5 d-flex flex-column justify-content-center">
        <div class="display-winner hide-name mb-4"></div>
        <div><button id="reset" class="btn btn-warning fs-6"><b>Reset</b></button></div>
    </div>
</section>
<script src="/js/games.js"></script>
@endsection