<?php

class NewsController
{
		public function actionAll()
			{
				// $art = NewsModel::findOneByColumn('title', 'Новый заголовок1453');
				// $art->title = 'Новый заголовок1';
				// $art->save();
				//
				// var_dump($art->text);

					$items = NewsModel::findAll();
					$view = new View();
					$view->items = $items;
					$view->display('news/showNews.php');
			}


		public function actionOne()
			{
					$id = $_GET['id'];
					$items = NewsModel::findOne($id);
					$view = new View();
					$view->items = $items;
					$view->display('news/showNews.php');
			}

		public function actionInsert()
			{
					$article = new NewsModel;
					// $article->title = 'Дарова!';
					// $article->text = 'Черьви!';
					$article->insert();
			}
}
