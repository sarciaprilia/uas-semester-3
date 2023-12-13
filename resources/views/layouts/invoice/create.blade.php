<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Create Invoice</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('invoices.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="date" class="mb-1">Date</label>
                        <input type="text" class="form-control" id="date" name="date">
                    </div>
                    <div class="form-group mb-3">
                        <label for="invoice_number" class="mb-1">Invoice Number</label>
                        <input type="text" class="form-control" id="invoice_number" name="invoice_number">
                    </div>
                    <div class="form-group mb-3">
                        <label for="customer" class="mb-1">Customer</label>
                        <input type="text" class="form-control" id="customer" name="customer">
                    </div>
                    <div class="form-group mb-3">
                        <label for="amount" class="mb-1">Amount</label>
                        <input type="text" class="form-control" id="amount" name="amount">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
