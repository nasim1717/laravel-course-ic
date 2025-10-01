<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Component Demo</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mx-auto">
        <h1 class="text-3xl text-red-400">Component Demo</h1>
        {{ $slot }}
    </div>

</body>

</html>
