<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Edit Medication</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="row gy-4">
                                <div class="col-xxl-6 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="first-name">Medication Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" wire:model="name">
                                        </div>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!--col-->
                                <div class="col-xxl-6 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="last-name">Reference number</label>
                                        <div class="form-control-wrap">
                                            <input type="number" class="form-control" wire:model="reference_no">
                                        </div>
                                        @error('reference_no')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!--col-->
                                <div class="col-xxl-12 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="last-name">Description</label>
                                        <div class="form-control-wrap">
                                            <textarea class="form-control" wire:model="description" rows="6"></textarea>

                                        </div>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                                <!--col-->


                                <div class="col-xxl-6 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Production company</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" wire:model="producing_company">
                                        </div>
                                        @error('producing_company')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!--col-->
                                <div class="col-xxl-6 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="password">Price</label>
                                        <div class="form-control-wrap">
                                            <input type="number" class="form-control" wire:model="price">
                                        </div>
                                        @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="last-name">Prescription</label>
                                        <div class="form-control-wrap">
                                            <textarea class="form-control" wire:model="prescription" rows="6"></textarea>

                                        </div>
                                        @error('prescription')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                                <!--col-->
                                <div class="col-xxl-4 col-md-4">
                                    <div class="form-group">
                                        <label>Medicament Categorie</label><br />

                                        <select wire:model="categorie_id" class="form-control">
                                            @foreach ($medicategory as $item)

                                                <option value="{{ $item->id }}">

                                                    {{ $item->name }}

                                                </option>
                                            @endforeach

                                        </select>

                                        @error('categorie_id')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-4">
                                    <div class="form-group">
                                        <label for="description">Type Medication</label><br />

                                        <select wire:model="type" class="form-control">
                                            <option>Type A</option>
                                            <option>Type B</option>
                                            <option>Type C</option>
                                        </select>

                                        @error('type')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                              
                                
                                <div class="col-xxl-4 col-md-4">
                                    <div class="form-group">
                                        <label for="description">
                                             Medicament Forme</label><br />
                                        <select class="form-control" wire:model="forme">
                                            <option>Capsule</option>
                                            <option>Liquide</option>
                                            <option>Pills</option>
                                        </select>
                                        @error('forme')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                  <div class="col-xxl-6 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Photo</label>
                                        <div class="form-control-wrap">
                                            <input type="file" class="form-control" wire:model="photo_medicament">
                                        </div>
                                        @error('photo_medicament')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row gy-4 mt-3">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button wire:click="update"class="btn btn-primary">Edit
                                               </button>
                                        </div>
                                    </div>
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
