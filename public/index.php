<!DOCTYPE html>
<html>
    <head>
        <title>Sign In</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="w-1/4" style="margin: 0 auto;">
            <h1 class="text-3xl md:text-4xl font-bold mb-3">Sign In Page</h1>

            <form action="/public/action.php" method="POST">
                <div>
                <label for="email" class="block text-sm font-medium leading-8 text-gray-700">
                    Alamat Email
                </label>
                <div class="mt-1 rounded-md">
                    <input value="" type="email" placeholder="Masukkan alamat email Anda" name="email" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                </div>
                </div>

                <div class="mt-2">
                <label for="password" class="block text-sm font-medium leading-8 text-gray-700">
                    Password
                </label>
                <div class="mt-1 rounded-md">
                    <input type="password" placeholder="Masukkan password Anda" name="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                </div>
                </div>

                <div class="mt-10">
                <span class="block w-full rounded-md">
                    <button type="submit" class="w-full flex justify-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"">
                    Log in
                    </button>
                </span>
                </div>
            </form>
        </div>
    </body>
</html>