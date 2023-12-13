<!-- Modal untuk Delete -->
<div class="modal fade" id="deleteModal_{{ $invoice->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Invoice</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('invoices.destroy', ['invoice' => $invoice->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <p>Are you sure you want to delete this invoice?</p>
                    <p><strong>Date:</strong> {{ $invoice->date }}</p>
                    <p><strong>Invoice Number:</strong> {{ $invoice->invoice_number }}</p>
                    <p><strong>Customer:</strong> {{ $invoice->customer }}</p>
                    <p><strong>Amount:</strong> {{ $invoice->amount }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
