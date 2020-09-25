<?php
/*
  ./app/vues/posts/index.php
  Variables disponibles
    $posts= ARRAY(ARRAY(id, title, content, created_at, updated_at))
 */

?>
<?php foreach ($posts as $post): ?>
  <article class="blog_item">
      <div class="blog_item_img">
          <img class="card-img rounded-0" src="assets/img/blog/<?php echo $post['image']; ?>" alt="">
          <a href="posts/<?php echo $post['id']; ?>/<?php echo \Noyau\Fonctions\slugify($post['title']); ?>" class="blog_item_date">
              <h3><?php echo date('d', strtotime($post['created_at'])); ?></h3>
              <p><?php echo date('M', strtotime($post['created_at'])); ?></p>
          </a>
      </div>

      <div class="blog_details">
          <a class="d-inline-block" href="posts/<?php echo $post['id']; ?>/<?php echo \Noyau\Fonctions\slugify($post['title']); ?>">
              <h2><?php echo $post['title']; ?></h2>
          </a>
          <p><?php echo \Noyau\Fonctions\tronquer($post['content'],200); ?></p>
          <ul class="blog-info-link">
              <li><a href="#"><i class="fa fa-user"></i> <?php echo $post['firstname'] . " "?><?php echo $post['lastname'] ?></a></li>
          </ul>
      </div>
  </article>
<?php endforeach; ?>
