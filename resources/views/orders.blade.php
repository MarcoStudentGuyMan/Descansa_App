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
    </div>
  </div>
</body>
</html>

<style scoped>
.Resort-img {
  -webkit-clip-path: polygon(100% -300%, 0% 100%, 100% 100%);
}
</style>