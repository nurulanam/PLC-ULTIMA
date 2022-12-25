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
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <td>Refferal Name :</td>
                            <td>
                                {{ $information->refferal_name }}
                            </td>
                        </tr>
                        <tr>
                            <td>Name :</td>
                            <td>
                                {{ $information->name }}
                            </td>
                        </tr>
                        <tr>
                            <td>Moblie Number:</td>
                            <td>
                                {{ $information->mobile_number }}
                            </td>
                        </tr>
                        <tr>
                            <td>Personal E-mail :</td>
                            <td>
                                {{ $information->personal_email }}
                            </td>
                        </tr>
                        <tr>
                            <td>Password :</td>
                            <td>
                                {{ $information->personal_password }}
                            </td>
                        </tr>
                        <tr>
                            <td>Platin World E-mail :</td>
                            <td>
                                {{ $information->platin_world_email }}
                            </td>
                        </tr>
                        <tr>
                            <td>Platin World Password :</td>
                            <td>
                                {{ $information->platin_world_passowrd }}
                            </td>
                        </tr>
                        <tr>
                            <td>Refferal Link :</td>
                            <td>
                                {{ $information->refferal_link }}
                            </td>
                        </tr>
                        <tr>
                            <td>Account :</td>
                            <td>
                                {{ $information->account }}
                            </td>
                        </tr>
                        <tr>
                            <td>Card :</td>
                            <td>
                                {{ $information->card }}
                            </td>
                        </tr>
                        <tr class="print_section">
                            <td>
                                <a href="{{ route('information.index') }}" class="btn btn-danger" >Back</a>
                                <button type="button" class="btn btn-success" onclick="window.print()">Print</button>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
        <style>
            @media print{
                .print_section {
                    display: none;
                }
            }
        </style>
    </div>

@endsection
