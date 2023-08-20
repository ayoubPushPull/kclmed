  <div>

      <div class="nk-content ">
          <div class="container-fluid">
              <div class="nk-content-inner">
                  <div class="nk-content-body">
                      <div class="nk-block-head nk-block-head-sm">
                          <div class="nk-block-between">
                              <div class="nk-block-head-content">
                                  <h3 class="nk-block-title page-title">Edit Doctor Office</h3>
                              </div><!-- .nk-block-head-content -->
                          </div><!-- .nk-block-between -->
                      </div><!-- .nk-block-head -->
                      <div class="nk-block">
                          <div class="card card-bordered">
                              <div class="card-inner">
                                  <div class="col-xs-12">
                                      <div class="col-md-12">

                                          <div class="row mb-3 ">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="description">Office medical
                                                          name</label><br />
                                                      <input type="text" wire:model="name_cabinet"
                                                          class="form-control">
                                                      @error('name_cabinet')
                                                          <span class="error">{{ $message }}</span>
                                                      @enderror
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="description">Office phone
                                                          number</label><br />
                                                      <input type="number" wire:model="phone_cabinet"
                                                          class="form-control">
                                                      @error('phone_cabinet')
                                                          <span class="error">{{ $message }}</span>
                                                      @enderror
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="form-group">
                                              <label for="description">Office email address</label><br />
                                              <input type="email" wire:model="email_cabinet" class="form-control">
                                              @error('email_cabinet')
                                                  <span class="error">{{ $message }}</span>
                                              @enderror
                                          </div>

                                          <div class="row mb-3 ">
                                              <div class="col-md-6">
                                                  <div class="form-group">

                                                      <label for="description">Type Cabinet</label><br />

                                                      <select wire:model="type_id" class="form-control">
                                                          <option value="" selected> Selectted
                                                          </option>
                                                          @foreach ($types as $item)
                                                              <option value="{{ $item->id }}">

                                                                  {{ $item->name }}

                                                              </option>
                                                          @endforeach

                                                      </select>

                                                      @error('type_id')
                                                          <span class="error">{{ $message }}</span>
                                                      @enderror
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="description">Plan
                                                          Cabinet</label><br />

                                                      <select wire:model="plan_id" class="form-control">
                                                          <option value="" selected> Selectted
                                                          </option>
                                                          @foreach ($plans as $item)
                                                              <option value="{{ $item->id }}">

                                                                  {{ $item->name }}

                                                              </option>
                                                          @endforeach

                                                      </select>
                                                      @error('plan_id')
                                                          <span class="error">{{ $message }}</span>
                                                      @enderror
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="form-group">
                                              <label for="title">Address:</label>
                                              <textarea name="address_cabinet" rows="5" wire:model="address_cabinet" class="form-control"></textarea>
                                              @error('address_cabinet')
                                                  <span class="error">{{ $message }}</span>
                                              @enderror
                                          </div>
                                          <div class="col-12">
                                              <div class="form-group">
                                                  <button wire:click="update"class="btn btn-primary">Edit
                                                  </button>
                                              </div>
                                          </div>

                                      </div>
                                  </div>
                              </div><!-- .card -->
                          </div>
                      </div><!-- .nk-block -->
                  </div>
              </div>
          </div>
      </div>

  </div>
