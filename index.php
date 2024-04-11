<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

</head>
<body>
    

<!-- Modal -->
<div class="modal fade" id="studentaddmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter Student Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!--- Start popup modal body-->
      <div class="modal-body">
        <!--- Start Form body-->
                <form>
            <div class="mb-3">
                
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                placeholder="Enter Your Name">
                
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                
                <input type="text" name="roll" class="form-control" id="exampleInputPassword1"
                  placeholder="your Roll Number">
            </div>
            <div class="mb-3">
                
                <input type="text" name="semester" class="form-control" id="exampleInputPassword1"  
                placeholder="Semester">
            </div>
            <div class="mb-3">
                
                <input type="text" name="s1" class="form-control" id="exampleInputPassword1" 
                 placeholder="S1">
            </div>
            <div class="mb-3">
               
                <input type="text" name="s2" class="form-control" id="exampleInputPassword1" placeholder="S2">
            </div>
            <div class="mb-3">
                
                <input type="text" name="backlog" class="form-control" id="exampleInputPassword1"
                  placeholder="Active Backlog">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="savedata" class="btn btn-primary">OK</button>

        <!--- Start popup modal body-->
      </div>
    </div>
  </div>
</div>
                   <!----End of Popup model--->

                        <!-- Heading -->
    <div class="container">
        <div class="jumbotron">
            <div class="card">
            <h1>Student Data</h1>
        </div>
        <div class="card">
            <div class="card-body">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentaddmodal">
        Add Data
</button>

            </div>   
            </div>
        </div>
    </div>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.slim.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>