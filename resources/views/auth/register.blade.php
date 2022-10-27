<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="{{asset('assets/images/icons/favicon.ico')}}"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="{{asset('assets/styles/styles.css')}}" />
    <title>Register | TalkingApp</title>
  </head>
  <body class="registerPage">
    <header id="header">
      <div class="header__logo_container">
        <a href="/">
          <img
            class="logo_container__logo"
            src="{{asset('assets/images/logo.png')}}"
            alt="Logo which shows a two chat icon and the TalkingApp text"
          />
        </a>
      </div>

      <nav class="header__navbar">
        <ul class="header__navbar__list">
          <li>
            <a href="/" target="_self">Home</a>
          </li>
          <li>
            <a href="/login" target="_self" rel="next">Login</a>
          </li>
          <li>
            <a href="/register" target="_self" rel="next">Register</a>
          </li>
        </ul>
        <img
          class="header__navbar__responsive_burger_menu"
          src="{{asset('assets/images/responsive_burger_menu.png')}}"
          alt="Responsive Burger Bars"
        />
      </nav>

      <nav class="responsive_navbar hide">
        <div role="button" class="close_navbar_container">
          <div class="close_bar_axis" id="leftAxis"></div>
          <div class="close_bar_axis" id="rightAxis"></div>
        </div>

        <img
          src="{{asset('assets/images/logo.png')}}"
          alt="Logo which shows a two chat icon and the TalkingApp text"
        />

        <ul class="responsive_navbar__list">
          <li>
            <a
              href="/"
              target="_self"
              rel="prev"
              
              >Home</a
            >
          </li>
          <li>
            <a
              href="/login"
              target="_self"
              rel="next"
             
              >Login</a
            >
          </li>
          <li>
            <a href="/register" target="_self"
              >Register</a
            >
          </li>
        </ul>

        <p>Felipe Erick & Guilherme Rocha - 2022</p>
      </nav>
    </header>

    <main id="main">
      <h1>Welcome!</h1>
      <form id="auth_form" method="POST" action="{{ route('register') }}">
        @csrf
        <h2>Register</h2>

        <img
          class="logo_container__logo"
          src="{{asset('assets/images/logo.png')}}"
          alt="Logo which shows a two chat icon and the TalkingApp text"
        />

        <div>
          <input
            type="text"
            name="name"
            id="name"
            placeholder="Name | Ex: user"
            autocomplete="off"
            required
          />
        </div>
        <div>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="E-mail | Ex: user@user.com"
            autocomplete="off"
            required
          />
        </div>
        <div>
          <input
            type="password"
            name="password"
            id="password"
            placeholder="Password | Ex: 12345678"
            required
          />
        </div>
        <div>
          <input
            type="password"
            name="password_confirmation"
            id="password_confirmed"
            placeholder="Confirm Password | Ex: 12345678"
            required
          />
        </div>
        <button id="authSubmitButton" type="submit">Register</button>
        <button id="clearInputsButton" type="reset">
          <p>Clear Inputs</p>
          <img
            src="../assets/images/icons/eraser_icon.png"
            alt="Eraser Icon used to clear inputs"
          />
        </button>

        <!-- This id refers to the current menu: login / register -->
        <h3 class="toggleAuthMsgButton">
          Already a user?
          <a
            id="openRegisterMenuButton"
            href="login.html"
            target="_self"
            role="button"
          >
            <span>SIGN IN</span>
          </a>
        </h3>
      </form>
    </main>

    <footer id="footer">
      <p>
        Made with
        <img
          class="heart_icon"
          src="{{asset('assets/images/icons/heart_icon.png')}}"
          alt="Heart Icon"
        />
        by
        <strong id="creators">
          <a
            class="creators__creator"
            href="https://github.com/Felipeerick"
            target="_blank"
            rel="external"
            >Felipe Erick</a
          >
          &
          <a
            class="creators__creator"
            href="https://github.com/guilhermescr"
            target="_blank"
            rel="external"
            >Guilherme Rocha</a
          >
        </strong>
        - 2022
      </p>
      <img
        class="logo_container__logo"
        src="{{asset('assets/images/logo.png')}}"
        alt="Logo which shows a two chat icon and the TalkingApp text"
      />
    </footer>

    <script src="{{asset('assets/js/scripts.js')}}"></script>
  </body>
</html>
