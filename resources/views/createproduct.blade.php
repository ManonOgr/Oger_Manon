<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Categories</title>
</head>
<body>
   @include('./components/header')
<form action="{{route('createnewproduct')}}" method="post">
@csrf
@method('post')
    <div class="mb-6">
        <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom </label>
        <input type="text" name="name" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    <div class="mb-6">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catégorie</label>
        <select name="categories" id="pet-select">

    @foreach($categories as $category)
    <option value="{{$category->id}}">{{$category->category_name}}</option>
    @endforeach
</select>
    </div>
    <div>
        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prix</label>
        <input type="text" name="price" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div>
        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
        <input type="text" name="image" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div>
        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Etat (solde / standard)</label>
        <input type="text" name="state" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div>
        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
        <input type="text" name="description" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div>
        <button type="submit">Creer</button>
    </div>
</form>

</body>
</html>
