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
                  <img id="responsive_image" src="{{asset('assets/img/logo_horizontal.png')}}" width="300" alt="RendeLearn">
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

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
    <div class="content">
        <!-- Signup page -->
        <form action="{{route('signup.step2.process')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 class="signup-title"><span class="title-text">Welcome to RendeLearn!</span></h1>
            
            <div class="signup">

                <!-- D. General Information -->
                <div class="signup2-card1">

                    <div class="signup-container1">

                        <div class="upload-id">

                            <div class="front-id-container">

                                <div class="front-id">

                                    <label style="position: relative; top: 4px" for="front-id" class="form-label">Front ID<span class="required"> * </span></label>

                                    <div class="id-info-btn">
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#idModal" style="font-size: 12px; border-radius: 10px !important; border-top-right-radius: 0 !important; border-bottom-right-radius: 0 !important;"><i class="fa-regular fa-circle-question"></i></button>
                                        <span class="press-here1">Valid IDs</span>
                                    </div>

                                </div>

                                <input type="file" style="font-size: 12px; width: 350px" class="form-control signup" id="front-id-input" name="front-id" accept="image/*" onchange="previewImage('front-id-input', 'front-id-preview')" required>
                                <!-- Image preview for Front ID -->
                                <img id="front-id-preview" src="" alt="Front ID Preview" style="display:none; width: 200px; margin-top: 10px; border-radius: 8px;">

                            </div>
        
                            <div class="back-id">
                                <label for="back-id" class="form-label">Back ID<span class="required"> * </span></label>
                                <input type="file" style="font-size: 12px; width: 350px" class="form-control signup" id="back-id-input" name="back-id" accept="image/*" onchange="previewImage('back-id-input', 'back-id-preview')" required>
                                <!-- Image preview for Back ID -->
                                <img id="back-id-preview" src="" alt="Back ID Preview" style="display:none; width: 200px; margin-top: 10px; border-radius: 8px;">
                            </div>

                        </div>
        
                        <div class="info-container1">

                            <div class="passport-container">

                                <label for="if-passport" class="form-label" style="display: flex; justify-content: center;">Passport?&nbsp;<span class="required"> * </span></label>
                                
                                <div class="yes">
                                    <input class="form-check-input" type="radio" name="if-passport" id="if-passport-yes" onclick="toggleBackID()" required>
                                    <label class="form-check-label" for="if-passport-yes">Yes</label>
                                </div>
                                
                                <div class="no">
                                    <input class="form-check-input" type="radio" name="if-passport" id="if-passport-no" onclick="toggleBackID()" required>
                                    <label class="form-check-label" for="if-passport-no">No (if other)</label>
                                </div>

                            </div>

                        </div>
                        
                        <div class="id-container">

                            <div class="upload-selfie-container">

                                <div class="upload-selfie">

                                    <label style="position: relative; top: 4px" for="selfie" class="form-label">Selfie (with ID)<span class="required"> * </span></label>

                                    <div class="selfie-guide">
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#registrationModal" style="font-size: 12px; border-radius: 10px !important; border-top-right-radius: 0 !important; border-bottom-right-radius: 0 !important;"><i class="fa-regular fa-circle-question"></i></button>
                                        <span class="press-here1">Selfie guide</span>
                                    </div>
                                </div>

                                    <input type="file" style="font-size: 12px; width: 350px" class="form-control signup" id="selfie-input" name="selfie" accept="image/*" onchange="previewImage('selfie-input', 'selfie-preview')">
                                    <img id="selfie-preview" src="" alt="Selfie Preview" style="display:none; width: 200px; margin-top: 10px; border-radius: 8px">

                                </div>
                            
                                <div class="id-number">
                                    <label for="id-number" type="form-control">Valid ID Number<span class="required"> * </span></label>
                                    <input type="id-number" class="form-control signup" id="id-number-input" name="id-number" style="width: 350px">
                                </div>

                            </div>

                        </div>
                        
                    </div>

                    <div class="signup2-title1">
                        D. Credentials
                    </div>
                
                <div class="signup2-card2">
                    
                    <div class="signup-container2">

                        <div class="agreement1">
                            <input class="form-check-input" type="checkbox" value="" id="agreement1" required>
                            <label class="form-check-label" for="agreement1">
                                I agree to RendeLearn Terms of Service<span class="required"> * </span>
                            </label>
                        </div>

                        <div class="agreement2">
                            <input class="form-check-input" type="checkbox" value="" id="agreement2" required>
                            <label class="form-check-label" for="agreement2">
                                I agree to RendeLearn Privacy Policy<span class="required"> * </span>
                            </label>
                        </div>

                        <div class="agreement3">
                            <input class="form-check-input" type="checkbox" value="" id="agreement3" required>
                            <label class="form-check-label" for="agreement3">
                                I agree to R.A. 10173 or The Data Privacy Act of 2012<span class="required"> * </span>
                            </label>
                        </div>

                    </div>

                </div>

                    <div class="button1-previous">
                        <a href="{{route('signup')}}" id="previous-button" class="btn btn-primary"><i class="fa-solid fa-chevron-left"></i>
                            Back</a>
                    </div>
    
                    <div class="button1-next">
                        <button id="submit" class="btn btn-primary">
                            <i class="fa-solid fa-file-circle-check"></i>
                            Submit
                        </button>
                    </div>

                </div>
                
            </div>
            
        </form>
    </div>

        <!-- Modal Structure -->
        <div class="modal fade" id="idModal" tabindex="-1" aria-labelledby="idModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="idModalLabel">List of Valid IDs</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>Passport</li>
                            <li>Driver's License</li>
                            <li>National ID Card</li>
                            <li>Social Security Card</li>
                            <li>Student ID</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="registrationModalLabel">Documents Required for Registration</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>Birth Certificate</li>
                            <li>Proof of Address</li>
                            <li>Bank Statement</li>
                            <li>Tax Identification Number (TIN)</li>
                            <li>Certificate of Employment</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <img id="responsive_image" src="{{asset('assets/img/logo_horizontal.png')}}" width="300" alt="RendeLearn" class="footer-image">
            <p class="copyright">
                © 2024 RendeLearn. All righs reserved.
            </p>
        </footer>

        </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('assets/js/img-lock.js')}}"></script>
        <script src="{{asset('assets/js/modal-signup-old.js')}}"></script>
        <script src="{{asset('assets/js/signup-form.js')}}"></script>
</html>