<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Бизнес-Акула</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
  <div id="app">
  </div>
  <script src="{{ mix('js/app.js') }}"></script>
      <!-- Yandex.Metrika counter -->
      <script src="https://mc.yandex.ru/metrika/watch.js" type="text/javascript"></script>
      <script type="text/javascript" >
      try {
          var yaCounter33686679 = new Ya.Metrika({
              id:33686679,
              clickmap:true,
              trackLinks:true,
              accurateTrackBounce:true,
              webvisor:true,
              trackHash:true
          });
      } catch(e) { }
      </script>
      <!-- /Yandex.Metrika counter -->
</body>
</html>
