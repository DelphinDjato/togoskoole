@extends('auth.app', ['title' => 'S\'authentifier pour se connecter'])

@section('content')
<div class="row w-100">
    <div class="col-lg-4 mx-auto">
        <div class="auto-form-wrapper">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email" class="label">Matricule</label>

                    <div class="input-group">
                        <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Numéro matricule">

                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="mdi mdi-check-circle-outline"></i>
                            </span>
                        </div>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="label">Mot de passe</label>

                    <div class="input-group">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="********">

                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="mdi mdi-check-circle-outline"></i>
                            </span>
                        </div>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group d-flex justify-content-between">
                    <div class="form-check form-check-flat mt-0">
                    </div>
                    <a href="#" class="text-small forgot-password text-black">Mot de passe oublié ?</a>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary submit-btn btn-block">Se connecter</button>
                </div>
            </form>
        </div>

        <ul class="auth-footer">
            <li>
                <a href="#">Conditions</a>
            </li>

            <li>
                <a href="#">Aide</a>
            </li>

            <li>
                <a href="#">Terms</a>
            </li>
        </ul>
        <p class="footer-text text-center">Copyright © 2020 Togoskoole. Tous droits reservés.</p>
    </div>
</div>
@endsection
