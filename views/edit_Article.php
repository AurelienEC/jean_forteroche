<?php/* $this->title = "Modifier l'article";*/ ?>
<h1>Modifier mon article</h1>
<div>
    <form method="post" action="../public/index.php?route=edit_Article&articleId=articleId">
        <label for="title">Titre</label><br>
        <input type="text" id="title" name="title" value="<?php echo $_GET['articleId'] ?>"><br>

        <label for="content">Contenu</label><br>
        <textarea id="content" name="content"><?php echo $_GET['content'] ?></textarea><br>

        <input type="hidden" id="POST" name="article_id" value="<?php echo $_GET['articleId'] ?>"><br>

        <label for="author">Auteur</label><br>
        <input type="text" id="author" name="author" value="<?php echo $_GET['author'] ?>"><br>

        <input type="submit" value="Mettre à jour" id="submit" name="submit">
    </form>
    <a href="../public/index.php">Retour à l'accueil</a>
</div>