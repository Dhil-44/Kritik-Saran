<div>

    <div class="row mr-2">
        <button wire:click="openModalFeed()" class="btn btn-success ml-auto"><i class="fa fa-plus"></i> Create
            news</button>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="card mb-1">
                <img class="card-img-top" src="{{ asset('dist/img/image/citiesdel.jpg') }}" alt="Dist Photo 3">
                <div class="card-img-overlay">
                    <h5 class="card-title text-white text-bold">Ini adalah Judul</h5>
                    <p class="card-text pb-1 pt-1 text-white">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga magni optio ipsum repudiandae
                        incidunt
                        deleniti reprehenderit suscipit maxime repellendus quis, odit alias quas nam enim quasi atque
                        dolor
                        non.
                        Soluta.
                    </p>
                    <a href="#" class="text-white">Last update 3 days ago</a>
                </div>
            </div>
            <div class="">
                <button class="btn btn-primary">Edit</button>
                <button class="btn btn-primary">Hapus</button>
            </div>
        </div>
    </div>
    @include('admin.home.modal.create-feed-modal')
</div>
@push('scripts')
    <script>
        window.addEventListener('openModalNews', () => {
            $('#modal-news').modal('show');
        })
    </script>
@endpush
