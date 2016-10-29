<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Ocupação</div>
                <div class="panel-body">
            <form method = 'get' action = '<?php echo e(url("ocupacao")); ?>'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            
            <br>
  

            <form method = 'POST' action = '<?php echo e(url("ocupacao")); ?>'>
   
                <input type = 'hidden' name = '_token' value = '<?php echo e(Session::token()); ?>'>
        <!-- campo verifica usuário logado, identificando quem está inserindo registro -->
<?php
                        $usuario_logado = Auth::user()->name;
                        { ?>       

                <div class="form-group">
                    <input type = 'hidden' value= "<?php echo e($usuario_logado); ?>" id="usuario" name = "usuario" type="text" class="form-control">
                </div>

<?php } ?>
        <!-- FIM de campo verifica usuário logado, identificando quem está inserindo registro FIM -->

          
                <div class="form-group">
  
                    <label for="nome">nome</label>
                    <input id="nome" name = "nome" type="text" class="form-control">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Create</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>