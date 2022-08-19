<div>
<div wire:ignore.self class="modal fade modal-blur" id="openReplyModal" tabindex="-1" aria-hidden="true" style="display: none"
     data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Scrollable modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.reply-submission')->html();
} elseif ($_instance->childHasBeenRendered('l2106447464-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2106447464-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2106447464-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2106447464-0');
} else {
    $response = \Livewire\Livewire::mount('user.reply-submission');
    $html = $response->html();
    $_instance->logRenderedChild('l2106447464-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>
    </div>
</div>
</div>
<?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/user/home/modal/reply-submission.blade.php ENDPATH**/ ?>