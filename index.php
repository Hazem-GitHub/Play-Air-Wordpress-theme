<?php
/**
 * Main Template file
 * 
 * @package Play Air
 */

?>

<?php
    get_header();
?>

<div class="content">
    <main class="bg-gray-100 dark:bg-gray-900 p-16 transition ease-out duration-1000">
        <div class="max-w-7xl mx-auto py-24 grid grid-cols-2">
            <div>
                <h1 class="py-4 text-green-500 dark:text-green-500 font-bold text-6xl transition ease-out duration-1000">
                    In-demand talent on demand.TM <br/> <span class=" text-gray-500 dark:text-white transition ease-out duration-1000">Upwork is how.TM</span>
                </h1>
                <p class="text-2xl text-gray-500 dark:text-gray-300 py-4 transition ease-out duration-1000">
                    Hire proven pros with confidence using the world’s largest, remote talent platform.
                </p>
            </div>
        </div>
    </main>
    <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); 
                the_title( '<h2>', '</h2>' ); 
                the_content();
                next_post_link();
                previous_post_link();
                the_post_thumbnail(); 
                the_excerpt();
            endwhile; 
        else: 
            _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
        endif; 
    ?>
</div>


<?php
    get_footer();
?>


