<?php
		    require '../src/DAO/DAO.php';
			//On ajouter le fichier Article.php
			require '../src/DAO/ArticleDAO.php';
			//On ajouter le fichier Comment.php
			require '../src/DAO/CommentDAO.php';

	function displayHome() 
	{
		/*on recupére tous nos article*/
		$article = new ArticleDAO();

        $articles = $article->getArticles();

        require '../views/home.php';

	}

	function displaySingle()
	{
		//On inclut le fichier dont on a besoin (ici à la racine de notre site)
	    //On recupere l'articles qu'on veut afficher grace l'attribut (GET)
	    $article = new ArticleDAO();
       	$articles = $article->getArticle($_GET['articleId']);
        $comment = new CommentDAO();
        $comments = $comment->getCommentsFromArticle($_GET['articleId']);

        require '../views/single.php';

	}
 	function displayarticle()
 		{
			$articleDAO = new ArticleDAO();
			$articleDAO->add_article();
			require '../views/add_Article.php';

 		}
	function  displaycomment()
		{
			$CommentDAO = new CommentDAO();

			$CommentDAO->add_comment();

			require '../views/add_comment.php';

		}
		function  updatearticle()
		{
			$articleDAO = new ArticleDAO();

			$articleDAO->edit_Article();

			require '../views/edit_Article.php';

		}
