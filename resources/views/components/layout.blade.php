<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
</head>
<body>
  <header>
    <div class="container mx-auto grid grid-cols-12 gap-4">
      <h1 class="col-span-3 text-white text-3xl p-4"><i class="fa-duotone fa-potato text-amber-600"></i> Taters.</h1>
      <nav>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/blog">Blog</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="main container mx-auto p-4">
    <div class="grid grid-cols-12 gap-4">
      <h1 class="title">
        {{ $title ?? 'Potato' }}
      </h1>
      <div class="col-span-3">
        Some internal nav
      </div>
      <div class="rounded-xl bg-gray-800 p-4 col-span-9 external-content">
        {{ $slot }}
      </div>
    </div>
  </div>
  <script src="//kit.fontawesome.com/cedc9df81e.js" crossorigin="anonymous"></script>
</body>
</html>
