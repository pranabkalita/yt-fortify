<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/app.css')
</head>

<body class="h-full">
    <x-global.navbar />

    <div class="relative overflow-hidden bg-white">
        <div class="mx-auto max-w-7xl">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
