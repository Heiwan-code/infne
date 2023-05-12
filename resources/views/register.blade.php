<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <title>Register</title>
    {{-- <link rel="stylesheet" href="/src/styles.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @section('scripts')
        <script src="{{ asset('js/your-javascript-file.js') }}"></script>
    @endsection
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/5dea7eb179.js" crossorigin="anonymous"></script>
</head>
<body>
<!-- TOP HEADER -->
    <div class="topheader">
        <div class="feeling">
            <p style="margin-top: 8px;">Vote your mood today:
              <span class="vote-mood" style="font-size: 18px;">
                <i class="fa-solid fa-face-smile-beam" style="display:inline-block;"><span id="vote-count">47%</span></i>
                <i class="fa-solid fa-face-laugh-wink"><span id="vote-count">33%</span></i>
                <i class="fa-solid fa-face-meh"><span id="vote-count">16%</span></i>
                <i class="fa-solid fa-face-frown"><span id="vote-count">4%</span></i>
              </span>
            </p>
        </div>
        <div class="iconbox">
            <div class="top-right" style="float: right;">
            <i class="fa-solid fa-envelope" style="margin-top: 7px; margin-right: 5px;"></i>
            <i class="fa-solid fa-circle-info" style="margin-right: 5px;"></i>
            <i class="fa-brands fa-medapps" style="margin-right: 5px;"></i>
            </div>
        </div>  
    </div>
    <div class="mh1wrap">
        <h1 class="mh1" id="mh1d" style="margin-bottom:10px;">Recent. Infinite. Viral.</h1>
    </div>
<!-- MAIN HEADER -->
    <header id="myHeader">
        <div class="logo-container">
             <div class="logo">
                <i class="fa-solid fa-infinity" id="infinity"></i>
                INFINITE NE<span style=" font-size:33px; font-weight:200;">X</span>T</div>
        </div> 
        
    </header>
<!-- MAIN SECTION -->
<main>

    
    <div class="reg-container">
       
    <h1 style="text-transform: uppercase; font-size: calc(1rem + 2vw);">Sign Up</h1>
    <hr>
    <p style="font-size: calc(.4rem + 1vw); margin-bottom: 15px;">It's quick and easy.</p>
        
        <div class="namesurname">
        <input  type="text" placeholder="First name" name="name" id="name" required>
        <input style="margin-left:10px;" type="text" placeholder="Surname" name="lastname" id="lastname" required>
        </div>
          <input type="text" placeholder="Mobile number or email address" name="email" id="email" required>
          <input type="password" placeholder="Password" name="psw" id="psw" required>
          <input type="password" placeholder="Repeat password" name="psw-repeat" id="psw-repeat" required>
        
        <div class="select-date"><p style="font-size: 11px; margin-bottom:-30px; margin-top:15px;">Date of birth</p>
            <select id="select-day">
                <option value="0">1️
                <option value="1">2
                <option value="2">3
                <option value="3">4
                <option value="4">5
                <option value="5">6
                <option value="6">7
                <option value="7">8
                <option value="8">9️
                <option value="9">10
                <option value="10">11
                <option value="11">12
                <option value="12">13
                <option value="13">14
                <option value="14">15
                <option value="15">16
                <option value="16">17
                <option value="17">18
                <option value="18">19
                <option value="19">20
                <option value="20">21
                <option value="21">22
                <option value="22">23
                <option value="23">24
                <option value="24">25
                <option value="25">26
                <option value="26">27
                <option value="27">28
                <option value="28">29
                <option value="29">30
                <option value="30">31
                
            </select>
            <select id="select-month">
                  <option value="0">January
                  <option value="1">February
                  <option value="2">March
                  <option value="3">April
                  <option value="4">May
                  <option value="5">June
                  <option value="6">July
                  <option value="7">August
                  <option value="8">September
                  <option value="9">October
                  <option value="10">November
                  <option value="11">December
            </select>
            <select id="select-year"> 
                <option value="0">2022
                <option value="1">2021
                <option value="2">2020
                <option value="3">2019
                <option value="4">2018
                <option value="5">2017
                <option value="6">2016
                <option value="7">2015
                <option value="8">2014
                <option value="9">2013
                <option value="10">2012
                <option value="11">2011
                <option value="12">2010
                <option value="13">2009
                <option value="14">2008
                <option value="15">2007
                <option value="16">2006
                <option value="17">2005
                <option value="18">2004
                <option value="19">2003
                <option value="20">2002
                <option value="21">2001
                <option value="22">2000
                <option value="23">1999
                <option value="24">1998
                <option value="25">1997
                <option value="26">1996
                <option value="27">1995
                <option value="28">1994
                <option value="29">1993
                <option value="30">1992
                <option value="31">1991
            </select>
        </div>



        <div class="select-gender"">
            <p style="font-size:11px; margin-bottom:-10px; margin-top:15px;">Gender</p>
            <fieldset id="setB" style="border: none;">
	        <input id="setB_male"  type="radio" name="setB_gender">
		    <label for="setB_male" style="font-size: 16px;">Male</label>
	        <input id="setB_female" type="radio" name="setB_gender">
            <label for="setB_female" style="font-size: 16px; padding-right: 12px;">Female</label>
            </fieldset>
        </div>

        <p class="terms">
            <input type="checkbox" checked="checked">
            <span class="checkmark"></span>
            By creating an account you agree to our <a href="#">Terms&Privacy</a></p>
        <button type="submit" class="registerbtn">Sign Up</button>
        <div class="gotaccount" style="display: flex; padding-top: 20px; font-size: 10px;">
            <p>Already have an account? <button class="slo" id="slo" style="font-size:10px; padding:2px; font-weight: bold;">Login</button></p>
            <div class="backtohome">
                <button style="padding:1px; font-size: 8px; letter-spacing:1px" onclick="history.back()"><i class="fa-solid fa-arrow-left"> Back</i></button>
                </div>
        </div>
    </div>

</main>
</body>
<!-- `` -->