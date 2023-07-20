<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="{{asset('import/assets/css/SignInSignUp.css')}} " />
  </head>
  <body>

    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="homepage.html" autocomplete="off" class="sign-in-form">
              <div class="logo">
                <img src="{{asset('import/assets/img/zionlab-logo.png')}}" alt="zionlablogo" />
                <h4>Zionlab IT Consultancy</h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Don't have an account?</h6>
                <a href="#" class="toggle">Sign up</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Name</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" value="Sign In" class="sign-btn" />

                <p class="text">
                  <a href="#">Forgot your password?</a>
                </p>
              </div>
            </form>

            <form action="homepage.html" autocomplete="off" class="sign-up-form">
              <div class="logo">
                <img src="{{asset('import/assets/img/zionlab-logo.png')}}" alt="zionlablogo" />
                <h4>Zionlab IT Consultancy</h4>
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle">Sign in</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Name</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="email"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" value="Sign Up" class="sign-btn" />

                <p class="text">
                  By signing up, I agree to the
                  <a href="#">Terms of Services</a> and
                  <a href="#">Privacy Policy</a>
                </p>
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="{{asset('import/assets/img/image1.png')}} " class="image img-1 show" alt="" />
              <img src="{{asset('import/assets/img/image2.png')}} " class="image img-2" alt="" />
              <img src="{{asset('import/assets/img/image3.png')}} " class="image img-3" alt="" />
              <img src="{{asset('import/assets/img/image3.png')}} " class="image img-4" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Generate your CV in a breeze</h2>
                  <h2>Choose a CV template</h2>
                  <h2>Fill in your details</h2>
                  <h2>Download CV in PDF format</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
                <span data-value="4"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </main>

    <!-- Javascript file -->

    <script src="{{asset('import/assets/js/SignInSignUp.js')}}"></script>
  </body>
</html>
