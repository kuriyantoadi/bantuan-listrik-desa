 <?php
    switch ($d['status_pemasangan']) {
        case 'Pendataan':
            echo '<span class="badge bg-primary">Pendataan</span>';
            break;
        case 'Belum Terpasang':
            echo '<span class="badge bg-primary">Pendataan</span>';
            break;
        case 'Di Tolak':
            echo '<span class="badge bg-danger">Di Tolak</span>';
            break;
        case 'Pemasangan':
            echo '<span class="badge bg-info">Pemasangan</span>';
            break;
        case 'Monitoring':
            echo '<span class="badge bg-warning">Monitoring</span>';
            break;
        case 'Sudah Terpasang':
            echo '<span class="badge bg-success">Selesai</span>';
            break;
        case 'Selesai':
            echo '<span class="badge bg-success">Selesai</span>';
            break;
        default:
            echo '<span class="badge bg-secondary">Tidak Diketahui</span>';
            break;
    }
    ?>