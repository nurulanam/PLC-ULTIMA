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
                                <h5 class="text-primary">Welcome Back !</h5>
                            </div>
                            <div class="p-2 mt-4">
                                <h3><b>PLCU</b> সফটওয়্যার এ আপনাকে স্বাগতম </h3>
                            </div>
                            <div class="p-2 mt-4">
                                @guest
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg mx-2">Login</a>
                                        <a href="{{ route('register') }}" class="btn btn-primary btn-lg mx-2">Register</a>
                                    </div>
                                @endguest
                                @role('admin|moderator')
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('dashboard.index') }}" class="btn btn-primary btn-lg mx-2">Dashboard</a>
                                </div>

                                @endrole
                                @auth
                                    @unless(auth()->user()->hasRole('admin|moderator'))

                                    <h5 class="text-center">দুঃখিত আপনার কোনো Role নেই </h5>
                                    <h5 class="text-center">Admin এর সাথে যোগাযোগ করুন </h5>
                                    <form method="POST" action="{{ route('logout') }}" class="text-center">
                                        @csrf
                                        <button class="btn btn-danger btn-lg">Logout</span></button>
                                    </form>
                                    @endunless
                                @endauth


                                {{-- @role('moderator')
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('dashboard.index') }}" class="btn btn-primary btn-lg mx-2">Dashboard</a>
                                </div>
                                @endrole --}}
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
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
