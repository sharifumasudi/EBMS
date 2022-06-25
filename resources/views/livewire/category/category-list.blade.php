<div class="col-md-12">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @role('administrator')
                    <a href="{{ route('admin.cates.create') }}" class="btn btn-primary float-right m-2">New Category</a>
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
                                    <th>Descrition</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cates as $key => $items)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $items->category_name }}</td>
                                    <td>{{ $items->description }}</td>
                                    <td>
                                        @role('administrator')
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-danger">Trash</button>
                                        @endrole
                                        @role('expert')
                                        <strong class="text-danger">{{ __('---') }}</strong>
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
