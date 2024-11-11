<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davomat</title>
    <link rel="stylesheet" href="./Style/style.css">
</head>
<body>
<header>
    <div class="container">
        <a href="/"><img width="60px" src="./images/logo.png" alt="Japan Digital University"></a>
        <h1>JDU talabalar davomati</h1>
        <div class="input-group">
            <input type="search" placeholder="Qidirish">
            <img width="20px" src="https://parents.jdu.uz/images/search.png" alt="">
        </div>
    </div>
</header>

<section class="table__body">
    <table>
        <thead>
        <tr class="main-thead">

            <th> TALABA (ID) </th>
            <th> TALABA (F.I.SH) </th>
            <th class="second">DARSLARDA QATNASHISH</th>
            <th class="second">KECHIKISHLAR</th>
            <th class="second">SABABLI</th>
            <th class="second">SABABSIZ</th>
            <th class="second">FOIZ</th>
            <th class="second">BATAFSIL</th>

        </tr>
        </thead>
        <tbody>

        @foreach($students as $student)
            <tr>
                <td>{{$student->studentId}}</td>
                <td>{{$student->studentName}}</td>
                <td class="one">{{$student->lessonCount-$student->absence-$student->unexcused}}</td>
                <td class="one">{{$student->late}}</td>
                <td class="one">
                    <p style="color: orange">{{$student->absence}}</p>
                </td>
                <td class="one">
                    <p style="color: red">{{$student->unexcused}}</p>
                </td>
                @if($student->lessonCount > 0)
                <td class="one">{{round(($student->lessonCount-$student->absence-$student->unexcused)*100/($student->lessonCount))}}%</td>
                @else
                    <td class="one">0%</td>
                @endif

                <td class="one"><a href="{{route('students.show' ,$student->studentId)}}">Batafsil</a></td>
            </tr>
        @endforeach

        </tbody>
    </table>
</section>

<script type="text/javascript" src="https://parents.jdu.uz/js/script.js"></script>
</body>
</html>
