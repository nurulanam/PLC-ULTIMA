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
                                            <a href="{{ route('information.index') }}" class="btn btn-soft-success shadow-none"><i
                                                    class="ri- align-middle me-1"></i> All Informations</a>
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
                        <form action="{{ route('information.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_price" class="form-label">Farm Price</label>
                                                <input type="text" name="farm_price" class="form-control"
                                                    placeholder="Farm Price">
                                                @error('farm_price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_date" class="form-label">Farm Date</label>
                                                <input type="date" name="farm_date" class="form-control">
                                                @error('farm_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="load_date" class="form-label">Load Date</label>
                                                <input type="date" name="load_date" class="form-control">
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
                                                    placeholder="Refferal Name">
                                                @error('refferal_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Name">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="mobile_number" class="form-label">Mobile Number</label>
                                                <input type="text" name="mobile_number" class="form-control"
                                                    placeholder="Mobile Number">
                                                @error('mobile_number')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="personal_email" class="form-label">Personal E-mail</label>
                                                <input type="email" name="personal_email" class="form-control"
                                                    placeholder="Personal Email">
                                                @error('personal_email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="personal_password" class="form-label">Personal Password</label>
                                                <input type="text" name="personal_password" class="form-control"
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
                                                    placeholder="Platin World Email">
                                                @error('platin_world_email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="platin_world_passowrd" class="form-label">Platin World
                                                    Passowrd</label>
                                                <input type="text" name="platin_world_passowrd" class="form-control"
                                                    placeholder="Platin World Passowrd">
                                                @error('platin_world_passowrd')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="refferal_link" class="form-label">Refferal Link</label>
                                                <input type="text" name="refferal_link" class="form-control"
                                                    placeholder="Refferal Link">
                                                @error('refferal_link')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="account" class="form-label">Account (2FA)</label>
                                                <input type="text" name="account" class="form-control"
                                                    placeholder="Account">
                                                @error('account')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="card" class="form-label">Card</label>
                                                <input type="text" name="card" class="form-control"
                                                    placeholder="Card">
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
                                                <input type="text" name="wallet_1" class="form-control">
                                                @error('wallet_1')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_2" class="form-label">2.</label>
                                                <input type="text" name="wallet_2" class="form-control">
                                                @error('wallet_2')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_3" class="form-label">3.</label>
                                                <input type="text" name="wallet_3" class="form-control">
                                                @error('wallet_3')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_4" class="form-label">4.</label>
                                                <input type="text" name="wallet_4" class="form-control">
                                                @error('wallet_4')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_5" class="form-label">5.</label>
                                                <input type="text" name="wallet_5" class="form-control">
                                                @error('wallet_5')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_6" class="form-label">6.</label>
                                                <input type="text" name="wallet_6" class="form-control">
                                                @error('wallet_6')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_7" class="form-label">7.</label>
                                                <input type="text" name="wallet_7" class="form-control">
                                                @error('wallet_7')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_8" class="form-label">8.</label>
                                                <input type="text" name="wallet_8" class="form-control">
                                                @error('wallet_8')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_9" class="form-label">9.</label>
                                                <input type="text" name="wallet_9" class="form-control">
                                                @error('wallet_9')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_10" class="form-label">10.</label>
                                                <input type="text" name="wallet_10" class="form-control">
                                                @error('wallet_10')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_11" class="form-label">11.</label>
                                                <input type="text" name="wallet_11" class="form-control">
                                                @error('wallet_11')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_12" class="form-label">12.</label>
                                                <input type="text" name="wallet_12" class="form-control">
                                                @error('wallet_12')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_13" class="form-label">13.</label>
                                                <input type="text" name="wallet_13" class="form-control">
                                                @error('wallet_13')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_14" class="form-label">14.</label>
                                                <input type="text" name="wallet_14" class="form-control">
                                                @error('wallet_14')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="wallet_15" class="form-label">15.</label>
                                                <input type="text" name="wallet_15" class="form-control">
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
                                                <input type="text" name="farm_1" class="form-control">
                                                @error('farm_1')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_2" class="form-label">2.</label>
                                                <input type="text" name="farm_2" class="form-control">
                                                @error('farm_2')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_3" class="form-label">3.</label>
                                                <input type="text" name="farm_3" class="form-control">
                                                @error('farm_3')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_4" class="form-label">4.</label>
                                                <input type="text" name="farm_4" class="form-control">
                                                @error('farm_4')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_5" class="form-label">5.</label>
                                                <input type="text" name="farm_5" class="form-control">
                                                @error('farm_5')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_6" class="form-label">6.</label>
                                                <input type="text" name="farm_6" class="form-control">
                                                @error('farm_6')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_7" class="form-label">7.</label>
                                                <input type="text" name="farm_7" class="form-control">
                                                @error('farm_7')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_8" class="form-label">8.</label>
                                                <input type="text" name="farm_8" class="form-control">
                                                @error('farm_8')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_9" class="form-label">9.</label>
                                                <input type="text" name="farm_9" class="form-control">
                                                @error('farm_9')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_10" class="form-label">10.</label>
                                                <input type="text" name="farm_10" class="form-control">
                                                @error('farm_10')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_11" class="form-label">11.</label>
                                                <input type="text" name="farm_11" class="form-control">
                                                @error('farm_11')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_12" class="form-label">12.</label>
                                                <input type="text" name="farm_12" class="form-control">
                                                @error('farm_12')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_13" class="form-label">13.</label>
                                                <input type="text" name="farm_13" class="form-control">
                                                @error('farm_13')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_14" class="form-label">14.</label>
                                                <input type="text" name="farm_14" class="form-control">
                                                @error('farm_14')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="farm_15" class="form-label">15.</label>
                                                <input type="text" name="farm_15" class="form-control">
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
                                                src="https://via.placeholder.com/380x180" alt="teacher avater"
                                                style="border: 5px solid rgba(0, 0, 0, 0.151);">

                                                <div class="form-group my-3">
                                                    <label for="image1" class="form-label">Select Image</label>
                                                    <input type="file" name="image1" class="form-control" id="image1" onchange="loadPreview(this);">
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
                                                src="https://via.placeholder.com/380x180" alt="teacher avater"
                                                style="border: 5px solid rgba(0, 0, 0, 0.151);">

                                                <div class="form-group my-3">
                                                    <label for="image2" class="form-label">Select Image</label>
                                                    <input type="file" name="image2" class="form-control" id="image2" onchange="loadPreview(this);">
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
                                                src="https://via.placeholder.com/380x180" alt="teacher avater"
                                                style="border: 5px solid rgba(0, 0, 0, 0.151);">

                                                <div class="form-group my-3">
                                                    <label for="image3" class="form-label">Select Image</label>
                                                    <input type="file" name="image3" class="form-control" id="image3" onchange="loadPreview(this);">
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
                                    <button class="btn btn-primary w-100">Save Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
