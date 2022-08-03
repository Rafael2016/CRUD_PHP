<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Cadastro de Usuário</h3>
                
            <?php if($Sessao::retornaMensagem()){ ?>
                <div class="alert alert-warning" role="alert"><?php echo $Sessao::retornaMensagem(); ?></div>
            <?php  } ?>

            <form action="http://<?php echo APP_HOST; ?>/usuario/salvar" method="post" id="form_cadastro">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control"  name="nome" placeholder="Seu nome" value="<?php echo $Sessao::retornaValorFormulario('nome'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" class="form-control"  name="login" placeholder="Seu login" value="<?php echo $Sessao::retornaValorFormulario('login'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control"  name="password" placeholder="Sua Senha" value="<?php echo $Sessao::retornaValorFormulario('password'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" placeholder="Seu @E-mail" value="<?php echo $Sessao::retornaValorFormulario('email'); ?>" required>
                </div>
                
                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            </form>
        </div>
        <div class=" col-md-3"></div>
    </div>
</div>