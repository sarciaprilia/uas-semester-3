<!-- Modal untuk Update -->
<div class="modal fade" id="updateModal_{{ $invoice->id }}" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Invoice</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('invoices.update', ['invoice' => $invoice->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="date" class="mb-1">Date</label>
                        <input type="text" class="form-control" id="date" name="date" value="{{ $invoice->date }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="invoice_number" class="mb-1">Invoice Number</label>
                        <input type="text" class="form-control" id="invoice_number" name="invoice_number" value="{{ $invoice->invoice_number }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="customer" class="mb-1">Customer</label>
                        <input type="text" class="form-control" id="customer" name="customer" value="{{ $invoice->customer }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="amount" class="mb-1">Amount</label>
                        <input type="text" class="form-control" id="amount" name="amount" value="{{ $invoice->amount }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
