<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davomat</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">

<header class="bg-gray-300 py-4 shadow-md">
    <div class="container mx-auto flex items-center justify-between">
        <a href="https://jdu.uz" class="flex-shrink-0">
            <img src="./images/logo.png" alt="Japan Digital University" class="w-20">
        </a>
        <h1 class="text-center text-4xl font-semibold text-gray-800 flex-grow">JDU talabalar davomati</h1>
    </div>
</header>


<div class="flex items-center justify-center" style="min-height: calc(100vh - 80px);">
    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-6">
        <a href="{{route('students.index')}}" class="px-6 py-3 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-200 text-center">
            Old Records
        </a>
        <a href="{{route('students.index')}}" class="px-6 py-3 bg-green-500 text-white font-semibold rounded hover:bg-green-600 transition duration-200 text-center">
            Current Records
        </a>
    </div>
</div>
<script type="text/javascript" src="https://parents.jdu.uz/js/script.js"></script>
</body>
</html>
