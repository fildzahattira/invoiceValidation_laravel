<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoices Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Invoices data</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded" >
                    <div class="card-body">
                        <a href="{{ route('invoices.create') }}" class="btn btn-md btn-success mb-3">Add Invoice</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Invoice Date</th>
                                    <th scope="col">Client Name</th>
                                    <th scope="col">Client Address</th>
                                    <th scope="col">Client Email</th>
                                    <th scope="col">Forwarding Vessel</th>
                                    <th scope="col">Port of Discharge</th>
                                    <th scope="col">Port of Loading</th>
                                    <th scope="col">Bill Lading</th>
                                    <th scope="col">Shipper</th>
                                    <th scope="col">Consignee</th>
                                    <th scope="col">Cargo Description</th>
                                    <th scope="col">ETD</th>
                                    <th scope="col">ETA</th>
                                    <th scope="col" style="width: 20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($invoices as $invoice)
                                    <tr>
                                        <td>{{ $invoice->invoice_date }}</td>
                                        <td>{{ $invoice->client_name }}</td>
                                        <td>{{ $invoice->client_address }}</td>
                                        <td>{{ $invoice->client_email }}</td>
                                        <td>{{ $invoice->forwarding_vessel }}</td>
                                        <td>{{ $invoice->port_of_discharge }}</td>
                                        <td>{{ $invoice->port_of_loading }}</td>
                                        <td>{{ $invoice->bill_lading }}</td>
                                        <td>{{ $invoice->shipper }}</td>
                                        <td>{{ $invoice->consignee }}</td>
                                        <td>{{ $invoice->cargo_description }}</td>
                                        <td>{{ $invoice->etd }}</td>
                                        <td>{{ $invoice->eta }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Are you sure ?');" action="{{ route('invoices.destroy', $invoice->id) }}" method="POST">
                                                <a href="{{ route('invoices.show', $invoice->id) }}" class="btn btn-sm btn-dark">Preview</a>
                                                <!-- <a href="{{ route('invoices.edit', $invoice->id) }}" class="btn btn-sm btn-primary">Edit</a> -->
                                                @csrf
                                                @method('DELETE')
                                                <!-- <button type="submit" class="btn btn-sm btn-danger">Delete</button> -->
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        No invoices data.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $invoices->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //message with sweetalert
        if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        endif

    </script>

</body>
</html>