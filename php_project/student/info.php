<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--use bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/index.png" type="image/x-icon">
    <title>Student informations</title>
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
            <a href="../home/index.php" class="nav-link active" aria-current="page">Home</a>   
            </li>
<!--link to student page-->
             <li class="nav-item"><a href="../student/Student.php" class="nav-link">Student</a></li>
        
        </ul>
        </div>
    </div>
    <div class="form-check form-switch mx-4">
        <input type="checkbox" class="form-check-input p-2"
        id="flexSwitchCheckChecked" checked onclick="switchModes()">
        <p>Dark</p></div>
    </div>
    </nav>
    <!--Add login student form -->
    <!--students icon-->
    <div class="form-horizontal">
            <img src="../img/student.png"width="80" height="80" style="margin-left:47%;margin-top:3%">
    </div>
    <form action="../DBconnection/infoS.php" method="post" >
            <div class="position-absolute top-50 start-50 translate-middle" style="width:50%;">
                <!--first name label+input-->
                <div class="form-group" style="margin-left:25%">
                    <label class="control-label">First Name</label>
                    <div class="col-sm-8"  >
                    <input type="text" class="form-control" placeholder="enter your first name..." name="firstname">
                    </div></div>
            <!--last name label+input-->
                <div class="form-group" style="margin-left:25%">
                    <label class="form-label">last Name</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="enter your last name..." name="lastname">
                </div></div>
            <!--group label+input-->
                <div class="form-group" style="margin-left:25%">
                    <label class="form-label">Group</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="enter your Group..." name="group">
                </div></div>
            <!--Add button-->
                <button type="submit" class="btn btn-success" name="infoS" style="margin-top:15px;margin-left:25%">Validate</button>
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