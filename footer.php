<?php
/**
 * Footer template
 * 
 * @package Play Air
 */

?>
    <footer class="mt-6">
        <div class="p-6 max-w-sm mx-auto bg-white dark:bg-gray-900 rounded-xl shadow-md flex items-center space-x-4 transition ease-out duration-1000">
            <div class="flex-shrink-0">
                <img class="h-12 w-12" src="<?php bloginfo('template_url'); ?>/assets/img/chat-logo.svg" alt="ChitChat Logo">
            </div>
            <div>
                <div class="text-xl font-medium text-black dark:text-gray-200 transition ease-out duration-1000">ChitChat</div>
                <p class="text-gray-500 dark:text-gray-400 transition ease-out duration-1000">You have a new message!</p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>