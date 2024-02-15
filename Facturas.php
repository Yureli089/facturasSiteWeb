<?php include("template/Cabesera.php"); ?>

<?php include("template/contenido.php"); ?>

<!-- Boton -->
<div class="d-grid gap-2 d-md-flex btn-lg justify-content-md-end conta_b1">
  <a class="btn btn-primary me-md-2 custom-btn button_1" href="AgregarF.php">Añadir Pago</a>
</div>
<!-- <div class="d-grid gap-2 d-md-flex btn-lg justify-content-md-end conta_b1">
  <a class="btn btn-primary me-md-2 custom-btn button_1" href="Agregar.php">Añadir Cliente</a>
</div> -->


<!-- Contenido principal -->
<div>
  <h1>Facturas</h1>
  <br />
  <br />
  <br />
  <!-- tabla -->
  <table class="table table-borderless">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Numero de factura</th>
        <th scope="col">Fecha pago</th>
        <th scope="col">Cantidad</th>
        <th scope="col">ID Cliente</th>
        <th scope="col">Observaciones</th>
        <th scope="col">Estatus</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>0091209321</td>
        <td>2000/01/01</td>
        <td>00000000</td>
        <td>1</td>
        <td>Text </td>
        <td>
            <button class="btn btn-primary custom-btn button_2" type="button">Estatus V</button>
        </td>


      </tr>
      <tr>
        <th scope="row">2</th>
        <td>0091209321</td>
        <td>2000/01/01</td>
        <td>00000000</td>
        <td>1</td>
        <td>Text </td>
        <td >  
        <button class="btn btn-primary custom-btn button_2" type="button">Estatus V</button>
      </td>

      </tr>

    </tbody>
  </table>
  <?php include("template/Pie.php"); ?>