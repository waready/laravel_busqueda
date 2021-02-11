@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Buqueda</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <div class="card-body">
                        <table width="100%"
                            class="table table-striped table-bordered nowrap"
                            cellspacing="0"
                            id="students-table"
                        >
                            <thead>
                                <tr>
                                    <th>{{ __("ID") }}</th>
                                    <th>{{ __("Codigo") }}</th>
                                    <th>{{ __("Nombre") }}</th>
                                    <th>{{ __("Apellido") }}</th>
                                    <th>{{ __("imagen") }}</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
{{-- <br><script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script> --}}
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" defer></script>

    
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script> --}}
    <script>
        let dt;
        console.log('tag', 'asd')
      //   let modal = jQuery("#appModal");

        $('#students-table thead tr').clone(true).appendTo( '#students-table thead' );
        $('#students-table thead tr:eq(1) th').each( function (i) {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );

            $( 'input', this ).on( 'keyup change', function () {
                if ( dt.column(i).search() !== this.value ) {
                    dt
                        .column(i)
                        .search( this.value )
                        .draw();
                }
            } );
        } );



         jQuery(document).ready(function() {
            dt = jQuery("#students-table").DataTable({
                pageLength: 10,
                lengthMenu: [ 5, 10, 25, 50, 75, 100 ],
                processing: true,
                
                ajax: '{{ route('respuesta') }}',

                



                language: {
                    url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                },
                columns: [
                    {data: 'id'},
                    {data: 'codigo'},
                    {data: 'nombre'},
                    {data: 'apellido'},
                    {data: 'imagen'}
                ]
                
            });

          
        })
    </script>
@endpush