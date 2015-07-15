 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Daftar Artikel
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Artikel</a></li>
            <li class="active">Daftar Artikel</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <table id="myTable" class="table table-bordered table-hover table-striped">
           <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Gambar</th>
                <th scope="col">Kategori</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <script>
      //Datatables
            $(document).ready(function(){
                $('#myTable').DataTable();
            });
            </script>