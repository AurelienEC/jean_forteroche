 <?php
    class ArticleDAO extends DAO
    {
        public function getArticles()
        {
            $sql = 'SELECT id, title, content, author, createdAt FROM article ORDER BY id DESC ' ;
            $query = $this->createQuery($sql);
            $articles = $query->fetchAll();
            
            return $articles; 
        }

        public function getArticle($articleId)
        {
            $sql = 'SELECT id, title, content, author, createdAt FROM article WHERE id = ?';
            /*return $this->createQuery($sql, [$articleId]);*/
            $query = $this->createQuery($sql,[$articleId]);
            $articleId = $query->fetchAll();
            
            return $articleId; 
        }

        public function add_article()
        {
            if (isset($_POST["title"], $_POST["content"], $_POST["author"]) AND !empty($_POST["title"]) AND !empty($_POST["content"]) AND !empty($_POST["author"]))
                {
        
                $title = htmlspecialchars(addslashes($_POST['title']));
                $content = htmlspecialchars(addslashes($_POST['content']));
                $author = htmlspecialchars(addslashes($_POST['author']));

                $sql = 'INSERT INTO article (title, content, author, createdAt) VALUES (?, ?, ?, NOW())';

            return $this->createQuery($sql,[$title, $content, $author]);
            }
        }
        public function edit_Article()
        {
             if (isset($_POST["title"], $_POST["content"], $_POST["author"]))
                {
        
                $title = htmlspecialchars(addslashes($_POST['title']));
                $content = htmlspecialchars(addslashes($_POST['content']));
                $author = htmlspecialchars(addslashes($_POST['author']));

                $sql = 'UPDATE article (title, content, author, createdAt) VALUES (?, ?, ?, NOW())';
                return $this->createQuery($sql,[$title, $content, $author]);
            }
        }
    }

?>
