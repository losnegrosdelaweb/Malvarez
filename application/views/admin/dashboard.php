  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">MALVAREZ - Servicios Inmboliarios</h1>
          </div><!-- /.col -->
          <!--
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>
        -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">

      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>0</h3>

                <p>Alquileres Activos</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <!--a href="#" class="small-box-footer">Más Info <i class="fas fa-arrow-circle-right"></i></a-->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>0</h3>

                <p>Ventas Activas</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>0</h3>

                <p>Número de Visitas</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>0</h3>

                <p>Consultas de Usuarios</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title" style="font-weight: bold;">Últimas Consultas</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="listadoConsultas">
                    <thead>
                      <tr>     
                      <th scope="col">Nombre</th>
                      <th scope="col">Email</th>
                      <th scope="col">Teléfono</th>
                      <th scope="col">Fecha</th>
                      <th scope="col">Id Prop.</th>
                      <th scope="col">Mensaje</th>
                      <th scope="col"><center>Estado</center></th>
                      <th scope="col"><center>Acciones</center></th>
                      </tr>
                    </thead>
                    <tbody>                
                      <?php           
                       foreach ($listadoConsulta as $key => $value) {
                         if($value->activo==1){
                           $style = "color: black;";
                         }elseif($value->activo==0){
                           $style = "color: darkgray;";
                         }
                        echo "<tr style=\"".$style."\">";                        
                        echo "<td>".$value->nombre."</td>";
                        echo "<td>".$value->email."</td>";
                        echo "<td>".$value->tel."</td>";
                        echo "<td>".$value->fecha."</td>";
                        echo "<td>".$value->id_operacion."</td>";
                        echo "<td>".$value->mensaje."</td>";      
                                   if($value->activo==1){
                                      echo '<td><center><span class="badge badge-warning">Pendiente</span></center></td>';
                                    }elseif($value->activo==0){
                                      echo '<td><center><span class="badge badge-success">Contestado</span></center></center></td>';
                                    }
                                  echo '<td><center>';
                                    /*<button type="button" onclick="edit('.$value->id_consulta.')" class="btn btn-info btn-sm pop" data-toggle="popover">
                                      <i class="fas fa-search"></i>
                                    </button>
                                    &nbsp;';*/
                                    if($value->activo==1){
                                      echo '<button type="button" class="btn btn-danger btn-sm" onclick="delet('.$value->id_consulta.','.$value->activo.')">
                                              <i class="fas fa-trash-alt"></i>
                                            </button>';
                                    }elseif($value->activo==0){
                                      echo '<button type="button" class="btn btn-success btn-sm" onclick="delet('.$value->id_consulta.','.$value->activo.')">
                                              <i class="fas fa-check"></i>
                                            </button>';
                                    }
                                  echo '</center></td>';
                        echo '</tr>';
                          }
                        ?>            
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <script>
    $(document).ready(function () {
        $('#listadoConsultas').DataTable({
            "language": {
              'url': '<?=base_url('../../assets/js/arg.json')?>'            
            }
        });
    });

    function edit(id){
      $.ajax({
        url: '<?=site_url()?>/../../getConsulta/'+id,
        type: "GET",
        success: function(respuesta) {
        console.log(respuesta);
        $('#email').val(respuesta.email);
        $('#nombre').val(respuesta.nombre);
        $('#tel').val(respuesta.tel);
        $('#exampleModal').modal('show');
        },
        error: function() {
              console.log("No se ha podido obtener la información");
          }
      });
    }


    function delet(id, activo){
      $.ajax({
        url: '<?=site_url()?>/../../putEstadoConsulta/'+id,
        type: "POST",
        data: {activo : activo},
        success: function(respuesta) {
          if(respuesta==1){
             location.reload();
          }
        },
        error: function() {
              console.log("No se ha podido obtener la información");
          }
      });
    }

  </script>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 - MALVAREZ Servicios Inmobiliarios.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

