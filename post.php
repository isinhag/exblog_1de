<!-- inclusão do cabeçalho -->
<?php 
include_once("templates/header.php");

if(isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {

        if($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?$currentPost['title']?></h1>
        <p id="post-description"><?$currentPost['descripition']?></p>
        <div class="img-container">
            <img src="<? $BASE_URL ?>/img/ <?$currentPost['img']?> " alt="<?$currentPost['title']?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem at reiciendis facilis officiis vel. Quod esse explicabo ea voluptatum, cumque a molestiae ullam asperiores saepe modi minus optio nam minima.
        </p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dignissimos praesentium culpa sit nisi omnis, quidem doloribus sunt aspernatur nulla beatae ex repellendus nam expedita voluptates vero cupiditate voluptatem? Est?</p>
    </div>
    <div class="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><? $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</main>

<!-- Inclusão do rodapé -->
<?php
include_once("templates/footer.php");
?>