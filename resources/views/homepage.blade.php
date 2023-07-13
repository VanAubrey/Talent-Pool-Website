<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Talent Pool Website Login</title>
    <link rel="stylesheet" href="{{asset('import/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{asset('import/assets/css/Navigation-Clean.css')}}">
    <link rel="stylesheet" href="{{asset('import/assets/css/styles.css')}}">
</head>

<body style="height: 100%;background: var(--bs-gray-300);">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="#">ZionLab IT Consultancy</a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
            <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#Home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#About">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="d-inline-flex" style="height: 793px;width: 100%;color: var(--bs-dark);">

        <div class="d-inline-flex" style="margin: auto;margin-top: 90px;height: auto;max-height: none;border-radius: 20px;box-shadow: 0px 0px 11px rgb(78,82,86);">

            <div style="margin: auto;background: var(--bs-pink);width: 400px;min-height: 501px;margin-bottom: auto;margin-left: auto;margin-right: 0px;border-top-left-radius: 20px;border-bottom-left-radius: 20px;color: var(--bs-pink);height: 501px;margin-top: 0;">

                <div class="d-lg-flex justify-content-lg-center" style="margin: auto;width: 90%;background: rgba(0,0,0,0.11);margin-top: 25px;margin-bottom: auto;height: 90%;margin-right: auto;margin-left: auto;border-radius: 20px;border-top-right-radius: 0;border-bottom-right-radius: 0;padding: 12px;">

                    <div style="margin: auto;">

                        <h6 class="d-lg-flex" style="font-size: 3rem;border-color: rgb(255,255,255);color: var(--bs-gray-100);margin: auto;margin-left: 0;text-align: left;">Hello, Friend</h6>
                        
                        <div style="height: 8px;width: 50%;background: var(--bs-gray-100);margin-top: 10px;"></div>
                        <h6 class="d-lg-flex" style="font-size: 1.4rem;border-color: rgb(255,255,255);color: var(--bs-gray-100);margin: auto;margin-left: 0;text-align: left;"><br>Create polished and personalized resumes in minutes with our intuitive CV generator. Stand out from the crowd and land your dream job today!<br><br></h6>
                    </div>
                </div>
            </div>
            <div class="d-inline d-lg-flex flex-column justify-content-around justify-content-lg-start align-items-lg-start" style="margin: auto;background: var(--bs-body-bg);width: 500px;min-height: 501px;margin-top: 0;margin-bottom: auto;margin-left: 0px;border-top-left-radius: 0px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 0px;border-color: var(--bs-purple);">
                <div style="margin: auto;width: 100%;">
                    <div style="margin-right: auto;margin-left: auto;width: 70%;">
                        <h1 class="d-lg-flex justify-content-lg-start" style="margin-bottom: 20px;font-size: 50px;font-family: Montserrat, sans-serif;font-weight: bold;">Login</h1>
                    </div>
                    <div class="d-flex flex-column" style="width: 100%;margin-bottom: 30px;">
                    <input class="form-control-lg" type="email" name="email" placeholder="Email" style="max-width: 90%;margin: auto;width: 70%;border-top-left-radius: 8.8px;border-top-right-radius: 8.8px;border-bottom-right-radius: 8.8px;border-bottom-left-radius: 8.8px;font-family: Archivo, sans-serif;font-size: 18px;color: rgb(64,64,64);border-style: solid;border-color: rgb(79,79,79);">
                    <input class="form-control-lg" type="password" style="margin-top: 10px;max-width: 70%;margin-right: auto;margin-left: auto;width: 70%;border-top-left-radius: 8.8px;border-top-right-radius: 8.8px;border-bottom-right-radius: 8.8px;border-bottom-left-radius: 8.8px;font-family: Archivo, sans-serif;font-size: 18px;border-style: solid;border-color: rgb(79,79,79);" placeholder="Password">
                        <div class="d-inline-flex justify-content-between align-content-center" style="width: 70%;margin: auto;margin-top: 10px;">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="formCheck-1" style="color: var(--bs-pink);">
                                <label class="form-check-label" for="formCheck-1" style="color: var(--bs-gray-900);opacity: 0.77;font-family: Archivo, sans-serif;">Remember me</label>
                            </div>
                            <h6 data-bss-hover-animate="tada" style="font-family: Archivo, sans-serif;">Forgot Password?</h6>
                        </div>
                    </div>
                    <div style="width: 70%;height: 100%;margin: auto;margin-top: 30px;">
                    <button class="btn btn-primary d-block w-100" data-bss-hover-animate="pulse" type="submit" style="height: 100%;margin-top: 30px;font-weight: bold;background: var(--bs-pink);font-family: Montserrat, sans-serif;font-size: 19px;border-top-left-radius: 8.8px;border-top-right-radius: 8.8px;border-bottom-right-radius: 8.8px;border-bottom-left-radius: 8.8px;border-color: var(--bs-body-bg);">Login</button>
                        <h6 class="d-lg-flex justify-content-lg-center align-items-lg-center" style="margin-top: 15px;">Don't have an account?</h6>
                        <button class="btn btn-primary d-block w-100" data-bss-hover-animate="pulse" type="submit" style="height: 100%;margin-top: 0px;font-weight: bold;background: var(--bs-gray-600);font-family: Montserrat, sans-serif;font-size: 19px;border-top-left-radius: 8.8px;border-top-right-radius: 8.8px;border-bottom-right-radius: 8.8px;border-bottom-left-radius: 8.8px;border-color: rgb(255,255,255);">Register</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('import/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('import/assets/js/bs-init.js')}}"></script>
</body>

</html>