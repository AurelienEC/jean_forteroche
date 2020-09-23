<?php
	
	function displayHome() 
	{
		//On inclut le fichier dont on a besoin (ici à la racine de notre site)
		require '../src/DAO/DAO.php';

		//On ajouter le fichier Article.php
		require '../src/DAO/ArticleDAO.php';
		//comment ajouter un article 

		/*on recupére tous nos article*/
		$article = new ArticleDAO();

        $articles = $article->getArticles();

        require '../views/home.php';

	}

	function displaySingle()
	{

		//On inclut le fichier dont on a besoin (ici à la racine de notre site)
	    require '../src/DAO/DAO.php';
	    
	    //On ajouter le fichier Article.php
	    require '../src/DAO/ArticleDAO.php';
	 
	    //On ajouter le fichier Comment.php
	    require '../src/DAO/CommentDAO.php';

	    //On recupere l'articles qu'on veut afficher grace l'attribut (GET)
	    $article = new ArticleDAO();
	    
       	$articles = $article->getArticle($_GET['articleId']);
       	//echo "Hello";
        //print_r($articles);
        // On récupérer tous les commentaires associés à l'article
        $comment = new CommentDAO();

        $comments = $comment->getCommentsFromArticle($_GET['articleId']);

        require '../views/single.php';

	}
 	function displayarticle()
 		{
 			require '../src/DAO/DAO.php';

			require '../src/DAO/ArticleDAO.php';

			$articleDAO = new ArticleDAO();

			$articleDAO->add_article();

			require '../views/add_Article.php';

 		}
	function  displaycomment()
		{
			require '../src/DAO/DAO.php';

			require '../src/DAO/CommentDAO.php';

			$CommentDAO = new CommentDAO();

			$CommentDAO->add_comment();

			require '../views/add_comment.php';

		}
		function  updatearticle()
		{
			require '../src/DAO/DAO.php';

			require '../src/DAO/ArticleDAO.php';

			$articleDAO = new ArticleDAO();

			$articleDAO->edit_Article();

			require '../views/edit_Article.php';

		}
 	
?>
