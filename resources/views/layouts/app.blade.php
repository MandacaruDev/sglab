
<?php

#chama o arquivo de configuração com o banco

require_once '../connect.php';
?>

<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.7 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.5/css/AdminLTE.min.css">
		<!-- AdminLTE Skins. Choose a skin from the css/skins
		folder instead of downloading all of them to reduce the load. -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.5/css/skins/_all-skins.min.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/jquery.mask.min.js"></script>


    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                   
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>


                    <ul class="nav navbar-nav ">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                           
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Cadastrar <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                    
                                    <li><a href="{{ url('/siem') }}"><i class="fa glyphicon glyphicon-modal-window"></i>Siem</a></li>
                                    <li><a href="{{ url('/escola') }}"><i class="fa glyphicon glyphicon-home"></i>Escola</a></li>
                                    <li><a href="{{ url('/funcionario') }}"><i class="fa glyphicon glyphicon-user"></i>Funcionário</a></li>
                                    <li><a href="{{ url('/ocupacao') }}"><i class="fa glyphicon glyphicon-cog"></i>Ocupação</a></li>
                                    <li><a href="{{ url('/pessoa') }}"><i class="fa glyphicon glyphicon-user"></i>Pessoa</a></li>

                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>

 <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>


                    <ul class="nav navbar-nav ">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                           
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Listas <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                    
									<li><a data-toggle="modal" href="#"><i class="fa glyphicon glyphicon-home"></i>Lista Escolas</a></li>
									<li><a data-toggle="modal" href="#funcionario"><i class="fa glyphicon glyphicon-user"></i>Lista Funcionários</a></li>
                                    <li><a href="{{ url('/funcionario') }}"><i class="fa glyphicon glyphicon-hdd"></i>Lista Laboratórios</a></li>
                                    
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>                    


<div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>


                    <ul class="nav navbar-nav ">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                           
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Perfis <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                    
                                    <li><a href="{{ url('/siem') }}"><i class="fa glyphicon glyphicon-home"></i>Perfil Escolas</a></li>
                                    <li><a href="{{ url('/escola') }}"><i class="fa glyphicon glyphicon-user"></i>Perfil Funcionários</a></li>
                                    <li><a href="{{ url('/funcionario') }}"><i class="fa glyphicon glyphicon-hdd"></i>Perfil Laboratórios</a></li>
                                   

                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->

                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())

                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>

                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa glyphicon glyphicon-log-out"></i>Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>

                            
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

                        @yield('content')
    </div>

    <!-- Scripts -->
<script src="/js/app.js"></script>

    <!-- funcionarios -->
    <!-- funcionarios -->
    <!-- funcionarios -->
    <!-- funcionarios -->
    <!-- funcionarios -->


<div class="modal fade" id="funcionario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Listar Funcionários</h4>
      </div>
      <div class="modal-body">
        <?php

#Seleciona dados da Tabela siem
 try{
    $sql2 ='SELECT * FROM siems;';
    $stmt2 = $conn->prepare($sql2);
    $stmt2 ->execute();
    $data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e2){
    echo 'ERROR: ' . $e2->getMessage();
}

?>


<?php

#Seleciona dados da Tabela Ocupação
 try{
    $sql ='SELECT * FROM ocupacaos;';
    $stmt = $conn->prepare($sql);
    $stmt ->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    echo 'ERROR: ' . $e->getMessage();
}

?>




<form name="funcionarios" method='post' action='{{url("funcionario/reportfuncionario")}}'>
      <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

<table align="center" width="500px" border="0" style="border-collapse:collapse" cellpadding="5">

<tr>
<td align="center">
<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
<label >Selecione uma Ocupação:</label></p>
<select name="ocupacao" id="select1"> 
 	<option value="ocupacao_id">Todas as Ocupações Cadastradas</option>

<?php foreach($data as $row) : ?> 
    <option value="<?php echo $row['id']; ?>"><?php echo $row['nome']; ?></option> 
<?php endforeach ?> 
</select>
</div></div></div>
<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5 align="center" class="panel-title">
        <a  data-toggle="collapse" href="#collapsef">MAIS FILTROS</a>
      </h5>
    </div>
    <div id="collapsef" class="panel-collapse collapse">
      <div class="panel-body">

                <div class="panel-group">
                <div class="panel-heading">
                <label >Tipo de Vínculo:</label></p>
                <select name="vinculo" id="select2"> 
                    <option value="vinculo">Todos os Vínculos</option>
                    <option value="'CONCURSADO'">CONCURSADO</option>
                    <option value="'EFETIVO'">EFETIVO</option>
                    <option value="'CONTRATADO'">CONTRATADO</option>
                    <option value="'TEMPORARIO'">TEMPORARIO</option>
                    <option value="'REDA'">REDA</option>
                </select>
</p>
                <label >Selecione uma Escola:</label></p>
                <select name="escola" id="select3"> 
                    <option value="siem_id">Todas as Escolas Cadastradas</option>

                <?php foreach($data2 as $row2) : ?> 
                    <option value="<?php echo $row2['id']; ?>"><?php echo $row2['nome']; ?></option> 
                <?php endforeach ?> 
                </select>

</div></div></div>

                </table>
                <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" >Cancelar</button>
                            <button type="submit" class="btn btn-primary">Gerar Listagem</button>
                        </div>
                        </div>
                </form>

                        </div>
                        

    </div>
  </div>
</div>


<!-- FIM Funcionário -->
<!-- FIM Funcionário -->
<!-- FIM Funcionário -->
<!-- FIM Funcionário -->
<!-- FIM Funcionário -->






</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script> var baseURL = "{{URL::to('/')}}"</script>
<script src = "{{ URL::asset('js/AjaxisBootstrap.js')}}"></script>
<script src = "{{ URL::asset('js/scaffold-interface-js/customA.js')}}"></script>








	<!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog -->
	<!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog -->
	<!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog -->
	<!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog -->
	<!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog -->
	<!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog -->
	<!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog -->
	<!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog -->
	


	<!-- modal form dialog -->
	<div class="modal hide fade" id="funcionarios">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">&times;</a>
			<h3>
				<i class="icon-th-list"></i> Relatório Funcionários
				
			</h3>
		</div>
		<div class="modal-body">

<?php

#Seleciona dados da Tabela siem
 try{
    $sql2 ='SELECT * FROM siem;';
    $stmt2 = $conn->prepare($sql2);
    $stmt2 ->execute();
    $data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e2){
    echo 'ERROR: ' . $e2->getMessage();
}

?>


<?php

#Seleciona dados da Tabela Ocupação
 try{
    $sql ='SELECT * FROM ocupacao;';
    $stmt = $conn->prepare($sql);
    $stmt ->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    echo 'ERROR: ' . $e->getMessage();
}

?>





<form name="ocupacao" method="post" action="../Reporter/phpreport/ReportFuncionarios.php">
<table align="center" width="500px" border="0" style="border-collapse:collapse" cellpadding=5>
<tr>

<td align="center">
<label >Selecione uma Ocupação:</label>
<select name="ocupacao" id="ocupacao"> 
 	<option value="o_id">Todos</option>

<?php foreach($data as $row) : ?> 
    <option value="<?php echo $row['o_id']; ?>"><?php echo $row['o_nome']; ?></option> 
<?php endforeach ?> 
</select>
 
<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5 align="center" class="panel-title">
        <a  data-toggle="collapse" href="#collapsef">MAIS FILTROS</a>
      </h5>
    </div>
    <div id="collapsef" class="panel-collapse collapse">
      <div class="panel-body">


<label >Tipo de Vínculo:</label>
<select name="vinculo" id="vinculo"> 
 	<option value="f_vinculo">Todos</option>
 	<option value="'Concursado'">Concursado</option>
 	<option value="'Contratado'">Contratado</option>
 	<option value="'Temporário'">Temporário</option>
 	<option value="'REDA'">REDA</option>
</select>

<label >Selecione uma Escola:</label>
<select name="escola" id="escola"> 
 	<option value="s_id">Todos</option>

<?php foreach($data2 as $row2) : ?> 
    <option value="<?php echo $row2['s_id']; ?>"><?php echo $row2['s_nome']; ?></option> 
<?php endforeach ?> 
</select>

  </td>
 </tr>

</table>
<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancelar</button>
			<button type="submit" class="btn btn-primary">Gerar Relatório</button>
		</div>
		</div>
</form>

		</div>
		
	</div>

        
<!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog -->
<!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog -->
<!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog -->       
        
        <!-- modal Lista Escolas -->
	<div class="modal hide fade" id="escolas">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">&times;</a>
			<h3>
				<i class="icon-th-list"></i> Relatório Escolas
				
			</h3>
		</div>
		<div class="modal-body">

<form name="escola" method="post" action="../Reporter/phpreport/ReportEscolas.php">
<table align="center" width="500px" border="0" style="border-collapse:collapse" cellpadding=5>
<tr>

<td align="center">
<label >Selecione um Distrito:</label>
<select name="distrito" id="distrito"> 
 	<option value="e_distrito">Todos</option>
 	<option value="'ABÓBORA'">ABÓBORA</option>
 	<option value="'ITAMOTINGA'">ITAMOTINGA</option>
 	<option value="'JUNCO'">JUNCO</option>
 	<option value="'JUREMAL'">JUREMAL</option>
 	<option value="'MANDACARU'">MANDACARU</option>
 	<option value="'MANIÇOBA'">MANIÇOBA</option>
 	<option value="'MASSAROCA'">MASSAROCA</option>
 	<option value="'PINHÕES'">PINHÕES</option>
 	<option value="'SEDE'">SEDE</option>
</select>

<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5 align="center" class="panel-title">
        <a  data-toggle="collapse" href="#collapse1">MAIS FILTROS</a>
      </h5>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">

<label >Possui Articulador?</label>
<select name="articulador" id="articulador"> 
 	<option value="e_possui_analista">Todos</option>
 	<option value="'SIM'">SIM</option>
 	<option value="'NÃO'">NÃO</option>
</select>
 
<label >Possui Laboratório?</label>
<select name="lab" id="lab"> 
 	<option value="e_possui_lab">Todos</option>
 	<option value="'SIM'">SIM</option>
 	<option value="'NÃO'">NÃO</option>
</select>

<label >Possui Internet?</label>
<select name="internet" id="internet"> 
 	<option value="e_possui_internet_escola">Todos</option>
 	<option value="'SIM'">SIM</option>
 	<option value="'NÃO'">NÃO</option>
</select>

					</div>

  </td>
 </tr>

</table>
<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancelar</button>
			<button type="submit" class="btn btn-primary">Gerar Relatório</button>
		</div>
</form>

		</div>
		
	</div>
    
    <!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog -->
<!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog -->
<!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog --><!-- modal edit dialog -->       
        
        <!-- modal form dialog Lista de LABORATÓRIOS -->
	<div class="modal hide fade" id="laboratorios">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">&times;</a>
			<h3>
				<i class="icon-th-list"></i> Relatório de Laboratórios
				
			</h3>
		</div>
		<div class="modal-body">
<?php

#Seleciona dados da Tabela siem
 try{
    $sql ='SELECT * FROM siem;';
    $stmt = $conn->prepare($sql);
    $stmt ->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    echo 'ERROR: ' . $e->getMessage();
}

?>
<form name="siem" method="post" action="libs/Reporter/phpreport/ReportLaboratorios.php">
<table align="center" width="500px" border="0" style="border-collapse:collapse" cellpadding=5>
<tr>

<td align="center">

<label >Selecione um Distrito:</label>
<select name="distrito" id="distrito"> 
 	<option value="e_distrito">Todos</option>
 	<option value="'ABÓBORA'">ABÓBORA</option>
 	<option value="'ITAMOTINGA'">ITAMOTINGA</option>
 	<option value="'JUNCO'">JUNCO</option>
  	<option value="'JUREMAL'">JUREMAL</option>
 	<option value="'MANDACARU'">MANDACARU</option>
 	<option value="'MANIÇOBA'">MANIÇOBA</option>
 	<option value="'MASSAROCA'">MASSAROCA</option>
 	<option value="'PINHÕES'">PINHÕES</option>
 	<option value="'SEDE'">SEDE</option>
</select>

<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5 align="center" class="panel-title">
        <a  data-toggle="collapse" href="#collapsel">MAIS FILTROS</a>
      </h5>
    </div>
    <div id="collapsel" class="panel-collapse collapse">
      <div class="panel-body">

<label >Selecione uma Escola:</label>
<select name="escola" id="escola"> 
 	<option value="s_id">Todos</option>

<?php foreach($data as $row) : ?> 
    <option value="<?php echo $row['s_id']; ?>"><?php echo $row['s_nome']; ?></option> 
<?php endforeach ?> 
</select>



<label >Possui Articulador?</label>
<select name="articulador" id="articulador"> 
 	<option value="e_possui_analista">Todos</option>
 	<option value="'SIM'">SIM</option>
 	<option value="'NÃO'">NÃO</option>
</select>

<label >Possui Internet?</label>
<select name="internet" id="internet"> 
 	<option value="e_possui_internet_lab">Todos</option>
 	<option value="'SIM'">SIM</option>
 	<option value="'NÃO'">NÃO</option>
</select>


					</div>

  </td>
 </tr>

</table>
<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancelar</button>
			<button type="submit" class="btn btn-primary">Gerar Relatório</button>
		</div>
</form>

		</div>
		
	</div>
    
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->


	<!-- ESCOLA --> 	<!-- ESCOLA --> 	<!-- ESCOLA -->	<!-- ESCOLA -->




	<!-- modal form dialog -->
	<div class="modal hide fade" id="perfilescolas">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">&times;</a>
			<h3>
				<i class="icon-th-list"></i> Perfil Escolas
				
			</h3>
		</div>
		<div class="modal-body">

<?php

#Seleciona dados da Tabela siem
 try{
    $sql2 ='SELECT * FROM siem;';
    $stmt2 = $conn->prepare($sql2);
    $stmt2 ->execute();
    $data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e2){
    echo 'ERROR: ' . $e2->getMessage();
}

?>


<form name="escola" method="post" action="libs/Reporter/phpreport/PerfilEscolas.php">
<table align="center" width="500px" border="0" style="border-collapse:collapse" cellpadding=5>
<tr>

<td align="center">

 
<label >Selecione uma Escola:</label>
<select name="escola" id="escola"> 
 	<option value="s_id">Todos</option>

<?php foreach($data2 as $row2) : ?> 
    <option value="<?php echo $row2['s_id']; ?>"><?php echo $row2['s_nome']; ?></option> 
<?php endforeach ?> 
</select>

  </td>
 </tr>

</table>
<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancelar</button>
			<button type="submit" class="btn btn-primary">Gerar Perfil</button>
		</div>
		</div>
</form>


	<!-- modal form dialog -->
	<div class="modal hide fade" id="perfilescolas">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">&times;</a>
			<h3>
				<i class="icon-th-list"></i> Perfil Escolas
				
			</h3>
		</div>
		<div class="modal-body">

<?php

#Seleciona dados da Tabela siem
 try{
    $sql2 ='SELECT * FROM siem;';
    $stmt2 = $conn->prepare($sql2);
    $stmt2 ->execute();
    $data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e2){
    echo 'ERROR: ' . $e2->getMessage();
}

?>


<form name="escola" method="post" action="libs/Reporter/phpreport/PerfilEscolas.php">
<table align="center" width="500px" border="0" style="border-collapse:collapse" cellpadding=5>
<tr>

<td align="center">

 
<label >Selecione uma Escola:</label>
<select name="escola" id="escola"> 
 	<option value="s_id">Todos</option>

<?php foreach($data2 as $row2) : ?> 
    <option value="<?php echo $row2['s_id']; ?>"><?php echo $row2['s_nome']; ?></option> 
<?php endforeach ?> 
</select>

  </td>
 </tr>

</table>
<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancelar</button>
			<button type="submit" class="btn btn-primary">Gerar Perfil</button>
		</div>
		</div>
</form>

		</div>
		
	</div>

		</div>
		
	</div>


	<!-- FUNCIONARIOS --> 	<!-- FUNCIONARIOS --> 	<!-- FUNCIONARIOS -->	<!-- FUNCIONARIOS -->
	<!-- FUNCIONARIOS --> 	<!-- FUNCIONARIOS --> 	<!-- FUNCIONARIOS -->	<!-- FUNCIONARIOS -->




	<!-- modal form dialog -->
	<div class="modal hide fade" id="perfilfuncionarios">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">&times;</a>
			<h3>
				<i class="icon-th-list"></i> Perfil Funcionarios
				
			</h3>
		</div>
		<div class="modal-body">

<?php

#Seleciona dados da Tabela PESSOA
 try{
    $sql2 ='SELECT * FROM pessoa order by p_nome
	;';
    $stmt2 = $conn->prepare($sql2);	
    $stmt2 ->execute();
    $data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e2){
    echo 'ERROR: ' . $e2->getMessage();
}

?>


<form name="funcionario" method="post" action="libs/Reporter/phpreport/PerfilFuncionarios.php">
<table align="center" width="500px" border="0" style="border-collapse:collapse" cellpadding=5>
<tr>

<td align="center">

 
<label >Selecione um Funcionário:</label>
<select name="funcionario" id="funcionario"> 
 	<option value="p_id">Todos</option>

<?php foreach($data2 as $row2) : ?> 
    <option value="<?php echo $row2['p_id']; ?>"><?php echo $row2['p_nome']; ?></option> 
<?php endforeach ?> 
</select>

  </td>
 </tr>

</table>
<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancelar</button>
			<button type="submit" class="btn btn-primary">Gerar Perfil</button>
		</div>
		</div>
</form>

		</div>
		
	</div>




	<!-- modal form dialog -->
	<!-- modal form dialog -->
	<!-- modal form dialog -->
	<!-- modal form dialog -->
	<!-- modal form dialog -->
	<!-- modal form dialog -->

	<div class="modal hide fade" id="perfillaboratorios">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">&times;</a>
			<h3>
				<i class="icon-th-list"></i> Perfil Laboratorios
				
			</h3>
		</div>
		<div class="modal-body">

<?php

#Seleciona dados da Tabela siem
 try{
    $sql2 ='SELECT * FROM siem;';
    $stmt2 = $conn->prepare($sql2);
    $stmt2 ->execute();
    $data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e2){
    echo 'ERROR: ' . $e2->getMessage();
}

?>


<form name="escola" method="post" action="libs/Reporter/phpreport/PerfilLaboratorios.php">
<table align="center" width="500px" border="0" style="border-collapse:collapse" cellpadding=5>
<tr>

<td align="center">

 
<label >Selecione uma Escola:</label>
<select name="escola" id="escola"> 
 	<option value="s_id">Todos</option>

<?php foreach($data2 as $row2) : ?> 
    <option value="<?php echo $row2['s_id']; ?>"><?php echo $row2['s_nome']; ?></option> 
<?php endforeach ?> 
</select>

  </td>
 </tr>

</table>
<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancelar</button>
			<button type="submit" class="btn btn-primary">Gerar Perfil</button>
		</div>
		</div>
</form>






</html>

