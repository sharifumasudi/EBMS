<div class="col-md-12">
   <div class="row">
    <div class="col-md-12">
        <form action="{{ route('saveProblem') }}"  method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                   <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <h4 class="card-title">Category Name</h4>
                            <div class="form-group">
                                <select name='category_id' class="form-control @error('category_id') is-invalid
                                @enderror" id="">
                                <option value="">Select Category</option>
                                @foreach ((array)json_decode($catesData, true) as $items)
                                <option value="{{ $items['id'] }}">{{ $items['category_name'] }}</option>
                                @endforeach
                                </select>
                                @error('category_id')
                                <span class="invalid-feedback" role="alert"><strong>{!! $message !!}</strong></span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <h4 class="card-title">Image(Optional)</h4>
                            <div class="form-group">
                                <input type="file" name='problem_image' class="form-control @error('problem_image') is-invalid
                                @enderror">
                                @error('problem_image')
                                <span class="invalid-feedback" role="alert"><strong>{!! $message !!}</strong></span>
                                @enderror
                            </div>
                        </div>
                   </div>

                   <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <h4 class="card-title">Problem Description</h4>
                        <div class="form-group">
                            <textarea name='problem_description' id="nametext" class="form-control @error('problem_description') is-invalid
                            @enderror" aria-describedby="name" placeholder="Description">

                            </textarea>
                            @error('problem_description')
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
</div>
