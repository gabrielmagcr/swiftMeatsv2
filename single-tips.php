<script>
    var activeTip = <?php print get_the_ID(); ?>;
</script>
<?php get_header(); ?>
<style>
    .made-with-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    }

    .single-made-with {
        display: block;
    }

    .single-made-with span {
        margin-top: -10px;
        padding-bottom: 10px;
        font-size: 1.5rem;
    }

    .made-with {
        background: #EBEBEB;
        display: flex;
        align-items: center;
        flex-direction: column-reverse;
        justify-content: space-evenly;
        text-align: center;
        font-size: 16px;
        margin-top: -1px;
        min-height: 150px;
    }

    .made-with span {
        padding-bottom: 5px;

    }

    .made-with img {
        width: 60%;
    }

    .made-with-title {
        background: #FFAA2B;
        width: 100%;
        display: block;
        padding: 5px 10px;
        color: #28334A;
        margin: 15px 0 0;
    }

    .badgebar-section {
        background: #FFAA2B;
        padding: 15px 0;
    }

    .tips-badgebar {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 0 25px;
    }

    .badgebar {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 0 10px;
    }

    .badgebar h3 {
        margin: 0;
        font-size: 2rem;
        padding-top: 10px;
    }

    .badgebar span {
        font-size: 4rem;
        font-family: monospace;
        color: #28334a;
        font-weight: bold;
    }

    .badgebar img {
        width: 50px;
    }

    .tips-instructions {
        background: #28334A;
        display: flex;
        flex-direction: column;
    }

    .tips-i-left-section p,
    .tips-i-left-section li,
    .tips-i-left-section ul {
        color: white;
    }
    .tips-i-left-section ul, .tips-i-left-section ol { 
        padding-left: 20px;
    }
    .tips-i-left-section li,
    .tips-i-right-section p {
        font-family: Arial, Helvetica, sans-serif;
    }

    .tips-i-left-section p {
        font-size: 2rem;
    }

    .tips-i-left-section {
        padding: 50px;
    }

    .tips-i-right-section {
        background-color: #C61A1D;
        color: #fff;
        position: sticky;
        top: 83px;
        height: min-content;
        padding: 45px;
    }

    .tips-i-right-section h5,
    .tips-i-right-section p {
        color: #fff;
    }

    .tips-i-right-section h5 {
        font-size: 2rem;
    }

    .share-icons-container {
        display: flex;
        transition: transform 0.8s ease-in-out;
    }

    .share-icons {
        display: block;
        border: none;
        background: transparent;
    }

    .share-icons img {
        width: 40px;
    }

    #hide-icons {
        display: flex;
        gap: 15px;
        transition: transform 0.8s ease-in-out;

    }

    .recipe-img img {
        max-height: 300px;
        object-fit: cover;
    }

    @media (max-width: 766px) {
        .recipe-title {
        font-size: 1.8rem !important;
        line-height: 1;
    }
        
    }

    @media (min-width:767px) {
        .share-icons img {
            width: 50px;
        }

        .badgebar span {
            font-size: 6rem;
        }

    }

    @media (min-width:1023px) {
        .tips-i-right-section {
            padding: 60px;
        }
        .tips-i-right-section h5 {
        font-size: 3rem;
    }
        .recipe-hero{
            padding: 2rem 0 0;
        }
        .recipes-info{
            align-content: center;
        }
        .tips-instructions {
            flex-direction: row;
        }

        .tips-servings {
            gap: 20px;
        }

        .badgebar img {
            width: 60px;
        }

        .tips-i-right-section {
            max-width: 50%;
        }

        .recipe-img img {
            max-height: 365px;
        }
    }

    @media (min-width:1439px) {
        .badgebar {
            gap: 25px;
        }
        .tips-badgebar {
            gap: 0 50px;
        }

        .badgebar span {
            font-size: 7rem;
            line-height: normal;

        }

        .badgebar h3 {
            font-size: 2rem;
        }


        .tips-instructions {
            max-width: 1600px;
            margin: 0 auto;
        }

        .tips-i-left-section {
            padding: 50px 50px 50px 150px;
        }

        .tips-i-right-section {
            padding: 100px 70px;
            margin: 50px;
        }
        .made-with img{
            height: 40%;
        }
    }
</style>
<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="og:description" content="<?= the_field('description'); ?>" />
<meta property="og:site_name" content="<?php site_url(); ?>" />
<section class="sm-prodhero recipe-hero" itemscope itemtype="http://schema.org/Recipe">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-xs-12 sm-prodhero--info recipes-info">
                <div class="sm-prodhero--breadcrumb">
                    <ol>
                        <li><a href="/tips-recipes">Recipes</a></li>
                        <li><?php the_title(); ?></li>
                    </ol>
                </div>
                <h1 itemprop="name" class="p-name recipe-title"><?php the_title(); ?></h1>
                <p class="p-summary"><?= the_field('description'); ?></p>
                <form class="sm-prodhero--wtb" action="/products" method="GET">
                    <button class="btn btn-outline-red" type="submit">Find your Protein</button>
                </form>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-xs-12 sm-prodhero--img recipe-img">
                <figure>
                    <img class="u-photo" src="<?= the_field("image"); ?>" alt="<?php the_title(); ?> in packaging">
                </figure>
                <?php $made_with = get_field('made_with');
                if ($made_with) :
                    $count = count($made_with);
                    $single_made_with = $count === 1 ? 'single-made-with' : '';
                ?>

                    <span class="made-with-title">MADE WITH:</span>
                    <div class="made-with-container <?php echo $single_made_with; ?>">
                        <?php foreach ($made_with as $post) :
                            setup_postdata($post); ?>
                            <a href="<?php the_permalink(); ?>">
                                <div class="made-with">
                                    <span><?php the_title(); ?></span>
                                    <?php
                                    $product_image = get_field('product_image');
                                    if ($product_image) : ?>
                                        <img src="<?= $product_image; ?>" alt="<?php the_title(); ?>" />
                                    <?php endif; ?>
                                </div>
                            </a>

                        <?php endforeach; ?>
                    </div>

                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="badgebar-section">
    <?php
    $number_of_ingredients = get_field('number_of_ingredients');
    $preparation_time = get_field('preparation_time');
    $amount_of_time = get_field('amount_of_time');
    $servings = get_field('servings');
    ?>

    <div class="tips-badgebar">
        <div class="badgebar tips-ingredients">
            <span><?php echo $number_of_ingredients; ?></span>
            <h3> INGREDIENTS</h3>
        </div>
        <div class="badgebar tips-time">
            <img src='/wp-content/uploads/2024/07/Vector.svg'><span><?php echo $preparation_time; ?></span>
            <h3><?php echo $amount_of_time ?></h3>
        </div>
        <div class="badgebar tips-servings">
            <img src='/wp-content/uploads/2024/07/Group.svg'><span itemprop="recipeYield"><?php echo $servings; ?></span>
            <h3>SERVINGS</h3>
        </div>
        <div class="badgebar tips-cooking-style">
            <?php
            $cooking_style = get_field('cooking_style');
            $img_cooking = '';
            switch ($cooking_style) {
                case 'skillet':
                    $img_cooking = '/assets/img/tips/Skillet.svg';
                    break;
                case 'oven':
                    $img_cooking = '/assets/img/tips/Oven.svg';
                    break;
                case 'grill':
                    $img_cooking = '/assets/img/tips/Grill.svg';
                    break;
                case 'smoker':
                    $img_cooking = '/assets/img/tips/Smoker.svg';
                    break;
                case 'multicooker':
                    $img_cooking = '/assets/img/tips/Multicooker.svg';
                    break;
                case 'sous vide':
                    $img_cooking = '/assets/img/tips/SousVide.svg';
                    break;
                default:
                    $img_cooking = '/assets/img/tips/Fryer.svg';
                    break;
            }
            ?>
            <img src='<?php echo esc_url(get_template_directory_uri() . '/' . $img_cooking); ?>' alt='Cooking style image'>
        </div>
    </div>

</section>

<section class="tips-instructions">
    <div class="tips-i-left-section recipe-ingredients">
        <?php echo get_field('content'); ?>
    </div>

    <div class="tips-i-right-section">

        <h5>SPREAD THE PASTA</h5>
        <p>Why keep this culinary masterpiece to yourself? Share the recipe on social media and let the world join in the fun of twirling spaghetti like pros and savoring the juicy, flavorful meatballs. It's a surefire way to spread joy, laughter, and deliciousness across the world!</p>

        <div class="share-icons-container">
            <div id="hide-icons">
                <a class="share-pin-link share-icons" target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php echo get_permalink(); ?>&media=<?php echo get_field('image'); ?>&title=<?php echo urlencode(get_the_title()); ?>">
                    <img src="/wp-content/uploads/2024/07/Social-Pinterest-Streamline-Streamline-3.0-1.svg" alt="pinterest">
                </a>
                <a href="mailto:?subject=Hey check this recipe! &amp;body=Here is the recipe : <?php echo get_permalink(); ?>" class="share-icons">
                    <img src="/wp-content/uploads/2024/07/Email-Action-Unread-Streamline-Streamline-3.0-1.svg" alt="Share by email">
                </a>
                <button onclick="window.print()" class="share-icons"><img src="/wp-content/uploads/2024/07/Print-Text-Streamline-Streamline-3.0-1.svg" alt="Print this recipe"></button>
            </div>
            <!--
            <div id="sharebtn">
                <button class="share-icons">
                    <img src="/wp-content/uploads/2024/07/Layer_1.svg" alt="Share">
                </button>
            </div>
        -->
        </div>


    </div>
    </div>


</section>
<?php
/* Next level section -------------- */

if (have_rows('product_page_next_level')) : ?>
    <section id="product-next-level">
        <div class="container product-next-level-container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 col-xs-12">
                    <h3 class="sm-nextlevel-heading">Take your Meal to the Next Level</h3>
                </div>
                <!-- /.col-xl-12 col-lg-12 col-md-12 col-12 col-xs-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <?php while (have_rows('product_page_next_level')) : the_row(); ?>
                    <?php
                    $item_id = get_sub_field('recipe_video');
                    $dificulty_lvl = get_field('dificulty_level', $item_id);
                    $item = get_post($item_id);
                    $type = $item->type;
                    $thaimage = wp_get_attachment_image_src($item->image, 'full');

                    if ($thaimage != "") {
                        $image = $thaimage[0];
                    } else {
                        $image = get_template_directory_uri() . "/assets/img/tips/recipe-ex.jpg";
                    }

                    ?>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 col-xs-12 product-other-item" data-toggle="modal" data-target="#tip-<?= $item_id; ?>">
                        <a href="<?php the_permalink(); ?>" title="<?= $item->post_title; ?>">
                            <div class="sm-nextlevel-item">
                                <figure>
                                    <img src="<?= $image; ?>" alt="<?= $item->post_title; ?>">
                                </figure>
                                <div class="sm-nextlevel-item--body">
                                    <?php if ($dificulty_lvl) : ?>
                                        <span>DIFICULTY LEVEL - <?= $dificulty_lvl; ?>/10</span>
                                    <?php endif; ?>
                                    <h3><?= $item->post_title; ?> </h3>
                                </div>
                            </div>
                        </a>                    
                    </div>
                    <!-- /.col-xl-4 col-lg-4 col-md-4 col-12 col-xs-12 -->
                 

                <?php endwhile; ?>
            </div>
        </div>
        <a href="/tips-recipes"><button class="blue-btn">VIEW MORE RECIPES</button></a>

        <!-- /.container -->
    </section>
    <!-- /#product-next-level -->
<?php endif; ?>

<script>
    const sharebtn = document.getElementById('sharebtn');
    const hideIcons = document.getElementById('hide-icons');

    sharebtn.addEventListener('click', function() {
        if (hideIcons.style.display === 'none') {
            hideIcons.style.display = 'flex';

        } else {
            hideIcons.style.display = 'none';
        }
    });
</script>

<!-- /#tips-recipes-wrap -->
<?php
get_template_part('parts/pre-footer-ctas');
get_footer();
?>