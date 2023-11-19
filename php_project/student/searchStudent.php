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
            <a href="../home/index.php" class="nav-link" aria-current="page">Home</a>   
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
<div style="position:fixed; top:30%; width:30%" class="position-absolute top-10 start-50 translate-middle">
<!--search icon-->
    <img src="../img/search.png" width="90" height="90" style="margin-left:45%" class="mb-2">   
    <p class="fst-italic text-center" style="top:15%;font-size:2em ">Search Students</p>
<!--search student form -->
    <form class="d-flex "  action="searchStudent.php" method="post" style="margin-left:1cm;width:100%" >
        <!--search input-->
            <input type="search" class="form-control" placeholder="enter first-name or last-name or email......." name="student">
        <!--Add button-->
            <button type="submit" class="btn  btn-outline-success" name="search"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg></button>
    </form>
</div>
<!--search results-->
<div style="margin-top:20%">
    <table class="table">
        <tbody>
            <?php 
                include("../DBconnection/search.php");
            ?>
        </tbody>
    </table>
</div>
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