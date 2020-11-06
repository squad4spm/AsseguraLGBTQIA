<?php include('header.php');?>
<div style="width: 100%; height: 10px; background: #400040;"></div>

<?php include('menu.php');?>

<section id="pg_localizacao">
<div class="center">
    <div class="container">
        <div class="row my-5">
            <div class="col-md-4">
                <p><img src="./images/markerDefesa.png" alt="" width="50px">Defesa pessoal</p>
                <br>
                <p><img src="./images/markerNome.png" alt="" width="50px">Nome social</p>
                <br>
                <p><img src="./images/markerCasaAcolhimento.png" alt="" width="50px">Casa de acolhimento</p>
                <br>
                <p><img src="./images/markerJuridico.png" alt="" width="50px">Juridico</p>
                <br>
                <p><img src="./images/markerP.png" alt="" width="50px">Psicológico</p>
            </div>
            
            <div class="col-md-8">
                <div class="mapa" id="mapa"></div>
            </div>
        </div>
    </div>
</div>
</section>

<?php include('conteudoFooter.php');?>
<?php include('footer.php');?>