
<div class="card-body">
    <button class="btn btn-primary" data-toggle="modal" data-target="#tambahBukuModal"><i class="fa fa-plus"></i>Tambah Data</button>
    <a href="{{ route('admin.print.books') }}" target="_blank" class="btn btn-secondary"><i class="fa fa-print"></i> Cetak PDF</a>
    <hr/>

    <div class="btn-group" aria-label="Basic example">
        <a href="{{ route('admin.book.export') }}"
    class="btn btn-info" target="_blank">Export</a>
        <a href="" class="btn btn-warning">Import</a>
    </div>
    <hr/>
    <table id="table-data" class="table table-boorderer">