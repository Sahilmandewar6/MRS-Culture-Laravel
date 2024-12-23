<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
  main{
    height: 300px;
    width: 250px;
    align-content: center;
    margin-left: 42%;
  }
  h3{
    color: green;
    font-size:xx-large;
    text-align: center;
    text-decoration: underline red;
  }
  body{
    border: 2px solid black;
  }
</style>
    
</head>
<body>
    <h3>Login</h3>
   

  <main>
    <form action="fetch" method="post">
      @csrf
      <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="" aria-describedby="emailHelpId">
      
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Father Name</label>
            <input type="text" class="form-control" name="fname" id="" aria-describedby="emailHelpId">
        
          </div>
    
          <div class="mb-3">
            
            <input type="submit" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com">
        
          </div>
  
     </form>
  </main>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>
</html>