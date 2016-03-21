<?php
/**
* Template Page of Archives
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

        <div class="container">
				<?php
					$this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
				    $year=0; $i=0; $j=0;
				    $output = '<div class="archives-outer">';
				    while($archives->next()):
				        $year_tmp = date('Y',$archives->created);
				        $y=$year;
				        if ($year != $year_tmp && $year > 0) $output .= '</div></div>';
				        if ($year != $year_tmp) {
				            $year = $year_tmp;
				            $output .= '<div class="archives-wrapper cf"><div class="archive-year">'. $year .'</div><div class="archives cf">';
				        }
				        $output .= '<div class="archive-article"><div class="archive-article-inner"><div class="archive-article-date">'.date('F jS ',$archives->created).'</div><div class="archive-article-title"><a href="'.$archives->permalink .'" itemprop="name" target="_blank">'. $archives->title .'</a></div></div></div>';
				    endwhile;
				    $output .= '</div></div></div>';
				    echo $output;
				?>
		</div>

<?php $this->need('footer.php'); ?>