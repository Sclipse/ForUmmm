<?php

 ?>


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
                        <a  href="#"><h1>Nova objava</h1></a>
                        <!-- after entering any page, display that same page; e.g. ForUmmm > News > World > ..... -->
                        <!-- look up "dl" tag for html on google -->
                   </div>
                   <div class="search">
                        <!-- text-box appears from 'pretraga' to the left and 'Pretraga 🔍' changes into only 🔍  (&#x1F50D)-->
                   </div>
              </div>
               <div class="f_content">

                    <div class="main_content">
                      <form  action="includes/novipost.inc.php" method="post">
                        Naslov: <br>
                        <textarea name="naslov" rows="1" cols="80"></textarea> <br>
                        Pitanje: <br>
                        <textarea name="post" rows="8" cols="80"></textarea> <br>
                        Kategorija:
                        <select  name="kategorija">
                          <option value="politika">Politika</option>
                          <option value="sport">Sport</option>
                          <option value="svak_zivot">Svakodnevni život</option>
                          <option value="skola">Škola</option>
                        </select>
                        <input type="submit" name="post-submit" value="Objavi">

                      </form>
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
