
<?php

#chama o arquivo de configuração com o banco

require_once '../connect.php';
?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Pessoa</div>
                <div class="panel-body">
            <form method = 'get' action = '{{url("pessoa")}}'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            <br>
     
            <form method = 'POST' action = '{{url("pessoa")}}/{{$pessoa->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

  
<!-- campo verifica usuário logado, identificando quem está inserindo registro -->
<!-- campo verifica usuário logado, identificando quem está inserindo registro -->
<!-- campo verifica usuário logado, identificando quem está inserindo registro -->
<!-- campo verifica usuário logado, identificando quem está inserindo registro -->


<?php

                        $usuario_logado = Auth::user()->id;
                        $vinculo = Auth::user()->name;



#Seleciona dados da Tabela User
 try{
    $sql2 ='SELECT * FROM users;';
    $stmt2 = $conn->prepare($sql2);
    $stmt2 ->execute();
    $data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e2){
    echo 'ERROR: ' . $e2->getMessage();
}



                      if (Auth::user()->name == "Admin")  
                      
                      { ?>       

                        <div class="form-group">
                        <div class="row">
                            <div align="center" class="col-md-12">
                            <label for="vinculo" >Víncular registro a:</label></br>
<!--<input value= "{{$usuario_logado}}" id="user_id" name = "user_id" type="text" class="form-control">-->
                            <select name="vinculo" id="select14" require> 
                            <option value="">Escolha um usuário/escola para vincular Registro</option>

                            <?php foreach($data2 as $row2) : ?> 
                            <option value="<?php echo $row2['name']; ?>"><?php echo $row2['name']; ?></option> 
                            <?php endforeach ?> 
                            </select>
                            </div> 
                           
                        </div><!--/row-->
                      
                        </div>
                                <div align="center">
                                <button align="center" class = 'btn btn-primary' type ='submit'>Apenas Víncular</button>
                                </div>
                <div class="form-group">
                    <input type = 'hidden' value= "{{$usuario_logado}}" id="user_id" name = "user_id" type="text" class="form-control">
                </div>
                

                    <?php }  else { ?>



                <div class="form-group">
                    <input type = 'hidden' value= "{{$usuario_logado}}" id="user_id" name = "user_id" type="text" class="form-control">
                </div>

                
                <div class="form-group">
                    <input type = 'hidden' value= "{{$vinculo}}" id="vinculo" name = "vinculo" type="text" class="form-control">
                </div>
<?php } ?>

<!-- FIM de campo verifica usuário logado, identificando quem está inserindo registro FIM -->
<!-- FIM de campo verifica usuário logado, identificando quem está inserindo registro FIM -->
<!-- FIM de campo verifica usuário logado, identificando quem está inserindo registro FIM -->
<!-- FIM de campo verifica usuário logado, identificando quem está inserindo registro FIM -->

                <div class="form-group">
               
                    <label for="nome">Nome</label>
                    <input  id="nome" name = "nome" type="text" value= "{{$pessoa->nome}}" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="row">
                <div class="col-md-6">
                    <label for="cep">Cep</label>
                    <input id="cep" name = "cep" type="number" value= "{{$pessoa->cep}}" class="form-control">
                
                </div> 
                          
               
                            <div class="form-group">
                            <div class="col-md-6">
                            <label for="distrito">Distrito</label>
                                <select class="form-control" name="distrito" id="select2" >
                                <option value="{{$pessoa->distrito}}">{{$pessoa->distrito}}</option>
                                <option value="ABÓBORA">ABÓBORA</option>
                                <option value="ITAMOTINGA">ITAMOTINGA</option>
                                <option value="JUNCO">JUNCO</option>
                                <option value="JUREMAL">JUREMAL</option>
                                <option value="MANDACARU">MANDACARU</option>
                                <option value="MANIÇOBA">MANIÇOBA</option>
                                <option value="MASSAROCA">MASSAROCA</option>
                                <option value="PINHÕES">PINHÕES</option>
                                <option value="SEDE">SEDE</option>
                               
                                </select>
                            </div> 
                            </div> 
                            </div><!--/row-->
                            </div> 
                           
                <div class="form-group">
                <div class="row">
                <div class="col-md-6">              
                <label for="bairro">Bairro</label>
                    <input  id="bairro" name = "bairro" type="text" value= "{{$pessoa->bairro}}" class="form-control">
                </div>
               
                
                            <div class="form-group">
                            <div class="col-md-6">                    
                            <label for="logradouro">Logradouro</label>
                    <input id="logradouro" name = "logradouro" type="text" value= "{{$pessoa->logradouro}}" class="form-control">
                </div>
                </div>
                </div>
                </div>
                
                <div class="form-group">
                <div class="row">
                <div class="col-md-6">    
                                    <label for="numero">Numero</label>
                    <input id="numero" name = "numero" type="text" value= "{{$pessoa->numero}}" class="form-control">
                </div>
               
                 
                <div class="form-group">
                <div class="col-md-6">    
                <label for="complemento">Complemento</label>
                    <input id="complemento" name = "complemento" type="text" value= "{{$pessoa->complemento}}" class="form-control">
                </div>
                </div>
                </div>
                </div>
                
                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">    

                    <label for="fone">Fone</label>
                    <input id="fone" name = "fone" type="text" value= "{{$pessoa->fone}}" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6">                
                    <label for="email">Email</label>
                    <input id="email" name = "email" type="email" value= "{{$pessoa->email}}" class="form-control">
                </div>
                </div>
                </div>
                </div>
                

                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">    
                            <label for="cel1">Cel1</label>
                    <input id="cel1" name = "cel1" type="text" value= "{{$pessoa->cel1}}" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6">    
                <label for="cel2">Cel2</label>
                    <input id="cel2" name = "cel2" type="text" value= "{{$pessoa->cel2}}" class="form-control">
                </div>
                </div>
                </div>
                </div>

                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6"> 
                
                    <label for="cpf">cpf</label>
                    <input id="cpf" name = "cpf" type="text" value= "{{$pessoa->cpf}}" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6"> 
                <label for="rg">rg</label>
                    <input id="rg" name = "rg" type="text" value= "{{$pessoa->rg}}" class="form-control">
                </div>
                </div>
                </div>
                </div>

                  
                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6"> 
                                                <label for="nis">nis</label>
                    <input id="nis" name = "nis" type="text" value= "{{$pessoa->nis}}" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6"> 
                
                    <label for="expedicao_rg">expedicao_rg</label>
                    <input id="expedicao_rg" name = "expedicao_rg" type="date" value= "{{$pessoa->expedicao_rg}}" class="form-control">
                </div>
                </div>
                </div>
                </div>
                

                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6"> 
                                                <label for="naturalidade">naturalidade</label>
                    <input id="naturalidade" name = "naturalidade" type="text"  value= "{{$pessoa->naturalidade}}"  class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6"> 

                    <label for="nascionalidade">nascionalidade</label>
                    <input id="nascionalidade" name = "nascionalidade" type="text" value= "{{$pessoa->nascionalidade}}" class="form-control">
                </div>
                </div>
                </div>
                </div>
                
                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6"> 
                                                <label for="escolaridade">escolaridade</label>
                                <select class="form-control" name="escolaridade" id="select2">
                                <option value="{{$pessoa->escolaridade}}">{{$pessoa->escolaridade}}</option>
                                <option value="DOUTORADO">DOUTORADO</option>
                                <option value="MESTRADO">MESTRADO</option>
                                <option value="SUPERIOR">SUPERIOR</option>
                                <option value="MÉDIO">MÉDIO</option>
                                <option value="FUNDAMENTAL">FUNDAMENTAL</option>
                                                              
                                </select>                      
                                </div>
                            
                <div class="form-group">
                <div class="col-md-6"> 
                
                    <label for="data_nascimento">data_nascimento</label>
                    <input id="data_nascimento" name = "data_nascimento" type="date" value= "{{$pessoa->data_nascimento}}" class="form-control">
                </div>
                </div>
                </div>
                </div>
                
                <div class="form-group">
                    <label for="nome_mae">nome_mae</label>
                    <input id="nome_mae" name = "nome_mae" type="text"  value= "{{$pessoa->nome_mae}}"  class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="nome_pai">nome_pai</label>
                    <input id="nome_pai" name = "nome_pai" type="text" value= "{{$pessoa->nome_pai}}" class="form-control">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Atualizar</button>
            </form>
        </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>



<script type="text/javascript">
  jQuery(function($) {
    $("#inep").mask("00000000");
    $("#numero").mask("999999999");
    $("#cep").mask("00.000-000");
    $("#cpf").mask("000.000.000-00");
    $("#rg").mask("00.000.000-00");
    $("#fone").mask("(00) 0000-0000");
    $("#cel1").mask("(00) 00000-0000");
    $("#cel2").mask("(00) 00000-0000");
    
  });
</script>   
@endsection