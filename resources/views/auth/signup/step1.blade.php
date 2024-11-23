<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RendeLearn | Create Account</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,530;1,530&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('assets/css/fontawesome/css/all.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style-signup.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style-modal.css')}}">
    </head>
        <body>

        <header>
          <!-- Header -->
          <div class="header">
              <div class="logo">
                  <a href="/">
                  <img id="responsive_image" src="assets/img/logo_horizontal.png" width="300" alt="RendeLearn">
                  </a>
              </div>
  
          <!-- Header Buttons -->
          <div class="header-buttons">
              <nav class="navbar bg-transparent">
                  <div class="container-fluid">
                      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>

          <!-- Offcanvas content -->
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
              <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">RendeLearn</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
                  <div class="offcanvas-body">
                      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                          <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Tutors</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Blog</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Support</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="login.html">Sign in</a>
                          </li>
                          </ul>
                          <form class="d-flex mt-3" role="search">
                              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success" type="submit">Search</button>
                          </form>
                      </div>
                  </div>
              </div>
          </nav>

          <!-- Additional Header Links (not inside offcanvas) -->
          <div class="header-item home">
              <p><a href="/">Home</a></p>
          </div>
          <div class="header-item tutors">
              <p><a href="#">Tutors</a></p>
          </div>
          <div class="header-item blog">
              <p><a href="#">Blog</a></p>
          </div>
          <div class="header-item support">
              <p><a href="#">Support</a></p>
          </div>

      </div>
  </div>

  </header>
    
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <div class="content">
        <!-- Signup page -->
        <form action="{{route('signup.step1.process')}}" method="POST">
            @csrf
            <h1 class="signup-title"><span class="title-text">Welcome to RendeLearn!</span></h1>
            
            <div class="signup">

                <!-- A. General Information -->
                <div class="signup-card1">

                    <div class="signup1">

                        <div class="firstname">
                            <label for="firstname" class="form-label">First name<span class="required"> * </span></label>
                            <input type="text" class="form-control signup" id="firstname-input" name="firstname" style="width: 300px"
                            required autofocus>
                        </div>
                        
                        <div class="middlename">
                            <label for="middlename" class="form-label">Middle name</label>
                            <input type="text" class="form-control signup" id="middlename-input" name="middlename" style="width: 300px">
                        </div>

                        <div class="lastname">
                            <label for="lastname" class="form-label">Last name<span class="required"> * </span></label>
                            <input type="text" class="form-control signup" id="lastname-input" name="lastname" style="width: 300px"
                            required>
                        </div>

                        <div class="extension">
                            <label for="extension" class="form-label">Extension</label>
                            <input type="text" name="extension" id="extension-input" class="form-control signup" placeholder='(e.g.) Jr.' style="width: 110px">
                        </div>
                    </div>

                    <div class="signup2">
                        
                        <div class="gender">
                            <label for="gender" class="form-label">Gender<span class="required"> * </span></label>
                            <select class="form-select signup" id="gender-input" aria-label="gender" style="width: 300px" name="gender" required>
                                <option selected disabled>Select..</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                        
                        <div class="birthdate">
                            <label for="birthdate" class="form-label">Date of birth<span class="required"> * </span></label>
                            <input type="date" class="form-control signup" id="birthdate-input" name="birthdate" style="display: block; width: 300px" required>
                        </div>

                        <div class="birthplace">
                            <label for="birthplace" class="form-label">Place of birth<span class="required"> * </span></label>
                            <input type="text" class="form-control signup" id="birthplace-input" name="birthplace" placeholder="(e.g.) Davao City" style="width: 420px" required>
                        </div>

                    </div>

                    <div class="signup3">

                        <div class="civilstatus">
                            <label for="civilstatus" class="form-label">Civil status<span class="required"> * </span></label>
                            <select class="form-select signup" id="civilstatus-input" aria-label="civilstatus" style="width: 190px" name="civilstatus" required>
                                <option selected disabled value="0">Select..</option>
                                <option value="1">Single</option>
                                <option value="2">Married</option>
                                <option value="3">Separated</option>
                                <option value="4">Widowed</option>
                            </select>
                        </div>

                        <div class="religion">
                            <label for="religion" class="form-label">Religion</label>
                            <input type="text" class="form-control signup" id="religion-input" name="religion" style="width: 210px">
                        </div>

                        <div class="nationality">
                            <label for="nationality" class="form-label">Nationality<span class="required"> * </span></label>
                            <input type="text" class="form-control signup" id="nationality-input" name="nationality" style="width: 200px" required>
                        </div>

                        <div class="mobilenumber">
                            <label for="mobilenumber" class="form-label">Mobile number<span class="required"> * </span></label>
                            <input type="tel" class="form-control signup" id="mobilenumber-input" name="mobilenumber" style="width: 200px" required>
                        </div>

                        <div class="landlinenumber">
                            <label for="landlinenumber" class="form-label">Landline number</label>
                            <input type="tel" class="form-control signup" id="landlinenumber-input" name="landlinenumber" style="width: 200px">
                        </div>

                    </div>

                </div>
            
                <div class="signup-title1">
                    A. General Information
                </div>

                <!-- B. Home Address -->
                <div class="signup-card2">
                    
                    <div class="signup1-1">
                        
                        <div class="custom-add">
                            <label for="custom-add" class="form-label">House Number/Building/Street/Subdivision<span class="required"> * </span></label>
                            <input type="address" class="form-control signup" id="customadd-input" name="custom-add" style="width: 1036px" required>
                        </div>

                    </div>

                    <div class="signup1-2">

                        <div class="barangay">
                            <label for="barangay" class="form-label">Barangay/Suburb<span class="required"> * </span></label>
                            <input type="barangay" class="form-control signup" id="barangay-input" name="barangay" style="width: 340px" required>
                        </div>

                        <div class="city">
                            <label for="city" class="form-label">City/Municipality<span class="required"> * </span></label>
                            <input type="city" class="form-control signup" id="city-input" name="city" style="width: 340px" required>
                        </div>

                        <div class="province">
                            <label for="province" class="form-label">State/Province<span class="required"> * </span></label>
                            <input type="province" class="form-control signup" id="province-input" name="province" style="width: 340px" required>
                        </div>
                    </div>

                </div>

                <div class="signup-title2">
                    B. Home Address
                </div>

                <!-- C. Current Address -->
                <div class="signup-card3">

                    <div class="signup2-0">
                        <label for="same-add" class="form-label">Same as home address?</label>
                        
                        <div class="yes">
                            <input class="form-check-input" type="radio" name="same-add" id="same-add-yes" onclick="toggleAddressFields()" required>
                            <label class="form-check-label" for="same-add-yes">Yes</label>
                        </div>
                        
                        <div class="no">
                            <input class="form-check-input" type="radio" name="same-add" id="same-add-no" onclick="toggleAddressFields()" required>
                            <label class="form-check-label" for="same-add-no">No</label>
                        </div>
                    </div>
            
                    <div class="signup2-1">
                        <div class="custom-add">
                            <label for="custom-add" class="form-label">House Number/Building/Street/Subdivision<span class="required"> * </span></label>
                            <input type="text" class="form-control signup" id="customadd-input2" name="custom-add-current" style="width: 1036px" required>
                        </div>
                    </div>
            
                    <div class="signup2-2">
                        <div class="barangay">
                            <label for="barangay" class="form-label">Barangay/Suburb<span class="required"> * </span></label>
                            <input type="text" class="form-control signup" id="barangay-input2" name="barangay-current" style="width: 340px" required>
                        </div>
            
                        <div class="city">
                            <label for="city" class="form-label">City/Municipality<span class="required"> * </span></label>
                            <input type="text" class="form-control signup" id="city-input2" name="city-current" style="width: 340px" required>
                        </div>
            
                        <div class="province">
                            <label for="province" class="form-label">State/Province<span class="required"> * </span></label>
                            <input type="text" class="form-control signup" id="province-input2" name="province-current" style="width: 340px" required>
                        </div>
                    </div>
                </div>

                <div class="signup-title3">
                    C. Current Address
                </div>
            
                <div class="button-next">
                    <button type="submit" class="btn btn-primary">Next
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>                

            </div>
                
        </form>
    
    </div>

        <!-- Modal for entering other location -->
        <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="locationModalLabel">Enter Other Location</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <label for="otherLocation" class="form-label">Location:</label>
                <input type="text" class="form-control" id="otherLocation" placeholder="Enter your location">
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveLocation">Save</button>
                </div>
            </div>
            </div>
        </div>

        <footer>
            <img id="responsive_image" src="assets/img/logo_horizontal.png" width="300" alt="RendeLearn" class="footer-image">
            <p class="copyright">
                © 2024 RendeLearn. All righs reserved.
            </p>
        </footer>

        </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('assets/js/img-lock.js')}}"></script>
        <script src="{{asset('assets/js/responsive.js')}}"></script>
        <script src="{{asset('assets/js/modal-signup-old.js')}}"></script>
        <script src="{{asset('assets/js/signup-form.js')}}"></script>
</html>