<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--use bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/index.png" type="image/x-icon">
    <title>Add Recours</title>
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
<!--link to student page-->
             <li class="nav-item"><a href="../student/Student.php" class="nav-link">Student</a></li>
<!--link to student page-->
            <li class="nav-item"><a href="recours.php" class="nav-link active">Recours</a></li>          

        </ul>
        </div>
    </div>
    <div class="form-check form-switch mx-4">
        <input type="checkbox" class="form-check-input p-2"
        id="flexSwitchCheckChecked" checked onclick="switchModes()">
        <p>Dark</p></div>
    </div>
    </nav>
    <form  class="form-horizontal" action="../DBconnection/rc.php" method="post">
            <div  style="position:absolute; margin:5%;left:20%;width:50%">
            
                <img src="How to Punctuate Dialogue Tags.png"width="80" height="80" style="margin-left:45%" class="mb-2">
                <div class="form-group " style="margin-left:25%">
                <h2>Add Your Recourse</h2>
                </div>
                <div class="form-group" style="margin-left:25%">
                    <label class="form-label">Module</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="enter the module..." name="module">
                </div></div>
            
                <div class="form-group" style="margin-left:25%">
                    <label class="form-label">Nature</label>
                    <div class="col-sm-8">
                    <select class="form-select" aria-label="Default select example" name="nature">
                    <option value="CC">CC</option>
                    <option value="Examen">Examen</option>
                </select>
                </div></div>
            
                <div class="form-group" style="margin-left:25%">
                    <label class="form-label">Note Displayed</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="enter the Note Displayed..." name="note_affiche">
                </div></div>
                
            
                <div class="form-group" style="margin-left:25%">
                    <label class="form-label">Reel Note</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="enter the Reel Note..." name="note_reel">
                </div></div>

                <div class="form-group" style="margin-left:25%">
                    <label class="form-label">Status</label>
                    <div class="col-sm-8">
                    <select class="form-select" aria-label="Default select example" name="status">
                    <option value="favorable">Favorable</option>
                    <option value="unfavorable">Unfavorable</option>
                </select>
                </div></div>
                
           
                <button type="submit" class="btn btn-success" name="add2" style="margin-top:15px;margin-left:25%">Add</button>
                
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