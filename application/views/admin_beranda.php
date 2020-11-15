  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-12 col-12">
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h5><i class="icon fa fa-check"></i> Info!</h5>
              Selamat Datang Di halaman Admin.
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box">
              <div class="inner">
                <h3><?= $counts['guru'] ?></h3>
                <p>Guru</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="data-guru" class="small-box-footer text-primary">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box">
              <div class="inner">
                <h3><?= $counts['siswa'] ?></h3>
                <p>Siswa</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="data-siswa" class="small-box-footer text-primary">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box">
              <div class="inner">
                <h3><?= $counts['kelas'] ?></h3>
                <p>Kelas</p>
              </div>
              <div class="icon">
                <i class="ionXXX ion-person-addXXX fa fa-graduation-cap"></i>
              </div>
              <a href="kelas" class="small-box-footer text-primary">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box">
              <div class="inner">
                <h3><?= $counts['pelajaran'] ?></h3>
                <p>Pelajaran</p>
              </div>
              <div class="icon">
                <i class="ionXXX ion-person-addXXX fa fa-graduation-cap"></i>
              </div>
              <a href="pelajaran" class="small-box-footer text-primary">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->