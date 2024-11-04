<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    <title>JDU</title>
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Demo CSS (No need to include it into your project) -->
    <link rel="stylesheet" href="{{asset('css/demo.css')}}">
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Data Table CSS -->
    <link rel='stylesheet' href='https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
    <style>
        td.one{
            text-align: center;
        }
        th{
            font-size: 13px;
            text-align: center;
        }
        body{
            margin-top: 20px;
        }
    </style>
</head>
<body>
<h1 style="text-align: center"> Japan Digital University talabalari davomati
</h1>
<!--$%adsense%$-->
<main class="cd__main">
    <!-- Start DEMO HTML (Use the following code into your project)-->
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
        <tr>
            <th style="text-align: center;width: 5%">#</th>
            <th style="width: 20%">TALABA(FISH)</th>
            <th style="width: 15%">KECHIKISHLAR SONI</th>
            <th style="width: 15%">SABABLI DARS QOLDIRILISHI</th>
            <th style="width: 15%">SABABSIZ DARS QOLDIRILISHI</th>
            <th style="width: 15%">DARSDA QATNASHISH FOIZI</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 0;?>
        @foreach($students as $student)
            <tr>
                <td class="one">{{++$i}}</td>
                <td>{{$student->studentName}}</td>
                <td class="one">{{$student->late}}</td>
                <td class="one">{{$student->absence}}</td>
                <td class="one">{{$student->unexcused}}</td>
                @if($student->lessonCount > 0)
                    <td class="one">{{round(($student->lessonCount-$student->absence-$student->unexcused)*100/($student->lessonCount))}}%</td>
                @else
                    <td class="one">0%</td>
                @endif
            </tr>


        @endforeach


        </tbody>
    </table>
    <!-- END EDMO HTML (Happy Coding!)-->
</main>
<!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.7.0.js'></script>
<!-- Data Table JS -->
<script src='https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js'></script>
<script src='https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js'></script>
<!-- Script JS -->
<script src="{{asset('js/script.js')}}"></script>
<!--$%analytics%$-->
</body>
</html>
