<?php

function loadInnerPage(){
	if(isset($_GET['page'])){
		$page = $_GET['page'] . '.php';
		if (file_exists('sections/inner/'.$page)) {

			require('sections/inner/' . $page);

		}else{

			require('sections/404.php');

		}

	}else{

		require('sections/inner/home.php');

	}
}