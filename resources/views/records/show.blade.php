<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="https://parents.jdu.uz/images/logo.png">
    <title>Davomat</title>
    <link rel="stylesheet" href="../Style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
<header>
    <div class="container">
        <a href="/records"><img width="60px" src="../images/logo.png" alt="Japan Digital University"></a>
        <h1 class="text-4xl">JDU talabalar kreditlari</h1>
        <div class="input-group">
            <input type="search" placeholder="Qidirish">
            <img width="20px" src="../images/search.png" alt="Izlash">
        </div>
    </div>
</header>

<main class="table">


    <section style="height: auto;" class="table__body">
        <div class="table__header">
            <h3><span style="color: #ef4444;">{{$student->student_name}}</span>ning fanlari bo'yicha kreditlari</h3>
        </div>
        <table class="w-full table-fixed">
            <thead>
            <tr class="bg-gray-300">
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Fan nomi</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Fan krediti</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Bahosi</th>
            </tr>
            </thead>
            <tbody class="bg-white">

            @foreach($subjects as $subject)
                <tr>
                    <td class="py-4 px-6 border-b border-gray-200">{{$subject->subject_name}}</td>
                    <td class=" py-4 px-6 border-b border-gray-200">{{$subject->subject_credit}}</td>
                    <td class="{{($subject->grade == 'F' ? 'text-red-500' : 'text-green-500' )}} py-4 px-6 border-b border-gray-200">{{$subject->grade}}</td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </section>
</main>
<script type="text/javascript" src="https://parents.jdu.uz/js/script.js"></script>
</body>

</html>
