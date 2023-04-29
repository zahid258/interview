<!
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<style>
    body{
        height: 100vh;
    }
    .container{
        height: 100%;
    }
</style>
</head>

<body>

<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <a href="{{ route('logout') }}">
        <button type="button" class="btn btn-danger" style="float: right">Logout</button>
        </a>
    </div>
</nav>
<div class="container d-flex align-items-center justify-content-center" id="questionContainer">

</div>




</body>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script type="text/javascript">

    function nextQuestion(requestType) {
        let answer = $('input[name="answer"]:checked').val();
        let question_id = $('#question_id').val();
        let next_index = 0;
        if(requestType != 'first')
            next_index = $("#next_index").val();

        $.post("get_next_question",
            {
                questions: JSON.stringify(<?php  echo json_encode($questions); ?>),
                requestType: requestType,
                answer: answer,
                question_id:question_id,
                next_index:next_index
            },

            function (data, status) {
                $("#questionContainer").html(data);
                // alert("Data: " + data + "\nStatus: " + status);
            });
    }
    nextQuestion('first');
</script>
</html>
