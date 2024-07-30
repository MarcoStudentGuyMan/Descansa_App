<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body>
    <form method="post" action="{{ route('signin') }}">
        @csrf
        <div class="flex flex-col justify-between items-center w-screen h-screen bg-slate-200 font-inter signin-bg">
            <div class="flex text-red-700 justify-start w-full font-bold text-3xl -z 1">
                <div class="p-5 font-museo"></div>
            </div>
            <a href="/">
                <img src="/img/Descansa_logo.jpg" alt="Logo" class="w-40 rounded-shadow"/>
            </a>
            <div class="w-1/3 h-fit rounded-xl bg-white shadow-2xl p-10 -z 1">
                <div class="flex flex-col justify-start mb-7">
                    <p class="font-bold text-4xl uppercase">Sign in</p>
                    <p class="font-light text-black">Sign in to begin taking orders</p>
                </div>
                <div class="gap-4 flex flex-col">
                    <div class="h-fit flex flex-col gap-2">
                        <label class="text-black font-semibold">Email</label>
                        <input type="text" name="email" id="email" class="w-full h-full text-sm p-3 shadow-none outline-none border-2 @error('email') border-red-500 @enderror hover:border-black focus:border-black ease-in-out transition duration-300 rounded-md" placeholder="Enter email"/>
                        @error('email')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="h-fit flex flex-col gap-2">
                        <label class="text-black font-semibold">Password</label>
                        <input type="password" name="password" id="password" class="w-full h-full text-sm p-3 shadow-none outline-none border-2 @error('password') border-red-500 @enderror hover:border-black focus:border-black ease-in-out transition duration-300 rounded-md" placeholder="Enter password"/>
                        @error('password')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="h-fit flex justify-center">
                        <button class="bg-black mt-5 text-white py-3 px-7 rounded-xl font-bold uppercase w-fit hover:bg-gray-700 ease-in-out transition duration-300 hover:scale-105">Login</button>
                    </div>
                </div>
            </div>
            <div class="mt-5 flex justify-center text-white">
                Don't have an account?
            </div>
            <div class="mt-5 flex justify-center hover:text-blue-800 ease-in-out transition duration-300 font-bold">
                <a href="signup" class="unstyled text-white">Sign up here</a>
            </div>
        </div>
    </form>
    <div class="text-white">
        Developers &#169
    </div>
</body>
</html>
