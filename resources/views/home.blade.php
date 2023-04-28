<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="https://cdn.tailwindcss.com"></script>
        <title>We Fashion</title>

        <!-- Fonts -->

        <!-- Styles -->
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
                        <p class="tracking-tight text-gray-900">{{$quantity}} produits</p>
                    </div>

                    <div class="bg-white">
                        <div
                            class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8"
                        >
                            <h2 class="sr-only">Products</h2>

                            <div
                                class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8"
                            >

                        @foreach($products as $product)
                           <!-- Boucle qui parcourt la variable listeArticles -->
                            <a href="{{ route('product', 'product') }}" class="group">
                                <div
                                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7"
                                >
                                <img src="{{ asset($product->product_picture) }}" alt="{{ $product->product_name }} image" class="h-full w-full object-cover object-center group-hover:opacity-75">
                                </div>
                                <h3 class="mt-4 text-sm text-gray-700">
                                    {{$product->product_name}}
                                </h3>
                                <p
                                    class="mt-1 text-lg font-medium text-gray-900"
                                >
                                {{$product->product_price}} €
                                </p>
                            </a>

                        @endforeach

                </div>
                </div>

                </div>
            </section>

            {{$products->links()}}
        </main>

        @include('./components/footer')
    </body>
</html>
