@extends('layout-front.main')

@section('front')

<div class="login pt-10 ">
    <div class="border bg-yellow-400 rounded-lg" style="width: 60%; margin-left:20%;">
        <h2 class="text-3xl font-bold text-white ml-20" style="margin-bottom:-25px">{{ __('Login') }}</h2>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <form class="flex pb-10" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="ml-16" style="max-height: 450px; max-width: 300px; overflow:hidden;">
                <img class="rounded-lg" src="https://cf.shopee.co.id/file/6328382d30adb2bac4dfd788a6a94836"
                alt="halo" class="img-fluid mt-3">
            </div>
            <div class="input ml-20">
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Email Address') }}</label>
                    <input type="email" id="email" name="email" class="pr-24 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@flowbite.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Password') }}</label>
                    <input type="password" id="password" name="password" class=" pr-24 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                  style="padding-left:41.5%; padding-right:41.5%; "
                  >{{ __('Login') }}</button>
                  <div class="or text-center">
                    or
                  </div>
                  <div class="register text-white text-center">
                    <a href="/register">Register here!</a>
                  </div>
            </div>

        </form>
    </div>
</div>


@endsection




