<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('invoices.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf
                            <h3 class="text-center mb-4">CREATE INVOICE</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Invoice Date</label>
                                        <input type="date" class="form-control @error('invoice_date') is-invalid @enderror" name="invoice_date" value="{{ old('invoice_date') }}" placeholder="Invoice Date">
                                    
                                        <!-- error message untuk invoice_date -->
                                        @error('invoice_date')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Client Email</label>
                                        <input type="email" class="form-control @error('client_email') is-invalid @enderror" name="client_email" value="{{ old('client_email') }}" placeholder="Input Client Email">
                                    
                                        <!-- error message untuk client_email -->
                                        @error('client_email')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Client Name</label>
                                        <input type="text" class="form-control @error('client_name') is-invalid @enderror" name="client_name" value="{{ old('client_name') }}" placeholder="Input Client Name">
                                    
                                        <!-- error message untuk client_name -->
                                        @error('client_name')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Client Address</label>
                                        <input type="text" class="form-control @error('client_address') is-invalid @enderror" name="client_address" value="{{ old('client_address') }}" placeholder="Input Client Address">
                                    
                                        <!-- error message untuk client_address -->
                                        @error('client_address')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Forwarding Vessel</label>
                                        <input type="text" class="form-control @error('forwarding_vessel') is-invalid @enderror" name="forwarding_vessel" value="{{ old('forwarding_vessel') }}" placeholder="Input Forwarding Vessel">
                                    
                                        <!-- error message untuk forwarding_vessel -->
                                        @error('forwarding_vessel')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Port of Discharge</label>
                                        <input type="text" class="form-control @error('port_of_discharge') is-invalid @enderror" name="port_of_discharge" value="{{ old('port_of_discharge') }}" placeholder="Input Port of Discharge">
                                    
                                        <!-- error message untuk port_of_discharge -->
                                        @error('port_of_discharge')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Port of Loading</label>
                                        <input type="text" class="form-control @error('port_of_loading') is-invalid @enderror" name="port_of_loading" value="{{ old('port_of_loading') }}" placeholder="Input Port of Loading">
                                    
                                        <!-- error message untuk port_of_loading -->
                                        @error('port_of_loading')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Bill Lading</label>
                                        <input type="text" class="form-control @error('bill_lading') is-invalid @enderror" name="bill_lading" value="{{ old('bill_lading') }}" placeholder="Input Bill Lading">
                                    
                                        <!-- error message untuk bill_lading -->
                                        @error('bill_lading')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Shipper</label>
                                        <input type="text" class="form-control @error('shipper') is-invalid @enderror" name="shipper" value="{{ old('shipper') }}" placeholder="Input Shipper">
                                    
                                        <!-- error message untuk shipper -->
                                        @error('shipper')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Consignee</label>
                                        <input type="text" class="form-control @error('consignee') is-invalid @enderror" name="consignee" value="{{ old('consignee') }}" placeholder="Input Consignee">
                                    
                                        <!-- error message untuk consignee -->
                                        @error('consignee')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Cargo Description</label>
                                        <input type="text" class="form-control @error('cargo_description') is-invalid @enderror" name="cargo_description" value="{{ old('cargo_description') }}" placeholder="Input Cargo Description">
                                    
                                        <!-- error message untuk cargo_description -->
                                        @error('cargo_description')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">ETD</label>
                                        <input type="date" class="form-control @error('etd') is-invalid @enderror" name="etd" value="{{ old('etd') }}" placeholder="Input ETD">
                                    
                                        <!-- error message untuk etd -->
                                        @error('etd')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">ETA</label>
                                        <input type="date" class="form-control @error('eta') is-invalid @enderror" name="eta" value="{{ old('eta') }}" placeholder="Input ETA">
                                    
                                        <!-- error message untuk eta -->
                                        @error('eta')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-md btn-primary me-3">Save</button>
                            <button type="reset" class="btn btn-md btn-warning">Reset</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

</body>
</html>