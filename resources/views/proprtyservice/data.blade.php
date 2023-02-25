
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<table class="table table-dark table-hover" style="margin:10%;width:50%;">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">serviceID</th>
      <th scope="col">propertyID</th>

      
    </tr>
  </thead>
  <tbody>
  
    <table class="table table-dark table-hover" style="margin:7%;width:55%;">
      <thead>
        <tr>
       
          <th scope="col">serviceID</th>
          <th scope="col">propertyID</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($propertyservices as $i)
          <tr>
          
              <td>{{$i["services_id"]}}</td>
              <td>{{$i["properties_id"]}}</td>
              </td>
            </tr>
          @endforeach
      </tbody>
    </table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
</body>
</html>