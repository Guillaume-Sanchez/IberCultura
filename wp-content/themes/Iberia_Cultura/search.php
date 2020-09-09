<?php get_header() ?>

<main class="container">

    <?php if (have_posts()) : ?>


        <div class="row">


            <?php while (have_posts()) : the_post(); ?>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto;']) ?>
                        <div class="card-body">
                            <h5 class="card-title"> <?php the_title() ?></h5>
                            <p class="card-text"><?php the_content('En voir plus') ?></p>
                            <a href="<?php the_permalink() ?>" class="btn btn-primary">Voir plus</a>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>
        </div>

        <?php the_posts_pagination(); ?>
        
    <?php else : ?>
        <h1>Pas d'artictes trouvés</h1>
    <?php endif; ?>

</main>

<?php get_footer() ?>