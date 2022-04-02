@extends('baseadmin')

@section('staffcss')
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
                    <li><a href="#">Dashboard</a></li>

                </ul>
                <h4>Dashboard</h4>
            </div>
        </div><!-- media -->
    </div><!-- pageheader -->
@endsection
@section('contentpage')
    <div class="contentpanel">
        <div class="alert alert-info">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <strong>SELAMAT DATANG DI,</strong> SISTEM INFORMASI SEKOLAH PENGELOLAAN DATA TENAGA KEPENDIDIKAN SMP NEGERI 1
            SIOMPU BARAT <a class="alert-link" href="">
        </div>


    </div><!-- contentpanel -->
@endsection

@push('staffjs')
@endpush
