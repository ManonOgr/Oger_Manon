<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Femme</title>

    </head>
    <body>


    @include('./components/header')

  <main>

  <!-- Trending products -->
    <section aria-labelledby="trending-heading" class="bg-white">
      <div class="py-16 sm:py-24 lg:mx-auto lg:max-w-7xl lg:px-8 lg:py-32">
        <div class="flex items-center justify-between px-4 sm:px-6 lg:px-0">
          <h2 id="trending-heading" class="text-2xl font-bold tracking-tight text-gray-900">Produits</h2>
        </div>
        <div class="flex items-center justify-between px-4 sm:px-6 lg:px-0">
            <p>
                6 résultats
            </p>
        </div>
        <div class="relative mt-8">
          <div class="relative w-full overflow-x-auto">
            <ul role="list" class="mx-4 inline-flex space-x-8 sm:mx-6 lg:mx-0 lg:grid lg:grid-cols-4 lg:gap-x-8 lg:space-x-0">
              <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                <div class="group relative">
                  <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">

                  <a href="{{ route('products') }}"> <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-01.jpg" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="h-full w-full object-cover object-center group-hover:opacity-75"></a>

                  </div>
                  <div class="mt-6">
                    <p class="text-sm text-gray-500">Black</p>
                    <h3 class="mt-1 font-semibold text-gray-900">
                    <p class="mt-1 text-gray-900">
                        Machined Pen
                    </p>

                    </h3>
                    <p class="mt-1 text-gray-900">$35</p>
                  </div>
                </div>
              </li>

              <!-- More products... -->
              <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                <div class="group relative">
                  <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">

                  <a href="{{ route('products') }}"> <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-01.jpg" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="h-full w-full object-cover object-center group-hover:opacity-75"></a>

                  </div>
                  <div class="mt-6">
                    <p class="text-sm text-gray-500">Black</p>
                    <h3 class="mt-1 font-semibold text-gray-900">
                    <p class="mt-1 text-gray-900">
                        Machined Pen
                    </p>

                    </h3>
                    <p class="mt-1 text-gray-900">$35</p>
                  </div>
                </div>
              </li>


              <!-- More products... -->

              <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                <div class="group relative">
                  <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">

                  <a href="{{ route('products') }}"> <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-01.jpg" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="h-full w-full object-cover object-center group-hover:opacity-75"></a>

                  </div>
                  <div class="mt-6">
                    <p class="text-sm text-gray-500">Black</p>
                    <h3 class="mt-1 font-semibold text-gray-900">
                    <p class="mt-1 text-gray-900">
                        Machined Pen
                    </p>

                    </h3>
                    <p class="mt-1 text-gray-900">$35</p>
                  </div>
                </div>
              </li>

              <!-- More products... -->

              <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                <div class="group relative">
                  <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">

                  <a href="{{ route('products') }}"> <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-01.jpg" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="h-full w-full object-cover object-center group-hover:opacity-75"></a>

                  </div>
                  <div class="mt-6">
                    <p class="text-sm text-gray-500">Black</p>
                    <h3 class="mt-1 font-semibold text-gray-900">
                    <p class="mt-1 text-gray-900">
                        Machined Pen
                    </p>

                    </h3>
                    <p class="mt-1 text-gray-900">$35</p>
                  </div>
                </div>
              </li>

              <!-- More products... -->
              <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                <div class="group relative">
                  <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">

                  <a href="{{ route('products') }}"> <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-01.jpg" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="h-full w-full object-cover object-center group-hover:opacity-75"></a>

                  </div>
                  <div class="mt-6">
                    <p class="text-sm text-gray-500">Black</p>
                    <h3 class="mt-1 font-semibold text-gray-900">
                    <p class="mt-1 text-gray-900">
                        Machined Pen
                    </p>

                    </h3>
                    <p class="mt-1 text-gray-900">$35</p>
                  </div>
                </div>
              </li>


              <!-- More products... -->

              <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                <div class="group relative">
                  <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">

                  <a href="{{ route('products') }}"> <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-01.jpg" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="h-full w-full object-cover object-center group-hover:opacity-75"></a>

                  </div>
                  <div class="mt-6">
                    <p class="text-sm text-gray-500">Black</p>
                    <h3 class="mt-1 font-semibold text-gray-900">
                    <p class="mt-1 text-gray-900">
                        Machined Pen
                    </p>

                    </h3>
                    <p class="mt-1 text-gray-900">$35</p>
                  </div>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </section>

    <div class="flex items-center justify-center border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
  <div class="flex flex-1 justify-between sm:hidden">
    <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
    <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
  </div>
  <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-center">
    <div>
      <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
        <a href="#" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
          <span class="sr-only">Previous</span>
          <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
          </svg>
        </a>
        <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
        <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-neutral-500 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-neutral-500">1</a>
        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
        <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
        <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">4</span>
        <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">5</a>
        <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">6</a>
        <a href="#" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
          <span class="sr-only">Next</span>
          <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
          </svg>
        </a>
      </nav>
    </div>
  </div>
</div>

</main>

@include('./components/footer')


    </body>
</html>
