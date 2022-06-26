
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
            @livewire('problem.problem-create')
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
