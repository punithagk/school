<?php

/**
 * Sets the body-tag class attribute.
 *
 * Adds 'sidebar-left', 'sidebar-right' or 'sidebars' classes as needed.
 */
function phptemplate_body_class($left, $right) {
  if ($left != '' && $right != '') {
    $class = 'sidebars';
  }
  else {
    if ($left != '') {
      $class = 'sidebar-left';
    }
    if ($right != '') {
      $class = 'sidebar-right';
    }
  }

  if (isset($class)) {
    print ' class="'. $class .'"';
  }
}


/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return a string containing the breadcrumb output.
 */
function phptemplate_breadcrumb($breadcrumb) {
  if (!empty($breadcrumb)) {
    return '<div class="breadcrumb">'. implode(' › ', $breadcrumb) .'</div>';
  }
}

/**
 * Override or insert PHPTemplate variables into the templates.
 */
function phptemplate_preprocess_page(&$vars) {
	$vars['tabs2'] = menu_secondary_local_tasks();

	// Hook into color.module
	if (module_exists('color')) {
		_color_page_alter($vars);
	}
  
  
	// Make a shortcut for the primary links variables
	$primary_links = $vars['primary_links'];
	// Loop thru the menu, adding a new class for CSS selectors
	$i = 1;

	foreach ($primary_links as $link => $attributes){
		$class = 'menu-bg-color'.$i;
		
		if (strpos($link,'active')){
          $class .=' active  sf-with-ul';
        }
		
		// Add first, last and active classes to the list of links to help out themers.
		if ($i == 1) {
			$class .= ' first';
		}
		if ($i == $num_links) {
			$class .= ' last';
		}
		
		// Add revised classes back to the primary links temp variable
		$primary_links[$link]['attributes']['class'] = $class ;
		$i++;
	} // end the foreach loop

	// reset the variable to contain the new markup
	$vars['primary_links'] = $primary_links;
}


// Adding span class to the secondary links - For New UI
function school_links($links, $attributes = array('class' => 'links')) {
  global $language;
  global $user;
  $output = '';

  if (count($links) > 0) {
    $output = '<ul class="menu responsive-menu sf-js-enabled">';

    $num_links = count($links);
    $i = 1;

    foreach ($links as $key => $link) { 
	  if (strpos($key,'active')){
        $output .= '<li class="current">';        
      }else if($i == $num_links) {
		$output .= '<li class="last-item">';        
	  } else {
		$output .= '<li>';        
	  }
	  $output .= l(check_plain($link['title']), $link['href'], $link);
      $i++;
      $output .= "</li>";
    }		
    $output .= '</ul>';
  }

  return $output;
}

/**
 * Add a "Comments" heading above comments except on forum pages.
 */
function school_preprocess_comment_wrapper(&$vars) {
  if ($vars['content'] && $vars['node']->type != 'forum') {
    $vars['content'] = '<h2 class="comments">'. t('Comments') .'</h2>'.  $vars['content'];
  }
}

/**
 * Returns the rendered local tasks. The default implementation renders
 * them as tabs. Overridden to split the secondary tasks.
 *
 * @ingroup themeable
 */
function phptemplate_menu_local_tasks() {
  return menu_primary_local_tasks();
}

/**
 * Returns the themed submitted-by string for the comment.
 */
function phptemplate_comment_submitted($comment) {
  return t('!datetime — !username',
    array(
      '!username' => theme('username', $comment),
      '!datetime' => format_date($comment->timestamp)
    ));
}

/**
 * Returns the themed submitted-by string for the node.
 */
function phptemplate_node_submitted($node) {
  return t('!datetime — !username',
    array(
      '!username' => theme('username', $node),
      '!datetime' => format_date($node->created),
    ));
}

/**
 * Generates IE CSS links for LTR and RTL languages.
 */
function phptemplate_get_ie_styles() {
  global $language;

  $iecss = '<link type="text/css" rel="stylesheet" media="all" href="'. base_path() . path_to_theme() .'/fix-ie.css" />';
  if ($language->direction == LANGUAGE_RTL) {
    $iecss .= '<style type="text/css" media="all">@import "'. base_path() . path_to_theme() .'/fix-ie-rtl.css";</style>';
  }

  return $iecss;
}
