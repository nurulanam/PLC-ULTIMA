@extends('backend.printMaster')
@section('content')
<div class="auth-page-wrapper pt-5">
    <!-- auth page bg -->
    <div class="auth-one-bg-position auth-one-bg" id="auth-particles" style="background: url({{ asset('backend/assets/images/logo/background.png') }}); background-repeat: no-repeat; background-position: center;">
        <div class="bg-overlay"></div>

        {{-- <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
            </svg>
        </div> --}}
    </div>

    <!-- auth page content -->
    <div class="auth-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-sm-5 mb-4 text-white-50">
                        <div>
                            <a href="{{ url('/') }}" class="d-inline-block auth-logo">
                                <img src="{{ asset('backend/assets/images/logo/homeLogo.png') }}" alt="" height="120">
                            </a>
                        </div>
                        <p class="mt-3 fs-15 fw-medium">Powerd By Khan Online IT.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">

                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                <h3 class="text-primary"><b>Registration</b></h3>
                            </div>
                            <div class="p-2 mt-4">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="from-group my-2">
                                        <label for="" class="form-label">Name :</label>
                                        <input type="text" class="form-control" name="name" required placeholder="Enter Your Name">
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="from-group my-2">
                                        <label for="" class="form-label">E-mail :</label>
                                        <input type="email" class="form-control" name="email" required placeholder="Enter Your E-mail">
                                        @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="from-group my-2">
                                        <label for="" class="form-label">Password :</label>
                                        <input type="password" class="form-control" name="password" required placeholder="Enter Your Password">
                                        @error('password')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="from-group my-2">
                                        <label for="" class="form-label">Confirm Password :</label>
                                        <input type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                                        @error('password_confirmation')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary mt-2 w-100">LogIn</button>
                                </form>
                            </div>
                        </div>

                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                    <div class="mt-4 text-center">
                            <p class="mb-0">Already have an account ? <a href="{{ route('login') }}" class="fw-semibold text-primary text-decoration-underline"> Login </a> </p>
                        </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0 text-muted">&copy;
                            <script>document.write(new Date().getFullYear())</script> PLCU. Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://www.behance.net/nurulanam/" target="_blank">Dev. Nurul Anam</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
    <script src="{{ asset('/backend') }}/assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="{{ asset('/backend') }}/assets/js/pages/particles.app.js"></script>
@endsection
