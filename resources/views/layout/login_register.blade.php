<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciliwung Camp</title>

    <style type="text/css">
        @charset "UTF-8";
        body {
        margin: 0;
        height: 100%;
        overflow: hidden;
        width: 100% !important;
        box-sizing: border-box;
        font-family: "Roboto", sans-serif;
        }

        .backRight {
        position: absolute;
        right: 0;
        width: 50%;
        height: 100%;
        background: #ffd910;
        }

        .backLeft {
        position: absolute;
        left: 0;
        width: 50%;
        height: 100%;
        background: #ffd910;
        }

        #back {
        width: 100%;
        height: 100%;
        position: absolute;
        z-index: -999;
        }

        .canvas-back {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 10;
        }

        #slideBox {
        width: 50%;
        max-height: 100%;
        height: 100%;
        overflow: hidden;
        margin-left: 50%;
        position: absolute;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        }

        .topLayer {
        width: 200%;
        height: 100%;
        position: relative;
        left: 0;
        left: -100%;
        }

        label {
        font-size: 0.8em;
        text-transform: uppercase;
        }

        input {
        background-color: transparent;
        border: 0;
        outline: 0;
        font-size: 1em;
        padding: 8px 1px;
        margin-top: 0.1em;
        }

        .left {
        width: 50%;
        height: 100%;
        overflow: hidden;
        background: #2C3034;
        left: 0;
        position: absolute;
        }
        .left label {
        color: #e3e3e3;
        }
        .left input {
        border-bottom: 1px solid #e3e3e3;
        color: #e3e3e3;
        }
        .left input:focus, .left input:active {
        border-color: #ffd910;
        color: #ffd910;
        }
        .left input:-webkit-autofill {
        -webkit-box-shadow: 0 0 0 30px #2C3034 inset;
        -webkit-text-fill-color: #e3e3e3;
        }
        .left a {
        color: #ffd910;
        }

        .right {
        width: 50%;
        height: 100%;
        overflow: scroll;
        background: #f9f9f9;
        right: 0;
        position: absolute;
        }
        .right label {
        color: #212121;
        }
        .right input {
        border-bottom: 1px solid #212121;
        }
        .right input:focus, .right input:active {
        border-color: #ffd910;
        }
        .right input:-webkit-autofill {
        -webkit-box-shadow: 0 0 0 30px #f9f9f9 inset;
        -webkit-text-fill-color: #212121;
        }

        .content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        min-height: 100%;
        width: 80%;
        margin: 0 auto;
        position: relative;
        }

        .content h2 {
        font-weight: 300;
        font-size: 2.6em;
        margin: 0.2em 0 0.1em;
        }

        .left .content h2 {
        color: #ffd910;
        }

        .right .content h2 {
        color: #2C3034;
        }

        .form-element {
        margin: 1.6em 0;
        }
        .form-element.form-submit {
        margin: 1.6em 0 0;
        }

        .form-stack {
        display: flex;
        flex-direction: column;
        }

        .checkbox {
        -webkit-appearance: none;
        outline: none;
        background-color: #e3e3e3;
        border: 1px solid #e3e3e3;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
        padding: 12px;
        border-radius: 4px;
        display: inline-block;
        position: relative;
        }

        .checkbox:focus, .checkbox:checked:focus,
        .checkbox:active, .checkbox:checked:active {
        border-color: #ffd910;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .checkbox:checked {
        outline: none;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05), inset 15px 10px -12px rgba(255, 255, 255, 0.1);
        }

        .checkbox:checked:after {
        outline: none;
        content: "✓";
        color: #ffd910;
        font-size: 1.4em;
        font-weight: 900;
        position: absolute;
        top: -4px;
        left: 4px;
        }

        .form-checkbox {
        display: flex;
        align-items: center;
        }
        .form-checkbox label {
        margin: 0 6px 0;
        font-size: 0.72em;
        }

        button {
        padding: 0.8em 1.2em;
        margin: 0 10px 0 0;
        width: auto;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 1em;
        color: #fff;
        line-height: 1em;
        letter-spacing: 0.6px;
        border-radius: 3px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1), 0 3px 6px rgba(0, 0, 0, 0.1);
        border: 0;
        outline: 0;
        transition: all 0.25s;
        }
        button.signup {
        background: #ffd910;
        color: #2C3034;
        }
        button.login {
        background: #ffd910;
        color: #2C3034;
        }
        button.off {
        background: none;
        box-shadow: none;
        margin: 0;
        }
        button.off.signup {
        color: #ffd910;
        }
        button.off.login {
        color: #2C3034;
        }

        button:focus, button:active, button:hover {
        box-shadow: 0 4px 7px rgba(0, 0, 0, 0.1), 0 3px 6px rgba(0, 0, 0, 0.1);
        }
        button:focus.signup, button:active.signup, button:hover.signup {
        background: #212121;
        color: #ffd910;
        }
        button:focus.login, button:active.login, button:hover.login {
        color: #ffd910;
        background: #212121;
        }
        button:focus.off, button:active.off, button:hover.off {
        box-shadow: none;
        }
        button:focus.off.signup, button:active.off.signup, button:hover.off.signup {
        color: #ffd910;
        background: #212121;
        }
        button:focus.off.login, button:active.off.login, button:hover.off.login {
        color: #ffd910;
        background: #212121;
        }

        @media only screen and (max-width: 768px) {
        #slideBox {
            width: 80%;
            margin-left: 20%;
        }

        .signup-info, .login-info {
            display: none;
        }
        }
    </style>
</head>

<body>
    <div id="back">
        <canvas id="canvas" class="canvas-back"></canvas>
        <div class="backRight">    
        </div>
        <div class="backLeft">
        </div>
      </div>
      
      <div id="slideBox">
        <div class="topLayer">

          <div class="left">
            <div class="content">
              <h2>Sign Up</h2>
              <form method="POST" action="{{ route('register') }}" id="registerForm">
                @csrf
                <div class="form-element form-stack">
                  <label>Fullname</label>
                  <input class="form-control" id="name" name="name" type="text">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user" style="color: #ffd910;"></span>
                    </div>
                  </div>
                  {{-- @error('name')
                    <span class="error invalid-feedback" >{{ $message }} </span>
                  @enderror --}}
                </div>

                <div class="form-element form-stack">
                  <label>Username</label>
                  <input class="form-control" id="username" name="username" type="text">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user" style="color: #ffd910;"></span>
                    </div>
                  </div>
                  {{-- @error('username')
                    <span class="error invalid-feedback" >{{ $message }} </span>
                  @enderror --}}
                </div>

                <div class="form-element form-stack">
                  <label>E-mail</label>
                  <input class="form-control" id="email" name="email" type="email">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user" style="color: #ffd910;"></span>
                    </div>
                  </div>
                  {{-- @error('email')
                    <span class="error invalid-feedback" >{{ $message }} </span>
                  @enderror --}}
                </div>
                
                <div class="form-element form-stack">
                  <label>Password</label>
                  <input class="form-control" id="password" name="password" type="password">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user" style="color: #ffd910;"></span>
                    </div>
                  </div>
                  {{-- @error('password')
                    <span class="error invalid-feedback" >{{ $message }} </span>
                  @enderror --}}
                </div>


                {{-- <div class="form-element form-stack">
                  <label for="email" class="form-label">Email</label>
                  <input id="email" type="email" name="email">
                </div>
                <div class="form-element form-stack">
                  <label for="username-signup" class="form-label">Username</label>
                  <input id="username-signup" type="text" name="username">
                </div>
                <div class="form-element form-stack">
                  <label for="password-signup" class="form-label">Password</label>
                  <input id="password-signup" type="password" name="password">
                </div> --}}
                {{-- <div class="form-element form-checkbox">
                  <input id="confirm-terms" type="checkbox" name="confirm" value="yes" class="checkbox">
                  <label for="confirm-terms">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
                </div> --}}

                <div class="form-element form-submit">
                  <button id="signUp" class="signup" type="submit" name="signup">Sign up</button>
                  <button id="goLeft" class="signup off" type="button">Log In</button> 
                </div>
                <div id="register-error"></div>
              </form>
            </div>
          </div>

          
          <div class="right">
            <div class="content">
              <h2>Login</h2>
              <form action="{{ url ('/login') }}" method="POST" id="registerForm">
                @csrf

                <div class="form-element form-stack">
                  <label>Username</label>
                  <input name="username" id="username-login" type="text" class="form-control">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user" style="color: #ffd910;"></span>
                    </div>
                  </div>
                  {{-- @error('username')
                    <span class="error invalid-feedback" >{{ $message }} </span>
                  @enderror --}}
                </div>
                
                <div class="form-element form-stack">
                  <label>Password</label>
                  <input name="password" id="password-login" type="password" class="form-control">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user" style="color: #ffd910;"></span>
                    </div>
                  </div>
                  {{-- @error('password')
                    <span class="error invalid-feedback" >{{ $message }} </span>
                  @enderror --}}
                </div>

                {{-- <div class="form-element form-stack">
                  <label for="username-login" class="form-label">Username</label>
                  <input id="username-login" type="text" name="username">
                </div>
                <div class="form-element form-stack">
                  <label for="password-login" class="form-label">Password</label>
                  <input id="password-login" type="password" name="password">
                </div> --}}

                <div class="form-element form-submit">
                  <button id="logIn" class="login" type="submit" name="login">Log In</button>
                  <button id="goRight" class="login off" name="signup" type="button">Sign Up</button>
                </div>
                <div id="login-error"></div>
              </form>
            </div>
          </div>

        </div>
      </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.11.3/paper-full.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="{{asset ('assets/user/js/login-keren.js')}}"></script>
      <script src="{{asset ('assets/sevice.js')}}"></script>

</body>
</html>