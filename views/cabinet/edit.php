<?php include ROOT . '/views/layouts/header.php'; ?>


<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">

                <?php if ($result): ?>
                    <p>Дані успішно змінені!</p>
                <?php else: ?>      

                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>   
                    </ul>
                <?php endif; ?>   

                <div class="signup-form">
                    <h2>Редагування даних</h2>
                    <form action="#" method="post">
                        <p>Імя:</p> 
                        <input type="text" name="name" placeholder="Імя" value="<?php echo $name; ?>">
                        <p>Пароль:</p>
                        <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>">
                        <input type="submit" name="submit" class="btn btn-defoult" value="Зберегти">
                    </form> 
                </div>

                <?php endif; ?>

                <br><br>
            </div>

        </div>
    </div>
</section>


<?php include ROOT . '/views/layouts/footer.php'; ?>