<div>
    @if (Session::has('success'))
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-group alert-success alert-icon alert-dismissible fade show" role="alert">
                    <div class="alert-group-prepend">
                        <span class="alert-group-icon text-">
                            <i class="far fa-thumbs-up"></i>
                        </span>
                    </div>
                    <div class="alert-content">
                        {{ Session::get('success') }}
                    </div>
                    @if ($settings->theme == 'millage')
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    @else
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    @endif
                </div>
            </div>
        </div>
    @endif
</div>
