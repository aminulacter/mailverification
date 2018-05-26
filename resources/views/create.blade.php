<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>create Student</title>
  </head>
  <body>
      <form class="" action="{{ route('create') }}" method="post">
        {{csrf_field()}}

          <br>
          <input type="text" name="name" value="" placeholder="name">
          <br>
          <input type="email" name="email" value="" placeholder="email">
          <br>
          <input type="password" name="password" value="" placeholder="password">
          <br>
          <input type="submit" name="" value="Submit">

      </form>
  </body>
</html>
