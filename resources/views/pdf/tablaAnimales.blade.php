<div class="card text-center">
    <div class="card-header">
        <nav class="navbar navbar-dark bg-primary">
            <a class="navbar-brand " href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/ff/Logo_UTE.jpg" class="img-rounded" alt="Cinque Terre" width="60" height="60">
                <img src="http://www.pichincha.gob.ec/images/logo/logo2.png" class="img-rounded" alt="Cinque Terre">
                <img src="http://www.devbrain-it.net/wp-content/uploads/2018/07/logoPacto-1.jpg" class="img-rounded" alt="Cinque Terre"  height="40" >
            </a>
        </nav>
    </div>
    <div style="overflow-x:auto;">
        <style>
            table {
                font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
                font-size: 12px;
                width: 480px;
                text-align: left;
                margin-left: auto;
                margin-right: auto;
                border-collapse: collapse;
            }

            th {
                font-size: 13px;
                font-weight: normal;
                padding: 8px;
                background: #b9c9fe;
                border-top: 4px solid #aabcfe;
                border-bottom: 1px solid #fff;
                color: #039;
            }

            td {
                padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;
            }

            tr:hover td {
                background: #d0dafd;
                color: #339;
            }

            h1 {
                font-size: 1.7em;
                font-weight: normal;
            }
            footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 40px;
            }
        </style>
        <br/>
        <h1 class="text-center">Reporte de Animales
        </h1>
        <h3>
            Fecha:
            <small class="text-muted">
                <?php

                $dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
                $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

                echo $dias[date('w')] . " " . date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');
                //Salida: Viernes 24 de Febrero del 2012

                ?>
            </small>
        </h3>
        <br/>
        <h2 class="text-center" style="max-height: 100px;text-align: center">Información</h2>
        <br/>
        <div>
            <table class="table table-responsive" id="tipoAnimales-table">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Pecuaria</th>
                    <th>Tipo de Unidad</th>
                    <th>Tipo de Producción</th>
                    <th>Destino</th>

                </tr>
                </thead>
                <tbody>
                @foreach($tipoAnimales as $tipoAnimales)
                    <tr>
                        <td>{!! $tipoAnimales->nombre !!}</td>
                        <td>{!! $tipoAnimales->precuaria->nombre !!}</td>
                        <td>{!! $tipoAnimales->tipounidad ->nombre !!}</td>
                        <td>{!! $tipoAnimales->TipoProduccion->nombre !!}</td>
                        <td>{!! $tipoAnimales->destino->nombre!!}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <br/>
    </div>
    <br/>
    <div class="card-footer text-muted footer">
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © 2018 <a href="#">UTE</a>.</strong> All rights reserved.
        </footer>
    </div>
</div>
