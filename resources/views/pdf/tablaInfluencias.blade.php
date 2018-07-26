<div class="card text-center">
    <div class="card-header">
        <nav class="navbar navbar-dark bg-primary">
            <a class="navbar-brand " href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/ce/UTE_new_logo.jpg" class="img-rounded" alt="Cinque Terre" width="60" height="60">
                <img src="http://www.pichincha.gob.ec/images/logo/logo2.png" class="img-rounded" alt="Cinque Terre">
                <img src="http://www.devbrain-it.net/wp-content/uploads/2018/07/logoPacto-1.jpg" class="img-rounded" alt="Cinque Terre"  height="40" >
            </a>
        </nav>
    </div>
    <div style="overflow-x:auto;">`
        <style>
            table {
                font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
                font-size: 6px;
                text-align: left;
                border-collapse: collapse;
                margin-left: auto;
                margin-right: auto;
            }

            th {
                font-size: 6px;
                background: #b9c9fe;
                border-top: 4px solid #aabcfe;
                border-bottom: 1px solid #fff;
                color: #039;
            }

            td {
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
        <h1 class="text-center">Reporte Area Influencias
        </h1>
        <h3>
            Fecha:
            <small class="text-muted">
                <?php

                $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

                echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
                //Salida: Viernes 24 de Febrero del 2012

                ?>
            </small>
        </h3>
        <br/>
        <h2 class="text-center" style="max-height: 100px;text-align: center">Información</h2>
        <div>
            <table class="table table-responsive" id="areaInfluencias-table">
                <thead>
                <tr>
                    <th>Altitud</th>
                    <th>Lat</th>
                    <th>Long</th>
                    <th>Descripción del tipo de terreno</th>
                    <th>Calidad de aire</th>
                    <th>Detalle de ruido</th>
                    <th>Observaciones de ecosistema</th>
                    <th>Religión</th>
                    <th>Lenguaje</th>
                    <th>Tipo Vegetal</th>
                    <th>Manejo ambiental</th>
                    <th>Uso de suelo</th>
                    <th>Tipo de suelo</th>
                    <th>Permeabilidad de suelo</th>
                    <th>Clima</th>
                    <th>Condiciones de drenaje</th>
                    <th>Ecosistema</th>
                    <th>Caracteristicas étnicas</th>
                    <th>Nivel de tráfico</th>
                    <th>Recirculación de aire</th>
                    <th>Organización social</th>
                    <th>Tendencia de tierra</th>
                    <th>Abastecimiento de agua</th>
                    <th>Evacuación de agua lluvia</th>
                    <th>Consolidación de areas de influencia</th>
                    <th>Evacuación de aguas servidas</th>
                    <th>Uso vegetación</th>
                    <th>Descripción de tradiciones</th>
                    <th>Descripción de tipo de fuentes</th>
                    <th>Ruido</th>
                    <th>Precipitaciones</th>

                </tr>
                </thead>
                <tbody>
                @foreach($areaInfluencias as $areaInfluencia)
                    <tr>
                        <td>{!! $areaInfluencia->altitud !!}</td>
                        <td>{!! $areaInfluencia->lat !!}</td>
                        <td>{!! $areaInfluencia->long !!}</td>
                        <td>{!! $areaInfluencia->tipoTerrenoDescripcion !!}</td>
                        <td>{!! $areaInfluencia->detalleCalidadAire !!}</td>
                        <td>{!! $areaInfluencia->detalleRuido !!}</td>
                        <td>{!! $areaInfluencia->observacionesEcosistema !!}</td>
                        <td>
                            @foreach($areaInfluencia->religions as $areainfluenciaHasReligion)

                                {!! $areainfluenciaHasReligion->nombre !!}

                            @endforeach
                        </td>
                        <td>
                            @foreach($areaInfluencia->lenguajes as $areainfluenciaHasLenguaje)

                                {!! $areainfluenciaHasLenguaje->nombre !!}

                            @endforeach
                        </td>
                        <td>
                            @foreach($areaInfluencia->tipovegetals as $areaInfluenciaHasTipoVegetal)

                                {!! $areaInfluenciaHasTipoVegetal->nombre_comun !!}

                            @endforeach
                        </td>
                        <td>{!! $areaInfluencia->ManejoAmbiental->nombre !!}</td>
                        <td>{!! $areaInfluencia->UsoSuelo->nombre !!}</td>
                        <td>{!! $areaInfluencia->TipoSuelo->nombre !!}</td>
                        <td>{!! $areaInfluencia->PermeabilidadSuelo->nombre !!}</td>
                        <td>{!! $areaInfluencia->Clima->nombre !!}</td>
                        <td>{!! $areaInfluencia->CondicionesDrenaje->nombre !!}</td>
                        <td>{!! $areaInfluencia->Ecosistema->nombre !!}</td>
                        <td>{!! $areaInfluencia->caracteristicasetnica->nombre !!}</td>
                        <td>{!! $areaInfluencia->nivelTraficoDescripcion !!}</td>
                        <td>{!! $areaInfluencia->recirculacionAireDescripcion !!}</td>
                        <td>{!! $areaInfluencia->organizacionSocialDescripcion !!}</td>
                        <td>{!! $areaInfluencia->tendenciaTierraDescripcion !!}</td>
                        <td>{!! $areaInfluencia->abastecimientoAguaDescripcion !!}</td>
                        <td>{!! $areaInfluencia->evacuacionAguaLluviaDescripcion !!}</td>
                        <td>{!! $areaInfluencia->consolidacionAreasInfluenciaDescripcion !!}</td>
                        <td>{!! $areaInfluencia->evacuacionAguasServidasDescripcion !!}</td>
                        <td>{!! $areaInfluencia->usoVegetacionDescripcion !!}</td>
                        <td>{!! $areaInfluencia->tradicionesDescripcion !!}</td>
                        <td>{!! $areaInfluencia->tipoFuentesDescripcion !!}</td>
                        <td>{!! $areaInfluencia->ruido !!}</td>
                        <td>{!! $areaInfluencia->precipitaciones !!}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <br/>
    <div class="card-footer text-muted footer">
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © 2018 <a href="#">UTE</a>.</strong> All rights reserved.
    </div>
</div>
