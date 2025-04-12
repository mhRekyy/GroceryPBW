<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Login Page</title>
</head>
<body class="bg-gray-100">
<div class="w-full h-screen flex items-center justify-center">
    <div class="w-full max-w-md p-6 bg-white flex-col flex items-center gap-4 rounded-xl shadow-lg mx-4">
        <h1 class="text-center font-bold text-3xl">Sign In</h1>

        <form class="w-full space-y-4">
            <input class="border-2 rounded-md p-3 w-full" type="email" placeholder="Email">
            <input class="border-2 rounded-md p-3 w-full" type="password" placeholder="Password">

            <div class="flex justify-between items-center text-sm text-gray-500">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox">
                    <span class="ml-2 font-light">Remember Me</span>
                </label>
                <a href="#" class="font-light hover:underline">Forget Password?</a>
            </div>

            <a href="/" class="block w-full text-center py-3 px-4 rounded-md bg-[#71B53A] text-white font-semibold hover:bg-[#5c9430] transition">
                Login
            </a>
        </form>

        <div class="text-sm text-gray-500">
            Don't have an account?
            <a href="/register" class="font-medium hover:underline text-[#71B53A]">Register</a>
        </div>
    </div>
</div>
</body>
</html>
