<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

 ab {
  margin-left: 10%;
}

/*sidebar*/
.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

</style>
</head>
<body>

<div class="topnav" id="main">
  <!--sidebar-->
    <button class="openbtn" onclick="openNav()">☰</button>

  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
  </div>

  <a class="active" href="https://youtube.com">Home</a>
  <a href="https://www.cnnindonesia.com/nasional/20230814111410-12-985733/pn-jaksel-terima-hasil-kasasi-sambo-cs-segera-dikirim-ke-jaksa">News</a>
  <a href="https://youtube.com">Contact</a>
  <a href="https://youtube.com">About</a>
  <form action="login.html" method="post">
    <button style="margin-left: 1500px;">Login</button>
  </form>
</div>

<div>
  <table border="1">
    <tr>
        <th rowspan="2">Tabel</th>
        <th>Nama</th>
        <th colspan="2">Fisika</th>
        <th colspan="3">Biologi</th>
    </tr>
    <tr>
        <td>Robby</td>
        <td>76</td>
        <td>76</td>
        <td>80</td>
        <td>80</td>
        <td>80</td>
    </tr>
  </table>
  <br>
  <label for="fname">Username:</label> <input type="text" id="Username:" name="Username"><br>
  <label for="fname">Password: </label> <input type="password" id="Password:" name="Password:"><br>
  <input type="checkbox">Ingat Saya<br>
  <button type="submit">Login</button>
</div>




<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "200px";
  document.getElementById("main").style.marginLeft = "200px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
</body>
</html>
