<!doctype html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Vue') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

<div class="panel-body" id="app">
    <Clientes></Clientes>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" tabindex="1" role="dialog" aria-labelledby="">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="myModalLabel">@{{form_title}}</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <form name="frmCliente" class="form-horizontal" novalidate="">

                            <label for="cliente_nombre">Nombre:</label>
                            <input name="cliente_nombre" type="text" class="form-control" id="cliente_nombre" value="@{{cliente.cliente_nombre}}" ng-model="cliente.cliente_nombre" ng-required="true" value="@{{ cliente.cliente_nombre }}">
                            <span ng-show="frmCliente.cliente_nombre.$invalid && frmCliente.cliente_nombre.$touched">El campo Nombre es requerido</span>




                            <label for="cliente_cedula">Cédula:</label>
                            <input mask="999.999.999" clean="true" name="cliente_cedula" type="text" class="form-control" id="cliente_cedula" value="@{{cliente.cliente_cedula}}" ng-model="cliente.cliente_cedula" ng-required="true" value="@{{ cliente.cliente_cedula }}">
                            <span ng-show="frmCliente.cliente_cedula.$invalid && frmCliente.cliente_cedula.$touched">El campo Cédula es requerido</span>



                            <label for="cliente_nit">Nit:</label>
                            <input mask="999.999.999-9" clean="true" name="cliente_nit" type="text" class="form-control" id="cliente_nit" value="@{{cliente.cliente_nit}}" ng-model="cliente.cliente_nit" ng-required="true" value="@{{ cliente.cliente_nit }}">
                            <span ng-show="frmCliente.cliente_nit.$invalid && frmCliente.cliente_nit.$touched">El campo Nit es requerido</span>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btn-save" ng-click="save(modalestado,cliente_id)">Guardar Cambios</button>
                </div>
            </div>

        </div>

    </div>
</div>

</body>

<script src="{{ asset('public/js/app.js') }}"></script>


</html>