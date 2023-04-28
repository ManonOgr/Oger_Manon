<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Admin</title>
    </head>
    <body>
        @include('./components/headerdashboard')

        <main>
            <div class="m-9 flex justify-end">
                <a href="{{route('createproduct')}}">
                    <button
                    class="bg-[#66EB9A] hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                >
                    Nouveau
                </button>
                </a>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-9">
                <table
                    class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
                >
                    <thead
                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                    >
                        <tr>
                            <th scope="col" class="px-6 py-3">Nom</th>
                            <th scope="col" class="px-6 py-3">Catégories</th>
                            <th scope="col" class="px-6 py-3">Prix</th>
                            <th scope="col" class="px-6 py-3">Etat</th>
                            <th scope="col" class="px-6 py-3">Editer</th>
                            <th scope="col" class="px-6 py-3">Supprimer</th>
                        </tr>
                    </thead>
                    @foreach ( $products as $product)
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                        >
                            <th
                                scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                            >
                            {{$product->product_name}}
                            </th>
                            <td class="px-6 py-4">{{$product->product_category}}</td>
                            <td class="px-6 py-4">{{$product->product_price}}</td>
                            <td class="px-6 py-4">{{$product->product_state}}</td>
                            <td class="px-6 py-4">
                                <a
                                    href="{{route('productedit', $product->id)}}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    >Edit</a
                                >
                            </td>
                            <td class="px-6 py-4">
                                <a
                                    href="#"
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline"
                                    >Remove</a
                                >
                            </td>
                        </tr>
                        </tr>
                    </tbody>
                    @endforeach

                </table>
                {{$products->links()}}
            </div>

                </div>
            </div>
        </main>
    </body>
</html>
