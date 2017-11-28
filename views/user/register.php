<?php include ROOT . '/views/layouts/header.php'; ?>


<section>
    <div class="container">
        <div class="row">
            
            <div class="col-sm-4 col-sm-offset-4 padding-right">
              
              <?php if ($result): ?>
                  <p>Ви успішно зарегіструвалися</p>
              <?php else: ?>      
               
               <?php if (isset($errors) && is_array($errors)): ?>
                   <ul>
                       <?php foreach ($errors as $error): ?>
                           <li><?php echo $error; ?></li>
                        <?php endforeach; ?>   
                   </ul>
                <?php endif; ?>   
                
                <div class="signup-form">
                    <h2>Регістація на сайті</h2>
                    <form action="#" method="post">
                        <input type="text" name="name" placeholder="Імя" value="<?php echo $name; ?>">
                        <input type="email" name="email" placeholder="email" value="<?php echo $email; ?>">
                        <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>">
                        <input type="submit" name="submit" class="btn btn-defoult" value="Регістрація">
                    </form> 
                </div>
                
                <?php endif; ?>
                
                <br><br>
            </div>
            
        </div>
    </div>
</section>


<?php include ROOT . '/views/layouts/footer.php'; ?>