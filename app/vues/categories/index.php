<?php
/*-------------------------------------------------------
../app/vues/categories/index.php
Liste des catégories
Variables disponibles $categories (tableau de tableaux indexés)
-----------------------------------------------------------*/

?>
<h4 class="widget_title">Category</h4>
<ul class="list cat-list">

<?php foreach ($categories as $categorie): ?>

      <li>
          <a href="categories/<?php echo $categorie['id']."/". \Noyau\Fonctions\slugify($categorie['name']); ?>" class="d-flex">
            <p><?php echo $categorie['name']; ?></p>
            <p>(<?php echo $categorie['nbr']; ?>)</p>
          </a>
      </li>

<?php endforeach; ?>
</ul>
