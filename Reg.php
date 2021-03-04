<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <body>
        <header>
            <nav class="navbar navbar-light bg-light justify-content-between navImg">
                <a class="navbar-brand"><img src="logo.png" class="logo" alt=""></a>
                <form class="form-inline">
                    <button class="btn btn-outline-success my-2 my-sm-0 ml-2" type="submit"><i class="far fa-user"></i>San Luis Potosí</button>
                  <button class="btn btn-outline-danger my-2 my-sm-0 ml-2" type="submit"><i class="fas fa-sign-out-alt"></i>Salir</button>
                </form>
              </nav>
        </header>
    
        <main role="main">
    
          <section class="jumbotron text-center" style="margin-bottom: -2rem">
            <div class="container">
               
                <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Selecciona tu sección</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-inline col">
                                    <label for="DEE">Distrito Electoral: </label>
                                    <select class="form-control" id="DEE">
                                      <option selected>02</option>
                                      <option>05</option>
                                      <option>06</option>
                                      <option>07</option>
                                      <option>08</option>
                                    </select>
                                  </div>
                                  <button type="button" class="close btn btn-success" data-dismiss="modal" id="buttonDEE" aria-label="close">
                                    <span aria-hidden="true">Aceptar</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="miModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Selecciona tu sección</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-inline col">
                                    <label for="DEEE">Distrito Electoral: </label>
                                    <select class="form-control" id="DEEE">
                                      <option selected>05</option>
                                      <option>09</option>
                                    </select>
                                  </div>
                                  <button type="button" class="close btn btn-success" data-dismiss="modal" id="buttonDEEE" aria-label="close">
                                    <span aria-hidden="true">Aceptar</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <h1 class="display-5">Sistema de Administración</h1>
                <hr class="my-4 text-dark">
                <h1 class="display-4 text-info">Fuerza Turquesa</h1>
                
                <div class="card border-info">
                    <div class="card-header">
                      Registro
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="container mb-3">
                            <div class="row">
                            <div class="form-inline col">
                                <label for="casa">Casa: </label>
                                <select class="form-control" id="casa" disabled>
                                  <option selected>26</option>
                                </select>
                              </div>
                              <div class="form-inline col">
                                <label for="Estado">Estado: </label>
                                <select class="form-control" id="Estado" disabled>
                                  <option selected>San Luis Potosí</option>
                                </select>
                              </div>
                            </div>
                        </div>
                        <div class="container mb-3">
                            <div class="row">
                            <div class="form-inline col">
                                <label for="Municipio">Municipio: </label>
                                <select class="form-control" type="text" id="Municipio">
                                  <option>Ahualulco</option>
                                  <option>Alaquines</option>
                                  <option>Aquismón</option>
                                  <option>Armadillo de los Infante</option>
                                  <option>Cárdenas</option>
                                  <option>Catorce</option>
                                  <option>Cedral</option>
                                  <option>Cerritos</option>
                                  <option>Cerro de San Pedro</option>
                                  <option>Ciudad del Maíz</option>
                                  <option>Ciudad Fernández</option>
                                  <option>Tancanhuitz</option>
                                  <option>Ciudad Valles</option>
                                  <option>Coxcatlán</option>
                                  <option>Charcas</option>
                                  <option>Ébano</option>
                                  <option>Guadalcázar</option>
                                  <option>Huehuetlán</option>
                                  <option>Lagunillas</option>
                                  <option>Matehuala</option>
                                  <option>Mexquitic de Carmona</option>
                                  <option>Moctezuma</option>
                                  <option>Rayón</option>
                                  <option>Rioverde</option>
                                  <option>Salinas</option>
                                  <option>San Antonio</option>
                                  <option>San Ciro de Acosta</option>
                                  <option>San Luis Potosí</option>
                                  <option>San Martín Chalchicuautla</option>
                                  <option>San Nicolás Tolentino</option>
                                  <option>Santa Catarina</option>
                                  <option>Santa María del Río</option>
                                  <option>Santo Domingo</option>
                                  <option>San Vicente Tancuayalab</option>
                                  <option>Soledad de Graciano Sánchez</option>
                                  <option>Tamasopo</option>
                                  <option>Tamazunchale</option>
                                  <option>Tampacán</option>
                                  <option>Tampamolón Corona</option>
                                  <option>Tamuín</option>
                                  <option>Tanlajás</option>
                                  <option>Tanquián de Escobedo</option>
                                  <option>Tierra Nueva</option>
                                  <option>Vanegas</option>
                                  <option>Venado</option>
                                  <option>Villa de Arriaga</option>
                                  <option>Villa de Guadalupe</option>
                                  <option>Villa de la Paz</option>
                                  <option>Villa de Ramos</option>
                                  <option>Villa de Reyes</option>
                                  <option>Villa Hidalgo</option>
                                  <option>Villa Juárez</option>
                                  <option>Axtla de Terrazas</option>
                                  <option>Xilitla</option>
                                  <option>Zaragoza</option>
                                  <option>Villa de Arista</option>
                                  <option>Matlapa</option>
                                  <option>El Naranjo</option>

                                </select>
                              </div>
                              <div class="form-inline col">
                                <label for="DE">Distrito Electoral: </label>
                                <input class="form-control" id="DE" value="04" type="text" disabled>
                              </input>
                              </div>
                            </div>
                        </div>
                        <div class="container mb-3">
                            <div class="row">
                            <div class="form-inline col">
                                <label for="Tipo">Tipo: </label>
                                <select class="form-control" id="Tipo">
                                  <option>Propietario</option>
                                  <option>Suplente</option>
                                </select>
                              </div>    
                            </div>
                        </div>
                            <div class="form-row">
                              <div class="form-inline col-md-6">
                                <label for="SE">Sección Electoral: </label>
                                <input type="text" class="form-control" id="SE" placeholder="" required>
                              </div>
                              <div class="form-inline col-md-6">
                                <label for="Casilla">Casilla: </label>
                                <input type="Text" class="form-control" id="Casilla" placeholder="" required>
                              </div>
                            </div>
                            <div class="form-row">
                                <div class="form-inline col-md-6">
                                  <label for="Nombre">Nombre(s): </label>
                                  <input type="text" class="form-control" id="Nombre" placeholder="" required>
                                </div>
                                <div class="form-inline col-md-6">
                                  <label for="Apellidos">Apellidos: </label>
                                  <input type="Text" class="form-control" id="Apellidos" placeholder="" required>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-inline col-md-6">
                                  <label for="CE">Clave Elector: </label>
                                  <input type="text" class="form-control" id="CE" placeholder="" required>
                                </div>
                                <div class="form-inline col-md-6">
                                  <label for="VC">Vigencia Credencial: </label>
                                  <input type="Text" class="form-control" id="VC" placeholder="" required>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-inline col-md-6">
                                  <label for="Tel">Teléfono: </label>
                                  <input type="text" class="form-control" id="Tel" placeholder=""required>
                                </div>
                                <div class="form-inline col-md-6">
                                  <label for="mail">Correo Electrónico:</label>
                                  <input type="Text" class="form-control" id="mail" placeholder="" required>
                                </div>
                              </div>
                              <div class="container mb-3">
                                <div class="row">
                                <div class="form-inline col">
                                    <label for="Responsable">Responsable de RG: </label>
                                    <select class="form-control" id="Responsable" placeholder="Seleccione Responsable">
                                      <option>PROF. JOSÉ ALBERTO YÁÑEZ GONZÁLEZ</option>
                                      <option>PROFA. MARÍA CLAUDIA TRISTÁN ALVARADO</option>
                                      <option>PROFA. ANA LILIA RODRÍGUEZ RESÉNDIZ - SUBCOORDINADOR PROF. JOSÉ LUIS RODRÍGUEZ VILLANUEVA</option>
                                      <option>PROF. JESÚS LÓPEZ GUEL</option>
                                      <option>PROF. ALFREDO FLORES FLORES</option>
                                      <option>PROF. ARISTEO HERNÁNDEZ RIVERA</option>
                                      <option>PROF. ARGOS IVÁN ALMARAZ MARTÍNEZ</option>
                                      <option>PROFA. MARIA INÉS CARRILLO OROZCO</option>
                                      <option>PROF. JUAN FRANCISCO LÓPEZ GUEL</option>
                                      <option>PROFA. RUTH TOSTADO CABRERA</option>
                                      <option>PROFA. TERESA GONZÁLEZ MANCILLA</option>
                                      <option>PROF. JOSÉ FERNANDO FLORES RAMÍREZ</option>
                                      <option>PROF. MARTHA LETICIA ARREDONDO GUERRERO</option>
                                      <option>PROF. HOMERO PÉREZ LUCIO</option>
                                      <option>PROF. JOSÉ ISABEL GUTIÉRREZ ZÚÑIGA</option>
                                      <option>PROF. JUAN CARLOS BÁRCENAS RAMÍREZ - SUBCOORDINADOR PROF. ELIGIO HERNÁNDEZ RIVERA</option>
                                      <option>PROF. JOSÉ DE JESÚS GARCÍA CHAVARRÍA</option>
                                      <option>PROF. HIPÓLITO DOMÍNGUEZ MARTÍNEZ</option>
                                      <option>PROF. ERNESTO ALCOCER MÁRQUEZ</option>
                                      <option>PROF. ALEJANDRO RODRÍGUEZ CORREA</option>
                                      <option>PROF. JUAN ROMAN CARLOS SAAVEDRA HERNANDEZ</option>
                                      <option>PROF. ÁLVARO RODRÍGUEZ GODÍNEZ</option>
                                      <option>PROFA. MAIRA HERNÁNDEZ DORANTES</option>
                                      <option>PROF. SERGIO ANTONIO SOLÍS VIVEROS</option>
                                      <option>PROF. FRANCISCO JAVIER TORRES MERAZ</option>
                                      <option>PROFA. REYNA ANGÉLICA RODRÍGUEZ ROQUE</option>
                                      <option>PROF. JOSÉ DE JESÚS VEGA TORRES</option>
                                      <option>PROF. JOSÉ ANTONIO NAVA GOMEZ</option>
                                      <option>PROF. JUAN ROMÁN SÁNCHEZ OSTOS</option>
                                      <option>PROF. JOSÉ ENCARNACIÓN MEDELLÍN RANGEL</option>
                                      <option>PROF. CIRILO GARCÍA TREJO</option>
                                      <option>PROF. RUBÉN SOLÍS FONSECA</option>
                                      <option>PROF. GERARDO HERNÁNDEZ GONZÁLEZ</option>
                                      <option>PROF. ELISEO PORTILLA HERNÁNDEZ</option>
                                      <option>PROF. SERGIO DOLORES HERNÁNDEZ MARTÍNEZ</option>
                                      <option>PROF. CELESTINO MEDINA SANTOS</option>
                                      <option>PROF. DANIEL ORTIZ TENORIO</option>
                                      <option>PROF. GILBERTO DÍAZ RIVERA</option>
                                      <option>PROFA. MARTHA MARÍA LÓPEZ REYNA - SUBCOORDINADOR PROF. LEOPOLDO GUZMAN ACEVEDO</option>
                                      <option>PROF. JAVIER MUÑOZ CHÁVEZ</option>
                                      <option>PROF. ALDO IVÁN SIERRA ÁLVAREZ</option>
                                      <option>PROF. CARLOS ALBERTO GONZÁLEZ MARTÍNEZ </option>
                                      <option>PROFA. MARTHA LOURDES MELÉNDEZ JIMÉNEZ - SUBCOORDINADOR PROF. PEDRO AMARO HERNÁNDEZ</option>
                                      <option>PROF. JUAN CARLOS GONZÁLEZ MÉNDEZ </option>
                                      <option>PROF. CARLOS ÁVILA RIVERA</option>
                                    </select>
                                  </div>    
                                </div>
                            </div>
                                <div class="form-Inline row mb-5">
                                  <label class="col-2" for="File">Copia Credencial</label>
                                  <input type="file" class="form-control-file col" id="File">
                                </div>
                            
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button class="btn btn-danger">Cancelar</button>
                          </form>
                        
                    </div>
                </div>
          </section>
        </main>
    
        <footer class="text-muted">
            <div class="card text-white bg-info mb-3">
                
                <div class="card-body">
                  <h5 class="card-title">Info</h5>
                  <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed explicabo eaque dolorum provident rerum aspernatur repudiandae perspiciatis eveniet voluptatum, quis, soluta vel dolorem! Neque enim consectetur perferendis explicabo alias quae.</p>
                </div>
              </div>
        </footer>

        <script>
            document.getElementById("Municipio").onchange = function() {myFunction()};
            
            function myFunction() {
              var x = document.getElementById("Municipio");
              
              if(x.value === "Catorce" || x.value === "Cedral" || x.value === "Charcas" || x.value === "Matehuala" || x.value === "Vanegas" || x.value === "Venado" || x.value === "Villa de Guadalupe" || x.value === "Villa de la Paz"){
                  var y = document.getElementById("DE");
                  y.value = "01";
              }
              if(x.value === "Armadillo de los Infante" || x.value === "Cerro de San Pedro" || x.value === "Santa María del Río" || x.value === "Tierra Nueva" || x.value === "Villa de Arista" || x.value === "Villa de Arriaga" || x.value === "Villa de Reyes" || x.value === "Villa Hidalgo" || x.value === "Zaragoza"){
                  var y = document.getElementById("DE");
                  y.value = "03";
              }
              if(x.value === "Ahualulco" || x.value === "Mexquitic de Carmona" || x.value === "Moctezuma" || x.value === "Salinas" || x.value === "Santo Domingo" || x.value === "Villa de Ramos"){
                  var y = document.getElementById("DE");
                  y.value = "04";
              }
              if(x.value === "Cerritos" || x.value === "Ciudad Fernández" || x.value === "Rioverde" || x.value === "San Nicolás Tolentino" || x.value === "Villa Juárez"){
                  var y = document.getElementById("DE");
                  y.value = "10";
              }
              if(x.value === "Alaquines" || x.value === "Cárdenas" || x.value === "Ciudad del Maíz" || x.value === "El Naranjo" || x.value === "Guadalcázar" || x.value === "Lagunillas" || x.value === "Rayón" || x.value === "San ciro de Acosta" || x.value === "Santa Catarina" || x.value === "Tamasopo"){
                  var y = document.getElementById("DE");
                  y.value = "11";
              }
              if(x.value === "Ciudad Valles"){
                  var y = document.getElementById("DE");
                  y.value = "12";
              }
              if(x.value === "Ébano" || x.value === "San Antonio" || x.value === "San Vicente Tancuayalab" || x.value === "Tampamolón Corona" || x.value === "Tamuín" || x.value === "Tanlajás" || x.value === "Tanquián de Escobedo"){
                  var y = document.getElementById("DE");
                  y.value = "13";
              }
              if(x.value === "Aquismón" || x.value === "Axtla de Terrazas" || x.value === "Huehuetlán" || x.value === "Tancanhuitz" || x.value === "Xilitla" ){
                  var y = document.getElementById("DE");
                  y.value = "14";
              }
              if(x.value === "Matlapa" || x.value === "San Martín Chalchicuautla" || x.value === "Tamazunchale" || x.value === "Tampacán" ){
                  var y = document.getElementById("DE");
                  y.value = "15";
              }
              if(x.value === "San Luis Potosí"){
                $(document).ready(function(){
                    $("#miModal").modal();
                });
                
              }
              if(x.value === "Soledad de Graciano Sánchez"){
                $(document).ready(function(){
                    $("#miModal2").modal();
                });
                
              }
            }

            document.getElementById("buttonDEE").onclick = function() {modalFuntion()};
            document.getElementById("buttonDEEE").onclick = function() {modalFuntion2()};

            function modalFuntion(){
                var y = document.getElementById("DE");
                var z = document.getElementById("DEE");
                y.value = z.value;
            }
            function modalFuntion2(){
                var y = document.getElementById("DE");
                var z = document.getElementById("DEEE");
                y.value = z.value;
            }
            </script>
</body>
</html>