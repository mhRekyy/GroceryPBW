<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>theGrocery</title>
    @vite(['resources/css/app.css'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <script src="{{ mix('js/featuredProducts.js') }}"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

</head>
<body class="bg-white relative">

@include('components.navbar')

<main class="pt-[100px]">
    @yield('content')
</main>

@include('components.footer')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.querySelector('header');
        const headerHeight = header.offsetHeight;
        document.querySelector('main').style.paddingTop = headerHeight + 'px';
    });
</script>


</body>
</html>
