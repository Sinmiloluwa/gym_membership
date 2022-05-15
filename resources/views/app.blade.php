<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300&display=swap" rel="stylesheet">
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/87fe01986c.js" crossorigin="anonymous"></script>
    @inertiaHead
  </head>
  <body style="font-family: 'Roboto Flex';">
      <section class="">
         @inertia
      </section>
    
  </body>
</html>