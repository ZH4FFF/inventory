<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- End of Bootstrap CSS -->

    <style>
body {
  background-image: url("welcome.jpg");
  background-position: center;
  background-size: cover;

  -webkit-font-smoothing: antialiased;
  font: normal 14px Roboto, arial, sans-serif;
  font-family: "Dancing Script", cursive !important;

  min-height: 380px;

  /* Center and scale the image nicely */

  background-repeat: no-repeat;

  /* Needed to position the navbar */
  position: relative;
}

.container {
  padding: 110px;
}
::placeholder {
  /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #ffffff !important;
  opacity: 1; /* Firefox */
  font-size: 18px !important;
}
.form-login {
  background-color: rgba(0, 0, 0, 0.55);
  padding-top: 10px;
  padding-bottom: 20px;
  padding-left: 20px;
  padding-right: 20px;
  border-radius: 15px;
  border-color: #d2d2d2;
  border-width: 5px;
  color: red;
  box-shadow: 0 1px 0 #cfcfcf;
}
.form-control {
  background: transparent !important;
  color: white !important;
  font-size: 18px !important;
}
h1 {
  color: red !important;
}
h4 {
  border: 0 solid #fff;
  border-bottom-width: 1px;
  padding-bottom: 10px;
  text-align: center;
}

.form-control {
  border-radius: 10px;
}
.text-white {
  color: white !important;
}
.wrapper {
  text-align: center;
}
.footer p {
  font-size: 18px;
}

      </style>
  </head>
  <body>
    <form action="welcome.php" method="POST">
      <div class="mb-3">
        <label for="Name" class="form-label" required  style="color:white ">Name </label>
        <input type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" name="name" />
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail" class="form-label" style="color:white">Email</label>
        <input type="name" class="form-control" id="exampleInputEmail" name="email" />
      </div>

      <div class="mb-3">
        <label for="Name" class="form-label"style="color:white ">Password</label>
        <input type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" name="password" />
      </div>

      <div class="mb-3">
        <label for="Name" class="form-label"style="color:white ">Website</label>
        <input type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" name="website" />
      </div>

      <div class="mb-3">
        <label for="Name" class="form-label"style="color:white ">Comment</label>
        <input type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" name="comment" />
      </div>

      <button type="submit" class="btn btn-primary"style="color:white ">Submit</button>
    </form>
  </body>
</html>
