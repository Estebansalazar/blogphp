
<!-- le agregamos al index  nuestra pagina cabezera : equire_once "includes/cabezera.php" -->
<?php require_once "includes/cabezera.php"
?>
<?php require_once "includes/lateral.php"
?>


<!-- ¡¡¡¡    navbar   ¡¡¡¡¡¡¡¡¡¡ -->




<?php if (isset($_SESSION['errores'])):?>
<?php 
    echo "<pre>";
    var_dump($_SESSION['errores']);
    echo "</pre>";
    ?>
<?php endif;?>

<!-- ¡¡¡¡    Caja principal ¡¡¡¡¡¡¡¡¡¡ -->

<div class="container">

<div class="card" >
  <img class="card-img-top" src=".../100px180/" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<!-- ¡¡¡¡    Caja principal ¡¡¡¡¡¡¡¡¡¡ -->

<?php require_once "includes/pie.php"
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>




