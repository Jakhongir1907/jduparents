<!DOCTYPE html>
<html lang="en" title="Coding design">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo.png')}}" >
    <title>Davomat</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
<div class="header" style="display: flex;gap: 30px;width: 100%;padding-top: 15px">
    <div style="width: 20%;padding-left: 10%;">
        <img width="80px" src="{{asset('images/logo.png')}}" alt="">
    </div>
    <div style="margin-top:22px;width: 80%">

        <h1 style="color: #718096;font-size: 40px">Japan Digital University talabalari davomati</h1>
    </div>

</div>

<main class="table">


    <section class="table__header">
        <h3 style="margin-left: 15px;font-size: 30px">{{$student->studentName}} ning fanlari bo'yicha darsga qatnashish ko'rsatkichlari</h3>
{{--        <div class="input-group">--}}
{{--            <input type="search" placeholder="Talaba ism-familiyasi bo'yicha qidirish">--}}
{{--            <img src="{{asset('images/search.png')}}" alt="">--}}
{{--        </div>--}}
        <!-- <div class="export__file">
            <label for="export-file" class="export__file-btn" title="Export File"></label>
            <input type="checkbox" id="export-file">
            <div class="export__file-options">
                <label>Export As &nbsp; &#10140;</label>
                <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
                <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
                <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
            </div>
        </div> -->
    </section>
    <section class="table__body">
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th> FAN NOMI VA GURUHI </th>
                <th  class="second"> KECHIKISHLAR SONI </th>
                <th  class="second"> SABABLI DARS QOLDIRILISHI</th>
                <th  class="second">SABABSIZ DARS QOLDIRILISHI</th>
                <th  class="second"> DARSDA QATNASHISH FOIZI</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 0;?>
            @foreach($subjects as $subject)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$subject->subject}} <br> {{$subject->group}}</td>
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
                        <td class="one">{{round(($subject->lessonCount-$subject->absence-$subject->unexcused)*100/($subject->lessonCount))}}%</td>
                    @else
                        <td class="one">0%</td>
                    @endif
                </tr>


            @endforeach
            <tr style="border: 1px solid #d893a3;border-radius: 10px;margin-top: 50px">
                <td colspan="6">

                    <h1 style="color: #ef4444">Universitet qoidalari:</h1>
                   <p style="color: black;font-family: Roboto">
                   </p>
                </td>
            </tr>

            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </section>
</main>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>

</html>
