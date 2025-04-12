<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Register</title>
</head>

<body class="bg-gray-100 h-screen">
<div class="min-h-screen flex flex-col md:flex-row w-full">
    <div class="relative w-full md:w-1/2 h-screen bg-green-900">
        <div class="h-full relative">
            <img src="{{asset('images/background.jpg')}}" class="object-cover w-full h-full" />
        </div>
    </div>

    <div class="w-full md:w-1/2 h-screen p-8 md:p-12 flex flex-col justify-center bg-white relative">
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
                    </div>
                </div>

                <div class="mb-6">
                    <label for="email" class="block text-gray-700 mb-2">Confirm Password</label>
                    <input type="password" id="password" placeholder="Reenter your password"
                           class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600" />
                </div>

                <div class="flex justify-between items-center mb-6">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded" />
                        <label for="remember" class="ml-2 block text-sm text-gray-700">Accept all terms & Conditions</label>
                    </div>
                </div>

                <a href="/" class="block text-center w-full bg-green-800 text-white py-3 rounded-md hover:bg-green-900 transition duration-300 font-normal">
                    Create Account
                </a>
            </form>
        </div>

        <div class="text-sm text-gray-700 flex justify-center p-4">
            Already have account?
            <a href="/" class="ml-1 font-medium hover:underline text-green-800">Login</a>
        </div>
    </div>
</div>
</body>
</html>
