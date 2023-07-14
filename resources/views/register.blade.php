<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Signup</title>
    <link rel="stylesheet" href="{{asset('import/register_assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{asset('import/register_assets/css/styles.css')}}">
</head>

<body>

   

    <div class="d-lg-flex flex-column justify-content-lg-start col-sm-6 col-md-4" style="margin: auto;background: var(--bs-body-bg);width: 40%;margin-top: auto;margin-bottom: auto;margin-left: auto;border-top-left-radius: 0px;border-top-right-radius: 0;border-bottom-right-radius: 0;border-bottom-left-radius: 0px;border-color: var(--bs-purple);height: 40rem;margin-right: auto;">
        <div class="d-xxl-flex justify-content-xxl-center" style="margin: auto;width: 100%;height: 100%;padding-top: 10%;padding-bottom: 20%;border-style: none;">
            <div style="margin: auto;width: 100%;">
                <a href="{{url('homepage')}}" style="text-decoration:none;"><div class="d-xl-flex justify-content-xl-end" style="width: 85%;margin-bottom: 10%;">  <button class="item-2"></button></div></a>
                <div style="margin-right: auto;margin-left: auto;width: 70%;margin-top: auto;margin-bottom: auto;">
                    <h1 class="d-lg-flex justify-content-lg-center" style="margin-bottom: 20px;font-size: 2.1rem;font-family: Montserrat, sans-serif;font-weight: bold;text-align: center;color: var(--bs-pink);">Create an account</h1>
                
                <form method="POST">
                @csrf

                </div>
                <div class="d-flex flex-column" style="width: 100%;margin-bottom: 30px;">
                <input class="form-control-lg d-lg-flex" type="Username" name="username" placeholder="Username" style="width: 70%;margin: auto;border-radius: 8.8px;border-style: solid;border-color: rgb(79,79,79);">
                <input class="form-control-lg d-lg-flex" type="email" name="email" placeholder="Email" style="width: 70%;margin: auto;margin-top: 10px;border-radius: 8.8px;border-style: solid;border-color: rgb(79,79,79);">
                <input class="form-control-lg" type="password" name="password" style="margin-top: 10px;max-width: 70%;margin-right: auto;margin-left: auto;width: 70%;border-top-left-radius: 8.8px;border-top-right-radius: 8.8px;border-bottom-right-radius: 8.8px;border-bottom-left-radius: 8.8px;font-family: Archivo, sans-serif;font-size: 18px;border-style: solid;border-color: rgb(79,79,79);" placeholder="Password">
                <input class="form-control-lg" type="password" name="confirm_password" style="margin-top: 10px;max-width: 70%;margin-right: auto;margin-left: auto;width: 70%;border-top-left-radius: 8.8px;border-top-right-radius: 8.8px;border-bottom-right-radius: 8.8px;border-bottom-left-radius: 8.8px;font-family: Archivo, sans-serif;font-size: 18px;border-style: solid;border-color: rgb(79,79,79);" placeholder="Confirm Password">
                <div class="d-inline-flex justify-content-between flex-wrap" style="width: 70%;margin: auto;margin-top: 10px;">
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="formCheck-2" style="color: var(--bs-pink);"><label class="form-check-label" for="formCheck-1" style="color: var(--bs-gray-900);opacity: 0.77;font-family: Archivo, sans-serif;font-size: 0.89rem;">I agree to all statements included in Terms of Use</label></div>
                        </div>
                        <div class="d-flex"></div>
                    </div>
                </div>
                <div style="width: 70%;height: 100%;margin: auto;margin-top: 30px;">
                <button class="btn btn-primary d-block w-100" data-bss-hover-animate="pulse" type="submit" style="height: 10%;margin-top: 30px;font-weight: bold;background: var(--bs-pink);font-family: Montserrat, sans-serif;font-size: 19px;border-top-left-radius: 8.8px;border-top-right-radius: 8.8px;border-bottom-right-radius: 8.8px;border-bottom-left-radius: 8.8px;border-color: var(--bs-body-bg);">Sign up</button>
                
                   
            
                    <div class="d-xl-flex flex-column justify-content-between align-items-start flex-nowrap justify-content-xl-start align-items-xl-center" style="height: 10px;">
                        <div class="d-xl-flex justify-content-xl-start" style="width: auto;height: 10px;margin: auto;margin-top: 10%;">
                            <h6 class="d-lg-flex justify-content-lg-center align-items-lg-center justify-content-xl-start" style="margin-top: 0;color: var(--bs-gray-700);font-size: 14px;opacity: 0.86;width: 100%;height: 10px;">Already have an account?</h6>
                        </div>
                        <div class="d-xl-flex justify-content-xl-end" style="width: auto;height: 10px;margin: auto;margin-top: 8%;">
                            <a href="{{url('homepage')}}" style="text-decoration:none;"><h6 class="d-lg-flex justify-content-lg-center align-items-lg-center justify-content-xl-start" style="margin-top: 0;color: var(--bs-pink);font-size: 16px;opacity: 0.86;width: 100%;height: 10px;font-weight: bold;">Log in</h6></a>
                        </div>
                    </div>
                </div>
                </form>

            </div>
            
        </div>
    </div>
    <script src="{{asset('import/register_assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('import/register_assets/js/bs-init.js')}}"></script>
</body>

</html>