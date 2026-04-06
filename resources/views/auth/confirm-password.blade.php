@extends('partials.layout')
@section('title', 'Confirm password')
@section('content')
    <div class="card bg-base-300">
        <div class="card-body space-y-2">
            <p class="text-sm text-base-content">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </p>

            <form method="POST" action="{{ route('password.confirm') }}" class="space-y-3">
                @csrf

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Password') }}</legend>
                    <input name="password" type="password" required autocomplete="current-password"
                        class="input w-full @error('password') input-error @enderror" placeholder="Password" />
                    @error('password')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <div class="flex justify-end">
                    <button class="btn btn-primary">
                        {{ __('Confirm') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

