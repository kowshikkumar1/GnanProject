<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accession Registration</title>
    <link rel="shortcut icon" type="image" href="gct1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css ">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <!--header area start-->
    <header style="height:150px; background-color: gainsboro; padding-top:20px; paddin-bottom:20px;">
     <img src="gct1.png" width=70px height=70px style="float:left; border-radius:42%;" class="text-primary my-3">
     <h1 class="text-primary my-3"style="margin-left:120px; font-size:50px; font-family: 'Lobster', cursive;">Gnanamai Educational Institutions <span style="font-size:25px; color:orange;">Daily Tickets & Stock Management System</span></h1>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div id="sidebar" style="height: 1120px;">
        <div class="nav" style="width: 250px;">
        <a class="nav-link nav-item py-3" style="font-size:15px;" href="index.php">
                <i class="fas fa-desktop" style="font-size:20px; margin-right:10px;"><span style="margin-left:10px;">DASHBOARD</span></i>
                </a>
            <li class="nav-item dropdown" style="width: 250px;">
            <a class="nav-link nav-item py-3" style="font-size:15px;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-desktop" style="font-size:20px; margin-right:10px;"><span style="margin-left:10px;">STOCK</span></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-menu nav-item py-3" style="font-size:15px;"  aria-labelledby="navbarDropdown" href="#"><b>ITRM STOCKS</b></a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              ITRM STOCKS
                            </a>
                            <li><hr class="dropdown-divider"></li>
                            <ul class="list" aria-labelledby="navbarDropdown" style="list-style-type: none;">
                              <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="newaccessionentry.php">1. NEW ACCESSION STOCK ENTRY</a></li>
                             
                              <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="report.php">2. REPORTS</a></li>
                            </ul>
                        </li>
                   </li>
                    <li><a class="dropdown-menu nav-item py-3" style="font-size:15px;"  aria-labelledby="navbarDropdown" href="#"><b>DEPARTMENT STOCKS</b></a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              ITRM STOCKS
                            </a>
                            <li><hr class="dropdown-divider"></li>
                            <ul class="list" aria-labelledby="navbarDropdown" style="list-style-type: none;">
                                <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="department_stock_entry.php">1.DEPARTMENT STOCK ENTRY</a></li>
                                <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="departments.php">2. DEPARTMENTS</a></li>
                                <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="departmentreport.php">3. REPORTS</a></li>
                                <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="departmovementscrap.php">4. MOVEMENT</a></li>
                            </ul>
                        </li>
                   </li>
                  
                     

                   <li><a class="dropdown-menu nav-item py-3" style="font-size:15px;"  aria-labelledby="navbarDropdown" href="#"><b>SERVICES <small>(Outsources)</small></b></a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>SERVICES <small>(Outsources)</small>
                            </a>
                            <li><hr class="dropdown-divider"></li>
                            <ul class="list" aria-labelledby="navbarDropdown" style="list-style-type: none;">
                            <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="outsrc.php">1.SEND TO / RETURN</a></li>
                              <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="servicesreport.php">2. REPORTS</a></li>
                            </ul>
                        </li>
                   </li>
                   <li><hr class="dropdown-divider"></li>
                   <li><a class="dropdown-item nav-item py-2" style="font-size:15px;" href="movement.php"><h6 class="scrap" style="font-weight:bolder;">MOVEMENT</h6></a></li>
                   <li><hr class="dropdown-divider"></li>
                   <li><a class="dropdown-item nav-item py-2" style="font-size:15px;" href="scrap.php"><h6 class="scrap" style="font-weight:bolder;">SCRAP</h6></a></li>
                  </ul>
                  </li>
                </ul>
              </li>
        </div>

    <!--sidebar end-->    
    <div id="content" class="container">
        <h1 class="text-warning " align="center">Department Reports</h1><hr>

<ol>
<div class="row my-2">
        <div class="col-md-5">
        <li><a class="dropdown-item nav-item py-3" style="font-size:15px;" href="Deptentry/deptstockentry.php"> TOTAL ENTRIES</a></li>
        <li><a class="dropdown-item nav-item py-3" style="font-size:15px;" href="Deptentry/deptofcseoutput.php"> CSE</a></li>
</div>
</div>
   
</body>
</html>
