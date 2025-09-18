
<form action="{{ route('scan-result') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="barcode">Barcode:</label>
        <input type="text" class="form-control" id="barcode" name="barcode" autofocus>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
