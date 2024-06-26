@extends('layouts.admin.tabler')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Overview
                </div>
                <h2 class="page-title">
                    Dashboard
                </h2>
                <br>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <h2 class="page-title" style="font-weight: normal;">
                Hari Ini
            </h2>
            <div class="col-md-6 col-xl-4">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-secondary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-check">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                                        <path d="M15 19l2 2l4 -4" />
                                    </svg>

                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    {{ $rekapkaryawan->jmlkar}}
                                </div>
                                <div class="text-secondary">
                                    Total Karyawan
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-success text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-check">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                                        <path d="M15 19l2 2l4 -4" />
                                    </svg>

                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    {{ $rekappresensi->jmlhadir}}
                                </div>
                                <div class="text-secondary">
                                    Total Hadir
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-danger text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-minus">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4c.348 0 .686 .045 1.009 .128" />
                                        <path d="M16 19h6" />
                                    </svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    {{ $rekappresensi->jmlterlambat != null ? $rekappresensi->jmlterlambat : 0}}
                                </div>
                                <div class="text-secondary">
                                    Total Karyawan Telat
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-info text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-files">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                                        <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2z" />
                                        <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
                                    </svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    {{ $rekapizin->jmlizin != null ? $rekapizin->jmlizin : 0}}
                                </div>
                                <div class="text-secondary">
                                    Total Karyawan Izin
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-warning text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-files">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                                        <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2z" />
                                        <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
                                    </svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    {{ $rekapizin->jmlsakit != null ? $rekapizin->jmlsakit : 0}}
                                </div>
                                <div class="text-secondary">
                                    Total Karyawan Sakit
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-success text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-files">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                                        <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2z" />
                                        <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
                                    </svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    {{ $rekapizin->jmlsakit != null ? $rekapizin->jmlsakit : 0}}
                                </div>
                                <div class="text-secondary">
                                    Total Karyawan Cuti
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card" style="height: 28rem">
                    <div class="card-header">
                        <h3 class="card-title">Hadir Hari Ini</h3>
                    </div>
                    <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                        <div class="divide-y">
                            <div>
                                <div class="row">
                                    <div class="col-auto">
                                        <span class="avatar">JL</span>
                                    </div>
                                    <div class="col">
                                        <div class="text-truncate">
                                            <strong>Jeffie Lewzey</strong> commented on your <strong>"I'm not a witch."</strong> post.
                                        </div>
                                        <div class="text-secondary">yesterday</div>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="badge bg-primary"></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-auto">
                                        <span class="avatar" style="background-image: url(./static/avatars/002m.jpg)"></span>
                                    </div>
                                    <div class="col">
                                        <div class="text-truncate">
                                            It's <strong>Mallory Hulme</strong>'s birthday. Wish him well!
                                        </div>
                                        <div class="text-secondary">2 days ago</div>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="badge bg-primary"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card" style="height: 28rem">
                    <div class="card-header">
                        <h3 class="card-title">Leaderboard On Time</h3>
                    </div>
                    <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                        <div class="divide-y">
                            <div>
                                <div class="row">
                                    <div class="col-auto">
                                        <span class="avatar">JL</span>
                                    </div>
                                    <div class="col">
                                        <div class="text-truncate">
                                            <strong>Jeffie Lewzey</strong> commented on your <strong>"I'm not a witch."</strong> post.
                                        </div>
                                        <div class="text-secondary">yesterday</div>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="badge bg-primary"></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-auto">
                                        <span class="avatar" style="background-image: url(./static/avatars/002m.jpg)"></span>
                                    </div>
                                    <div class="col">
                                        <div class="text-truncate">
                                            It's <strong>Mallory Hulme</strong>'s birthday. Wish him well!
                                        </div>
                                        <div class="text-secondary">2 days ago</div>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="badge bg-primary"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card" style="height: 28rem">
                    <div class="card-header">
                        <h3 class="card-title">Leaderboard Telat</h3>
                    </div>
                    <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                        <div class="divide-y">
                            <div>
                                <div class="row">
                                    <div class="col-auto">
                                        <span class="avatar">JL</span>
                                    </div>
                                    <div class="col">
                                        <div class="text-truncate">
                                            <strong>Jeffie Lewzey</strong> commented on your <strong>"I'm not a witch."</strong> post.
                                        </div>
                                        <div class="text-secondary">yesterday</div>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="badge bg-primary"></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-auto">
                                        <span class="avatar" style="background-image: url(./static/avatars/002m.jpg)"></span>
                                    </div>
                                    <div class="col">
                                        <div class="text-truncate">
                                            It's <strong>Mallory Hulme</strong>'s birthday. Wish him well!
                                        </div>
                                        <div class="text-secondary">2 days ago</div>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="badge bg-primary"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
