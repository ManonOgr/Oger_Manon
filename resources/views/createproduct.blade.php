<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Create Product</title>
</head>
<body>

        <form action="{{route('createnewproduct')}}" method="post" class="m-10 flex align-center flex-col">
        @csrf
        @method('post')
        <h1>Creation d'un nouveau produit</h1>
        <div class="mb-6 mt-5">
          <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Nom</label>
          <input type="text" name="name" id="large-input" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#66EB9A] focus:border-[#66EB9A] block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-[#66EB9A]" required>
        </div>
        <div class="mb-6">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Catégorie</label>
            <select name="categories" id="pet-select" class="border border-gray-300 rounded-lg dark:border-gray-600" required>
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->category_name}}</option>
        @endforeach
    </select>
        </div>
        <div class="mb-6 mt-5">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Prix</label>
            <input type="text" name="price" id="large-input" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#66EB9A] focus:border-[#66EB9A] block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-[#66EB9A]" required>
        </div>
        <div class="mb-6 mt-5">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Image</label>
            <input name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none  dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" required>
          </div>
        <div class="mb-6 mt-5">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Etat (solde / standard)</label>
            <input type="text" name="state" id="large-input" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#66EB9A] focus:border-[#66EB9A] block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-[#66EB9A]" required>
        </div>
        <div class="mb-6 mt-5">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
            <textarea name="description" id="mall-input" cols="30" rows="10" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#66EB9A] focus:border-[#66EB9A] block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-[#66EB9A]" required></textarea>
          </div>

        <button type="submit" class="bg-[#66EB9A] hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Créer</button>
      </form>

    </body>
    </html>
