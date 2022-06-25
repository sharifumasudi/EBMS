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
                    <h4 class="card-title">IT Problem Asked</h4>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Poster name</th>
                                    <th>Phone</th>
                                    <th>Date Posted</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ((array)json_decode($problemData, true) as $key => $items)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $items['problem_description'] }}</td>
                                    <td>{{ __('') }}</td>
                                    <td>{{ $items['category_name'] }}</td>
                                    <td>{{ $items['name'] }}</td>
                                    @if($items['phone'])
                                    <td>{{ $items['phone'] }}</td>
                                    @else
                                    <td><strong class="text-danger">----</strong></td>
                                    @endif
                                    <td>{{ $items['created_at'] }}</td>
                                    <td>
                                        @role('expert')
                                        @if($items['status'] != true)
                                        <a href="{{ url('/respond/'.$items['p_id']) }}" class="btn btn-sm btn-primary">Respond Solution</a>
                                        <button wire:click='trash({{ $items['p_id'] }})' class="btn btn-sm btn-danger">Trash</button>
                                        @else
                                        <small class="text-success">{{ __('Answered!') }}</small>
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
