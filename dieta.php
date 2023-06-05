<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
  
  <link rel="stylesheet" href="../dataTables/css/estilos1.css">
 
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <link rel="icon" href="../dataTables/img/bandera_icono_vzla.png">

  <title>Luis Enrique García Domador</title>
  
</head>

<body>
  <header>
  <div class="container-fondo">
    <?php include '../dataTables/reloj/reloj2.html' ?> 
</div>  
   
</header>
<section>
  <article>
<div class="row">
      <div class="col-2 offset-10">
        <div class="text-center">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="botonCrear">
            <i class="bi bi-plus-circle-fill"> Crear</i>
          </button>
        </div>
      </div>
    </div>  
        

    <div>
      <table id="datos_usuario" class="table-cebra">
        <thead>
          <tr>
            <!--<th style="background-color: blue; color:white">Id</th>-->
            <th style="background-color: blue; color:white; text-align: center;">Fecha y Hora</th>
            <th style="background-color: blue; color:white; text-align: center;">CPG1</th>
            <th style="background-color: blue; color:white; text-align: center;">Hora</th>
            <th style="background-color: blue; color:white; text-align: center;">CPG2</th>
            <th style="background-color: blue; color:white; text-align: center;">Comentarios</th>
            <th style="background-color: blue; color:white; text-align: center;">Peso</th>
            <th style="background-color: blue; color:white; text-align: center;">Acción</th>
            <th style="background-color: blue; color:white; text-align: center;">Acción</th>

          </tr>
        </thead>
      </table>
              
    </div>
    
    <div class="table-responsive">
      <table id="datos_usuario" class="table-cebra">
      
        <thead>
          <tr>
            <th style="background-color: brown; color:white">1.- Carbohidrato</th>
            <th style="background-color: brown; color:white">2.- Proteina</th>
            <th style="background-color: brown; color:white">3.- Grasa</th>
            <th style="background-color: brown; color:white">4.- Entre comidas</th>
            <th style="background-color: brown; color:white">5.- No comer</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><b>Proporción 5%</b> Brocolí, Oregano, Lechuga, Pepino, Espinaca, Repollo, Cebollas, Pimentón, Champiñones, Tomates, Cebollin, Avena, Lechosa, Mango, Piña
            <b>No comer de noche</b></td>
          <td><b>Proporción 20%</b> Atún en lata, Pescado, Pollo, Cerdo</td>
          <td><b>Proporción 70%</b> Aguacates, Aceitunas, Nueces, Mantequilla, Quesos Amarillos, Queso Ricota, Requeson, Tocineta, Aceite de Coco, Chorizos, Aceite de Oliva</td>
          <td>Chicharrones, un trozo de aguacate, Aceitunas, Queso Amarillo, nueces</td>
          <td>Pastas, Arroz, carne roja, margarina, azucar, pan, lacteos, aceite de semillas, papas</td>
          </tr>
        </tbody>
      </table>
     
    </div>
    
    <!-- Modal -->
    <div class=" modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div style="background-color:blue" class="modal-header azul">
            <h5 class="modal-title" id="exampleModalLabel">Crear usuario</h5>
            <button style="background-color:white" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            
          </div>

        <form method="POST" id="formulario" enctype="multipart/form-data">
            <div class="modal-content">
              <div class="modal-body">
                <label for="fecha">Fecha y hora</label>
                <input type="text" name="fecha" id="fecha" class="form-control"><br>

                <label for="cpg1">Que comio</label>
                <input type="text" name="cpg1" id="cpg1" class="form-control"><br>

                <label for="fecha1">Hora</label>
                <input type="text" name="fecha1" id="fecha1" class="form-control"><br>

                <label for="cpg2">Que comio</label>
                <input type="text" name="cpg2" id="cpg2" class="form-control"><br>

                <label for="comentario">Comentario</label>
                <input type="text" name="comentario" id="comentario" class="form-control"><br>

                <label for="peso">Peso</label>
                <input type="text" name="peso" id="peso" class="form-control">
                <!--<span id="imagen_subida"></span><br>-->

              </div>

              <div class="modal-footer">
                <input type="hidden" name="id_usuario" id="id_usuario">
                <input type="hidden" name="operacion" id="operacion">
                <input type="submit" name="action" id="action" class="btn btn-success" value="Crear">
              </div>
            </div>
            
          </form>
        </div>
      </div>
    </div>
    </article>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

    <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $("#botonCrear").click(function() {
          $("#formulario")[0].reset();
          $(".modal-title").text("Crear Usuario");
          $("#action").val("Crear");
          $("#operacion").val("Crear");
          //$("#imagen_subida").html("");
        });

        var dataTable = $('#datos_usuario').DataTable({
          "processing": true,
          "serverSide": true,
          "order": [],
          "ajax": {
            url: "obtener_registros.php",
            type: "POST"
          },
          "columnsDefs": [{
            "targets": [0, 3, 4],
            "orderable": false,
          }, ]
        });

      });

      //Aqui codigo para insertar

      $(document).on('submit', '#formulario', function(event) {
        event.preventDefault();
        var fecha = $("#fecha").val();
        var cpg1 = $("#cpg1").val();
        var fecha1 = $("#fecha1").val();
        var cpg2 = $("cpg2").val();
        var comentario = $("#comentario").val();
        var peso = $("#peso").val();
        //var extension = $("#imagen_usuario").val().split('.').pop().toLowerCase();

       /* if (extension != '') {
          if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) 
          {
            alert("Formato de imagen inválido");
            ("#imagen_usuario").val('');
            return false;
          }
        }*/

        if (fecha != '' && fecha != '' && cpg1 != '') {
          $.ajax({
            url: "crear.php",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(data) 
            {
              alert(data);
              $('#formulario')[0].reset();
              $('#modalUsuario').modal('hide');
              dataTable.ajax.reload();
            }
          });
        } else {
          alert("Algunos campos son obligatorios");
        }
      });

      //Funcion de editar
      $(document).on('click', '.editar', function() {
        var id_usuario = $(this).attr("id");
        $.ajax({
          url: "obtener_registro.php",
          method: "POST",
          data: {
            id_usuario: id_usuario
          },
          dataType:"json",
          success: function(data)
          {
            //Console.log(data):
            $('#modalUsuario').modal('show');
            $('#fecha').val(data.fecha);
            $('#cpg1').val(data.cpg1);
            $('#fecha1').val(data.fecha1);
            $('#cpg2').val(data.cpg2);
            $('#comentario').val(data.comentario);
            $('#peso').val(data.peso);
            $('.modal-title').text("Editar Usuario");
            $('#id_usuario').val(id_usuario);
            //$('#imagen_subida').html(data.imagen_usuario);
            $('#action').val("Salvar");
            $('#operacion').val("Editar");

          },
          error: function(jqXHR, textStatus, errorTrhown) {
            console.log(textStatus, errorTrhown);
          }

        })
      });

      //Funcion borrar
      $(document).on('click', '.borrar', function() {
        var id_usuario = $(this).attr("id");
        if (confirm("Esta seguro de borrar este registro" + id_usuario)) {
          $.ajax({
            url: "borrar.php",
            method: "POST",
            data: {
              id_usuario: id_usuario
            },
            success: function(data) {
              alert(data);
              dataTable.ajax.reload();
            }
          });
        } else {
          return false;
        }

      });
    </script>
    
  </div>

  
</body>

</html>