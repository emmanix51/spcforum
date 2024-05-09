<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//unpkg.com/alpinejs" defer></script>

  <script>
    tailwind.config = {
        theme: {
          extend: {
            colors: {
              spcmain: "#630809",
            },
          },
        },
      };
  </script>
  <title>{{config('app.name')}}</title>
</head>

<body>
  @include('layout.nav')

  @yield('content')

  <footer
    class="bottom-0 left-0 w-full flex items-center justify-start font-bold bg-spcmain text-white h-6 mt-24 opacity-90 md:justify-center text-base">
    <p class="ml-2">Copyright &copy; 2024, All Rights reserved</p>
  </footer>
</body>

</html>