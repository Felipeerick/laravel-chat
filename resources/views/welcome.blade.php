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
    <title>Home | TalkingApp</title>
  </head>
  <body class="homePage">
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
          src="assets/images/logo.png"
          alt="Logo which shows a two chat icon and the TalkingApp text"
        />

        <ul class="responsive_navbar__list">
          @if(Auth::user())
            <li>
              <a href="/dashboard" target="_self">Chat</a>
            </li>
          @else
            <li>
              <a href="/" target="_self">Home</a>
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
              <a
                href="/register"
                target="_self"
                rel="next"
                >Register</a
              >
            </li>
          @endif
        </ul>

        <p>Felipe Erick & Guilherme Rocha - 2022</p>
      </nav>
    </header>

    <main id="main">
      <h1>
        <span style="--i: 1">Your</span>
        <span style="--i: 2">Live</span>
        <span style="--i: 3">Chat</span>
        <span style="--i: 4">Is</span>
        <span style="--i: 5">Here.</span>
      </h1>
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
