<?php
/*
  ./app/vues/categories/show.php
  Variables disponibles
    $categorie= ARRAY(id, name, posts)
 */
?>
<h4 class="widget_title">Posts de la categorie <?php echo $postsCategorie[0]['name']; ?></h4>
      <ul class="list cat-list">

        <?php foreach ($postsCategorie as $posts): ?>

              <li>
                <img class="card-img rounded-0" src="assets/img/blog/<?php echo $posts['image']; ?>" alt="">
                <a class="d-inline-block" href="posts/<?php echo $posts['postId']; ?>/<?php echo \Noyau\Fonctions\slugify($posts['title']); ?>">
                  <p><?php echo $posts['title']; ?></p>
                </a>
              </li>

        <?php endforeach; ?>
      </ul>

   </div>
</div>
