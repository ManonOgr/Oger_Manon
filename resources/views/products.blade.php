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
                    @foreach($products as $product)

                        <div class="flex flex-col-reverse">
                         
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
                                <img src="{{ asset($product->product_picture) }}" alt="{{ $product->product_name }} image" class="h-full w-full object-cover object-center group-hover:opacity-75">
                                </div>
                            </div>
                        </div>

                        <!-- Product info -->
                        <div class="mt-10 px-4 sm:mt-16 sm:px-0 lg:mt-0">
                            <h1
                                class="text-3xl font-bold tracking-tight text-gray-900"
                            >
                            {{$product->product_name}}
                            </h1>

                            <div class="mt-3">
                                <h2 class="sr-only">Product information</h2>
                                <p
                                    class="text-3xl tracking-tight text-gray-900"
                                >
                                {{$product->product_price}} €
                                </p>
                            </div>

                            <div class="mt-6">
                                <h3 class="sr-only">Description</h3>

                                <div class="space-y-6 text-base text-gray-700">
                                    <p>
                                        {{$product->product_description}}
                                    </p>
                                </div>
                            </div>

                            <form class="mt-6">
                                <!-- Select -->
                                <div>
                                    <label
                                        for="countries"
                                        class="block mb-2 text-sm font-medium text-white dark:text-white"
                                        >Selectionner une taille</label
                                    >
                                    <select
                                        id="countries"
                                        class=" border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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
                                    class="bg-[#66EB9A] hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                                >
                                     Acheter
                                </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{$products->links()}}
        </main>

        @include('./components/footer')
    </body>
</html>
