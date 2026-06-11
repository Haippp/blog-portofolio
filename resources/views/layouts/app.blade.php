<!DOCTYPE html>
<html lang="en" class="overscroll-none">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Portofolio</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-100">
    <nav class="flex items-center justify-between p-5 bg bg-emerald-900 text-white">
        <h3 class="font-black text-lg">Haiper Alexander</h3>
        <div class="flex items-center gap-10 font-bold">
            <a href="" class="hover:text-gray-300">Home</a>
            <a href="" class="hover:text-gray-300">Blog</a>
            <a href="" class="bg-amber-600 hover:bg-amber-700 px-5 py-1 rounded-full">Login</a>
        </div>
    </nav>
    <main class="min-h-screen w-full max-w-full flex flex-col justify-center">
        @yield('content')
    </main>
    <footer class="flex justify-center py-2 bg-gray-200">
        &copy; haiper alexander 2026 - Dibuat dengan Laravel
    </footer>
</body>
</html>