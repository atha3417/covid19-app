<?php 
date_default_timezone_set('Asia/Jakarta'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Data</li>
              <li class="breadcrumb-item active"><a href="">Nasional</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?= $nasional[0]['positif']; ?></h3>
                        <p>Positif</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-fw fa-user-plus"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?= $nasional[0]['sembuh']; ?></h3>
                        <p>Sembuh</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-fw fa-smile"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?= $nasional[0]['meninggal']; ?></h3>
                        <p>Meninggal</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-fw fa-skull-crossbones"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h5><?= date('d/m/Y H:i:s'); ?></h5>
                        <p>Last Updated</p>
                        <smal>&nbsp;</smal>
                    </div>
                    <div class="icon">
                        <i class="fas fa-fw fa-calendar-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="card">
      <div class="card-header" style="margin: 0 auto !important;">
        <h3 class="card-title">Data di ambil dari <code><a href="https://kawalcorona.com" target="_blank">kawalcorona.com</a></code></h3>
      </div>
      <div style="width: 1300px; margin-left: 25px;" class="table-responsive">
          <table class="table table-hover table-bordered" id="dataTable">
              <thead>
                  <tr class="text-center">
                      <th>No. </th>
                      <th>Kode Provinsi</th>
                      <th>Provinsi</th>
                      <th>Positif</th>
                      <th>Sembuh</th>
                      <th>Meninggal</th>
                  </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach ($prov as $key => $value) : ?>
                    <tr class="text-center">
                        <td><?= $no++; ?></td>
                        <td><?= $value['attributes']['Kode_Provi'] === null ? 0 : $value['attributes']['Kode_Provi']; ?></td>
                        <td><?= $value['attributes']['Provinsi'] === null ? 0 : $value['attributes']['Provinsi']; ?></td>
                        <td><?= $value['attributes']['Kasus_Posi'] === null ? 0 : $value['attributes']['Kasus_Posi']; ?></td>
                        <td><?= $value['attributes']['Kasus_Semb'] === null ? 0 : $value['attributes']['Kasus_Semb']; ?></td>
                        <td><?= $value['attributes']['Kasus_Meni'] === null ? 0 : $value['attributes']['Kasus_Meni']; ?></td>
                    </tr>
                <?php endforeach; ?>
              </tbody>
          </table>
      </div>
    </div>


<iframe width="727" height="409" src="https://www.youtube.com/embed/DA1OQh0XBkE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>