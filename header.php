<?php
/**
 * Header template
 * 
 * @package PlayAir
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <?php 
        if( function_exists('wp_body_open') ) {
            wp_body_open();
        }      
    ?>
    
    <header>
        <nav class="border-b dark:border-gray-500 bg-white dark:bg-gray-900">
            <div class="max-w-7xl mx-auto flex items-center h-20 w-full justify-between px-4">
        
                <div class="flex items-center">
                    <button class="hidden lg:block px-4 dark:text-white">HOW IT WORKS</button>
                    <button class="hidden lg:block px-4 dark:text-white">SOLUTIONS</button>
                    <button class="hidden lg:block px-4 dark:text-white">ENTERPRISE</button>
                    <button class="px-4 dark:text-white">LOG IN</button>
                    <button class="bg-green-500 text-white rounded shadow-md px-4 py-1">Sign Up</button>
                    <button id="switchTheme" class="h-10 w-10 flex justify-center items-center focus:outline-none text-yellow-500">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
            </div>
        </nav>
    </header>