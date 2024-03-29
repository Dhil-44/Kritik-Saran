<div class="modal modal-blur fade" wire:ignore.self id="modal-reply-sub" tabindex="-1" style="display: none;"
    aria-modal="true" role="dialog">
    <div class="modal-dialog modal-fullscreen modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.reply-submission')->html();
} elseif ($_instance->childHasBeenRendered('l2643502625-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2643502625-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2643502625-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2643502625-0');
} else {
    $response = \Livewire\Livewire::mount('user.reply-submission');
    $html = $response->html();
    $_instance->logRenderedChild('l2643502625-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
<?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/user/home/modal/replyOnSubmission.blade.php ENDPATH**/ ?>