<h2>Hasil Pemindaian Barcode</h2>
<p>Barcode: {{ $barcode }}</p>
<img src="data:image/png;base64,{{ base64_encode($barcodeImage) }}" alt="Barcode">
