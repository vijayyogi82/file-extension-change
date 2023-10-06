<div class="mt-4">
    @php
        $fileExtension = pathinfo($invoice->invoice_file, PATHINFO_EXTENSION);
    @endphp

    @if ($fileExtension === 'jpg' || $fileExtension === 'jpeg' || $fileExtension === 'png' || $fileExtension === 'gif')
        <img src="{{ asset('api/invoice/'.$invoice->invoice_file) }}" width="100px" height="100px" alt="">
    @elseif ($fileExtension === 'pdf')
        <!-- <embed src="{{ asset('api/invoice/'.$invoice->invoice_file) }}" width="100px" height="100px" type="application/pdf"> -->
        <a href="{{ asset('api/invoice/'.$invoice->invoice_file) }}" download> <img height="25px" src="{{ asset('icons/pdf.png') }}"> Download PDF</a>
    @elseif ($fileExtension === 'mp4' || $fileExtension === 'avi' || $fileExtension === 'mov')
        <!-- <video src="{{ asset('api/invoice/'.$invoice->invoice_file) }}" width="100px" height="100px" controls></video> -->
        <a href="{{ asset('api/invoice/'.$invoice->invoice_file) }}" download> <img height="25px" src="{{ asset('icons/video.png') }}"> Download Video</a>
    @elseif ($fileExtension === 'xlsx' || $fileExtension === 'xls')
        <!-- <iframe src="{{ asset('api/invoice/'.$invoice->invoice_file) }}" width="100px" height="100px"></iframe> -->
        <a href="{{ asset('api/invoice/'.$invoice->invoice_file) }}" download> <img height="25px" src="{{ asset('icons/excel.png') }}"> Download Excel</a>
    @else
        <p>Unsupported file type</p>
    @endif
</div>