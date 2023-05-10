@extends('layout-front.main')

@section('front')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="register pt-10 ">
    <div class="border bg-yellow-400 rounded-lg" style="width: 60%; margin-left:20%;">
        <h2 class="text-3xl font-bold text-white ml-20" style="margin-bottom:-25px">{{ __('Register') }}</h2>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <form class="flex pb-10" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="ml-16" style="max-height: 450px; max-width: 300px; overflow:hidden;">
                <img class="rounded-lg" src="https://cf.shopee.co.id/file/6328382d30adb2bac4dfd788a6a94836"
                alt="halo" class="img-fluid mt-3">
            </div>
            <div class="input ml-20">
                <div class="mb-3">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Name') }}</label>
                    <input type="name" id="name" name="name" class="pr-24 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                  </div>
                <div class="mb-3">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Email Address') }}</label>
                    <input type="email" id="email" name="email" class="pr-24 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ old('email') }}" required autocomplete="email">
                  </div>
                  <div class="mb-3">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Password') }}</label>
                    <input type="password" id="password" name="password" class=" pr-24 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required autocomplete="new-password">
                  </div>
                  <div class="mb-3">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Confirm Password') }}</label>
                    <input type="password" id="password-confirm" name="password_confirmation" class=" pr-24 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                     required autocomplete="new-password">
                  </div>
                  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                  style="padding-left:41.5%; padding-right:41.5%; "
                  >Submit</button>
                  <div class="or text-center">
                    or
                  </div>
                  <div class="register text-white text-center">
                    <a href="/login">Login here!</a>
                  </div>
            </div>

        </form>
    </div>
</div>
@endsection
