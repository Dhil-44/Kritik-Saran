<div class="modal modal-blur fade" id="modal-large" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Submission Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group mb-3 row">
                        <label class="form-label col-3 col-form-label">Assign to</label>
                        <div class="col">
                            <select class="form-select">
                                <option>Choose</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group mb-3 row">
                        <label class="form-label col-3 col-form-label">Category</label>
                        <div class="col">
                            @php
                                $categories = ['Suggestion', 'Critic', 'Announcement'];
                            @endphp
                            <select class="form-select">
                                <option>--Choose category--</option>
                                @foreach ($categories as $ct)
                                    <option value="{{ $ct }}"> {{ $ct }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label class="form-label col-3 col-form-label">Message</label>
                        <div class="col">
                            <textarea name="" id="" cols="3" rows="3" class="form-control">

                            </textarea>

                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label class="form-label col-3 col-form-label">Attachments</label>
                        <div class="col">
                            <input type="file" class="form-control sm:form-control">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button> --}}
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Submit</button>
            </div>
        </div>
    </div>
</div>
