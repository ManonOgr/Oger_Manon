<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Create Categories</title>
</head>
<body>

    <form action="{{route('createnewcategories')}}" method="post" class="m-10 flex align-center flex-col">
    @csrf
    @method('post')
    <h1>Creation d'une nouvelle catégorie</h1>
    <div class="mb-6 mt-5">
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Catégories</label>
      <input type="text" name="categories" id="large-input" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#66EB9A] focus:border-[#66EB9A] block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-[#66EB9A]" required>
    </div>
    <button type="submit" class="bg-[#66EB9A] hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Créer</button>
  </form>

</body>
</html>
