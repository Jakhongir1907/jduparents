<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="https://parents.jdu.uz/images/logo.png">
    <title>Davomat</title>
    <link rel="stylesheet" href="../Style/style.css">
</head>

<body>
<header>
    <div class="container">
        <a href="/students"><img width="60px" src="../images/logo.png" alt="Japan Digital University"></a>
        <h1>JDU talabalar davomati</h1>
        <div class="input-group">
            <input type="search" placeholder="Qidirish">
            <img width="20px" src="../images/search.png" alt="Izlash">
        </div>
    </div>
</header>

<main class="table">


    <section style="height: auto;" class="table__body">
        <div class="table__header">
            <h3><span style="color: #ef4444;">{{$student->studentName}}</span>ning fanlari bo'yicha davomati</h3>
        </div>
        <table>
            <thead>
            <tr>
                <th>№</th>
                <th> FAN NOMI VA GURUHI </th>
                <th  class="second"> DARSDA QATNASHISH </th>
                <th  class="second"> KECHIKISHLAR SONI </th>
                <th  class="second"> SABABLI DARS QOLDIRILISHI</th>
                <th  class="second">SABABSIZ DARS QOLDIRILISHI</th>
                <th  class="second"> DARSDA QATNASHISH FOIZI</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=0?>

            @foreach($subjects as $subject)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$subject->subject}} <br> {{$subject->group}}</td>
                    <td class="one">{{$subject->lessonCount-$subject->absence-$subject->unexcused}}</td>
                    <td class="one">{{$subject->late}}</td>
                    <td class="one">
                        @if($subject->absence > 0)
                            <p style="color: orange">{{$subject->absence}}</p>
                        @else
                            <p>{{$subject->absence}}</p>
                        @endif
                    </td>
                    <td class="one">
                        @if($subject->unexcused > 0)
                            <p style="color: red">{{$subject->unexcused}}</p>
                        @else
                            <p>{{$subject->unexcused}}</p>
                        @endif
                    </td>
                    @if($subject->lessonCount > 0)
                        <td class="one">{{round(($subject->lessonCount-$subject->unexcused)*100/($subject->lessonCount))}}%</td>
                    @else
                        <td class="one">0%</td>
                    @endif
                </tr>

            @endforeach


            </tbody>
        </table>
    </section>
    <section class="table__body">
        <div class="qoida_main" style="border: 1px solid #d893a3;border-radius: 10px; padding: 10px;">
            <div>
                <h1 style="color: #ef4444">Universitet qoidalari:</h1>
                <p style="color: black;">
                </p>
                <p style="color: black;">
                </p>
            </div>
        </div>
    </section>
</main>
<script type="text/javascript" src="https://parents.jdu.uz/js/script.js"></script>
</body>

</html>
