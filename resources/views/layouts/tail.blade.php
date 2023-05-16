<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Get started with a free and open-source admin dashboard layout built with Tailwind CSS and Flowbite featuring charts, widgets, CRUD layouts, authentication pages, and more">
        <meta name="author" content="Themesberg">
        {{-- <meta name="generator" content="Hugo 0.58.2"> --}}
        <link rel="canonical" href="https://flowbite-admin-dashboard.vercel.app/authentication/sign-in/">
        
        @vite(['resources/css/app.css','resources/js/app.js'])
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
        
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
   
        
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
        
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon-32x32.png')}}">
        
        <title>{{$page}}</title>
        <script>
            
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark')
            }
        </script>
    </head>
    

<body class="bg-white dark:bg-gray-900">
    @include('layouts.navbar_tail')

    <main class="content">
        @yield('content')
    </main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

<script>
    function copyValue(e){
        console.log(e.value);
        document.getElementById('email').value = e.value;
    }
</script>
   
</body>

</html>
