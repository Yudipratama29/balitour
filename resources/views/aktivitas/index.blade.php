@extends('layout.master')

@section('title', 'Aktivitas')

@section('breadcrumb')
    <li class="breadcrumb-item active">Aktivitas</li>
@endsection

@section('content')
<body>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h4 class="card-title">Aktivitas</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID Aktivitas</th>
                        <th scope="col">Aktivitas List</th>
                        <th scope="col">Detail Aktivitas</th>
                        <th scope="col">Harga</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</body>
<div class="container card footer">
    <p>&copy; 2023 BaliTour. All rights reserved.</p>
</div>
@endsection

