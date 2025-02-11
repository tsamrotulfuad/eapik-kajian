@extends('welcome')

@section('content')
<div class="container">
    <div class="mt-5">
        <div class="text-center">
            <h3>Daftar Kajian</h3>
        </div>
    </div>
    <div class="table-kajian mt-5">
        <table id="data-kajian" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Bidang</th>
                    <th>Tahun</th>
                </tr>
            </thead>
        </table>
    </div>

</div>
<div class="container">
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
        <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                <img src="{{ asset('img/apik-logo.jpg') }}" width="150px">
            </a>
            <p class="text-body-secondary">&copy; {{ $tahun }} </p>
        </div>

        <div class="col mb-3">

        </div>

        <div class="col mb-3">
            <h5>Kontak Kami</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2">Bappelitbangda Kota Pasuruan</li>
                <li class="nav-item mb-2">Jl. Sultan Agung No. 32 Kota Pasuruan</li>
                <li class="nav-item mb-2">bappelitbangda@pasuruankota.go.id</li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Situs Terkait</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="https://pasuruankota.go.id/" target="_blank" class="nav-link p-0 text-body-secondary">Pemerintah Kota Pasuruan</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Situs</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="https://bappelitbangda.pasuruankota.go.id/" target="_blank" class="nav-link p-0 text-body-secondary">Website resmi Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah Kota Pasuruan</a></li>
            </ul>
        </div>
    </footer>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
    $(function () {
        var table = $('#data-kajian').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('data.kajian') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'nama', name: 'nama'},
                {data: 'bidang', name: 'bidang'},
                {data: 'tahun', name: 'tahun'},
            ]
        });
    });
</script>
@endpush