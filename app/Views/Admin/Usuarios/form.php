
<div class="form-row">

    
    <div class="form-group col-md-4">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="<?php echo esc($usuario->nome);  ?>">
    </div>
    
    <div class="form-group col-md-2">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control cpf" name="cpf" id="cpf" placeholder="CPF" value="<?php echo esc($usuario->cpf);  ?>">
    </div>
    
    <div class="form-group col-md-3">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="E-Mail" value="<?php echo esc($usuario->email);  ?>">
    </div>
    
    <div class="form-group col-md-3">
        <label for="telefone">Telefone</label>
        <input type="text" class="form-control sp_celphones" name="telefone" id="telefone" placeholder="Telefone" value="<?php echo esc($usuario->telefone);  ?>">
    </div>

</div>
    
    <div class="form-row">
        

<div class="form-group col-md-3">
        <label for="password">Senha</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="*******" value="">
    </div>

    <div class="form-group col-md-3">
        <label for="confirmation_password">Confirmar Senha</label>
        <input type="password" class="form-control" name="password_confirmation" id="confirmation_password" placeholder="*******" value="">
    </div>
    

    <div class="form-group col-md-2">
        <label for="is_admin">Perfil</label>
        <select class="form-control" name="is_admin">

        <?php if($usuario->id): ?>

        <option value="1" <?php echo($usuario->is_admin ? 'selected' : ''); ?>>Administrador</option>
        <option value="0" <?php echo(!$usuario->is_admin ? 'selected' : ''); ?>>Cliente</option>

        <?php else: ?>

        <option value="1">Administrador</option>
        <option value="0" selected="">Cliente</option>

        <?php endif; ?>

        </select>

        </div>
        
        <div class="form-group col-md-1">
        <label for="ativo">Ativo</label>
        <select class="form-control" name="ativo">

        <?php if($usuario->id): ?>

        <option value="1" <?php echo($usuario->ativo ? 'selected' : ''); ?>>Sim</option>
        <option value="0" <?php echo(!$usuario->ativo ? 'selected' : ''); ?>>Não</option>

        <?php else: ?>

        <option value="1">Sim</option>
        <option value="0" selected="">Não</option>

        <?php endif; ?>

        </select>

        </div>


</div>

     <a href="<?php echo site_url("admin/usuarios/") ?>"> <button type="button" class="btn btn-inverse-success btn-icon" data-toggle="tooltip" data-placement="top" title="Salvar edição" >
     <i class="mdi mdi-content-save"></i></button></a>
     <a href="<?php echo site_url("admin/usuarios/show/$usuario->id") ?>"> <button type="button" class="btn btn-inverse-dark btn-icon" data-toggle="tooltip" data-placement="top" title="Voltar" >
     <i class="mdi mdi-arrow-left-bold-circle-outline"></i></button></a>
