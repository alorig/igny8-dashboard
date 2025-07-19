<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Igny8 Admin Dashboard</title>
    <?php wp_head(); ?>
    <script>
        // Load saved theme on page load
        document.addEventListener('DOMContentLoaded', function() {
            const savedTheme = localStorage.getItem('igny8-theme') || 'blue';
            if (savedTheme !== 'blue') {
                document.documentElement.setAttribute('data-theme', savedTheme);
            }
        });
    </script>
</head>
<body <?php body_class(); ?>>
    <div class="wrapper"> 