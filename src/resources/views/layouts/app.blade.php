<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rese</title>
  <link rel="stylesheet" href="{{ asset('css/common.css')}}">
  <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <div class="menu">
        <label for="menu_btn-check" class="menu_btn">
          <span></span>
        </label>
      </div>
      <h1 class="header__logo">Rese</h1>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>

</html>