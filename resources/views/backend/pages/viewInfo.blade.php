@extends('backend.printMaster')
@section('content')
    <div class="row">`
        <div class="col">
            <h2 class="text-center pt-4">Weprosys Limited</h2>
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
                                {{ $information->password }}
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
