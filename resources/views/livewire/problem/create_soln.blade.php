<!-- sample modal content -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true" wire:ignore>
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal"
                    aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                @if(isset($message))
                    {{ $message }}
                @endif
                <form wire:submit.prevent='saveProblemSolution' method="POST">
                    <div class="card">
                        <div class="card-body">
                           <div class="row">

                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <h4 class="card-title">Category Description</h4>
                                <div class="form-group">
                                    <textarea wire:model.lazy='description' id="nametext" class="form-control @error('description') is-invalid
                                    @enderror" aria-describedby="name" placeholder="Description" disabled>

                                    </textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert"><strong>{!! $message !!}</strong></span>
                                    @enderror                    </div>
                            </div>
                           </div>

                           <div class="row">

                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <h4 class="card-title">Solution Description <strong class="text-danger">*</strong></h4>
                                <div class="form-group">
                                    <textarea wire:model.lazy='solution_descritpion' id="nametext" class="form-control @error('solution_descritpion') is-invalid
                                    @enderror" aria-describedby="name" placeholder="Solution Description">

                                    </textarea>
                                    @error('solution_descritpion')
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
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
