This is test view 
<pre>
<?php
	print_r( $data );

?>
</pre>

Get All Users
<pre>
<?php
	print_r($users);
?>
</pre>

Get All Posts
<pre>
<?php
	print_r($posts);
?>
</pre>

<h4>Test User0 email = 
<?php
	echo $users[0]->email;

?></h4>
<h4>Poster at post0 => <?php echo $posts[0]->user->email;?></h4>