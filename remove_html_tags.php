/*========================
function-Name == stripHtmlTags
Parameters... ==
$str (string with html tags)
$tags (which tag to strip e.g. 'li')
$stripContent(make it true to remove inside content)
==========================
*/
function stripHtmlTags($str, $tags, $stripContent = false) {
	  $content = '';
	  if(!is_array($tags)) {
	      $tags = (strpos($str, '>') !== false ? explode('>', str_replace('<', '', $tags)) : array($tags));
	      if(end($tags) == '') array_pop($tags);
	  }
	  foreach($tags as $tag) {
      if ($stripContent)
       $content = '(.+</'.$tag.'[^>]*>|)';
       $str = preg_replace('#</?'.$tag.'[^>]*>'.$content.'#is', '', $str);
		}
  	return $str;
}
