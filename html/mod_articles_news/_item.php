<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$item_heading = $params->get('item_heading', 'h4');

$firstImageFound = preg_match('/(<img)([^>])*(src=["\']([^"\']+)["\'])([^>])*/i', $item->introtext, $matches);
	if($firstImageFound) {
		$firstImage = $matches[4];
		//echo '<img alt="'.$item->title.'" src="'.$firstImage.'" />';
		$doc = JFactory::getDocument();
		$style = '#jumbo-'.$item->id.' {'
			. 'background-image:linear-gradient(rgba(0, 0, 0, 0.25),rgba(0, 0, 0, 0.25)),' 
			. 'url('.$firstImage.');'
			. '}'
			. '#jumbo-'.$item->id.':hover {'
			. 'background-image:linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.75)),' 
			. 'url('.$firstImage.');'
			. '}'
			; 
		$doc->addStyleDeclaration( $style );
	}

?>


<div class="row">
	<a href="<?php echo $item->link; ?>">
		<div class="jumbotron" id="jumbo-<?php echo $item->id; ?>">
			</br></br></br></br></br>
			<?php if ($params->get('item_title')) : ?>

				<h4 class="newsflash-title<?php echo $params->get('moduleclass_sfx'); ?>">
				<?php if ($params->get('link_titles') && $item->link != '') : ?>			
						<?php echo $item->title; ?>
					</br>
					<h5><?php echo $item->author; ?></h5>
				<?php else : ?>
					<?php echo $item->title; ?>
				<?php endif; ?>
				</h4>
				</br></br></br></br></br>
			<?php endif; ?>

			<?php if (!$params->get('intro_only')) : ?>
				<?php echo $item->afterDisplayTitle; ?>
			<?php endif; ?>

			<?php echo $item->beforeDisplayContent; ?>




			<?php if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) : ?>
				<?php echo '<a class="readmore" href="' . $item->link . '">' . $item->linkText . '</a>'; ?>
			<?php endif; ?>
		</div>
	</a>
</div>
