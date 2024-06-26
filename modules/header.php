<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand" href="../index.php"><img src="../img/logo/logo.png" class="logo" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse enter" id="navbarNav">
        <ul class="navbar-nav ms-auto menu">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../index.php">ГЛАВНАЯ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/catalog.php">КАТАЛОГ</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/me.php">О НАС</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/contacts.php">КОНТАКТЫ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/korz.php">КОРЗИНА</a>
          </li>
          <?php if (!isset($_COOKIE['role'])): ?>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ВОЙТИ
            </a>
            <ul class="dropdown-menu regAuth">
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">РЕГИСТРАЦИЯ</a></li>
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">АВТОРИЗАЦИЯ</a></li>
            </ul>
            <?php else: ?>
            <li class="nav-item">
              <a class="nav-link" href="../pages/account.php">ЛИЧНЫЙ КАБИНЕТ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../php/exit.php">ВЫХОД</a>
            </li>
            <?php endif; ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <hr size="5px" class="yellow_block hr_header">

  <!-- Modal регистрация -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel"><p>РЕГИСТРАЦИЯ</p></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!--форма, добавила action и метод-->
          <form class="row g-3 needs-validation" novalidate action="../php/reg.php" method="POST">
            <div class="col-md-12">
              <label for="firstName" class="form-label"><p>Имя</p></label>
              <input type="text" class="form-control" id="firstName" name="name" required>
              <div class="invalid-feedback">
                <p>Введите имя</p>
              </div>
            </div>
            
            <div class="col-md-12">
              <label for="lastName" class="form-label"><p>Фамилия</p></label>
              <input type="text" class="form-control" id="lastName" name="surname" required>
              <div class="invalid-feedback">
                <p>Введите фамилию</p>
              </div>
            </div>
            <script> 
              function allowOnlyLetters(event) { 
                var charCode = event.charCode; 
                if (!(/[a-zA-Zа-яА-ЯёЁ]/.test(String.fromCharCode(charCode)))) { 
                  event.preventDefault(); 
                } 
              } document.getElementById('firstName').addEventListener('keypress', allowOnlyLetters); document.getElementById('lastName').addEventListener('keypress', allowOnlyLetters); 
            </script>
            <div class="col-md-12">
              <label for="validationCustom03" class="form-label"><p>Логин</p></label>
              <input type="login" class="form-control" minlength="6" maxlength="20" id="validationCustom03" name="login" required>
              <div class="invalid-feedback">
                <p>Введите логин не менее 6 и не более 20 символов</p>
              </div>
            </div>

            <div class="col-md-12">
              <label for="validationCustom04" class="form-label"><p>Пароль</p></label>
              <input type="password" minlength="8" maxlength="20" class="form-control" id="validationCustom04" name="password" required>
              <div class="invalid-feedback">
                <p>Введите пароль не менее 8 и не более 20 символов</p>
              </div>
            </div>

            <div class="col-12 pers"> 
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                  <p>Я согласен на <a href="../pages/contacts.php#part1">обработку персональных данных</a></p>
                </label>
                <div class="invalid-feedback">
                  <p>Согласитесь с условиями</p>
                </div>
              </div>
            </div>
            <div class="col-12 d-flex justify-content-end reg">
              <button class="btn btn-light" type="submit"><p>Зарегистрироваться</p>
              </button>
            </div>
          </form>
        </div>
        <!--удалила футер модалки-->
        
      </div>
    </div>
  </div>

  <!-- Modal авторизация -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop1Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdrop1Label"><p>АВТОРИЗАЦИЯ</p></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!--форма, добавила action и метод-->
          <form class="row g-3 needs-validation" novalidate action="../php/auth.php" method="POST">
  
            <div class="col-md-12">
              <label for="validationCustom01" class="form-label"><p>Логин</p></label>
              <input type="login" class="form-control" id="validationCustom01" name="login" required>
              <div class="invalid-feedback">
                <p>Введите логин</p>
              </div>
            </div>

            <div class="col-md-12">
              <label for="validationCustom02" class="form-label"><p>Пароль</p></label>
              <input type="password" class="form-control" id="validationCustom02" name="password" required>
              <div class="invalid-feedback">
                <p>Количество символов не менее 8</p>
              </div>
            </div>

            <div class="col-12 d-flex justify-content-end reg">
              <button class="btn btn-light" type="submit"><p>Авторизоваться</p>
              </button>
            </div>
          </form>
        </div>
        <!--удалила футер модалки-->
      </div>
    </div>
  </div>
</header>