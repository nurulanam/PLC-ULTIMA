@extends('backend.printMaster')
@section('content')

    <div class="row">`
        <div class="col">
            <div class="d-flex justify-content-center mt-4">
                <img src="{{ asset('backend/assets/images/logo/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 60px;">
                <span class="mx-3"><h3><span class="text-danger">PLCU</span> (PlatinCoin Ultima)</h3>
                <a class="text-dark" href="https://ultimafarm.com/en" target="_blank">https://ultimafarm.com/en</a></span>
            </div>
            <div class="card mt-3">
                <div class="card-body bg-sha">
                    <div class="row">
                        <div class="col-sm-3">
                            <p><strong>Refferal Name :</strong></p>
                        </div>
                        <div class="col-sm-5">
                            <p>{{ $information->refferal_name }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><strong>Farm Price :</strong> {{ $information->farm_price }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p><strong>Name :</strong></p>
                        </div>
                        <div class="col-sm-5">
                            <p>{{ $information->name }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><strong>Farm date :</strong> {{ $information->farm_date }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p><strong>Mobile Number :</strong></p>
                        </div>
                        <div class="col-sm-5">
                            <p>{{ $information->mobile_number }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><strong>Load date :</strong> {{ $information->load_date }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p><strong>Personal E-mail :</strong></p>
                        </div>
                        <div class="col-sm-9">
                            <p>{{ $information->personal_email }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p><strong>Personal Password :</strong></p>
                        </div>
                        <div class="col-sm-9">
                            <p>{{ $information->personal_password }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p><strong>Platin World E-mail :</strong></p>
                        </div>
                        <div class="col-sm-9">
                            <p>{{ $information->platin_world_email }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p><strong>Platin World Password :</strong></p>
                        </div>
                        <div class="col-sm-9">
                            <p>{{ $information->platin_world_passowrd }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p><strong>Refferal Link :</strong></p>
                        </div>
                        <div class="col-sm-9">
                            <p>{{ $information->refferal_link }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p><strong>Account (2FA) :</strong></p>
                        </div>
                        <div class="col-sm-9">
                            <p>{{ $information->account }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p><strong>Card :</strong></p>
                        </div>
                        <div class="col-sm-9">
                            <p>{{ $information->card }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <h5><u>Ultima Wallet Mnemonic</u></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p><b>1.</b> {{ $information->wallet_1 }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><b>2.</b> {{ $information->wallet_2 }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><b>3.</b> {{ $information->wallet_3 }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p><b>4.</b> {{ $information->wallet_4 }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><b>5.</b> {{ $information->wallet_5 }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><b>6.</b> {{ $information->wallet_6 }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p><b>7.</b> {{ $information->wallet_7 }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><b>8.</b> {{ $information->wallet_8 }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><b>9.</b> {{ $information->wallet_9 }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p><b>10.</b> {{ $information->wallet_10 }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><b>11.</b> {{ $information->wallet_11 }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><b>12.</b> {{ $information->wallet_12 }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p><b>13.</b> {{ $information->wallet_13 }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><b>14.</b> {{ $information->wallet_14 }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><b>15.</b> {{ $information->wallet_15 }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <h5><u>Ultima Farm Mnemonic</u></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p><b>1.</b> {{ $information->farm_1 }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><b>2.</b> {{ $information->farm_2 }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><b>3.</b> {{ $information->farm_3 }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p><b>4.</b> {{ $information->farm_4 }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><b>5.</b> {{ $information->farm_5 }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><b>6.</b> {{ $information->farm_6 }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p><b>7.</b> {{ $information->farm_7 }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><b>8.</b> {{ $information->farm_8 }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><b>9.</b> {{ $information->farm_9 }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p><b>10.</b> {{ $information->farm_10 }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><b>11.</b> {{ $information->farm_11 }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><b>12.</b> {{ $information->farm_12 }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p><b>13.</b> {{ $information->farm_13 }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><b>14.</b> {{ $information->farm_14 }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><b>15.</b> {{ $information->farm_15 }}</p>
                        </div>
                    </div>
                    <div class="row print_section">
                        <div class="col text-center">
                            <h5><u>Ultima Images</u></h5>
                        </div>
                    </div>
                    <div class="row print_section">
                        {{-- @foreach ($images as $image) --}}
                            <div class="col-md-4">
                                <img class="img-fluid img-thumbnail" src="{{ asset('backend/assets/images/information').'/'.$images->image1 }}" alt="" style="max-width: 300px">
                            </div>
                            <div class="col-md-4">
                                <img class="img-fluid img-thumbnail" src="{{ asset('backend/assets/images/information').'/'.$images->image2 }}" alt="" style="max-width: 300px">
                            </div>
                            <div class="col-md-4">
                                <img class="img-fluid img-thumbnail" src="{{ asset('backend/assets/images/information').'/'.$images->image3 }}" alt="" style="max-width: 300px">
                            </div>
                        {{-- @endforeach --}}
                    </div>
                    <div class="row print_section">
                        <div class="col-md-4">
                            <div class="d-flex">
                                <a href="{{ route('information.index') }}" class="btn btn-danger mx-2" >Back</a>
                                <button type="button" class="btn btn-success mx-2" onclick="window.print()">Print</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            @media print{
                .cus-mr{

                }
                .print_section {
                    display: none;
                }
                .bg-sha::before{
                    content: '';
                    position: absolute;
                    margin: auto;
                    left: 0;
                    right: 50% !important;
                    top: 65% !important;
                    bottom: 0;
                    background: url({{ asset('backend/assets/images/logo/background.png') }});
                    background-repeat: no-repeat;
                    background-size: contain;
                    opacity: 0.05;
                    transform: translate(50%, -50%) rotate(20deg) scale(2) !important;
                }
            }
        </style>
    </div>
    <style>
        .table-comp tbody tr td{
            padding: 0.5rem 0.6rem !important;
        }
        .bg-sha::before{
            content: '';
            position: absolute;
            margin: auto;
            left: 0;
            right: 50%;
            top: 50%;
            bottom: 0;
            background: url({{ asset('backend/assets/images/logo/background.png') }});
            background-repeat: no-repeat;
            background-size: contain;
            opacity: 0.05;
            /* transform: rotate(20deg); */
            transform: translate(50%, -50%) rotate(30deg) scale(1.5);
            z-index: 0;
        }
    </style>
@endsection
