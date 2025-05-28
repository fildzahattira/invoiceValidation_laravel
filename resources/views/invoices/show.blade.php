<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Preview</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<section class="py-3 py-md-5">
<div class="container">
<div class="row justify-content-center">
    <div class="col-12 col-lg-9 col-xl-8 col-xxl-7">
    <div class="row gy-3 mb-3">
        <div class="col-6">
        <h2 class="text-uppercase text-endx m-0">Preview Invoice</h2>
        </div>
        <div class="col-6">
        <!-- <a class="d-block text-end" href="#!">
            <img src="./assets/img/bsb-logo.svg" class="img-fluid" alt="BootstrapBrain Logo" width="135" height="44">
        </a> -->
        </div>
        <div class="col-12">
        <h4>Bill To</h4>
        <address>
            <strong>{{$invoice->client_name}}</strong><br>
            {{$invoice->client_address}}<br>
            Email: email@client.com
        </address>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-12 col-sm-6 col-md-8">
        <h4 class="row">
            <span class="col-6">Invoice #INT-001</span>
        </h4>
        <div class="row">
            <span class="col-6">Invoice Date</span>
            <span class="col-6 "><b>{{$invoice->invoice_date}}</b></span>
            <span class="col-6">Forwarding Vessel</span>
            <span class="col-6 "><b>{{$invoice->forwarding_vessel}}</b></span>
            <span class="col-6">POD</span>
            <span class="col-6 "><b>{{$invoice->port_of_discharge}}</b></span>
            <span class="col-6">POL</span>
            <span class="col-6 "><b>{{$invoice->port_of_loading}}</b></span>
            <span class="col-6">Bill Lading</span>
            <span class="col-6 "><b>{{$invoice->bill_lading}}</b></span>
            <span class="col-6">Shipper</span>
            <span class="col-6 "><b>{{$invoice->shipper}}</b></span>
            <span class="col-6">Consignee</span>
            <span class="col-6 "><b>{{$invoice->consignee}}</b></span>
        </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
        
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-12">
        <div class="table-responsive">
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col" class="text-uppercase">Charge Description</th>
                <th scope="col" class="text-uppercase text-end">Amount</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                <td>Detail on progress</td>
                <td class="text-end">-</td>
                </tr>
                <tr>
                <td>Detail on progress</td>
                <td class="text-end">-</td>
                </tr>
                <tr>
                <td>Detail on progress</td>
                <td class="text-end">-</td>
                </tr>
                <tr>
                <td>Detail on progress</td>
                <td class="text-end">-</td>
                </tr>
                <tr>
                <tr>
                <th scope="row" colspan="1" class="text-uppercase text-end">Total Amount</th>
                <td class="text-end">-</td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</div>
</div>
</section>
</body>
</html>