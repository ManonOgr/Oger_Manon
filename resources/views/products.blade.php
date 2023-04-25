<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Products</title>
    </head>
    <body>
        @include('./components/header')

        <main>
            <div class="bg-white">
                <div
                    class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8"
                >
                    <div
                        class="lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-8"
                    >
                        <!-- Image gallery -->
                        <div class="flex flex-col-reverse">
                            <!-- Image selector -->
                            <div
                                class="mx-auto mt-6 hidden w-full max-w-2xl sm:block lg:max-w-none"
                            >
                                <div
                                    class="grid grid-cols-4 gap-6"
                                    aria-orientation="horizontal"
                                    role="tablist"
                                ></div>
                            </div>

                            <div class="aspect-h-1 aspect-w-1 w-full">
                                <!-- Tab panel, show/hide based on tab state. -->
                                <div
                                    id="tabs-1-panel-1"
                                    role="tabpanel"
                                    tabindex="0"
                                >
                                    <img
                                        src="https://tailwindui.com/img/ecommerce-images/product-page-03-product-01.jpg"
                                        alt="Angled front view with bag zipped and handles upright."
                                        class="h-full w-full object-cover object-center sm:rounded-lg"
                                    />
                                </div>

                                <!-- More images... -->
                            </div>
                        </div>

                        <!-- Product info -->
                        <div class="mt-10 px-4 sm:mt-16 sm:px-0 lg:mt-0">
                            <h1
                                class="text-3xl font-bold tracking-tight text-gray-900"
                            >
                                Zip Tote Basket
                            </h1>

                            <div class="mt-3">
                                <h2 class="sr-only">Product information</h2>
                                <p
                                    class="text-3xl tracking-tight text-gray-900"
                                >
                                    $140
                                </p>
                            </div>

                            <div class="mt-6">
                                <h3 class="sr-only">Description</h3>

                                <div class="space-y-6 text-base text-gray-700">
                                    <p>
                                        The Zip Tote Basket is the perfect
                                        midpoint between shopping tote and comfy
                                        backpack. With convertible straps, you
                                        can hand carry, should sling, or
                                        backpack this convenient and spacious
                                        bag. The zip top and durable canvas
                                        construction keeps your goods protected
                                        for all-day use.
                                    </p>
                                </div>
                            </div>

                            <form class="mt-6">
                                <!-- Select -->
                                <div>
                                    <label
                                        for="countries"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        >Selectionner une taille</label
                                    >
                                    <select
                                        id="countries"
                                        class="bg-[#66EB9A] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    >
                                        <option selected>
                                            Selectionner une taille
                                        </option>
                                        <option value="XS">XS</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                    </select>
                                </div>

                                <div class="sm:flex-col1 mt-10 flex">
                                    <button
                                        type="submit"
                                        class="flex max-w-xs flex-1 items-center justify-center rounded-md border border-transparent bg-[#66EB9A] px-8 py-3 text-base font-medium text-black hover:bg-[#66EB9A] focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50 sm:w-full"
                                    >
                                        Acheter
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        @include('./components/footer')
    </body>
</html>
