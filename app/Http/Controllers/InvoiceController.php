<?php

namespace App\Http\Controllers;

//import model product
use App\Models\Invoice; 

//import return type View
use Illuminate\View\View;

class InvoiceController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all products
        $invoices = Invoice::latest()->paginate(10);

        //render view with products
        return view('invoices.index', compact('invoices'));
    }
}