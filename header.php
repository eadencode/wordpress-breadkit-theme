<!DOCTYPE html>
<html  ng-app="test">
<head>

    <title><?php wp_title(); ?></title>
<!--
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
    <script src="wp-content/themes/pietra/js/app.js"></script>
-->
    
    <?php wp_head(); ?>
    
</head>

<body <?php if (function_exists('body_class')) body_class(); ?> >
