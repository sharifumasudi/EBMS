@role('administrator')
<div class="col-md-12">
    <form wire:submit.prevent='saveCategiry' method="POST">
        <div class="card">
            <div class="card-body">
               <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <h4 class="card-title">Category Name</h4>
                    <div class="form-group">
                        <input wire:model.lazy='category_name' type="text" class="form-control @error('category_name') is-invalid
                        @enderror" id="nametext" aria-describedby="category_name"
                            placeholder="Name">
                            @error('category_name')
                            <span class="invalid-feedback" role="alert"><strong>{!! $message !!}</strong></span>
                            @enderror
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6">
                    <h4 class="card-title">Category Description</h4>
                    <div class="form-group">
                        <textarea wire:model.lazy='description' id="nametext" class="form-control @error('description') is-invalid
                        @enderror" aria-describedby="name" placeholder="Description">

                        </textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert"><strong>{!! $message !!}</strong></span>
                        @enderror                    </div>
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
@endrole
