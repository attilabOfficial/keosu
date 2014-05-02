<?php

namespace Keosu\CoreBundle\LiveReaderInterface;

/**
 * This is an interface to implement when you want to create an ECommerce live reader
 * @author florent
 *
 */
interface ECommerce {
	
	/**
	 * Set the readerId used in the next queries, if not defined throws an exception
	 * @param number $readerId
	 */
	public function setReader($readerId);
	
	/**
	 * Return all the names of categories with their ids
	 * @return JSON
	 */
	public function getCategories();
	
	/**
	 * Return the article list in JSON format
	 * @param number $numberOfArticle number of article per page
	 * @param number $page the number of the page
	 * @param string $search value to search in the articles
	 * @param number $categories id of the categorie
	 * @param array $sort sort of the product
	 * @return JSON
	 */
	public function getArticles($numberOfArticle = 10,$page = 1,$search = null,$categories = -1,$sort = null);
	
	/**
	 * Return all the data of the article
	 * @param unknown $id
	 * @return JSON 
	 */
	public function getArticle($id);
	
	/**
	 * Return all the information to show the cart
	 * @return JSON
	 */
	public function getCart();
	
	/**
	 * Add a new article to the cart or update the quantity of the article.
	 * @param unknown $id
	 * @param number $quantity 
	 * @return boolean false if the article is allready in the cart
	 */
	public function addArticleToCart($id,$quantity=1);
	
	/**
	 * Open the web browser with all the article in the cart
	 * @return void
	 */
	public function validCart();
	
	
}