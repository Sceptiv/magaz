<?php require_once(ROOT.'/views/layouts/header.php');?>
<div class="container">
<h1>Кабинет пользователя</h1>
<h2>Привет, <?= $user['name'];?></h2>
<p><a href='/cabinet/edit/'>Редактировать профиль</a></p>
</div>
<?php require_once(ROOT.'/views/layouts/footer.php');?>