<?php get_header() ?>

<main class="container">

    <h1 class="title-home-style">Bienvenue sur le site <strong class="strong-home-style">d'Iberia Cultura</strong></h1>

</div>


    <div id="carouselExampleIndicators" class="carousel-style carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="<?= get_template_directory_uri() ?>/assets/images/Caroussel/soiree-60.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item active">
                <img src="<?= get_template_directory_uri() ?>/assets/images/Caroussel/gisele-yollande-solange-et-conchita.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= get_template_directory_uri() ?>/assets/images/Caroussel/soiree-45.jpg" class="d-block w-100" alt="...">
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

    <div class="home-alaune-style">
        <h2>À la Une</h2>
    </div>

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <div class="card card-style">
                <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: 15rem; width: auto; margin: 2rem auto 2rem auto;' ]) ?>
                <div class="card-body">
                    <h5 class="card-title"> <?php the_title() ?></h5>
                    <p class="card-text"><?php the_content('En voir plus') ?></p>
                    <a href="<?php the_permalink() ?>" class="btn btn-primary">Voir plus</a>
                </div>
            </div>

        <?php endwhile ?>

        <?php the_posts_pagination(); ?> 

    <?php else : ?>
        <h1>Pas d'artictes trouvés</h1>
    <?php endif; ?>
</main>

<?php get_footer() ?>