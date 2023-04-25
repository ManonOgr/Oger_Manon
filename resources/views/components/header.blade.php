<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header class="relative z-10">

<nav class="bg-black">
<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
  <div class="relative flex h-16 items-center justify-between">
    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
      <!-- Mobile menu button-->
      <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <!--
          Icon when menu is closed.

          Menu open: "hidden", Menu closed: "block"
        -->
        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
        <!--
          Icon when menu is open.

          Menu open: "block", Menu closed: "hidden"
        -->
        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
    <div class="flex flex-1 items-center justify-center text-white sm:items-stretch sm:justify-start">
      <div class="hidden sm:ml-6 sm:block">
        <div class="flex space-x-4">
        <a href="{{ route('home') }}" class="text-[#66EB9A] px-3 py-2 text-sm font-medium font-sans">WE FASHION</a>
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a href="{{ route('women') }}" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Femme</a>
          <a href="{{ route('men') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Homme</a>
          <a href="{{ route('soldes') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Soldes</a>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Mobile menu, show/hide based on menu state. -->
<div class="sm:hidden" id="mobile-menu">
  <div class="space-y-1 px-2 pb-3 pt-2">
    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
    <a href="{{ route('women') }}" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Femme</a>
    <a href="{{ route('men') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Homme</a>
    <a href="{{ route('soldes') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Soldes</a>
  </div>
</div>

</nav>

</header>
</body>
</html>
