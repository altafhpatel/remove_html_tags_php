# Remove HTML Tags using PHP

Here is how to remove html tags from any string using php. we just need to use this function and call some parameters.
copy the below function to your php file and call it.
```PHP
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


# 1. How to remove "DIV" tags from String - using PHP

``` PHP
$string = '<div class="class">My Wonderfull data and remove div tag</div>';
stripHtmlTags($string,'div');
```

### 1.1. How to remove "DIV" tags from String - using PHP

use a 3rd parameter in the function and make it true like 

``` PHP
$string = '<div class="class">My Wonderfull data and remove div tag</div>';

//add 3rd parameter and make it true
stripHtmlTags($string,'div',true);
```

# 2. How to remove "LI" tags from String - using PHP

``` PHP
$string = '<li class="class">My Wonderfull li tag and remove only tag</li>';
stripHtmlTags($string,'li');
```

### 2.1. Remove "LI" tags and "DATA" - using PHP

``` PHP
$string = '<li class="class">My Wonderfull li tag and remove only tag</li>';
stripHtmlTags($string,'li',true);
```
