<?php defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('_snippets/meta_headers'); ?>
        <?php $this->load->view('_snippets/head_resources'); ?>
    </head>
    <body>
        <div class="container">
            <h1 class="display-1"><?= SITE_NAME; ?></h1>

            <h2>Included Packages:</h2>
            <ul>
                <li>Popper JS</li>
                <li>jQuery 3</li>
                <li>Bootstrap 4</li>
                <li>Font Awesome 5</li>
                <li>Gulp</li>
            </ul>
        </div>

        <?php $this->load->view('_snippets/body_resources'); ?>
    </body>
</html>