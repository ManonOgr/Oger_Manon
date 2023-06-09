{{-- @extends("home") --}}
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Admin</title>
    </head>
    <body>
        <section class="bg-gray-300 h-screen flex item-center justify-center">
            <div
                class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0"
            >
                <div
                    class="w-full bg-white border-[#66EB9A] rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0"
                >
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-black md:text-2xl"
                        >
                            Connexion en tant qu'admin
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="{{route('auth.admin')}}" method="post">
                            @csrf
                            <div>
                                <label
                                    for="email"
                                    class="block mb-2 text-sm font-medium text-black"
                                    >Email</label
                                >
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Email"
                                    required=""
                                />

                            </div>
                            <div>
                                <label
                                    for="password"
                                    class="block mb-2 text-sm font-medium text-black"
                                    >Mot de passe</label
                                >
                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required=""
                                />
                            </div>
                            <div
                                class="flex items-center justify-between"
                            ></div>
                            <button
                                type="submit"
                                class="w-full text-black bg-[#66EB9A] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#66EB9A] dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                            >
                                Se connecter
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
