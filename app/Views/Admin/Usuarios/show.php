<?php echo $this->extend('Admin/layout/principal') ?>



<?php echo $this->section('titulo') ?> <?php echo $titulo ?> <?php echo $this->endSection() ?>







<?php echo $this->section('estilos') ?>

<!-- Aqui enviamos para o template principal os estilos -->


<?php echo $this->endSection() ?>






<?php echo $this->section('conteudo') ?>


        	
          <div class="row">

            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                  <div class="card-header bg-primary pb-0 pt-4">
                      
                      <h4 class="card-title text-white"><?php echo esc($titulo) ?></h4>

              </div>

                <div class="card-body">

                <p class="card-text">
                  <span class="font-weight-bold">Nome:</span>
                  <?php echo esc($usuario->nome) ?>
                </p>

                <p class="card-text">
                  <span class="font-weight-bold">E-mail:</span>
                  <?php echo esc($usuario->email) ?>
                </p>

                <p class="card-text">
                  <span class="font-weight-bold">CPF:</span>
                  <?php echo esc($usuario->cpf) ?>
                </p>

                <p class="card-text">
                  <span class="font-weight-bold">Telefone:</span>
                  <?php echo esc($usuario->telefone) ?>
                </p>

                <p class="card-text">
                  <span class="font-weight-bold">Ativo:</span>
                  <?php echo esc($usuario->ativo ? 'Sim' : 'Não') ?>
                </p>

                <p class="card-text">
                  <span class="font-weight-bold">Perfil:</span>
                  <?php echo esc($usuario->is_admin ? 'Administrador' : 'Cliente') ?>
                </p>

                <p class="card-text">
                  <span class="font-weight-bold">Criado:</span>
                  <?php echo $usuario->criado_em->humanize(); ?>
                </p>

                <p class="card-text">
                  <span class="font-weight-bold">Última Atualização:</span>
                  <?php echo $usuario->atualizado_em->humanize(); ?>
                </p>

                
                <div class="mt-4">

                <a href="<?php echo site_url("admin/usuarios/editar/$usuario->id") ?>"><button type="button" class="btn btn-inverse-warning btn-icon" data-toggle="tooltip" data-placement="top" title="Editar Conta">
                <i class="mdi mdi-account-edit"></i></button></a>

                <a href="<?php echo site_url("admin/usuarios/excluir/$usuario->id") ?>"> <button type="button" class="btn btn-inverse-danger btn-icon" data-toggle="tooltip" data-placement="top" title="Excluir Usuário">
                <i class="mdi mdi-delete"></i></button></a>
                
                <a href="<?php echo site_url("admin/usuarios/") ?>"> <button type="button" class="btn btn-inverse-dark btn-icon" data-toggle="tooltip" data-placement="top" title="Voltar para Usuários" >
                <i class="mdi mdi-account-arrow-left"></i></button></a>
                
            </div>

              </div>
            </div>






<?php echo $this->endSection() ?>







<?php echo $this->section('scripts') ?>

<!-- Aqui enviamos para o template principal os scripts -->

<script src="<?php echo site_url('admin/vendors/auto-complete/jquery-ui.js'); ?>"> </script>

<script>

</script>

<?php echo $this->endSection() ?>
