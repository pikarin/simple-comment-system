@extends('layouts.app')

@section('content')
<div class="w-full max-w-sm mx-auto">
    <div class="bg-white shadow rounded px-8 pb-8 pt-6">
        <h1 class="mb-6 text-center text-2xl">{{ __('Register') }}</h1>

        <form class="flex flex-col" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-6">
                <label for="name" class="block text-grey-darker font-bold text-sm mb-2">{{ __('Name') }}</label>

                <input id="name" type="text" class="bg-grey-lighter appearance-none rounded w-full py-2 px-3 text-grey-darker border{{ $errors->has('name') ? ' border-red' : ' border-transparent' }} focus:outline-none focus:border-grey-light focus:bg-white" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <p class="text-red text-sm mt-2" role="alert">
                        {{ $errors->first('name') }}
                    </p>
                @endif
            </div>

            <div class="mb-6">
                <label for="email" class="block text-grey-darker font-bold text-sm mb-2">{{ __('E-Mail Address') }}</label>

                <input id="email" type="email" class="bg-grey-lighter appearance-none rounded w-full py-2 px-3 text-grey-darker border{{ $errors->has('email') ? ' border-red' : ' border-transparent' }} focus:outline-none focus:border-grey-light focus:bg-white" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <p class="text-red text-sm mt-2" role="alert">
                        {{ $errors->first('email') }}
                    </p>
                @endif
            </div>

            <div class="mb-6">
                <label for="password" class="block text-grey-darker font-bold text-sm mb-2">{{ __('Password') }}</label>

                <input id="password" type="password" class="bg-grey-lighter appearance-none rounded w-full py-2 px-3 text-grey-darker border{{ $errors->has('password') ? ' border-red' : ' border-transparent' }} focus:outline-none focus:border-grey-light focus:bg-white" name="password" required>

                @if ($errors->has('password'))
                    <p class="text-red text-sm mt-2" role="alert">
                        {{ $errors->first('password') }}
                    </p>
                @endif
            </div>

            <div class="mb-6">
                <label for="password-confirm" class="block text-grey-darker font-bold text-sm mb-2">{{ __('Confirm Password') }}</label>

                <input id="password-confirm" type="password" class="bg-grey-lighter appearance-none rounded w-full py-2 px-3 text-grey-darker border focus:outline-none focus:border-grey-light focus:bg-white border-transparent" name="password_confirmation" required>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-3 rounded">
                    {{ __('Register') }}
                </button>

                <a href="/login" class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker no-underline">
                    {{ __('I already have an account') }}
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
