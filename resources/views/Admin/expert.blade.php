
@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- Start Sales Charts Section -->
        <!-- *************************************************************** -->
        <div class="row">
            <div class="col-md-12">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                @role('administrator')
                                <a href="{{ route('expert_list.create') }}" class="btn btn-primary float-right m-2">New Expert</a>
                                @endrole
                                @if(Session::has('message'))
                                    <div class="alert alert-success m-2">
                                        {{ Session::get('message') }}
                                    </div>
                                @endif

                                <h4 class="card-title">IT Problem Categories</h4>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>Serial No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($expert as $key => $items)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $items['name'] }}</td>
                                                <td>{{ $items['email'] }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- *************************************************************** -->
        <!-- End Sales Charts Section -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    @include('layouts.inc.footer')
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
@endsection
