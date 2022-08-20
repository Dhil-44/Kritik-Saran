<div class="modal modal-blur fade" wire:ignore.self id="modal-reply-sub" tabindex="-1" style="display: none;"
    aria-modal="true" role="dialog">
    <div class="modal-dialog modal-fullscreen modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <p> </p>
            {{-- <div class="modal-header">
                <h5 class="modal-title">Scrollable modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> --}}
            @livewire('user.reply-submission')
        </div>
    </div>
