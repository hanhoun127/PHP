<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--include bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/student.png" type="image/x-icon">
    <title>Add Student</title>
</head>
<body>
       <button>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
       <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/></svg>
       <a href="index.php"></a></button>
       <form action="" method="post" class="form-horizontal">
            <div >
                <img src="img/student.png"width="80" height="80" class="mb-4">
                <div class="form-group">
                    <label for="" class="control-label col-sm-2">First Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="enter your first name...">
                    </div></div>
                <div class="form-group">
                    <label for="" class="form-label">last Name</label>
                    <input type="text" class="form-control" placeholder="enter your last name...">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Email Address</label>
                    <input type="email" class="form-control" placeholder="enter your Email...">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Group</label>
                    <input type="text" class="form-control" placeholder="enter your Group...">
                </div>
                <button type="submit" class="btn btn-success" ><svg xmlns="http://www.w3.org/2000/svg" style="margin-right:10px" width="20" height="20" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
                </svg>Add</button>
            </div>
        </form>
</body>
</html>