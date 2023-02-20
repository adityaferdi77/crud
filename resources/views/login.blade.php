<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
   <!-- Tailwind-CSS CDN  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.4.6/tailwind.min.css" />
  </head>
  <body class="bg-blue-500">
    <!-- Login Form -->
    <div class="container mx-auto p-2">
      <div class="max-w-sm mx-auto my-24 bg-white px-5 py-10 rounded shadow-xl">
        <div class="text-center mb-8">
          <h1 class="font-bold text-2xl font-bold">Login ges</h1>
        </div>
            <form action="/actionlogin" method="POST" class="row">
                    @csrf
                <div class="col-12">
                    @if (session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Maaf!</strong> {{session('error')}}
                        </div>
                    @endif
                    @if (session()->has('success'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <strong>Registrasi</strong> {{session('success')}}
                        </div>
                    @endif
          <div class="mt-5">
            <label for="username">Username or Email</label>
            <input
              type="email"
              name="email"
              id="username"
              class="block w-full p-2 border rounded border-gray-500"
            />
          </div>
          <div class="mt-5">
            <label for="password">Password</label>
            <input
              type="password"
              name="password"
              id="password"
              class="block w-full p-2 border rounded border-gray-500"
            />
          </div>
          <div class="mt-10">
            <input
              type="submit"
              value="Login"
              class="py-3 bg-green-500 hover:bg-green-600 rounded text-white text-center w-full"
            />
          </div>
        </form>
        <div class="mt-3">
            <p class="mb-0  text-center">Don't have an account? <a href="/register"
                    class="text-primary fw-bold">Daptar
                    Ges</a></p>
        </div>
      </div>
    </div>
  </body>
</html>
