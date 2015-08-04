<?php

function printHeader($title = null)
{
	global $DEFAULT_HEADER;
	if( !isset($title) )
	{
		$title = $DEFAULT_HEADER;
	}
	echo "$title";
}

function printFooter()
	{
		echo 'Az sum FOOTER';
	}

function htmlLink($title = 'abv', $url = 'www.abv.bg')
{
	echo "<div><a href='$url'>$title</a></div>";
	return "<div><a href='$url'>$title</a></div>";
	
}

function miltiply(&$number, $multi)
{
	$number *=$multi;
}

function po2()
{
	static $count = 1;
	$count*=2;
	echo 'count = '.$count;
	echo "<br>";
}

?>