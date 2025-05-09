<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind css</title>

    <!-- google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    

@include('web.shared.header')

<body class="w-full h-screen flex justify-center items-center bg-slate-100">
    <div class="w-full max-w-sm rounded-lg border border-gray-200 bg-white p-4 shadow-lg shadow-indigo-600/10 dark:border-gray-700 dark:bg-gray-800 sm:p-6 md:p-8">
        <form class="space-y-6" action="#">
          <h5 class="text-xl font-medium text-gray-900 dark:text-white">Tailwind Css</h5>
          <div>
            <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
            <input type="email" name="email" id="email" class="outline-none block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400" placeholder="Gmail or Phone" required="" />
          </div>
          <div>
            <label for="password" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Your password</label>
            <input type="password" name="password" id="password" placeholder="Password" class="outline-none block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400" required="" />
          </div>
          <div class="flex items-start">
            <div class="flex items-start">
              <div class="flex h-5 items-center">
                <input id="remember" type="checkbox" value="" class="focus:ring-3 h-4 w-4 rounded border border-gray-300 bg-gray-50 focus:ring-indigo-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-indigo-600" required="" />
              </div>
              <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
            </div>
            <a href="#" class="ml-auto text-sm text-indigo-700 hover:underline dark:text-indigo-500">Lost Password?</a>
          </div>
          <button type="submit" class="w-full rounded-lg bg-indigo-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Login your account</button>
          <div class="text-sm font-medium text-gray-500 dark:text-gray-300">Not registered? <a href="#" class="text-indigo-700 hover:underline dark:text-indigo-500">Create account</a></div>
        </form>
      </div>
      
      @include('web.shared.footer')

    </body>
    </html>