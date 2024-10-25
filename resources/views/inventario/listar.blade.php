@extends('layout.header')

@section('contenido') 
    <center>
    @if (session('success'))
        <script>
            swal("","{{session('success')}}","success");
        </script>
    @endif

    <script>
        $('#inventario').DataTable({    
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "0Siguiente",
                    "previous": "Anterior"
                }
            }
        });
    </script>
    <div>
        <style>
            th{
                text-align:center;
                align-items:center;
            }
        </style>
        
        <h2>Listado - Funcionarios</h2><span style=""></span>
        <br>
        <div style="align-item:center; max-width:600px; display:table; min-width:250px">
        <table id="inventario" class="table table-bordered table-striped">
            <thead class="table-dark">
                <th>Tipo de equipo</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Procesador</th>
                <th>Memoria Ram</th>
                <th>Disco Duro</th>
                <th>Sistema Operativo</th>
                <th>Fecha Inventario</th>
                <th>N serial.</th>
                <th>Bien Nacional</th>
                <th>Accion</th>
            </thead>
            <tboddy>
                @foreach($inventarios as $inventario)
                    <tr>
                        <td style="text-align:center">{{ $inventario->tipo_equipo }}</td>
                        <td style="text-align:center">{{ $inventario->marca }}</td>
                        <td style="text-align:center">{{ $inventario->modelo }}</td>
                        <td style="text-align:center">{{ $inventario->procesador }}</td>
                        <td style="text-align:center">{{ $inventario->memoria }}</td>
                        <td style="text-align:center">{{ $inventario->unidad_disco }}</td>
                        <td style="text-align:center">{{ $inventario->sistema_operativo }}</td>
                        <td style="text-align:center">{{ $inventario->fecha_invequipo }}</td>
                        <td style="text-align:center">{{ $inventario->nserial }}</td>
                        <td style="text-align:center">{{ $inventario->bien_nacional }}</td>
                        <td style="align-items:center">
                            <span class="btn btn-success"><i class="fa-solid fa-refresh"></i></span>
                        </td>
                    </tr>
                @endforeach
            </tboddy>
        </table>
        </div>
    </div>
    </center>
@endsection