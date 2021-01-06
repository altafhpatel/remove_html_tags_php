# remove_html_tags_php

Here is how to remove html tags from any string we have write a function

```
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
} // function strip_only
```
