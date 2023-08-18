<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            padding: 0;
            margin: 10px 0;
            background: #f2f2f2 url('https://formbuilder.online/assets/img/noise.png');
        }
    </style>
</head>

<body>
    <div id="build-wrap"></div>
    
    <div class="setDataWrap">
        <button id="getJSON" type="button">Create Form</button>
    </div>
    <form id="dataForm" method="post" action="{{ route('admin.form.postData') }}">
        @csrf
        <input type="hidden" id="jsonDataInput" name="jsonData">
    </form>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
    <script>
        jQuery(function($) {
            var fbEditor = document.getElementById('build-wrap');
            var formBuilder = $(fbEditor).formBuilder();
    
            document.getElementById('getJSON').addEventListener('click', function() {
                var jsonData = formBuilder.actions.getData('json');
                document.getElementById('jsonDataInput').value = jsonData;
                document.getElementById('dataForm').submit();
            });
        });
    </script>    
</body>

</html>
