<?php include ROOT . '/views/layouts/header.php'; ?>


<section>
    <div class="container">
        <div class="row">
            
            <h1>Кабінет користувача</h1>
            <h3>Привіт <?php echo $user['name'];?> </h3>
            
            <ul>
                <li><a href="/cabinet/edit">Редагувати дані</a></li>
                <li><a href="/user/history">Список покупок</a></li>
            </ul>
            
        </div>
    </div>
</section>



<?php include ROOT . '/views/layouts/footer.php'; ?>