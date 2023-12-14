<?php
$db = new Database($config['database']);

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "select * from posts where id = :id";
	$posts = $db->query($query, [':id' => $id])->fetchAll();
}else {
	$query = "select * from posts";
	$posts = $db->query($query)->fetchAll();
}


foreach ($posts as $post) : ?>
	<li><?=$post['title']?></li>
<?php endforeach; ?>