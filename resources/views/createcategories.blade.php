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
<form action="{{route('createnewcategories')}}" method="post">
@csrf
@method('post')
    <div class="mb-6">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catégorie</label>
        <select name="categories" id="pet-select">

    @foreach($categories as $category)
    <option value="{{$category->id}}">{{$category->category_name}}</option>
    @endforeach
</select>
    </div>

    <div>
        <button type="submit">Creer</button>
    </div>
</form>

</body>
</html>
