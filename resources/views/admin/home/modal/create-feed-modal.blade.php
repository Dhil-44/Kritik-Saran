<div class="modal fade modal-blur" wire:ignore.self tabindex="-1" id="modal-news" style="display: none;" aria-hidden="true"
     data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create News</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="createNews">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="newstitle"><span class="text-red">*</span> News Title</label>
                            <input type="text" wire:model="title" class="form-control" id="newstitle"
                                   placeholder="Enter title">
                            @error('title')
                            <span class="text-red">
                                {{$message}}
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="body"> <span class="text-red">*</span> News Body</label>
                            <textarea class="form-control" wire:model="body" placeholder="" id="body"
                                      rows=""></textarea>
                            @error('body')
                            <span class="text-red">
                                {{$message}}
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Link</label><span class="text-muted"> (optional)</span>
                            <input type="text" wire:model="link" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="InputFile">Input Picture</label><span class="text-muted"> (optional)</span>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" wire:model="gambar" class="custom-file-input" id="InputFile">
                                    <label class="custom-file-label" for="InputFile">Choose file</label>
                                </div>
                            </div>
                                @error('gambar')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success"><i class=""></i>Publish</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
