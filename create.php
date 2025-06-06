<?php
    if(session_status() === PHP_SESSION_NONE){
        session_start();
        // $_SESSION['students'] = [];
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Week 4 - New Student</title>
    </head>
    <body>
        <div class="container">
            <h1>New Student</h1>

            <div class="col-4">
                <!-- when submit will check in actions field first -->
                <form action="actions.php" method="POST">
                    
                    <!--  for use in action to know where this page from -->
                    <input type="hidden" name="from" value="create"/>
                
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Fullname *</label>
                        <!-- display data if edit. if create display none field ''. where $_SESSION['fullname'] ?? '' -->
                        <input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo $_SESSION['fullname'] ?? '' ?>" placeholder="Last name First Name">
                    
                    </div>

                    <div class="mb-3">
                        <label for="input2" class="form-label">Gender *</label>
                        <select name="gender" class="form-select" aria-label="---select a gender---">
                            <option selected>---select a gender---</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other not mention">Other not mention</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Address *</label>
                        <textarea class="form-control" name="address" id="address"><?php echo $_SESSION['address'] ?? '' ?></textarea>
                       
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    
                </form>
            </div>
        </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>