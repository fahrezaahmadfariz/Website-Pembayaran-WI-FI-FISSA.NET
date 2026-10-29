
<?php
	$sql = $koneksi->query("SELECT count(id_paket) as paket from tb_paket");
	while ($data= $sql->fetch_assoc()) {
	
		$paket=$data['paket'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(id_pelanggan) as huni from tb_pelanggan");
	while ($data= $sql->fetch_assoc()) {
	
		$huni=$data['huni'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(id_tagihan) as tagih_b from tb_tagihan where status='BL'");
	while ($data= $sql->fetch_assoc()) {
	
		$tagih=$data['tagih_b'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(id_tagihan) as tagih_l from tb_tagihan where status='LS'");
	while ($data= $sql->fetch_assoc()) {
	
		$lunas=$data['tagih_l'];
	}
?>



<style>
    .dashboard-card {
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        padding: 20px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        color: #374151;
        text-decoration: none;
    }
    .dashboard-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        color: #2563eb;
    }
    .card-icon {
        font-size: 3rem;
        opacity: 0.8;
    }
    .card-content h2 {
        margin: 0;
        font-weight: 700;
        font-size: 2rem;
    }
    .card-content p {
        margin: 0;
        color: #6b7280;
    }
</style>

<section class="content-header">
	<h1>Dashboard <small>Administrator</small></h1>
</section>
<hr>

<section class="content">
    <div class="row">
        <a href="?page=data-paket" class="col-lg-3 col-xs-6 dashboard-card-link" style="text-decoration:none; color:inherit;">
            <div class="dashboard-card">
                <div class="card-content">
                    <p>Paket</p>
                    <h2><?= $paket; ?></h2>
                </div>
                <div class="card-icon">
                    <i class="fa fa-send"></i>
                </div>
            </div>
        </a>

        <a href="?page=data-pelanggan" class="col-lg-3 col-xs-6 dashboard-card-link" style="text-decoration:none; color:inherit;">
            <div class="dashboard-card">
                <div class="card-content">
                    <p>Pelanggan</p>
                    <h2><?= $huni; ?></h2>
                </div>
                <div class="card-icon">
                    <i class="fa fa-users"></i>
                </div>
            </div>
        </a>

        <a href="?page=buka-tagihan" class="col-lg-3 col-xs-6 dashboard-card-link" style="text-decoration:none; color:inherit;">
            <div class="dashboard-card">
                <div class="card-content">
                    <p>Belum Bayar</p>
                    <h2><?= $tagih; ?></h2>
                </div>
                <div class="card-icon">
                    <i class="fa fa-bell-o" style="color:#ef4444;"></i>
                </div>
            </div>
        </a>

        <a href="?page=lunas-tagihan" class="col-lg-3 col-xs-6 dashboard-card-link" style="text-decoration:none; color:inherit;">
            <div class="dashboard-card">
                <div class="card-content">
                    <p>Lunas</p>
                    <h2><?= $lunas; ?></h2>
                </div>
                <div class="card-icon">
                    <i class="fa fa-check-circle" style="color:#10b981;"></i>
                </div>
            </div>
        </a>
    </div>
</section>