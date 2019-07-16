<html>
<head>
    <meta charset="utf-8">
    <title>Serviço de Autocomplete</title>
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>


<body>
    <div class="container">
        <div class="col-md-6 mx-auto mt-5">
            @csrf
            <label for="autocomplete">Digite o evento</label>
            <input id="autocomplete" class="form-control d-flex align-items-center complete"> 
            <button class="salvar btn btn-success mt-3 float-right">Salvar</button>   
        </div>
    </div>
</body>
</html>