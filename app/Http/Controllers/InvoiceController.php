<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return view('dashboard', compact('invoices'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required',
            'invoice_number' => 'required|unique:invoices',
            'customer' => 'required',
            'amount' => 'required|numeric',
        ]);

        Invoice::create($validatedData);

        return redirect()->route('dashboard')
            ->with('dashboard', 'Invoice created successfully.');
    }

    public function update(Request $request, Invoice $invoice)
    {
        $validatedData = $request->validate([
            'date' => 'required',
            'invoice_number' => 'required|unique:invoices,invoice_number,' . $invoice->id,
            'customer' => 'required',
            'amount' => 'required|numeric',
        ]);

        $invoice->update($validatedData);

        return redirect()->route('dashboard')
            ->with('success', 'Invoice updated successfully');
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Invoice deleted successfully');
    }
}
