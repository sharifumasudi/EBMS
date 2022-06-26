@role('expert|administrator')
<div class="col-md-12">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success m-2">
                            {{ Session::get('message') }}
                        </div>
                    @endif

                    @include('livewire.problem.create_soln')
                    <h4 class="card-title">IT Problem Solution</h4>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Problem</th>
                                    <th>Date Posted</th>
                                    <th>Solution Made</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ((array)json_decode($solnData, true) as $key => $items)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td class=" text-wrap">{{ $items['problem_description'] }}</td>
                                    <td>{{ $items['created_at'] }}</td>
                                    <td class=" text-wrap">{{ $items['solution_descritpion'] }}</td>
                                    <td>
                                        @role('administrator')
                                        @if($items['approval'] == false)
                                        <a href="{{ url('/approve/'.$items['s_id']) }}" class="btn btn-success btn-sm">Approve</a>
                                        @endif
                                        @endrole
                                        @role('expert')
                                        <a href="{{ url('/edit/'.$items['s_id']) }}" class="btn btn-success btn-sm">Edit</a>
                                        <a href="{{ url('/delete/'.$items['s_id']) }}" class="btn btn-danger btn-sm">Delete</a>
                                        @endrole
                                    </td>
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
@endrole

@role('user')
@php
    $user_id = Auth::user()->id;

    $soln = getSolutions($user_id);
@endphp

<div class="col-md-12">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success m-2">
                            {{ Session::get('message') }}
                        </div>
                    @endif

                    @include('livewire.problem.create_soln')
                    <h4 class="card-title">IT Problem Solution</h4>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Problem</th>
                                    <th>Date Posted</th>
                                    <th>Solution Made</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($soln as $key => $items)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td class=" text-wrap">{{ $items['problem_description'] }}</td>
                                    <td>{{ $items['created_at'] }}</td>
                                    <td class=" text-wrap">{{ $items['solution_descritpion'] }}</td>
                                    <td>
                                        @role('administrator')
                                        @if($items['approval'] == false)
                                        <a href="{{ url('/approve/'.$items['s_id']) }}" class="btn btn-success btn-sm">Approve</a>
                                        @endif
                                        @endrole
                                    </td>
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
@endrole
