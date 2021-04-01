<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


     
       
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <title>Document</title>
</head>
<body class="mainbg">

        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navigation">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
            </div>
          </nav>
    
          <div class="container">
            <div class="row align-self-center w-100">
                <div class="col-10 mx-auto">
                    <div class="jumbotron">
                  
                          <h4 class="pb-4 border-bottom">Create Profile</h4>
                          <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
                              <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
                                  <p>Accepted file type .png. Less than 1MB</p> <button class="btn button border"><b>Upload</b></button>
                              </div>
                              <div class="d-flex align-items-start py-3 border-bottom"> 
                                
                                  <label for="FormControlTextarea1">Personal statement</label>
                                  <textarea type="text" class="bg-light form-control"  rows="5"></textarea>
                               
                            </div>
                          </div>
    
                         <form action="" method="POST">

                            <div class="py-2">
                                <div class="row py-2">
  
                                  <button type="button" class="btn btn-primary btn-lg text-left btn-block my-2">Personal</button>
  
  
                                    <div class="col-md-6"> <label for="firstname">First Name</label> <input type="text" class="bg-light form-control" placeholder="Steve"> </div>
                                    <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Last Name</label> <input type="text" class="bg-light form-control" placeholder="Smith"> </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-md-6"> <label for="email">Email Address</label> <input type="text" class="bg-light form-control" placeholder="steve_@email.com"> </div>
                                    <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label> <input type="tel" class="bg-light form-control" placeholder="+971........."> </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-md-6"> <label for="country">Country</label> <input type="text" class="bg-light form-control" placeholder="Nationality"> </div>
                                    <div class="col-md-6 pt-md-0 pt-3" id="lang"> <label for="gender">Gender</label><input type="text" class="bg-light form-control" placeholder="Gender"> </div>
                                </div>
      
                                <div class="row py-2">
                                  <div class="col-md-6"> <label for="date-of-birth">Date of Birth</label> <input type="text" class="bg-light form-control" placeholder="DD-MM-YYYY"> </div>
                                  <div class="col-md-6 pt-md-0 pt-3" id="lang"> <label for="gender">Designation</label><input type="text" class="bg-light form-control" placeholder="Designation"> </div>
                              </div>
  
                              <button type="button" class="btn btn-primary btn-lg text-left btn-block mt-2">Work Experience</button>
  
  
  
  
                              <div class="py-2">
                                  <div class="row py-2">
                                      <div class="col-md-6"> <label for="firstname">Company</label> <input type="text" class="bg-light form-control" placeholder="Compan's Name"> </div>
                                      <div class="col-md-6 pt-md-0 pt-3" id="lang"> <label for="gender">Designation</label><input type="text" class="bg-light form-control" placeholder="e.g Teacher, LSA"> </div>
                                  </div>
  
                                  <div class="row py-2">
                                      <div class="col-md-6"> <label for="firstname">Country</label> <input type="text" class="bg-light form-control" placeholder="Country"> </div>
                                      <div class="col-md-6 pt-md-0 pt-3" id="lang"> <label for="gender">State</label><input type="text" class="bg-light form-control" placeholder="State"> </div>
                                  </div>
  
                                  <div class="row py-2">
                                      <div class="col-md-6"> <label for="country">Reference</label> <input type="text" class="bg-light form-control" placeholder="Reference's Name"> </div>
                                      <div class="col-md-6 pt-md-0 pt-3" id="lang"> <label for="gender">Reference Email</label><input type="text" class="bg-light form-control" placeholder="Reference Email"> </div>
                                  </div>
                                  <div class="row py-2">
                                      <div class="col-md-6 pt-md-0"> <label for="email">Star Date<input class="pt-3 bg-light form-control" type="date" value="2011-08-19" id="example-date-input"> </div>
                                      <div class="col-md-6 pt-md-0"> <label for="email">End Date<input class="pt-3 bg-light form-control" type="date" value="2011-08-19" id="example-date-input"> </div>
                                  </div>
                                
  
                                <button type="button" class="btn btn-primary btn-lg text-left btn-block">Certificate/Diploma</button>
  
  
                                <div class="container py-4">
  
                                 <div class="row">
  
                               
                                      <div class="form-group ">
                                        <label for="exampleFormControlFile1">Certificate</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                      </div>
                                  
  
                                   
                                      <div class="form-group">
                                        <label for="exampleFormControlFile1">Other Document</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                      </div>
                                  
                                 </div>
  
  
                                 
  
  
                                  <div class="py-3 pb-4 text-right border-bottom"> <button class="btn btn-primary  mr-5">Save</button>  </div>
                                 
                              </div>
                         </form>
                             
                          </div>
                     
    
                  
    
                    </div>
                </div>
            </div>
        </div>
    
    

   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>