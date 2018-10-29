@extends('layouts.app')

@section('content')
    <div class="w-full max-w-xs mx-auto">
        <div class="bg-white shadow rounded px-8 pb-8 pt-6">
            <h1 class="mb-6 text-center">{{ __('Login') }}</h1>

            <form class="flex flex-col" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block text-grey-darker font-bold text-sm mb-2">{{ __('E-Mail Address') }}</label>

                    <input id="email" type="email" class="bg-grey-lighter appearance-none rounded w-full py-2 px-3 text-grey-darker border {{ $errors->has('email') ? 'border-red' : 'border-transparent' }} focus:outline-none focus:border-grey-light focus:bg-white" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <p class="text-red text-sm mt-2" role="alert">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-grey-darker font-bold text-sm mb-2">{{ __('Password') }}</label>

                    <input id="password" type="password" class="bg-grey-lighter appearance-none rounded w-full py-2 px-3 text-grey-darker border border-transparent focus:outline-none focus:border-grey-lightfocus:bg-white" name="password" required>
                </div>

                <div class="mb-6">
                    <div class="form-check">
                        <label class="block text-grey-darker font-bold" for="remember">
                            <input class="mr-1 leading-tight" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <span class="text-sm">{{ __('Remember Me') }}</span>
                        </label>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded">
                        {{ __('Login') }}
                    </button>

                    <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker no-underline" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
