<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davomat</title>
    <link rel="stylesheet" href="./Style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
        <a href="/"><img width="65px" src="./images/logo.png" alt="Japan Digital University"></a>
        <h1 class="text-5xl">JDU talabalar kreditlari</h1>
        <div class="input-group">
            <input type="search" placeholder="Qidirish">
            <img width="20px" src="https://parents.jdu.uz/images/search.png" alt="">
        </div>
    </div>
</header>

<div class="container mx-auto mt-5">
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg shadow-md">
            <thead class="rounded-t-lg">
            <tr class="w-full bg-gray-500 text-white">
                <th class="py-6 text-xl px-6 text-left">Talaba ID</th>
                <th class="py-6 text-xl px-6 text-left">Talaba (F.I.O)</th>
                <th class="py-6 text-xl px-6 text-left">Umumiy kreditlari</th>
                <th class="py-6 text-xl px-6 text-left">Batafsil</th>
            </tr>
            </thead>
            <tbody>
            @foreach($records as $record)
                <tr class="border-b hover:bg-gray-50 transition duration-300">
                    <td class="py-4 px-6">{{$record->student_id}}</td>
                    <td class="py-4 px-6">{{$record->student_name}}</td>
                    <td class="py-4 px-6">{{$record->credits}}</td>
                    <td class="py-3 px-4 border-b border-gray-200 text-gray-700">
                        <a href="{{route('records.show' , $record->student_id)}}" class="text-blue-600 hover:text-red-500 font-semibold transition duration-150 ease-in-out">
                         Batafsil
                        </a>
                    </td>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript" src="https://parents.jdu.uz/js/script.js"></script>
</body>
</html>
