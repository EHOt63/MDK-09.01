<?php
<!DOCTYPE html>
<html>
<HEAD>
<link rel="stylesheet" href="laba22.css"> <meta charset="utf-8">
<meta charset="utf-8">
<title>Значение reset (input-type)</title>
</HEAD>
<body>
<form action="LABA22.PHP" method="post">
<div class="registration-cssave">
<form>
<h3 class="text-center">Форма входа</h3>
<div class="form-group">
<input class="form-control item" type="text" name="username" maxlength="15" minlength="4" pattern="^[a-zA-Z0-9_.-]*$" id="username" placeholder="Логин" required>
</div>
<div class="form-group">
<input class="form-control item" type="password" name="Пароль" minlength="6" id="password" placeholder="Введи пароль пользователя" required >
</div>
<div class="form-group">
<input class="form-control item" type="password2" name=" повторно Пароль" minlength="6" id="password2" placeholder="Повтори пароль пользователя" required>
</div>
<div class="form-group">
<input class="form-control item" type="email" name="email" id="email" placeholder="Email" required>
</div>
<label>
Подписаться на рассылку: <input type="checkbox" checked="checked" name="subscribe">
</label>
<div class="form-group">
<button class="btn btn-primary btn-block create-account" type="submit">зарегестрироваться</button>
</div>
</form>
<div class="form-group"> 
<p><input type="reset" value="Сбросить" class="btn btn-primary btn-block create-account"></p> 
</div>
</body>
</html>