<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Add Blog</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="row gy-4">
                                <div class="col-xxl-6 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" wire:model="title">
                                        </div>
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!--col-->
                                <div class="col-xxl-6 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="last-name">Subtitle</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" wire:model="subtitle">
                                        </div>
                                        @error('subtitle')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!--col-->
                                <div class="col-xxl-12 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Content</label>
                                        <div class="form-control-wrap">
                                            <textarea class="form-control" wire:model="content" rows="6"></textarea>

                                        </div>
                                        @error('content')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                                <!--col-->


                                <div class="col-xxl-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Photo Blog</label>
                                        <div class="form-control-wrap">
                                            <input type="file" class="form-control" wire:model="photo_blog">
                                        </div>
                                       @error('photo_blog')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> 
                           
                                <div class="row gy-4 mt-3">

                                    <div class="col-12">
                                        <div class="form-group">

                                            <button wire:click="submitForm"class="btn btn-primary">Add
                                               Blog</button>
                                        </div>
                                    </div>
                                    <!--col-->
                                </div>

                            </div>
                            <!--row-->
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/editors/quill.css?ver=3.1.2') }}">
    <script src="{{ asset('dashboard/assets/js/libs/editors/quill.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('dashboard/assets/js/editors.js?ver=3.1.2') }}"></script>
@endpush
