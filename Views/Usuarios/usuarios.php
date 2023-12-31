<?php 
  headerAdmin($data); 
  getModal('modalUsuarios',$data);
?> 

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fas fa-user-tag"> </i><?= $data['page_title'] ?>
          <button class="btn btn-primary" type="button" onclick="openModal();"><i class="fas fa-plus-circle"></i>  Nuevo</button>
        </h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa-solid fa-diamond"></i></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/usuarios"><?= $data['page_title'] ?></a></li>
        </ul>
      </div>

          <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="tableUsuarios">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombres</th>
                          <th>Apellidos</th>
                          <th>E-mail</th>
                          <th>Telefono</th>
                          <th>Rol</th>
                          <th>Status</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>

                      <tbody>

                      <tr>
                        <td>1</td>
                        <td>Pancrasio</td>
                        <td>Paniagua</td>
                        <td>paniGOD@gmail.com</td>
                        <td>2727770115</td>
                        <td>ADMIN</td>
                        <td>Activo segun</td>
                        <td></td>
                      </tr>

                      </tbody>

                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

    </main>
<?php footerAdmin($data); ?>