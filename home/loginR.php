<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--use bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/index.png" type="image/x-icon">
    <title>Search</title>
</head>
<body  class="fst-italic" data-bs-theme="dark">
<!--navigation bar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="z-index:5">
    <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="../img/index.png" width="50" height="50"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
<!--link to Home-->
            <a href="../home/index.php" class="nav-link  active" aria-current="page">Home</a>   
            </li>
<!--link to student page-->
             <li class="nav-item"><a href="../student/Student.php" class="nav-link">Student</a></li>
<!--link to student page-->
            <li class="nav-item"><a href="../recours/recours.php" class="nav-link">Recours</a></li>          
        </ul>
        </div>
    </div>
    <div class="form-check form-switch mx-4">
        <input type="checkbox" class="form-check-input p-2"
        id="flexSwitchCheckChecked" checked onclick="switchModes()">
        <p>Dark</p></div>
    </div>
    </nav>

    <!--Add login responsible form -->
    <div class="form-horizontal">
            <img src="../img/manager.png"width="80" height="80" style="margin-left:47%;margin-top:3%">
            <h2 class="position-absolute top-0 start-50 translate-middle" style="margin-top:15%">Login Form</h2>
    </div>
    <form action="../DBconnection/logR.php" method="post" >
            <div class="position-absolute top-50 start-50 translate-middle" style="width:50%;">
                <!--username label+input-->
                <div class="form-group" style="margin-left:25%">
                    <label class="control-label">Userame</label>
                    <div class="col-sm-8"  >
                    <input type="text" class="form-control" placeholder="enter your username..." name="username">
                    </div></div>
            <!--password label+input-->
                <div class="form-group" style="margin-left:25%">
                    <label class="form-label">Password</label>
                    <div class="col-sm-8">
                    <input type="password" class="form-control" placeholder="enter your password..." name="group">
                </div></div>
            <!--Add button-->
                <button type="submit" class="btn btn-success" name="add" style="margin-top:15px;margin-left:25%">Login</button>
            </div>
    </form>
<!--switch mode function-->
    <script>
    function switchModes(){
        var element=document.body;
        element.dataset.bsTheme=
        element.dataset.bsTheme == "light" ? "dark" : "light" ;
    }
    </script>
</body>
</html>