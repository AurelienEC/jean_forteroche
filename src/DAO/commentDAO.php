<?php

class CommentDAO extends DAO
{
    public function getCommentsFromArticle($articleId)
    {
        $sql = 'SELECT id, pseudo, content, createdAt FROM comment WHERE article_id = ? ORDER BY createdAt DESC';
        return $this->createQuery($sql, [$articleId]);
    }

    public function add_comment()
        {
            if (isset($_POST["pseudo"]) AND isset($_POST["content"]) AND !empty($_POST["pseudo"]) AND !empty($_POST["content"]) AND !empty($_POST["article_id"]))
                {
                
                $pseudo = htmlspecialchars(addslashes($_POST['pseudo']));
                $content = htmlspecialchars(addslashes($_POST['content']));
                $article_id = htmlspecialchars(addslashes($_POST['article_id']));

                $sql = 'INSERT INTO comment (pseudo, content, createdAt, article_id) VALUES (?,?, NOW(),?)';
                
                return $this->createQuery($sql, array($pseudo, $content, $article_id));

            }
        }


}
 ?>

