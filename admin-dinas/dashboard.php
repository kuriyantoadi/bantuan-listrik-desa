<?php
// Koneksi ke database
include('../koneksi.php');

// // Query untuk menghitung jumlah baris
// $sql = "SELECT COUNT(*) AS jumlah_baris FROM `tb_penerima_lisdes`";
// $result = $conn->query($sql);
// $row = $result->fetch_assoc();
// $jumlah_baris = $row['jumlah_baris'];

// $conn->close();
?>

<div class="main-content app-content mt-0">
    <div class="side-app">
        <div class="main-container container-fluid">
            <div class="page-header">
                <h1 class="page-title">Dashboard</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-12">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="mt-2">
                                            <h6 class="">Total Data</h6>
                                            <h2 class="mb-0 number-font"><?php echo number_format($jumlah_baris); ?></h2>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <canvas id="saleschart" class="h-8 w-9 chart-dropshadow"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="text-muted fs-12">Jumlah penerima lisdes di database</span>
                                </div>
                            </div>
                        </div>                                    
                    </div>
                </div>
            </div>                   
        </div>
    </div>
</div>
