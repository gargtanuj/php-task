<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Intenship Task</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>

<body>
  <div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="myForm container">
          <form id="form" action="javascript:;">
            <h2 class="text-center">Form</h3>
              <div class="form-group">
                <label for="password">Name*</label>
                <input required name="name" type="text" class="form-control" id="password" placeholder="Your name">
              </div>
              <div class="form-group">
                <label for="email">Email address*</label>
                <input required name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                  placeholder="Your email">
              </div>
              <div class="form-group">
                <label for="image">Image*</label>
                <input required name="image" type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg"
                  id="image">
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-dark">Submit</button>
              </div>
          </form>
        </div>
        <div class="container">
          <div class="table">
            <table class="table table-bordered text-center">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Image</th>
                </tr>
              </thead>
              <tbody id="users">
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="main.js"></script>
</body>

</html>