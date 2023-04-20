<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculator Form</title>
    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="/style.css" rel="stylesheet">
  </head>
  <body class="text-center">
 
  <main class="form-signin w-100 m-auto">
    <form action="http://localhost/calc/result" method="get">
      <h1 class="h3 mb-3 fw-normal">Calculator</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="a" placeholder="Enter a">
        <label for="floatingInput">A</label>
      </div>
      <div class="form-floating">
        <input type="text" name ="b" class="form-control" id="floatingPassword" placeholder="Enter B">
        <label for="floatingPassword">B</label>
      </div>
      <div class="form-floating mb-3">
        <select name="opr" class="form-control">
          <option value="add">Add</option>
          <option value="multiply">Multiply</option>
          <option value="subtract">Subtract</option>
        </select>
        <label for="floatingPassword">Operation</label>
      </div>
      
      <button class="w-100 btn btn-lg btn-primary" type="submit">Calculate</button>
     
    </form>
  </main>  
  </body>
</html>
