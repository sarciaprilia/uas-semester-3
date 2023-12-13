<x-app-layout>
    <x-slot name="title">Dashboard</x-slot>

    <div class="d-flex align-items-center justify-content-between mb-4">
        <h6 class="mb-0">Recent Sales</h6>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
            Create Invoice
        </button>
    </div>
    <div class="table-responsive">
        <table class="table text-start align-middle table-bordered table-hover mb-0">
            <thead>
                <tr class="text-dark">
                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                    <th scope="col">Date</th>
                    <th scope="col">Invoice</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Amount</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($invoices as $invoice)
                <tr>
                    <td><input class="form-check-input" type="checkbox"></td>
                    <td>{{ $invoice->date }}</td>
                    <td>{{ $invoice->invoice_number }}</td>
                    <td>{{ $invoice->customer }}</td>
                    <td>{{ $invoice->amount }}</td>
                    <td><a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#updateModal_{{ $invoice->id }}">Update </a></td>
                    <td>
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#deleteModal_{{ $invoice->id }}">
                            Delete
                        </button>
                    </td>
                </tr>
                @include('layouts.invoice.update')
                @include('layouts.invoice.delete', ['invoice' => $invoice])
                @endforeach
                @include('layouts.invoice.create')

            </tbody>
        </table>
    </div>

</x-app-layout>
