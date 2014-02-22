<?php
/*
Custom theme functions

Note: we recommend you prefix all your functions to avoid any naming
collisions or wrap your functions with if function_exists braces.
*/
/* Footer Links */
function dribbble_url() {
return 'https://dribbble.com/' . site_meta('acc_dribbble');
}

function twitter_url() {
return 'https://twitter.com/' . site_meta('acc_twitter');
}

function facebook_url() {
return 'https://facebook.com/' . site_meta('acc_facebook');
}

/* Page-Work */
function cat_page() {
	return site_meta('title', 'wert');
}

function article_category_id() {
    if($category = Registry::prop('article', 'category')) {
      $categories = Registry::get('all_categories');
      return $categories[$category]->id;
    }
  }

function custom_posts_page() {
  // only run on the first call
  if( ! Registry::has('rwar_post_archive')) {
    // capture original article if one is set
    if($article = Registry::get('article')) {
      Registry::set('original_article', $article);
    }
  }

  if( ! $posts = Registry::get('rwar_post_archive')) {
    $posts = Post::where('status', '=', 'published')->get();

    Registry::set('rwar_post_archive', $posts = new Items($posts));
  }

  if($result = $posts->valid()) {
    // register single post
    Registry::set('article', $posts->current());

    // move to next
    $posts->next();
  }
  else {
    // back to the start
    $posts->rewind();

    // reset original article
    Registry::set('article', Registry::get('original_article'));

    // remove items
    Registry::set('rwar_post_archive', false);
  }

  return $result;
}

function rwar_latest_posts($limit = 6) {
	// only run on the first call
	if( ! Registry::has('rwar_latest_posts')) {
		// capture original article if one is set
		if($article = Registry::get('article')) {
			Registry::set('original_article', $article);
		}
	}

	if( ! $posts = Registry::get('rwar_latest_posts')) {
		$posts = Post::where('status', '=', 'published')->sort('created', 'desc')->take($limit)->get();

		Registry::set('rwar_latest_posts', $posts = new Items($posts));
	}

	if($result = $posts->valid()) {
		// register single post
		Registry::set('article', $posts->current());

		// move to next
		$posts->next();
	}
	else {
		// back to the start
		$posts->rewind();

		// reset original article
		Registry::set('article', Registry::get('original_article'));

		// remove items
		Registry::set('rwar_latest_posts', false);
	}

	return $result;
}