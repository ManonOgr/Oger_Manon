<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>EditProduct</title>
</head>
<body>

    <form action="#" method="post">
        @csrf
        @method('post')
            <div class="mb-6">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 ">Nom</label>
                <input type="text" name="name" id="small-input" value="{{$products->product_name}}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 ">Categories</label>
                <input type="text" name="categories" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 ">Prix</label>
                <input type="text" name="price" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 ">Etat (solde / standard)</label>
                <input type="text" name="state" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div>
                <button type="submit">Modifier</button>
            </div>
        </form>

</body>
</html>
