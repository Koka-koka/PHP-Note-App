<?php

$heading = "Create Note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	echo "You submited the form";
}

require ("./views/note-create.view.php");