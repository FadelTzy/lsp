@extends('baseadmin')

@section('staffcss')
    <link href="{{ asset('chain/css/bootstrap-wysihtml5.css') }}" rel="stylesheet" />

    <link href="{{ asset('chain/css/style.datatables.css') }}" rel="stylesheet">
    <link href="{{ asset('chain/responsive/1.0.1/css/dataTables.responsive.css') }}" rel="stylesheet">
@endsection


@section('pageheader')
    <div class="pageheader">
        <div class="media">
            <div class="pageicon pull-left">
                <i class="fa fa-home"></i>
            </div>
            <div class="media-body">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                    <li><a href="#">Berita</a></li>

                </ul>
                <h4>Manajemen Berita</h4>
            </div>
        </div><!-- media -->
    </div><!-- pageheader -->
@endsection
@section('contentpage')
    <div class="contentpanel">
        <div class="panel panel-primary-head">
            <div class="panel-heading row" style="margin-bottom: 10px;">
                <div class="col-xs-6">
                    <h4 class="panel-title">Berita</h4>
                    <p>Manajemen pengelolaan data berita.</p>
                </div>
                <div class="col-xs-6 text-right">
                    <a class="btn btn-info" type="button" href="{{ route('berita.create') }}"><i
                            class=" fa fa-plus"></i>
                        Tambah Data</a>
                </div>
            </div><!-- panel-heading -->

            <div id="listnotif">

            </div>

            <div id="suksesnotif"></div>

            <div id="suksesnotifu"></div>
            <div id="suksesnotifd"></div>
            <table id="basicTable" class="table table-striped table-hover table-bordered ">
                <thead class="">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                        <th>Status</th>

                        <th>Aksi</th>

                    </tr>
                </thead>

            </table>
        </div><!-- panel -->

    </div><!-- contentpanel -->
    <div class="modal fade" id="myModalu" tabindex="-1" role="dialog" aria-labelledby="myModalLabelu"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabelu">Edit Kategori</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body nopadding">

                        <form id="upddata" class="form-horizontal form-bordered">
                            @csrf
                            <input type="hidden" id="idu" name="id">
                            <label>Judul Kategori</label>
                            <div class="input-group">
                                <input type="text" id="namau" name="nama" placeholder="Input Kategori"
                                    class="form-control" />
                                <span class="input-group-addon"><i class=" fa fa-check"></i></span>
                            </div><!-- input-group -->


                        </form>
                    </div><!-- panel-body -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" id="submitdatau" class="btn btn-primary">Simpan</button>
                </div>
            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->
@endsection

@push('staffjs')
    <script src="https://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>

    <script src="{{ asset('chain/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('chain/plug-ins/725b2a2115b/integration/bootstrap/3/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('chain/js/wysihtml5-0.3.0.min.js') }}"></script>
    <script src="{{ asset('chain/js/bootstrap-wysihtml5.js') }}"></script>
    <script src="{{ asset('chain/responsive/1.0.1/js/dataTables.responsive.js') }}"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js
                                                                                                                                                                                                                                        ">
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var url = window.location.origin;

        $("#submitdata").on('click', function() {
            $("#tambahdata").trigger('submit');
        });
        $("#submitdatau").on('click', function() {
            $("#upddata").trigger('submit');
        });

        function staffupd(id) {
            $('#myModalu').modal('show');
            $("#idu").val(id.id);
            $("#namau").val(id.nama);
        }

        function staffdel(id) {
            data = confirm("Klik Ok Untuk Melanjutkan");
            console.log(id);
            if (data) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.LoadingOverlay("show");

                $.ajax({
                    url: url + '/admin/berita/' + id,
                    type: "delete",
                    success: function(e) {
                        $.LoadingOverlay("hide");
                        if (e == 'success') {
                            tabel.ajax.reload();

                            $('#suksesnotifd').html(
                                '<div class="alert alert-success alert-dismissible rounded " role="alert">    <strong>Berhasil Menghapus Data</strong>    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'
                            );
                        }
                    }
                })

            }
        }
        $("#upddata").on('submit', function(id) {
            id.preventDefault();
            var data = $(this).serialize();
            $.LoadingOverlay("show");
            $.ajax({
                url: '{{ route('kategori.edit') }}',
                data: data,
                type: "POST",
                success: function(id) {
                    console.log(id);
                    $.LoadingOverlay("hide");
                    if (id.status == 'error') {
                        var data = id.data;
                        var elem;
                        var result = Object.keys(data).map((key) => [data[key]]);
                        elem =
                            '<div class="alert alert-danger alert-dismissible  show mt-3" role="alert">';
                        elem +=
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button><ul>';
                        result.forEach(function(data) {
                            elem += '<li>' + data[0][0] + '</li>';
                        });
                        elem += '</ul></div>';
                        $("#listnotif").html(elem);
                        $("#listnotif").addClass('mt-2');
                        console.log(elem)

                    } else {
                        $('#myModal').modal('hide');
                        $('#suksesnotifu').html(
                            '<div class="alert alert-success mt-2 alert-dismissible  rounded " id="suksesnotifu" role="alert">    <strong>Berhasil Mengubah Data</strong>    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'
                        );
                        $("#listnotif").html('');
                        tabel.ajax.reload();

                    }
                }
            })


        })
        jQuery(document).ready(function() {

            tabel = $("#basicTable").DataTable({
                columnDefs: [{
                        targets: 0,
                        width: "1%",
                    },
                    {
                        targets: 1,
                        width: "30%",

                    },
                    {
                        orderable: false,

                        targets: 2,
                        width: "20%",

                    },
                    {
                        orderable: false,

                        targets: 3,
                        width: "20%",

                    },
                    {
                        orderable: false,

                        targets: 4,
                        width: "20%",

                    },
                    {
                        orderable: false,

                        targets: 5,
                        width: "20%",

                    },


                ],
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('berita.index') }}",
                },
                columns: [{
                        nama: 'DT_RowIndex',
                        data: 'DT_RowIndex'
                    }, {
                        nama: 'judul',
                        data: 'judul'
                    },
                    {
                        nama: 'nama_kategori',
                        data: 'nama_kategori'
                    },
                    {
                        nama: 'tanggal',
                        data: 'tanggal'
                    },
                    {
                        nama: 'status_p',
                        data: 'status_p'
                    },
                    {
                        name: 'aksi',
                        data: 'aksi',
                    }
                ],

            });



        });
    </script>
@endpush
