<!DOCTYPE html>
  <html>
    <head>
      <title>JNET - Qualidade em Internet</title>
      <meta charset="utf-8"/>
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
    
    <div class="row center">
        <div class="container"><img src="img/logo.png" class="responsive-img"></div>
    </div>
    
    <div class="row center indigo darken-4 padding20">
        <h6 class="font-weight500 white-text letter-spacing1">SELECIONE SEU PLANO DE FORMA SIMPLES E DESCOMPLICADA ;)</h6>
    </div>
    
    <div class="row">
        <div class="container">
            <form action="resultado.php" method="post" name="form_simulador">
             <ul class="collapsible" data-collapsible="expandable">
                <li>
                  <div class="collapsible-header active grey lighten-4 indigo-text text-darken-4 font-size-16 font-weight700"><i class="material-icons">supervisor_account</i>QUANTAS PESSOAS USAM INTERNET NA SUA CASA?</div>
                  <div class="collapsible-body">
                      <div class="row center padding20">
                        <div class="container">
                            <div class="row padding10"><span>QUANTAS PESSOAS USAM INTERNET NA SUA CASA?</span></div>
                            <div class="col s4 m4 l2">
                                <div class="center white padding10 border-jnet indigo-text text-darken-4"><h5 class="font-weight700">1</h5></div>
                                <div class="center padding-top10">&nbsp;&nbsp;
                                  <input type="radio" name="g_pessoas" class="filled-in" value="1" id="p1" />
                                  <label for="p1"></label>
                                </div>
                            </div>
                            <div class="col s4 m4 l2">
                                <div class="center white padding10 border-jnet indigo-text text-darken-4"><h5 class="font-weight700">2</h5></div>
                                <div class="center padding-top10">&nbsp;&nbsp;
                                  <input type="radio" name="g_pessoas" class="filled-in" value="2" id="p2" />
                                  <label for="p2"></label>
                                </div>
                            </div>
                            <div class="col s4 m4 l2">
                                <div class="center white padding10 border-jnet indigo-text text-darken-4"><h5 class="font-weight700">3</h5></div>
                                <div class="center padding-top10">&nbsp;&nbsp;
                                  <input type="radio" name="g_pessoas" class="filled-in" value="3" id="p3" />
                                  <label for="p3"></label>
                                </div>
                            </div>
                            <div class="col s4 m4 l2">
                                <div class="center white padding10 border-jnet indigo-text text-darken-4"><h5 class="font-weight700">4</h5></div>
                                <div class="center padding-top10">&nbsp;&nbsp;
                                  <input type="radio" name="g_pessoas" class="filled-in" value="4" id="p4" />
                                  <label for="p4"></label>
                                </div>
                            </div>
                            <div class="col s4 m4 l2">
                                <div class="center white padding10 border-jnet indigo-text text-darken-4"><h5 class="font-weight700">5</h5></div>
                                <div class="center padding-top10">&nbsp;&nbsp;
                                  <input type="radio" name="g_pessoas" class="filled-in" value="5" id="p5" />
                                  <label for="p5"></label>
                                </div>
                            </div>
                            <div class="col s4 m4 l2">
                                <div class="center white padding10 border-jnet indigo-text text-darken-4"><h5 class="font-weight700">+6</h5></div>
                                <div class="center padding-top10">&nbsp;&nbsp;
                                  <input type="radio" name="g_pessoas" class="filled-in" value="6" id="p6" />
                                  <label for="p6"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </li>
                <li>
                  <div class="collapsible-header grey lighten-3 indigo-text text-darken-4 font-size-16 font-weight700"><i class="material-icons">devices_other</i>QUAIS APARELHOS VOCÊ POSSUI COM ACESSO À INTERNET?</div>
                  <div class="collapsible-body">
                      <div class="row center padding20">
                        <div class="container">
                            <div class="row padding10"><span>QUAIS APARELHOS VOCÊ POSSUI COM ACESSO À INTERNET?</span></div>
                            <div class="col s4 m4 l2">
                                <div class="center"><img src="img/equipamentos/celular.png" class="responsive-img"></div>
                                <div class="center padding-top10">&nbsp;&nbsp;
                                  <input type="checkbox" name="g_equip[]" class="filled-in" value="0.25" id="equip1" />
                                  <label for="equip1" class="font-size-10"></label>
                                </div>
                            </div>
                            <div class="col s4 m4 l2">
                                <div class="center"><img src="img/equipamentos/tablet.png" class="responsive-img"></div>
                                <div class="center padding-top10">&nbsp;&nbsp;
                                  <input type="checkbox" name="g_equip[]" class="filled-in" value="0.25" id="equip2" />
                                  <label for="equip2"></label>
                                </div>
                            </div>
                            <div class="col s4 m4 l2">
                                <div class="center"><img src="img/equipamentos/video-game.png" class="responsive-img"></div>
                                <div class="center padding-top10">&nbsp;&nbsp;
                                  <input type="checkbox" name="g_equip[]" class="filled-in" value="0.25" id="equip3" />
                                  <label for="equip3"></label>
                                </div>
                            </div>
                            <div class="col s4 m4 l2">
                                <div class="center"><img src="img/equipamentos/tv.png" class="responsive-img"></div>
                                <div class="center padding-top10">&nbsp;&nbsp;
                                  <input type="checkbox" name="g_equip[]" class="filled-in" value="1" id="equip4" />
                                  <label for="equip4"></label>
                                </div>
                            </div>
                            <div class="col s4 m4 l2">
                                <div class="center"><img src="img/equipamentos/notebook.png" class="responsive-img"></div>
                                <div class="center padding-top10">&nbsp;&nbsp;
                                  <input type="checkbox" name="g_equip[]" class="filled-in" value="1" id="equip5" />
                                  <label for="equip5"></label>
                                </div>
                            </div>
                            <div class="col s4 m4 l2">
                                <div class="center"><img src="img/equipamentos/pc.png" class="responsive-img"></div>
                                <div class="center padding-top10">&nbsp;&nbsp;
                                  <input type="checkbox" name="g_equip[]" class="filled-in" value="1" id="equip6" />
                                  <label for="equip6"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </li>
                <li>
                  <div class="collapsible-header grey lighten-4 indigo-text text-darken-4 font-size-16 font-weight700"><i class="material-icons">live_tv</i>QUAIS SERVIÇOS VOCÊ MAIS UTILIZA?</div>
                  <div class="collapsible-body">
                      <div class="row center padding20">
                        <div class="container">
                            <div class="row padding10"><span>QUAIS SERVIÇOS VOCÊ MAIS UTILIZA?</span></div>
                            <div class="col s4 m4 l2">
                                <div class="center"><img src="img/servicos/rede-social.png" class="responsive-img"></div>
                                <div class="center padding-top10">&nbsp;&nbsp;
                                  <input type="checkbox" name="g_serv[]" class="filled-in" value="0.25" id="serv1" />
                                  <label for="serv1" class="font-size-10"></label>
                                </div>
                            </div>
                            <div class="col s4 m4 l2">
                                <div class="center"><img src="img/servicos/musica.png" class="responsive-img"></div>
                                <div class="center padding-top10">&nbsp;&nbsp;
                                  <input type="checkbox" name="g_serv[]" class="filled-in" value="0.25" id="serv2" />
                                  <label for="serv2"></label>
                                </div>
                            </div>
                            <div class="col s4 m4 l2">
                                <div class="center"><img src="img/servicos/video.png" class="responsive-img"></div>
                                <div class="center padding-top10">&nbsp;&nbsp;
                                  <input type="checkbox" name="g_serv[]" class="filled-in" value="0.25" id="serv3" />
                                  <label for="serv3"></label>
                                </div>
                            </div>
                            <div class="col s4 m4 l2">
                                <div class="center"><img src="img/servicos/download-musica.png" class="responsive-img"></div>
                                <div class="center padding-top10">&nbsp;&nbsp;
                                  <input type="checkbox" name="g_serv[]" class="filled-in" value="1" id="serv4" />
                                  <label for="serv4"></label>
                                </div>
                            </div>
                            <div class="col s4 m4 l2">
                                <div class="center"><img src="img/servicos/download-video.png" class="responsive-img"></div>
                                <div class="center padding-top10">&nbsp;&nbsp;
                                  <input type="checkbox" name="g_serv[]" class="filled-in" value="1" id="serv5" />
                                  <label for="serv5"></label>
                                </div>
                            </div>
                            <div class="col s4 m4 l2">
                                <div class="center"><img src="img/servicos/jogos.png" class="responsive-img"></div>
                                <div class="center padding-top10">&nbsp;&nbsp;
                                  <input type="checkbox" name="g_serv[]" class="filled-in" value="1" id="serv6" />
                                  <label for="serv6"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                        <p class="center"><button type="submit" class="indigo darken-4 btn">DESCUBRA SEU PLANO</button></p>
                    </div>
                </li>
              </ul>
        </form>
        </div>
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