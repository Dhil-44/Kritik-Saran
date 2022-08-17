<div class="modal fade modal-blur openModalNews" wire:ignore.self tabindex="-1" id="modal-news" style="display: none;"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fs-2 text-black text-uppercase">Create News</h4>
                <button type="button" class="close btn-sm btn-outline-muted" wire:click="closeModalNews()">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="createNews" class="form">
                    <div class="row ">
                        <div class="col-8">
                            <div class="card-body">
                                <div class="form-group mb-2">
                                    <label for="newstitle"><span class="text-red">*</span><b> News Title</b></label>
                                    <input type="text" wire:model="title" class="form-control" id="newstitle"
                                        placeholder="Enter title">
                                    @error('title')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="body"> <span class="text-red">*</span> <b>News Body</b></label>
                                    <textarea class="form-control" wire:model="body" placeholder=". . ." id="body" rows="8"></textarea>
                                    @error('body')
                                        <span class="text-red">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for=""><b>Link</b></label><span class="text-muted">(optional)</span>
                                    <input type="text" wire:model="link" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="InputFile"><b>Input Picture</b></label>
                                    <span class="text-muted"> (optional)</span><br>
                                    <input type="file" wire:model="gambar" name="gambar" class="mt-1 form-control"
                                        id="upload{{ $iteration }}">
                                    <div wire:loading wire:target="photo">Uploading...</div>
                                    @error('gambar')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                        </div>
                        <div class="col-3 mt-4">
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-md btn-outline-success form-control">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-send"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <line x1="10" y1="14" x2="21" y2="3"></line>
                                        <path
                                            d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5">
                                        </path>
                                    </svg>
                                    Publish
                                </button>
                                <button type="button" wire:click="closeModalNews()"
                                    class="btn mt-1 btn-md btn-outline-danger form-control">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-arrows-minimize" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <polyline points="5 9 9 9 9 5"></polyline>
                                        <line x1="3" y1="3" x2="9" y2="9"></line>
                                        <polyline points="5 15 9 15 9 19"></polyline>
                                        <line x1="3" y1="21" x2="9" y2="15"></line>
                                        <polyline points="19 9 15 9 15 5"></polyline>
                                        <line x1="15" y1="9" x2="21" y2="3"></line>
                                        <polyline points="19 15 15 15 15 19"></polyline>
                                        <line x1="15" y1="15" x2="21" y2="21"></line>
                                    </svg>
                                    Close
                                </button>
                            </div>
                            @if ($gambar)
                                <div class="mt-3">
                                    <p class="fs-2 text-center my-0"><b>Preview Gambar</b></p>
                                    <div class="mt-2 shadow-sm card">
                                        <img class="img-fluid" src="{{ $gambar->temporaryUrl() }}">
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
