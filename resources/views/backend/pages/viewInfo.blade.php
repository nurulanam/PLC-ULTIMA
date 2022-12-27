@extends('backend.printMaster')
@section('content')

    <div class="row">`
        <div class="col">
            <div class="d-flex justify-content-center mt-4">
                <img src="{{ asset('backend/assets/images/logo/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 60px;">
                <span class="mx-3"><h3><span class="text-danger">PLCU</span> (PlatinCoin Ultima)</h3>
                <a class="text-dark" href="https://ultimafarm.com/en" target="_blank">https://ultimafarm.com/en</a></span>
            </div>
            <div class="card">
                <div class="card-body bg-sha">
                    <table class="table table-striped table-responsive text-start table-comp bg-transparent" style="z-index: 1; position: relative;">
                        <thead>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bold"> Refferal Name :</td>
                                <td colspan="3">{{ $information->refferal_name }}</td>
                                <td class="fw-bold">Farm Price:</td>
                                <td>{{ $information->farm_price }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Name :</td>
                                <td colspan="3">{{ $information->name }}</td>
                                <td class="fw-bold">Farm Date:</td>
                                <td>{{ $information->farm_date }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Moblie Number:</td>
                                <td colspan="3">{{ $information->mobile_number }}</td>
                                <td class="fw-bold">Load Date:</td>
                                <td>{{ $information->load_date }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Personal E-mail :</td>
                                <td colspan="3">{{ $information->personal_email }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Password :</td>
                                <td colspan="3">{{ $information->personal_password }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Platin World E-mail :</td>
                                <td colspan="3">{{ $information->platin_world_email }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Platin World Password :</td>
                                <td colspan="3">{{ $information->platin_world_passowrd }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Refferal Link :</td>
                                <td colspan="3">{{ $information->refferal_link }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Account (2FA) :</td>
                                <td colspan="3">{{ $information->account }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Card (2FA):</td>
                                <td colspan="3">{{ $information->card }}</td>
                            </tr>

                            <tr>
                                <td class="text-center" colspan="6">
                                    <h5 class="text-decoration-underline">Ultima Wallet Mnemonic</h5>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>1.</b> {{ $information->wallet_1 }}</td>
                                <td colspan="2"><b>2.</b> {{ $information->wallet_2 }}</td>
                                <td colspan="2"><b>3.</b> {{ $information->wallet_3 }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>4.</b> {{ $information->wallet_4 }}</td>
                                <td colspan="2"><b>5.</b> {{ $information->wallet_5 }}</td>
                                <td colspan="2"><b>6.</b> {{ $information->wallet_6 }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>7.</b> {{ $information->wallet_7 }}</td>
                                <td colspan="2"><b>8.</b> {{ $information->wallet_8 }}</td>
                                <td colspan="2"><b>9.</b> {{ $information->wallet_9 }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>10.</b> {{ $information->wallet_10 }}</td>
                                <td colspan="2"><b>11.</b> {{ $information->wallet_11 }}</td>
                                <td colspan="2"><b>12.</b> {{ $information->wallet_12 }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>13.</b> {{ $information->wallet_13 }}</td>
                                <td colspan="2"><b>14.</b> {{ $information->wallet_14 }}</td>
                                <td colspan="2"><b>15.</b> {{ $information->wallet_15 }}</td>
                            </tr>
                            <tr>
                                <td class="text-center" colspan="6">
                                    <h5 class="text-decoration-underline">Ultima Farm Mnemonic</h5>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>1.</b> {{ $information->farm_1 }}</td>
                                <td colspan="2"><b>2.</b> {{ $information->farm_2 }}</td>
                                <td colspan="2"><b>3.</b> {{ $information->farm_3 }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>4.</b> {{ $information->farm_4 }}</td>
                                <td colspan="2"><b>5.</b> {{ $information->farm_5 }}</td>
                                <td colspan="2"><b>6.</b> {{ $information->farm_6 }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>7.</b> {{ $information->farm_7 }}</td>
                                <td colspan="2"><b>8.</b> {{ $information->farm_8 }}</td>
                                <td colspan="2"><b>9.</b> {{ $information->farm_9 }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>10.</b> {{ $information->farm_10 }}</td>
                                <td colspan="2"><b>11.</b> {{ $information->farm_11 }}</td>
                                <td colspan="2"><b>12.</b> {{ $information->farm_12 }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>13.</b> {{ $information->farm_13 }}</td>
                                <td colspan="2"><b>14.</b> {{ $information->farm_14 }}</td>
                                <td colspan="2"><b>15.</b> {{ $information->farm_15 }}</td>
                            </tr>
                            <tr class="print_section">
                                <td class="text-center" colspan="6">
                                    <h5 class="text-decoration-underline">Ultima Farm Mnemonic</h5>
                                </td>
                            </tr>
                            <tr class="print_section align-items-center">
                                @foreach ($images as $image)
                                    <td colspan="2">
                                        <a href="{{ asset('backend/assets/images/information').'/'.$image->image1 }}" target="_blank">
                                            <img class="img-fluid img-thumbnail" src="{{ asset('backend/assets/images/information').'/'.$image->image1 }}" tag="" style="max-height: 200px;">
                                        </a>
                                    </td>
                                    <td colspan="2">
                                        <a href="{{ asset('backend/assets/images/information').'/'.$image->image2 }}" target="_blank">
                                            <img class="img-fluid img-thumbnail" src="{{ asset('backend/assets/images/information').'/'.$image->image2 }}" alt="" style="max-height: 200px;">
                                        </a>
                                    </td>
                                    <td colspan="2">
                                        <a href="{{ asset('backend/assets/images/information').'/'.$image->image3 }}" target="_blank">
                                            <img class="img-fluid img-thumbnail" src="{{ asset('backend/assets/images/information').'/'.$image->image3 }}" alt="" style="max-height: 200px;">
                                        </a>
                                    </td>
                                @endforeach

                            </tr>
                            <tr class="print_section">
                                <td>
                                    <a href="{{ route('information.index') }}" class="btn btn-danger" >Back</a>
                                    <button type="button" class="btn btn-success" onclick="window.print()">Print</button>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                    <hr class="mt-5">
                    <p class="text-center">A New Trend Making Money With Smartphones Business Opportunity</p>
                    <h3 class="text-center p-0">Thank You</h3>

                </div>
            </div>
        </div>
        <style>
            @media print{
                .print_section {
                    display: none;
                }
                .bg-sha::before{
                    content: '';
                    position: absolute;
                    margin: auto;
                    left: 0;
                    right: 60% !important;
                    top: 65% !important;
                    bottom: 0;
                    background: url({{ asset('backend/assets/images/logo/background.png') }});
                    background-repeat: no-repeat;
                    background-size: contain;
                    opacity: 0.05;
                    transform: translate(40%, -50%) rotate(30deg) scale(2) !important;
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
            transform: translate(50%, -50%) rotate(30deg) scale(1.5);
            z-index: 0;
        }
    </style>
@endsection
