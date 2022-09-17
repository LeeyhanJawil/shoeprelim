@extends('base')

@extends('navbar')

@section('title', 'Dashboard')

@section('content')
    <div class="container m-3">
        <h1>Dashboard</h1>
        <div class="card col-sm-7 offset-sm-3 border border-light mt-5">
            <div class="card-header bg-secondary">
                <h1 class="text-center">Shoes</h1>
            </div>
            <div class="card-body shadow">
            <img class="offset-sm-1" src="images/running.jpg" alt="cover">
            </div>
        </div>
    </div>

@endsection

<style>
    
    img {
        width: 85%;
    }
    <style>
#basic-addon1 {
    width: 40px;
    text-align: center;
    background-color: white;
}
body{
    background-image: url("images/hoe.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 100%;
}
</style>
</style>
