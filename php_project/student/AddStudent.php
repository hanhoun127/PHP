<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--use bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/index.png" type="image/x-icon">
    <title>Add Student</title>
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
            <a href="../home/index.php../index.php" class="nav-link" aria-current="page">Home</a>   
            </li>
<!--link to Respobsible page-->
            <li class="nav-item"><a href="../recours/responsible.php" class="nav-link active">Responsible</a></li>       

        </ul>
        </div>
    </div>
    <div class="form-check form-switch mx-4">
        <input type="checkbox" class="form-check-input p-2"
        id="flexSwitchCheckChecked" checked onclick="switchModes()">
        <p>Dark</p></div>
    </div>
    </nav>

     
    <!--Add student form -->
       <form action="../DBconnection/std.php" method="post" class="form-horizontal">
            <div  class="position-absolute top-50 start-50 translate-middle" style="width:50%">
            <!--students icon-->
                <img src="../img/student.png"width="80" height="80" style="margin-left:45%" class="mb-2">
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
            <!--email label+input-->
                <div class="form-group" style="margin-left:25%">
                    <label class="form-label">Email Address</label>
                    <div class="col-sm-8">
                    <input type="email" class="form-control" placeholder="enter your Email..." name="email">
                </div></div>
            <!--group label+input-->
                <div class="form-group" style="margin-left:25%">
                    <label class="form-label">Group</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="enter your Group..." name="group">
                </div></div>
            <!--Add button-->
                <button type="submit" class="btn btn-success" name="add" style="margin-top:15px;margin-left:25%"><svg xmlns="http://www.w3.org/2000/svg" style="margin-right:10px" width="20" height="20" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
                </svg>Add</button>
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