<?php

namespace App\Http\Controllers;

//import model invoice
use App\Models\Invoice;

//import return type View
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Http Request
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(): View
    {
        //get all invoices
        $invoices = Invoice::latest()->paginate(10);

        //render view with invoices
        return view('invoices.index', compact('invoices'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('invoices.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'invoice_date' => 'required|date',
            'client_name' => 'required|min:3',
            'client_address' => 'required|min:3',
            'client_email' => 'required|email',
            'forwarding_vessel' => 'required|min:3',
            'port_of_discharge' => 'required|min:3',
            'port_of_loading' => 'required|min:3',
            'bill_lading' => 'required|min:3',
            'shipper' => 'required|min:3',
            'consignee' => 'required|min:3',
            'cargo_description' => 'required|min:3',
            'etd' => 'required|date',
            'eta' => 'required|date',
        ]);



        //create invoice
        Invoice::create([
            'invoice_date' => $request->invoice_date,
            'client_name' => $request->client_name,
            'client_address' => $request->client_address,
            'client_email' => $request->client_email,
            'forwarding_vessel' => $request->forwarding_vessel,
            'port_of_discharge' => $request->port_of_discharge,
            'port_of_loading' => $request->port_of_loading,
            'bill_lading' => $request->bill_lading,
            'shipper' => $request->shipper,
            'consignee' => $request->consignee,
            'cargo_description' => $request->cargo_description,
            'etd' => $request->etd,
            'eta' => $request->eta,

        ]);
        //redirect to index
        return redirect()->route('invoices.index')->with(['success' => 'Invoice created successfully!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get invoice by ID
        $invoice = Invoice::findOrFail($id);

        //render view with invoice
        return view('invoices.show', compact('invoice'));
    }
}
