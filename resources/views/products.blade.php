<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Products</title>
</head>
<body>
<!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/typography'),
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
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
      </div>
    </nav>
  </header>

  <main>
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <div class="lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-8">
      <!-- Image gallery -->
      <div class="flex flex-col-reverse">
        <!-- Image selector -->
        <div class="mx-auto mt-6 hidden w-full max-w-2xl sm:block lg:max-w-none">
          <div class="grid grid-cols-4 gap-6" aria-orientation="horizontal" role="tablist">

          </div>
        </div>

        <div class="aspect-h-1 aspect-w-1 w-full">
          <!-- Tab panel, show/hide based on tab state. -->
          <div id="tabs-1-panel-1" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
            <img src="https://tailwindui.com/img/ecommerce-images/product-page-03-product-01.jpg" alt="Angled front view with bag zipped and handles upright." class="h-full w-full object-cover object-center sm:rounded-lg">
          </div>

          <!-- More images... -->
        </div>
      </div>

      <!-- Product info -->
      <div class="mt-10 px-4 sm:mt-16 sm:px-0 lg:mt-0">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Zip Tote Basket</h1>

        <div class="mt-3">
          <h2 class="sr-only">Product information</h2>
          <p class="text-3xl tracking-tight text-gray-900">$140</p>
        </div>

        <div class="mt-6">
          <h3 class="sr-only">Description</h3>

          <div class="space-y-6 text-base text-gray-700">
            <p>The Zip Tote Basket is the perfect midpoint between shopping tote and comfy backpack. With convertible straps, you can hand carry, should sling, or backpack this convenient and spacious bag. The zip top and durable canvas construction keeps your goods protected for all-day use.</p>
          </div>
        </div>

        <form class="mt-6">
          <!-- Select -->
<div>
<label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
<select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option selected>Choose a country</option>
  <option value="US">United States</option>
  <option value="CA">Canada</option>
  <option value="FR">France</option>
  <option value="DE">Germany</option>
</select>
</div>

          <div class="sm:flex-col1 mt-10 flex">
            <button type="submit" class="flex max-w-xs flex-1 items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50 sm:w-full">Acheter</button>
          </div>
        </form>

      </div>
    </div>
  </div>
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
</footer>


</body>
</html>
