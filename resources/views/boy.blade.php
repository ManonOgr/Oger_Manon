<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Homme</title>
    </head>
    <body>
        @include('./components/header')

        <main>
            <!-- Trending products -->
            <section aria-labelledby="trending-heading" class="bg-white">
                <div
                    class="py-16 sm:py-24 lg:mx-auto lg:max-w-7xl lg:px-8 lg:py-32"
                >
                    <div
                        class="flex items-center justify-between px-4 sm:px-6 lg:px-0"
                    >
                        <h2
                            id="trending-heading"
                            class="text-2xl font-bold tracking-tight text-gray-900"
                        >
                            Produits
                        </h2>
                    </div>
                    <div
                        class="flex items-center justify-between px-4 sm:px-6 lg:px-0"
                    >
                        <p class="tracking-tight text-gray-900">4 produits</p>
                    </div>

                    <div class="bg-white">
                        <div
                            class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8"
                        >
                            <h2 class="sr-only">Products</h2>

                            <div
                                class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8"
                            >
                                <a href="{{ route('products') }}" class="group">
                                    <div
                                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7"
                                    >
                                        <img
                                            src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg"
                                            alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                                            class="h-full w-full object-cover object-center group-hover:opacity-75"
                                        />
                                    </div>
                                    <h3 class="mt-4 text-sm text-gray-700">
                                        Earthen Bottle
                                    </h3>
                                    <p
                                        class="mt-1 text-lg font-medium text-gray-900"
                                    >
                                        $48
                                    </p>
                                </a>
                                <a href="{{ route('products') }}" class="group">
                                    <div
                                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7"
                                    >
                                        <img
                                            src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg"
                                            alt="Olive drab green insulated bottle with flared screw lid and flat top."
                                            class="h-full w-full object-cover object-center group-hover:opacity-75"
                                        />
                                    </div>
                                    <h3 class="mt-4 text-sm text-gray-700">
                                        Nomad Tumbler
                                    </h3>
                                    <p
                                        class="mt-1 text-lg font-medium text-gray-900"
                                    >
                                        $35
                                    </p>
                                </a>
                                <a href="{{ route('products') }}" class="group">
                                    <div
                                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7"
                                    >
                                        <img
                                            src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-03.jpg"
                                            alt="Person using a pen to cross a task off a productivity paper card."
                                            class="h-full w-full object-cover object-center group-hover:opacity-75"
                                        />
                                    </div>
                                    <h3 class="mt-4 text-sm text-gray-700">
                                        Focus Paper Refill
                                    </h3>
                                    <p
                                        class="mt-1 text-lg font-medium text-gray-900"
                                    >
                                        $89
                                    </p>
                                </a>
                                <a href="{{ route('products') }}" class="group">
                                    <div
                                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7"
                                    >
                                        <img
                                            src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-04.jpg"
                                            alt="Hand holding black machined steel mechanical pencil with brass tip and top."
                                            class="h-full w-full object-cover object-center group-hover:opacity-75"
                                        />
                                    </div>
                                    <h3 class="mt-4 text-sm text-gray-700">
                                        Machined Mechanical Pencil
                                    </h3>
                                    <p
                                        class="mt-1 text-lg font-medium text-gray-900"
                                    >
                                        $35
                                    </p>
                                </a>

                                <!-- More products... -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div
                class="flex items-center justify-center border-t border-gray-200 bg-white px-4 py-3 sm:px-6"
            >
                <div class="flex flex-1 justify-between sm:hidden">
                    <a
                        href="#"
                        class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50"
                        >Previous</a
                    >
                    <a
                        href="#"
                        class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50"
                        >Next</a
                    >
                </div>
                <div
                    class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-center"
                >
                    <div>
                        <nav
                            class="isolate inline-flex -space-x-px rounded-md shadow-sm"
                            aria-label="Pagination"
                        >
                            <a
                                href="#"
                                class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0"
                            >
                                <span class="sr-only">Previous</span>
                                <svg
                                    class="h-5 w-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </a>
                            <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                            <a
                                href="#"
                                aria-current="page"
                                class="relative z-10 inline-flex items-center bg-neutral-500 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-neutral-500"
                                >1</a
                            >
                            <a
                                href="#"
                                class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0"
                                >2</a
                            >
                            <a
                                href="#"
                                class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex"
                                >3</a
                            >
                            <span
                                class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0"
                                >4</span
                            >
                            <a
                                href="#"
                                class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex"
                                >5</a
                            >
                            <a
                                href="#"
                                class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex"
                                >6</a
                            >
                            <a
                                href="#"
                                class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0"
                            >
                                <span class="sr-only">Next</span>
                                <svg
                                    class="h-5 w-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd"
                                    />
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
