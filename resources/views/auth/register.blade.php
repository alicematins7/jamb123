@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-5">
            <img src="{{asset('storage/imagens/bichoAuth.png')}}" style="margin-top: 190px; width: 800px" />
        </div>
        <div class="col-sm-7" style="background-color: #656AA6">
            <div class="container" style="margin-top: 150px">
            <p class="h4 text-center" style="color: white; margin-top: 20px; font-size: 30px"><b>Cadastre-se para continuar</b></p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                        <div class="row mb-3" style="margin-top: 30px">
                            <label for="name" class="col-md-4 col-form-label text-md-end">
                                <i class="bi bi-person-fill">
                                    <img src="{{asset('storage/imagens/person-fill.svg')}}" />
                                </i>
                            </label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3" style="margin-top: 30px">
                            <label for="name" class="col-md-4 col-form-label text-md-end">
                                <i class="bi bi-person-fill">
                                    <img src="{{asset('storage/imagens/geo-alt-fill.svg')}}" />
                                </i>
                            </label>
                            <div class="col-md-4">
                                <input id="endereco" type="text" class="form-control @error('endereco') is-invalid @enderror" name="endereco" value="{{ old('endereco') }}" required autocomplete="name" autofocus placeholder="Nome">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">
                                <i class="bi bi-envelope-fill">
                                    <img src="{{asset('storage/imagens/envelope-fill.svg')}}" />
                                </i>
                            </label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">
                                <i>
                                    <img src="{{asset('storage/imagens/key-fill.svg')}}" />
                                </i>
                            </label>

                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Senha (mínimo 8 caracteres)">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="confirm-password" class="col-md-4 col-form-label text-md-end">
                                <i>
                                    <img src="{{asset('storage/imagens/key-fill.svg')}}" />
                                </i>
                            </label>

                            <div class="col-md-4">
                                <input id="confirm-password" type="password" class="form-control @error('password') is-invalid @enderror" name="confirm-password" required placeholder="Confirmar senha">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="h5 text-center">
                            <p style="color: white" id="titulo"><b>Já tem uma conta? <a style="color: white" href="{{route('login')}}">Faça Login</a></b></p>
                        </div>
                        <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary my-2 my-sm-0" id ="meu-botao">
                                    {{ __('Entrar') }}
                                </button>
                        </div>
            </div>
        </div>        
    </div>
@endsection
