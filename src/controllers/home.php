<?php


    //render template home
    require 'src/render.php';
    $title="Superman";
    $alumnes=[
        'Perico Palotes',
        'Aitor TIllas Frias',
        'Aitor Mentas Fuertes'
    ];

    echo render('home',['title'=>$title, 'alumnes'=>$alumnes]);