@extends('sistema.layout')
@section('title','PetMatch')
@section('content')
    <div class="row">
        <div class="col-sm-6">
            <p class="h1 text-start" style="color: #656AA6; font-size: 100px; margin-left: 90px; margin-top: 40px; font-weight: bolder ">Adotar é amor :)</p>
            <p class="h3 text-start" style="color: #656AA6; font-size: 50px;   font-style: Italic align-Items: center "></p>
            <p class="h1 text-start" style=" font-size: 20px; margin-left: 25px; margin-bottom: 10px font-style: Italic a">Você salva a vida de um animal e ele ganha um lar novo.
                Ao adotar um bichinho, você estará salvando ele das ruas. 
            </p>
        </div>
        <div class="col-sm-6" style=" justify-content: flex-end">
            <img src="{{asset('storage/imagens/bicho.png')}}" style="height: 800px; margin-left: 80px;" />
        </div>
    </div>
@endsection