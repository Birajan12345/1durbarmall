@extends('frontend.layouts.app')
@section('content')

    <!-- Breadcrumbs-->
    <section
            class="section-height-800 breadcrumb-modern parallax-container context-dark bg-gray-darkest d-none d-lg-block"
            data-parallax-img="{{asset('assets/images/backgrounds/background-01-1920-900.jpg')}}">
        <div class="parallax-content">
            <div class="bg-overlay-darker">
                <div class="container-wide section-34 section-md-60 section-lg-top-130 section-lg-bottom-155">
                    <div class="d-none d-lg-block">
                        <div class="h1 breadcrumbs-custom-title">View Report</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-34 bg-selago">
        <div class="container">
            <ul class="list-inline list-inline-12 list-inline-icon breadcrumbs-list">
                <li><a href="{{route('homepage')}}">Home</a></li>
                <li class="active">View Report</li>
            </ul>
        </div>
    </section>
    <!-- END SECTION BANNER -->

    <!-- START SECTION BLOG -->
    <section class="small_pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card-body">
                    <table id="tableData" class="table renew-column hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>S.No.</th>
                            <th>IP Address</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BLOG -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#tableData').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": '{{ route('viewReport.data') }}',
                "type": "POST",
                "columns": [
                    {"data": "id", 'visible': false},
                    {"data": "DT_RowIndex", orderable: false, searchable: false},
                    {"data": "ip_address"},
                    {"data": "created_at"},
                ],
                order: [[0, 'desc']]
            });
        });
    </script>

@endpush
