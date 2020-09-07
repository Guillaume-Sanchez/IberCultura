<?php get_header() ?>

<main class="container">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="<?=get_template_directory_uri()?>/assets/images/Caroussel/soiree-60.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item active">
                <img src="<?=get_template_directory_uri()?>/assets/images/Caroussel/gisele-yollande-solange-et-conchita.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?=get_template_directory_uri()?>/assets/images/Caroussel/soiree-45.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <h2>Bienvenu sur Iberia Cultura</h2>
    <h3>Association Espagnol de Chalette-sur-Loin</h3>

</main>

<?php get_footer() ?>