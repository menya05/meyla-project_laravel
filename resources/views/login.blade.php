<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            softpink: '#FFE4E6', // background color
                            buttonpink: '#FFC0CB'  // button color
                        }
                    }
                }
            }
        </script>
    </head>
    <body class="min-h-screen bg-softpink flex items-center justify-center">
        <form id="loginForm" class="bg-white p-8 rounded-lg shadow-md w-96">
            <div class="mb-4">
                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username :</label>
                <input type="text" name="username" id="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password :</label>
                <input type="password" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <button type="submit" class="w-full bg-buttonpink hover:bg-rose-300 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300">
                LOGIN
            </button>
        </form>
        <script src="js/script.js"></script>
    </body>
</html>