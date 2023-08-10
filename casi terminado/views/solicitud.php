
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>solicitud </title>

	<link rel="stylesheet" href="../css/es.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body id="page-top">


<form  action="../accion/validar_solicitud.php" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    
                            <br>
                            <br>
                            <h3 class="text-center">Solicitud de problemas tecnicos</h3>
                            <div class="form-group">
                            <label for="nombre" class="form-label">Nombre *</label>
                            <input type="text"  id="nombre" name="nombre" class="form-control" placeholder="Escribe su Apellido y Nombre" required>
                            </div>
                            
                            <div class="form-group">
                                  <label for="area" class="form-label">Area *</label>
                                <input type="area"  id="area" name="area" class="form-control" placeholder="Escribe al area al que pertenece" required>
                                
                            </div>

                            <div class="form-group">
                                  <label for="problema" class="form-label">Problema encontrado *</label>
                                <input type="area"  id="problema" name="problema" class="form-control"  placeholder="Escribe las caracteristicas de su problema" required>
                                
                            </div>
                        
                           <br>

                                <div class="mb-3">
                                    
                               <input type="submit" value="solicitar"class="btn btn-success" 
                               name="solicitar">
                               <a href="../views/lector.php" class="btn btn-danger">Cancelar</a>
                               
                            </div>
                            </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>