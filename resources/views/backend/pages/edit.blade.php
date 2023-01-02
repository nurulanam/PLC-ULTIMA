@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col">
            <div class="h-100">
                <div class="row mb-3 pb-1">
                    <div class="col-12">
                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-16 mb-1">Hello, {{ auth()->user()->name }}</h4>
                            </div>
                            <div class="mt-3 mt-lg-0">
                                <form action="javascript:void(0);">
                                    <div class="row g-3 mb-0 align-items-center">
                                        <!--end col-->
                                        <div class="col-auto">
                                            <a href="{{ route('information.index') }}"
                                                class="btn btn-soft-success shadow-none"><i
                                                    class="ri- align-middle me-1"></i> Go Back</a>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                        </div><!-- end card header -->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->


                <div class="row">
                    <div class="col">
                        <form action="{{ route('information.update', $information->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_price" class="form-label">Farm Price</label>
                                                <input type="text" name="farm_price" class="form-control"
                                                    value="{{ $information->farm_price }}" placeholder="Farm Price">
                                                @error('farm_price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_date" class="form-label">Farm Date</label>
                                                <input type="date" name="farm_date" class="form-control"
                                                    value="{{ $information->farm_date }}">
                                                @error('farm_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="load_date" class="form-label">Load Date</label>
                                                <input type="date" name="load_date" class="form-control"
                                                    value="{{ $information->load_date }}">
                                                @error('load_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        {{-- Left Part  --}}
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="refferal_name" class="form-label">Refferal Name</label>
                                                <input type="text" name="refferal_name" class="form-control"
                                                    value="{{ $information->refferal_name }}" placeholder="Refferal Name">
                                                @error('refferal_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Name"
                                                    value="{{ $information->name }}">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="mobile_number" class="form-label">Mobile Number</label>
                                                <input type="text" name="mobile_number" class="form-control"
                                                    value="{{ $information->mobile_number }}" placeholder="Mobile Number">
                                                @error('mobile_number')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="personal_email" class="form-label">Personal E-mail</label>
                                                <input type="email" name="personal_email" class="form-control"
                                                    value="{{ $information->personal_email }}"
                                                    placeholder="Personal Email">
                                                @error('personal_email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="personal_password" class="form-label">Personal Password</label>
                                                <input type="text" name="personal_password" class="form-control"
                                                    value="{{ $information->personal_password }}"
                                                    placeholder="Personal Password">
                                                @error('personal_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- Right Part  --}}
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="platin_world_email" class="form-label">Platin World
                                                    E-mail ID</label>
                                                <input type="email" name="platin_world_email" class="form-control"
                                                    value="{{ $information->platin_world_email }}"
                                                    placeholder="Platin World Email">
                                                @error('platin_world_email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="platin_world_passowrd" class="form-label">Platin World
                                                    Passowrd</label>
                                                <input type="text" name="platin_world_passowrd" class="form-control"
                                                    value="{{ $information->platin_world_passowrd }}"
                                                    placeholder="Platin World Passowrd">
                                                @error('platin_world_passowrd')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="refferal_link" class="form-label">Refferal Link</label>
                                                <input type="text" name="refferal_link" class="form-control"
                                                    value="{{ $information->refferal_link }}"
                                                    placeholder="Refferal Link">
                                                @error('refferal_link')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="account" class="form-label">Account (2FA)</label>
                                                <input type="text" name="account" class="form-control"
                                                    value="{{ $information->account }}" placeholder="Account">
                                                @error('account')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="card" class="form-label">Card (2FA)</label>
                                                <input type="text" name="card" class="form-control"
                                                    value="{{ $information->card }}" placeholder="Card">
                                                @error('card')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-center my-2">Ultima Wallet Mnemonic</h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_1" class="form-label">1.</label>
                                                <input type="text" name="wallet_1" class="form-control"
                                                    value="{{ $information->wallet_1 }}">
                                                @error('wallet_1')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_2" class="form-label">2.</label>
                                                <input type="text" name="wallet_2" class="form-control"
                                                    value="{{ $information->wallet_2 }}">
                                                @error('wallet_2')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_3" class="form-label">3.</label>
                                                <input type="text" name="wallet_3" class="form-control"
                                                    value="{{ $information->wallet_3 }}">
                                                @error('wallet_3')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_4" class="form-label">4.</label>
                                                <input type="text" name="wallet_4" class="form-control"
                                                    value="{{ $information->wallet_4 }}">
                                                @error('wallet_4')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_5" class="form-label">5.</label>
                                                <input type="text" name="wallet_5" class="form-control"
                                                    value="{{ $information->wallet_5 }}">
                                                @error('wallet_5')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_6" class="form-label">6.</label>
                                                <input type="text" name="wallet_6" class="form-control"
                                                    value="{{ $information->wallet_6 }}">
                                                @error('wallet_6')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_7" class="form-label">7.</label>
                                                <input type="text" name="wallet_7" class="form-control"
                                                    value="{{ $information->wallet_7 }}">
                                                @error('wallet_7')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_8" class="form-label">8.</label>
                                                <input type="text" name="wallet_8" class="form-control"
                                                    value="{{ $information->wallet_8 }}">
                                                @error('wallet_8')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_9" class="form-label">9.</label>
                                                <input type="text" name="wallet_9" class="form-control"
                                                    value="{{ $information->wallet_9 }}">
                                                @error('wallet_9')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_10" class="form-label">10.</label>
                                                <input type="text" name="wallet_10" class="form-control"
                                                    value="{{ $information->wallet_10 }}">
                                                @error('wallet_10')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_11" class="form-label">11.</label>
                                                <input type="text" name="wallet_11" class="form-control"
                                                    value="{{ $information->wallet_11 }}">
                                                @error('wallet_11')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_12" class="form-label">12.</label>
                                                <input type="text" name="wallet_12" class="form-control"
                                                    value="{{ $information->wallet_12 }}">
                                                @error('wallet_12')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_13" class="form-label">13.</label>
                                                <input type="text" name="wallet_13" class="form-control"
                                                    value="{{ $information->wallet_13 }}">
                                                @error('wallet_13')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_14" class="form-label">14.</label>
                                                <input type="text" name="wallet_14" class="form-control"
                                                    value="{{ $information->wallet_14 }}">
                                                @error('wallet_14')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_15" class="form-label">15.</label>
                                                <input type="text" name="wallet_15" class="form-control"
                                                    value="{{ $information->wallet_15 }}">
                                                @error('wallet_15')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Ultmia Farm Mnemonic  --}}
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-center my-2">Ultima Farm Mnemonic</h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_1" class="form-label">1.</label>
                                                <input type="text" name="farm_1" class="form-control"
                                                    value="{{ $information->farm_1 }}">
                                                @error('farm_1')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_2" class="form-label">2.</label>
                                                <input type="text" name="farm_2" class="form-control"
                                                    value="{{ $information->farm_2 }}">
                                                @error('farm_2')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_3" class="form-label">3.</label>
                                                <input type="text" name="farm_3" class="form-control"
                                                    value="{{ $information->farm_3 }}">
                                                @error('farm_3')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_4" class="form-label">4.</label>
                                                <input type="text" name="farm_4" class="form-control"
                                                    value="{{ $information->farm_4 }}">
                                                @error('farm_4')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_5" class="form-label">5.</label>
                                                <input type="text" name="farm_5" class="form-control"
                                                    value="{{ $information->farm_5 }}">
                                                @error('farm_5')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_6" class="form-label">6.</label>
                                                <input type="text" name="farm_6" class="form-control"
                                                    value="{{ $information->farm_6 }}">
                                                @error('farm_6')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_7" class="form-label">7.</label>
                                                <input type="text" name="farm_7" class="form-control"
                                                    value="{{ $information->farm_7 }}">
                                                @error('farm_7')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_8" class="form-label">8.</label>
                                                <input type="text" name="farm_8" class="form-control"
                                                    value="{{ $information->farm_8 }}">
                                                @error('farm_8')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_9" class="form-label">9.</label>
                                                <input type="text" name="farm_9" class="form-control"
                                                    value="{{ $information->farm_9 }}">
                                                @error('farm_9')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_10" class="form-label">10.</label>
                                                <input type="text" name="farm_10" class="form-control"
                                                    value="{{ $information->farm_10 }}">
                                                @error('farm_10')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_11" class="form-label">11.</label>
                                                <input type="text" name="farm_11" class="form-control"
                                                    value="{{ $information->farm_11 }}">
                                                @error('farm_11')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_12" class="form-label">12.</label>
                                                <input type="text" name="farm_12" class="form-control"
                                                    value="{{ $information->farm_12 }}">
                                                @error('farm_12')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_13" class="form-label">13.</label>
                                                <input type="text" name="farm_13" class="form-control"
                                                    value="{{ $information->farm_13 }}">
                                                @error('farm_13')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_14" class="form-label">14.</label>
                                                <input type="text" name="farm_14" class="form-control"
                                                    value="{{ $information->farm_14 }}">
                                                @error('farm_14')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_15" class="form-label">15.</label>
                                                <input type="text" name="farm_15" class="form-control"
                                                    value="{{ $information->farm_15 }}">
                                                @error('farm_15')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-center mt-2 mb-3">Upload Images</h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img id="preview_img1" class="img-fluid img-thumbnail shadow"
                                                src="@if ($images->image1 != null) {{ asset('backend/assets/images/information').'/'.$images->image1 }}  @else https://via.placeholder.com/380x180  @endif"
                                                alt=""
                                                style="border: 5px solid rgba(0, 0, 0, 0.151); max-height: 180px;">

                                            <div class="form-group my-3">
                                                <label for="image1" class="form-label">Select Image</label>
                                                <input type="file" name="image1" class="form-control" id="image1"
                                                    onchange="loadPreview(this);">
                                                @error('image1')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <script>
                                                $(document).ready(() => {
                                                    $('#image1').change(function() {
                                                        const file = this.files[0];
                                                        console.log(file);
                                                        if (file) {
                                                            let reader = new FileReader();
                                                            reader.onload = function(event) {
                                                                console.log(event.target.result);
                                                                $('#preview_img1').attr('src', event.target.result);
                                                            }
                                                            reader.readAsDataURL(file);
                                                        }
                                                    });
                                                });
                                            </script>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="preview_img2" class="img-fluid img-thumbnail shadow"
                                                src="@if ($images->image2 != null) {{ asset('backend/assets/images/information').'/'.$images->image2 }}  @else https://via.placeholder.com/380x180  @endif"
                                                alt=""
                                                style="border: 5px solid rgba(0, 0, 0, 0.151); max-height: 180px;">

                                            <div class="form-group my-3">
                                                <label for="image2" class="form-label">Select Image</label>
                                                <input type="file" name="image2" class="form-control" id="image2"
                                                    onchange="loadPreview(this);">
                                                @error('image2')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <script>
                                                $(document).ready(() => {
                                                    $('#image2').change(function() {
                                                        const file = this.files[0];
                                                        console.log(file);
                                                        if (file) {
                                                            let reader = new FileReader();
                                                            reader.onload = function(event) {
                                                                console.log(event.target.result);
                                                                $('#preview_img2').attr('src', event.target.result);
                                                            }
                                                            reader.readAsDataURL(file);
                                                        }
                                                    });
                                                });
                                            </script>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="preview_img3" class="img-fluid img-thumbnail shadow"
                                                src="@if ($images->image3 != null) {{ asset('backend/assets/images/information').'/'.$images->image3 }}  @else https://via.placeholder.com/380x180  @endif"
                                                alt=""
                                                style="border: 5px solid rgba(0, 0, 0, 0.151); max-height: 180px;">

                                            <div class="form-group my-3">
                                                <label for="image3" class="form-label">Select Image</label>
                                                <input type="file" name="image3" class="form-control" id="image3"
                                                    onchange="loadPreview(this);">
                                                @error('image3')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <script>
                                                $(document).ready(() => {
                                                    $('#image3').change(function() {
                                                        const file = this.files[0];
                                                        console.log(file);
                                                        if (file) {
                                                            let reader = new FileReader();
                                                            reader.onload = function(event) {
                                                                console.log(event.target.result);
                                                                $('#preview_img3').attr('src', event.target.result);
                                                            }
                                                            reader.readAsDataURL(file);
                                                        }
                                                    });
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100">Update Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
