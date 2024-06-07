<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<nav class="flex justify-between bg-blue-400 px-10 py-5 sticky z-10 top-0">
    <div>
        <div class="font-museo text-red-700 font-bold text-2xl hover:cursor-pointer">
            <a href = "/"><img src="/img/Descansa_Logo.jpg" alt="Descansa Logo" class="w-20 rounded-shadow"/></a>
        </div>
    </div>
    <a href="/" class="p-3 hover:bg-white hover:cursor-pointer rounded-xl ease-in-out transition duration-300 font-museo font-bold text-6xl">Descansa</a>
    <div>
        <ul class="flex flex-row gap-10 font-museo font-bold text-xl">

            <div class="icon-cart">
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1"/>
            </svg>
            <span> </span>
            </div>

            <li>
            <a href="/orders">
                <button class="bg-stone-400 text-black py-3 px-10 rounded-xl hover:bg-stone-600 ease-in-out transition duration-300 outline-double">
                    Orders
                </button>
            </a>
            </li>

            <form method="post" action="{{ route('logout') }}">
                @csrf
                <button class="text-black bg-yellow-500 rounded-xl cursor-pointer hover:bg-yellow-600 hover:text-black px-5 py-3 mb-10 font-black outline-double">
                    Sign Out
                </button>
            </form>
        </ul>
    </div>
</nav>
</html>