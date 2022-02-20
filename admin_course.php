<?php
include "dbConnection.php"
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="admin_course_style.css">
  <title>Hello, world!</title>
</head>

<body>




  <!-- Main Start row -->
  <div class="row">

    <!-- Start vartical navbar -->
    <nav style="padding-top: 80px;" class="col-md-2 d-none d-md-block  sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item ">
            <a class="nav-link  active" href="admin_dasboard.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
              </svg>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a style = "color: black"class="nav-link bg-warning active" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                <polyline points="13 2 13 9 20 9"></polyline>
              </svg>
              Courses
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                <circle cx="9" cy="21" r="1"></circle>
                <circle cx="20" cy="21" r="1"></circle>
                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
              </svg>
             Feedbacks
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
              </svg>
              Student List
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2">
                <line x1="18" y1="20" x2="18" y2="10"></line>
                <line x1="12" y1="20" x2="12" y2="4"></line>
                <line x1="6" y1="20" x2="6" y2="14"></line>
              </svg>
              Transaction
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                <polyline points="2 17 12 22 22 17"></polyline>
                <polyline points="2 12 12 17 22 12"></polyline>
              </svg>
              Logout
            </a>
          </li>
        </ul>


      </div>
    </nav>
    <!-- Endvartical navbar -->

    <!-- Course add and course -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
        <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
          <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
        </div>
        <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
          <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
        </div>
      </div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Course</h1>

      </div>
      <!-- Dashboard header above ^^ -->

      <!-- Student and Course Start  row -->
   
      <!-- Student and Course Start  row -->


      <!-- course table -->
      <h2>All Courses Courses</h2>
      <div style="text-align: center;"  class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Course Id</th>
              <th>Course Name</th>
              <th>Author Name</th>
              <th>Course Orginal Price</th>
              <th>Course Selling Price </th>
              <th>Edit and Delete </th>
             
            </tr>
          </thead>
          <tbody  style="margin-top:5px">

          <?php
          
            $rs = mysqli_query($conn,"SELECT `C_ID`, `C_Name`, `C_Author`, `C_OPrice`, `C_SPrice` FROM `course` "); //object <
            while($row = mysqli_fetch_array($rs))
            {
              echo "<tr>";
              echo "<td>"; echo $row["C_ID"]; echo "</td>";
              echo "<td>"; echo $row["C_Name"]; echo "</td>";
              echo "<td>"; echo $row["C_Author"]; echo "</td>"; 
              echo "<td>"; echo $row["C_OPrice"]; echo "</td>"; 
              echo "<td>"; echo $row["C_SPrice"]; echo "</td>"; 
              echo "<td>"; ?> <a class ="btnId" href ="course_edit.php?id=<?php echo $row["C_ID"]?>">Edit</a> Or <a class ="btnId" href="course_delete.php?id=<?php echo $row["C_ID"]?>">Deletes</a> <?php echo "</td>";
              echo "</tr>";
            } 


             
        //   <tr>
        //   <td>1,001</td>
        //   <td>Lorem</td>
        //   <td>ipsum</td>
        //   <td>dolor</td>
        //   <td>dolor</td>
        //   <td>
        //     <a class ="btnId" href ="">Edit</a> Or <a class ="btnId href ="">Deletes</a>
        //   </td>
          
        // </tr>
          
            ?>
          </tbody>
        </table>
      </div>
          <!-- course table -->
        <a class = "float_button" href="add_course.php">+</a>


         
    </main>
    <!-- Course add and course -->

    

  </div>

  <!--   end row -->



  <!-- 
<footer >
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>© 2017–2021 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer> -->




  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>