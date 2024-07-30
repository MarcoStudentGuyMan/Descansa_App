<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <div class="w-screen h-screen">
    <div class="h-full w-full">
    @include('navbar')
    <div class="flex flex-row max-lg:flex-col gap-5 bg-slate-100 w-full h-full">
      <div class="w-fit">
        <div class="flex flex-col justify-center h-full gap-2 pb-20 pl-20">
          <div class="text-7xl font-museo font-bold"> Order Taking System </div>
          <div class="flex flex-col text-lg font-inter mt-4 mb-10">
            <div>
              This system will assist in managing orders to do stuff
          </div>
          </div>
          <div class="flex flex-row justify-start font-museo font-bold gap-10">
            <a href="/orders">
            <button class="bg-blue-500 text-white py-3 px-10 rounded-xl hover:bg-blue-700 ease-in-out transition duration-300">
              Menu
            </button>
            </a>
          </div>
        </div>
      </div>

      <div class="w-full bg-slate-100">
        <img src="/img/Resort.jpg" alt="Food Park" class="object-cover h-full Resort-img overflow -z-10"/>
      </div>
    </div>

    </div>
  </div>
</body>
</html>

<style scoped>
.Resort-img {
  -webkit-clip-path: polygon(100% -300%, 0% 100%, 100% 100%);
}
</style>