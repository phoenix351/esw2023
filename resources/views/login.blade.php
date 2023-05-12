@extends('layouts.tail')

@section('content')
   
<div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
    <a href="#" class="flex items-center justify-center mb-8 text-2xl font-semibold lg:mb-10 dark:text-white">
        <img src="/images/logo.svg" class="mr-4 h-11" alt="FlowBite Logo">
        <span>WST2023</span>  
    </a>
    <!-- Card -->
    <div class="border-solid dark:border-1 border-indigo-600 w-full max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow bg-gray-200 dark:bg-gray-800 ">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
            Sign in to App 
        </h2>
        <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="hidden">

                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Your Email') }}</label>
                <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="{{ __('name@company.domain') }}" required>
            </div>
            @error('email')
            <div class="invalid-feedback"> {{ $message }} </div>
              @enderror
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                <input type="password" name="password" id="password" onkeyup="copyValue(this)" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" required>
            </div>
            @error('password')
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
           
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="remember" aria-describedby="remember" name="remember" type="checkbox" checked class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-green-300 dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600" required>
                </div>
                <div class="ml-3 text-sm">
                <label for="remember" class="font-medium text-gray-900 dark:text-white">Remember me</label>
                </div>
                <a href="#" class="ml-auto text-sm text-green-700 hover:underline dark:text-green-500">Lost Password?</a>
            </div>
            <button type="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:ring-green-300 sm:w-auto dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Login to your account</button>
            <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                Not registered? <a href="{{route('register')}}" class="text-green-700 hover:underline dark:text-green-500">Create account</a>
            </div>
        </form>
    </div>
</div>
@endsection

<script>
    function copyValue(e){
        console.log(e.value);
        document.getElementById('email').value = e.value;
    }
</script>