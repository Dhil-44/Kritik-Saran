<div class="col-md-12 col-lg-12">
    <!-- Cards with tabs component -->
    <div class="card-tabs ">
        <!-- Cards navigation -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a href="#tab-top-1" wire:click="critic()" class="nav-link hover-shadow-lg" data-bs-toggle="tab"
                    aria-selected="true" role="tab">
                    Critics</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#tab-top-2" class="nav-link  hover-shadow-lg" data-bs-toggle="tab" aria-selected="false"
                    role="tab" tabindex="-1">Suggestions</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#tab-top-3" class="nav-link  hover-shadow-lg" data-bs-toggle="tab" aria-selected="false"
                    role="tab" tabindex="-1">Announcements</a>
            </li>

        </ul>
        <div class="tab-content">
            <!-- Content of card #1 -->
            <div id="tab-top-1" class="card tab-pane show active" role="tabpanel">
                <div class="card-body">
                    <div class="card-title">Message Critics</div>

                </div>
            </div>
            <!-- Content of card #2 -->
            <div id="tab-top-2" class="card tab-pane" role="tabpanel">
                <div class="card-body">
                    <div class="card-title">Message Suggestions</div>

                </div>
            </div>
            <!-- Content of card #3 -->
            <div id="tab-top-3" class="card tab-pane" role="tabpanel">
                <div class="card-body">
                    <div class="card-title">Message Announcements</div>

                </div>
            </div>
        </div>
    </div>
</div>
