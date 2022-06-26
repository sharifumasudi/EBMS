
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
                <form class="mt-4" method="POST" action="{{ route('registerExpert') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Expert Name</label>
                                <input name="name" class="form-control @error('name') is-invalid

                                @enderror" type="text" placeholder="Expert name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Expert Email</label>

                                <input name="email" class="form-control @error('email') is-invalid

                                @enderror" type="email" placeholder="email address">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="phone"> Phone</label>
                                <input name="phone" class="form-control @error('phone') is-invalid

                                @enderror" type="number" placeholder="Phone Number">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-sm btn-dark">Save</button>
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
