<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="Buy.scss">
    <script src="https://kit.fontawesome.com/84b29d853c.js" crossorigin="anonymous"></script>   
    <script src="Buy.js"></script>
</head>
<body>

<div class="container-fluid px-1 px-md-4 py-5 mx-auto">
  <div class="row d-flex justify-content-center">
    <div class="col-12 col-md-11 col-lg-10 col-xl-9">
      <div class="card card0 border-0">
        <div class="row">
          <div class="col-12">
            <div class="card card00 m-2 border-0">
              <div class="row text-center justify-content-center px-3">
                <p class="prev text-danger"><span class="fa fa-long-arrow-left"> Go Back</span></p id="back">
                <h3 class="mt-4">Simple Registration</h3>
              </div>
              <div class="d-flex flex-md-row px-3 mt-4 flex-column-reverse">
                <div class="col-md-6">
                  <div class="card1">
                    <ul id="progressbar" class="text-center">
                      <li class="active step0"></li>
                      <li class="step0"></li>
                      <li class="step0"></li>
                      <li class="step0"></li>
                    </ul>
                    <h6 class="mb-5">Enter your Email</h6>
                    <h6 class="mb-5">Set password</h6>
                    <h6 class="mb-5">Select your country</h6>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card2 first-screen show ml-2">
                    <div class="row text-center px-3 mr-2">
                      <div class="mb-2 col-2"> <span class="fa fa-reddit social"></span> </div>
                      <div class="mb-2 col-2"> <span class="fa fa-facebook social"></span> </div>
                      <div class="mb-2 col-2"> <span class="fa fa-linkedin social"></span> </div>
                      <div class="mb-2 col-2"> <span class="fa fa-google-plus social"></span> </div>
                      <div class="mb-2 col-2"> <span class="fa fa-twitter social"></span> </div>
                      <div class="mb-2 col-2"> <span class="fa fa-dropbox social"></span> </div>
                    </div>
                    <div class="row px-3 mt-4">
                      <div class="form-group mt-1 mb-1"> <input type="text" id="email" class="form-control" required> <label class="ml-3 form-control-placeholder" for="email">Email</label> </div>
                      <div class="next-button text-center mt-1 ml-2"> <span class="fa fa-arrow-right"></span> </div>
                    </div>
                    <div class="row px-3 mt-1 mb-5">
                      <div class="custom-control custom-checkbox"> <input checked id="customCheck1" type="checkbox" class="custom-control-input"> <label for="customCheck1" class="custom-control-label">I want to receive promo emails</label> </div>
                    </div>
                  </div>
                  <div class="card2 ml-2">
                    <div class="row px-3 mt-3">
                      <div class="form-group mt-1 mb-1"> <input type="password" id="pwd" class="form-control" required> <label class="ml-3 form-control-placeholder" for="pwd">Password</label> </div>
                      <div class="next-button text-center mt-1 ml-2"> <span class="fa fa-arrow-right"></span> </div>
                    </div>
                    <div class="row mt-3 mb-5">
                      <div class="col-12">
                        <p class="mb-1">Password must contain</p>
                        <div class="row">
                          <div class="col-6"><span class="fa fa-circle text-danger"></span> lower case</div>
                          <div class="col-6"><span class="fa fa-circle text-danger"></span> numbers</div>
                        </div>
                        <div class="row">
                          <div class="col-6"><span class="fa fa-circle text-danger"></span> upper case</div>
                          <div class="col-6"><span class="fa fa-circle text-danger"></span> 8-16 characters</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card2 ml-2">
                    <div class="row px-3 mt-3">
                      <p class="mb-0 w-100">Select your Country</p>
                      <div class="form-group mt-3 mb-4">
                        <div class="select mb-3"> <select name="account" class="form-control custom-select">
                            <option>India</option>
                            <option>USA</option>
                            <option>Germany</option>
                            <option>Mexico</option>
                          </select> </div>
                      </div>
                      <div class="next-button text-center mt-3 ml-2"> <span class="fa fa-arrow-right"></span> </div>
                    </div>
                  </div>
                  <div class="card2 ml-2">
                    <div class="row px-3 mt-2 mb-4 text-center">
                      <h2 class="col-12 text-danger"><strong>Success !</strong></h2>
                      <div class="col-12 text-center"><img class="tick" src="https://i.imgur.com/WDI0da4.gif"></div>
                      <h6 class="col-12 mt-2"><i>...Enjoy COOKIES...</i></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="row px-3">
                <h2 class="text-muted get-bonus mt-4 mb-5">Get Bonus <span class="text-danger">666</span> cookies</h2> <img class="pic ml-auto mr-3" src="https://i.imgur.com/NFodZjZ.png">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
	 
   
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>