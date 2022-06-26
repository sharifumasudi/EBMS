
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
                <form action='editSolution' method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-body">

                            <input type="hidden" class="form-control" value="{{ $data['s_id'] }}">

                            <div class="row">

                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <h4 class="card-title">Solution Description <strong class="text-danger">*</strong></h4>
                                    <div class="form-group">
                                        <textarea wire:model.lazy='solution_descritpion' id="nametext" class="form-control @error('solution_descritpion') is-invalid
                                        @enderror" aria-describedby="name" placeholder="Solution Description" >{{ $data['solution_descritpion'] }}

                                        </textarea>
                                        @error('solution_descritpion')
                                        <span class="invalid-feedback" role="alert"><strong>{!! $message !!}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                           </div>

                           <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                           </div>
                        </div>
                    </div>
                </form>
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
