


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <script type="text/javascript">

    </script>

    <title>ForUmmm</title>
</head>

<!-- HEADER -->

<body>
<header>
     <a href="#" onclick="home();" style="color:black;">   <h1 class="logo">ForUmmm</h1> </a>
     <input type="checkbox" id="nav-toggle" class="nav-toggle">
     <nav>
          <ul>
               <li><a href="#" onclick="home();">Home</a></li>
               <li><a href="#">About</a></li>
               <li><a href="#">Search</a></li>
               <li><a href="#">Sign In</a></li>

          </ul>
     </nav>
     <label for="nav-toggle" class="nav-toggle-label">
          <span></span>
     </label>
</header>

<!-- FORUM -->

    <div class="forum">


         <div class="f_middle">
              <div class="content_header">
                  <!-- questionable class name?? -->
                  <div class="current_page">
                       <a  href="#"><h1></h1></a>
                       <!-- after entering any page, display that same page; e.g. ForUmmm > News > World > ..... -->
                       <!-- look up "dl" tag for html on google -->
                  </div>
                  <div class="search">
                       <a  href="#">Pretraga 🔍</a>
                       <!-- text-box appears from 'pretraga' to the left and 'Pretraga 🔍' changes into only 🔍  (&#x1F50D)-->
                  </div>
             </div>
              <div class="f_content">
                   <div class="main_content">
                     <?php
                     session_start();
                     require 'includes/dbconnect.inc.php';
                     $id = $_GET['id'];
                     $category = $_GET['category'];

                     $sql = "SELECT naslov,post,username,date_time FROM $category WHERE id =$id";
                     $result = mysqli_query($conn, $sql);
                     $row = mysqli_fetch_array($result);
                     echo "<h1>".$row['naslov']."</h1>";
                     echo "<table><tr><td style='background-color: grey;font-weight:bold;'><div>".$row['post']."</div><br><br><div align=right>Posted by user: <i>".$row['username']." </i><em>,  ".$row['date_time']."</em> </div></td> </tr>";
                     $query="SELECT post,username,date_time,id,komentar,postId FROM $category WHERE postId=$id && komentar = 'true'";
                     $result = mysqli_query($conn,$query);

                     while($row = $result->fetch_assoc()){
                       echo "<tr><td style='background-color:grey;'>".$row['post']."<br><br> <div alight=right>Posted by user: <i>".$row['username']." </i><em>,  ".$row['date_time']."</em>  </div></td></tr>";
                     }
                     echo "</table><hr>";

                     if($_SESSION['loggedin'] == true){
                       echo "<form action='includes/komentar.inc.php' method='post'>";
                       echo "<textarea name='komentar' rows='5' cols='80'></textarea> <br>";
                       echo "<input type='submit' name='komentar-submit' value='Komentiraj'>";
                       echo "<input type='hidden' name='postId' value=".$id.">";
                       echo "<input type='hidden' name='kategorija' value=".$category.">";
                       echo "</form>";

                     }else{
                       echo "Prijavi se da bi mogao komentirati";
                     }




                      ?>
                       <div class="f_title">

                      </div>
                      <!-- forum layout starts here -->
                      <!-- if its okay w you  -->
                  </div>
                  <div class="side_menu">
                       <!-- just a suggestion (i saw it on bug.hr) -->
                  </div>
             </div>
         </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    </script>
</body>

</html>