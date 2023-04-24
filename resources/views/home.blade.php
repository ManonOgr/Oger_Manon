<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>We Fashion</title>

        <!-- Fonts -->


        <!-- Styles -->

    </head>
    <body class="antialiased">


  <header class="relative z-10">
  <nav aria-label="Top">
      <!-- Top navigation -->
      <div class="bg-gray-900">


      <!-- Secondary navigation -->
      <div class="bg-black">
        <div class="border-b border-gray-200">
          <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
              <!-- Logo (lg+) -->
              <div class="hidden lg:flex lg:items-center">
              <a href="{{ route('home') }}" class="text-[#66EB9A]">We Fashion</a>


              </div>

              <div class="hidden h-full lg:flex">
                <!-- Mega menus -->
                <div class="ml-8">
                  <div class="flex h-full justify-center space-x-8">
                    <div class="flex">
                      <div class="relative flex">

                        <a class="border-transparent text-white hover:text-white  relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out" aria-expanded="false" href="{{ route('women') }}">Femme</a>

                      </div>

                      <div class="absolute inset-x-0 top-full text-gray-500 sm:text-sm">
                        <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
                        <div class="relative bg-white">
                        </div>
                      </div>
                    </div>

                    <div class="flex">
                      <div class="relative flex">

                        <a class="border-transparent text-white hover:text-white  relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out" aria-expanded="false" href="{{ route('men') }}">Homme</a>

                      </div>

                      <div class="absolute inset-x-0 top-full text-gray-500 sm:text-sm">
                        <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
                      </div>
                    </div>


                    <a href="{{ route('soldes') }}" class="flex items-center text-sm font-medium text-white hover:text-white ">Soldes</a>

                  </div>
                </div>
              </div>


                </div>
              </div>
            </div>
          </div>
        </div>
    </nav>
  </header>

  <main>

  <!-- Trending products -->
    <section aria-labelledby="trending-heading" class="bg-white">
      <div class="py-16 sm:py-24 lg:mx-auto lg:max-w-7xl lg:px-8 lg:py-32">
        <div class="flex items-center justify-between px-4 sm:px-6 lg:px-0">
          <h2 id="trending-heading" class="text-2xl font-bold tracking-tight text-gray-900">Produits</h2>
        </div>
        <div>
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

        <div class="mt-12 px-4 sm:hidden">
          <a href="#" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
            See everything
            <span aria-hidden="true"> &rarr;</span>
          </a>
        </div>
      </div>
    </section>

    <div class="flex items-center justify-center border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
  <div class="flex flex-1 justify-between sm:hidden">
    <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
    <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
  </div>
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
        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">3</a>
        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">4</a>
        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">5</a>
        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">6</a>
        <a href="#" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
          <span class="sr-only">Next</span>
          <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
          </svg>
        </a>
      </nav>
    </div>

</main>

<footer class="bg-black">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-center">
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Informations</h2>
                  <ul class="text-gray-600 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline">Mentions légales</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Presse</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Fabrication</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Service Client</h2>
                  <ul class="text-gray-600 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline ">Contactez-nous</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Livraison & Retour</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Conditions de vente</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Réseaux sociaux</h2>
                  <ul class="text-gray-600 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                      <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                  <span class="sr-only">Facebook page</span>
              </a>
                      </li>
                      <li>
                      <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                  <span class="sr-only">Instagram page</span>
              </a>
                      </li>
                      <li>
                      <a href="#" class="hover:underline">Inscrivez-vous à la newsletter</a>
                    </li>
                  </ul>
              </div>
          </div>
      </div>
      </div>
</footer>


    </body>
</html>
