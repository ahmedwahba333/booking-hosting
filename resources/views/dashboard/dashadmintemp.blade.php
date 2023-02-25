<!DOCTYPE html>
<html>
<title>dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->




<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:14%">


  <h3 class="w3-bar-item" style="background-color: rgb(10, 165, 147)">dashboardAdmin</h3>
  <h3>
  <a href="useradmin"  class="w3-bar-item w3-button">user</a>
  <a href="owneradmin"  class="w3-bar-item w3-button">owner</a>
  <a href="flatadmin"  class="w3-bar-item w3-button">flat</a>
  <a href="requestadmin"  class="w3-bar-item w3-button">request</a>
  <a href="addservices"  class="w3-bar-item w3-button">addServices</a>
</h3>
</div>

<!-- Page Content -->
<div style="margin-left:14%">

<div class="w3-container w3-teal">
  <h1>Dashboard Admin</h1>
</div>
<div class="w3-container">

    @yield('dashboardadmin')

</div>
      
</body>
</html>


