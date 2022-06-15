<?php include 'head.php' ?>
<?php include 'menu.php' ?>

<div class="circle"></div>
  <form class="form">
      <h2 class="form__title">Login</h2>
      <p class="form__paragraph">Não tem uma conta? <a href="#" class="form__link">Entre aqui</a></p>
      <div class="form__container">
          <div class="form__group">
              <input type="text" id="user" class="form__input" placeholder=" ">
              <label for="user" class="form__label">Usuario:</label>
              <span class="form__line"></span>
          </div>
          <div class="form__group">
              <input type="text" id="password" class="form__input" placeholder=" ">
              <label for="password" class="form__label">Senha:</label>
              <span class="form__line"></span>
          </div>
          <input type="submit" class="form__submit value=Entrar">
      </div>
  </form>
  
<?php include 'js.php' ?>
<?php include 'footer.php' ?>