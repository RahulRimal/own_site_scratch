<?php
/*
 *	Get # of replies per topic
 */
function replyCount($topic_id){
	$db = new Database;
	$db->query('SELECT * FROM replies WHERE topic_id = :topic_id');
	$db->bind(':topic_id', $topic_id);
	//Assign Rows
	$rows = $db->resultset();
	//Get Count
	return $db->rowCount();
}

// /*
//  *	Get Categories
//  */
// function getCategories(){
// 	$db = new Database;
// 	$db->query('SELECT * FROM category');
	
// 	//Assign Result Set
// 	$results = $db->resultset();

// 	return $results;
// }

// function productCountByCategory($categoryId)
// {
// 	$db = new Database;
// 	$db->query('SELECT * FROM product WHERE category_id=:categoryId');
// 	$db->bind('categoryId', $categoryId);
// 	$db->execute();

// 	return $db->rowCount();
// }

/*
 * User Posts
 */
function userPostCount($user_id){
	$db = new Database;
	$db->query('SELECT * FROM topics 
				WHERE user_id = :user_id
				');
	$db->bind(':user_id', $user_id);
	//Assign Rows
	$rows = $db->resultset();
	//Get Count
	$topic_count = $db->rowCount();
	
	$db->query('SELECT * FROM replies
				WHERE user_id = :user_id
				');
	$db->bind(':user_id', $user_id);
	//Assign Rows
	$rows = $db->resultset();
	//Get Count
	$reply_count = $db->rowCount();
	return $topic_count + $reply_count;
}



// OwnSite From Here

function getCarousel()
{
	$db = new Database();

	$db->query("SELECT * FROM `frontpage_carousel`");
	$images = $db->resultset();
	return $images;
}

/*
 *	Get Categories
 */
function getCategories(){
	$db = new Database();
	$db->query('SELECT * FROM category');
	
	//Assign Result Set
	$results = $db->resultset();

	return $results;
}

function productCountByCategory($categoryId)
{
	$db = new Database();
	$db->query('SELECT * FROM product WHERE category_id=:categoryId');
	$db->bind('categoryId', $categoryId);
	$db->execute();

	return $db->rowCount();
}