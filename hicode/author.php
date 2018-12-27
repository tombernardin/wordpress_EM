<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hicode</title>
    <?php 
    
    // fonction WP permettant d'injecter des scripts pour la tools bar par exemple
    
    wp_head() ; 
    
    ?>
</head>
<body>
    <header>
        <h1>Hicode</h1>
    </header>
    <h2>Le titre ici est H2</h2>
    
        <?php 
    // Condition pour savoir si on a des articles en base de données
    if(have_posts()) { 
    echo "<p>y a des articles</p>" ;
    while( have_posts() ){
    	the_post(); // permet de dépiler les articles pour avancer dans la récupération des articles
        // echo "<h2><a href=''>". the_title(false) ."</a></h2>";
        ?> 
        <!--On ouvre et ferme le PHP pour plus de lisibilité dans le code
        Après on utilise les fonctions de WP pour afficher les contenus des articles :
        the_title affiche le titre de l'article
        the_permalink affiche le lien de l'article href
        the_content affiche le contenu de l'article-->
        <h2><a class="post__title" href="<?php the_permalink() ; ?>"><?php the_title() ; ?></a></h2> 
        <div class="post__content">
        <?php the_category() ;
         the_excerpt() ;
         the_author_posts_link();?>
        
        </div>	
    <?php
    }
    }else{
    	echo "<p> Pas d'articile pour l'instant </p>" ;
    }
    ?>
    <?php 
    // fonction WP pour injecter des scripts pour la tools bar par exemple
    wp_footer() ; ?>
    
</body>
</html>