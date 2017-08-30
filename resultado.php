<!DOCTYPE html>
  <html>
    <head>
      <title>JNET - Qualidade em Internet</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import Google Font-->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <!--DEMAIS ESTILOS-->
      <link type="text/css" rel="stylesheet" href="css/custom.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
    </head>

<body>
    
    <?php
    
    //SESSÃO DE TRATAMENTO DO FORMULÁRIO E RESULTADO DO PLANO IDEAL AO CLIENTE.
    
    $grupo_equipamento = $_POST['g_equip'];
    $grupo_servico = $_POST['g_serv'];
    $g_pessoas = $_POST['g_pessoas'];
        
        $valor_equip = 0;
        foreach ($grupo_equipamento as $g_equip => $valor_eq){
            $valor_equip += $valor_eq;
        }
    
    
        $valor_servico = 0;
        foreach ($grupo_servico as $g_serv => $valor_serv){
            $valor_servico += $valor_serv;
        }
        

        echo "<br>Pessoas: ".$g_pessoas;
        echo "<br>Equipamento: ".$valor_equip;
        echo "<br>Serviço: ".$valor_servico;


    ?>
    
    <div class="row center">
        <div class="container"><img src="img/logo.png" class="responsive-img"></div>
    </div>
    
    <div class="row center indigo darken-4 padding20">
        <h6 class="font-weight500 white-text letter-spacing1">SELECIONE SEU PLANO DE FORMA SIMPLES E DESCOMPLICADA ;)</h6>
    </div>

    
    
    <div class="row padding20">
        <div class="container">
            <p class="center light-blue-text text-darken-4 font-size-13 font-weight700">&copy; 2017 JNET Provedores de Internet.</p>
        </div>
    </div>
    
    
    
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>
    
</body>
</html>