<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Teste - Limpar Cache</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<div class="max-w-xl mx-auto mt-20 bg-white p-6 rounded-2xl shadow">
    <h1 class="text-xl font-bold mb-4">🧹 Dev Tools (Teste)</h1>

    @if(session('success'))
        <div class="mb-4 rounded-lg bg-green-100 text-green-800 px-4 py-2">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 gap-3">
        <a href="/teste?action=cache" class="btn">Limpar Cache</a>
        <a href="/teste?action=config" class="btn">Limpar Config</a>
        <a href="/teste?action=view" class="btn">Limpar Views</a>
        <a href="/teste?action=route" class="btn">Limpar Rotas</a>
        <a href="/teste?action=optimize" class="btn">Optimize Clear</a>
        <a href="/teste?action=dump" class="btn btn-danger">Composer Dump Autoload</a>
    </div>
</div>

<style>
    .btn {
        @apply block text-center rounded-xl bg-black text-white py-2 hover:bg-gray-800 transition;
    }
    .btn-danger {
        @apply bg-red-600 hover:bg-red-700;
    }
</style>

</body>
</html>
