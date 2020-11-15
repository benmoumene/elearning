  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>/themes/adminlte/adminlte.io/themes/dev/adminlte/plugins/datatables/dataTables.bootstrap4.css">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Informasi Tugas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/beranda">Beranda</a></li>
              <li class="breadcrumb-item active">Informasi Tugas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- <div class="card-header"> -->
              <!-- <h3 class="card-title">Daftar Informasi Kelas</h3> -->
            <!-- </div> -->
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Tugas</th>
                  <th>Nama Materi</th>
                  <th>Pelajaran</th>
                  <th>Status</th>
                  <th>Tanggal Pengerjaan</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  foreach ($rows as $key => $value) {
                    $value->status_soal = NULL;
                    if ( $value->status == 'true' ) {
                      $value->status_label = '<span class="badge badge-pill badge-info">Sudah Dikerjakan</span>';
                      $value->action_html = "
                        <a target='_blank' class='dropdown-item' href='".base_url('src/materi/'.$value->materi_file)."'>Download Materi</a>
                      ";

                    } elseif ( $value->status == 'false' ) {
                      if ( ( strtotime(date('Y-m-d')) < strtotime($value->start) ) ) {
                        $value->status_soal = 'BELUM_WAKTUNYA';
                        $value->status_label = '<span class="badge badge-pill badge-info">Belum Waktunya Mengerjakan</span>';
                        $value->action_html = "
                          <a target='_blank' class='dropdown-item' href='".base_url('src/materi/'.$value->materi_file)."'>Download Materi</a>
                        ";
                      }

                      if ( ( strtotime(date('Y-m-d')) > strtotime($value->end) ) ) {
                        $value->status_soal = 'WAKTU_HABIS';
                        $value->status_label = '<span class="badge badge-pill badge-danger">Waktu Habis</span>';
                        $value->action_html = "
                          <a target='_blank' class='dropdown-item' href='".base_url('src/materi/'.$value->materi_file)."'>Download Materi</a>
                        ";
                      }
                      
                      if ( (strtotime(date('Y-m-d')) >= strtotime($value->start)) && (strtotime(date('Y-m-d')) <= strtotime($value->start)) ) {
                        $value->status_soal = 'SUDAH_WAKTUNYA';
                        $value->status_label = '<span class="badge badge-pill badge-warning">Belum Dikerjakan</span>';
                        $value->action_html = "
                          <a target='_blank' class='dropdown-item' href='".base_url('src/upload/'.$value->soal_file)."'>Download Tugas</a>
                          <a target='_blank' class='dropdown-item' href='".base_url('src/materi/'.$value->materi_file)."'>Download Materi</a>
                          <a class='dropdown-item answer' href='".base_url('admin/form-upload-jawaban/'.$value->soal_id)."'>Upload Jawaban</a>
                        ";
                      }
                      
                    }

                    echo "
                      <tr>
                        <td>$value->nama_soal</td>
                        <td>$value->judul_materi</td>
                        <td>$value->pelajaran_nama</td>
                        <td>$value->status_label</td>
                        <td>".tgl_indo($value->start).' s.d '.tgl_indo($value->end)."</td>
                        <td>
                          <div class='btn-group'>
                            <button type='button' class='btn btn-default'>Action</button>
                            <button type='button' class='btn btn-default dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                              <span class='caret'></span>
                              <span class='sr-only'>Toggle Dropdown</span>
                            </button>
                            <div class='dropdown-menu' role='menu' x-placement='top-start' style='position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(67px, -165px, 0px);'>
                              $value->action_html
                            </div>
                          </div>
                        </td> 
                      </tr>
                    ";
                  }
                ?>
                
                
                </tbody>
                <!-- <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot> -->
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <!-- /.modal -->
<!-- DataTables -->
<script src="<?php echo base_url()?>/themes/adminlte/adminlte.io/themes/dev/adminlte/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>/themes/adminlte/adminlte.io/themes/dev/adminlte/plugins/datatables/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });

  $('.answer').on('click', function(e){
    e.preventDefault(); 
    $.get( $(this).attr('href'), function(data){
      $('#myModal .modal-title').html('Upload Jawaban');
      $('#myModal .modal-body').html(data);
      $('#myModal').modal('show');
    } ,'html');

  });

  $(document).on('submit','form#uploadJawaban',function(e){
    e.preventDefault();    
    var formData = new FormData(this);

    $.ajax({
        url: $(this).attr("action"),
        type: 'POST',
        data: formData,
        success: function (data) {
          // console.log(data)
            alert( (data.stats=='1') ? data.msg : data.msg )
            location.reload()
        },
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json'
    });
  });
</script>
