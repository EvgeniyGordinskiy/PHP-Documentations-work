<!DOCTYPE html>
<html>
<head>
	<title>Maximum power</title>
	<link rel="stylesheet" type="text/css" href="/styles.css">
	<script type="text/javascript" src="function.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
</head>
<div class="header">
	<ul>
	<?php if(2 == 5): ?>
	<li>
	<form action="index.php" method="POST" enctype="multipart/form-data" id="startForm">
	<input type="email" name="email">
	<input type="password" name="pass">
	<input type="hidden" name="url" value="login">
	</form>
	</li>
	<?php endif; ?>
		<li>
		<select name="lang">
			<option value="php" >PHP</option>
			<option>JS</option>
		</select>
		</li>
		<li>
			<form action="add method="POST"  enctype="multipart/form-data">
				<input type="hidden" value="add" name="add">
			<button class="button" type="submit">Add task</button>
			</form>
		</li>
	</ul>
	<div class="sidebar">

		<!-- 	<ul class="menu">
                <li class="p_menu"><a href="#">Documentation </a>
                    <ul class="v_menu">
                        <li class="p_menu"><a href="#">Arrays </a>
                            <ul class="v_menu">
                                <li><a href="/get/array/array1">array1</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul> -->
	</div>
</div>
<div class="workPlace">

