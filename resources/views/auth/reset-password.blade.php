@extends('partials.layout')
@section('title', 'Reset password')
@section('content')
    <div class="card bg-base-300">
        <div class="card-body">
            <form method="POST" action="{{ route('password.store') }}" class="space-y-3">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Email') }}</legend>
                    <input value="{{ old('email', $request->email) }}" name="email" type="email" required autofocus autocomplete="username"
                        class="input w-full @error('email') input-error @enderror" placeholder="Email" />
                    @error('email')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Password') }}</legend>
                    <input name="password" type="password" required autocomplete="new-password"
                        class="input w-full @error('password') input-error @enderror" placeholder="Password" />
                    @error('password')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Confirm Password') }}</legend>
                    <input name="password_confirmation" type="password" required autocomplete="new-password"
                        class="input w-full @error('password_confirmation') input-error @enderror" placeholder="Confirm password" />
                    @error('password_confirmation')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <div class="flex justify-end">
                    <button class="btn btn-primary">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

