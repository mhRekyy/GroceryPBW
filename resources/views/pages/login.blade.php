<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<body class="bg-gray-100 h-screen">
<div class="min-h-screen flex flex-col md:flex-row w-full">
    <div class="relative w-full md:w-1/2 h-screen bg-green-900">
        <div class="h-full relative">
            <img src="{{asset('images/background.jpg')}}" class="object-cover w-full h-full" />
        </div>
    </div>

    <div class="w-full md:w-1/2 h-screen p-8 md:p-12 flex flex-col justify-center bg-white relative">
        <div class="mb-4 flex justify-end">

        </div>

        <div class="max-w-md mx-auto w-full">
            <h2 class="text-5xl font-bold text-gray-800 mb-12">Welcome<br />Back</h2>

            <form>
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 mb-2">Email</label>
                    <input type="email" id="email" placeholder="Enter your email"
                           class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600" />
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-gray-700 mb-2">Password</label>
                    <div class="relative">
                        <input type="password" id="password" placeholder="Enter your password"
                               class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600" />
                        <button type="button" class="absolute right-3 top-3 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex justify-between items-center mb-6">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded" />
                        <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
                    </div>
                    <a href="#" class="text-sm text-gray-700 hover:underline">Forgot Password?</a>
                </div>

                <a href="/home" class="block text-center w-full bg-green-800 text-white py-3 rounded-md hover:bg-green-900 transition duration-300 font-normal">
                    Login
                </a>

                <div class="text-center my-4">Or</div>

                <button type="button" class="w-full border border-gray-300 text-gray-700 py-3 rounded-md flex items-center justify-center hover:bg-gray-50 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24">
                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                    </svg>
                    Sign in with Google
                </button>
            </form>
        </div>

        <div class="text-sm text-gray-700 flex justify-center p-4">
            Don't have an account?
            <a href="/register" class="ml-1 font-medium hover:underline text-green-800">Register</a>
        </div>
    </div>
</div>
</body>
</html>
