<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <title>Infinite Next - Worlds News</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    {{-- <script src="{{ asset('public/js/infinitewall.js') }}"defer></script> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <script src="js/infinitewall.js" defer></script>
    <script src="js/stickyheader.js" defer></script>
    <script src="js/regModal.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/5dea7eb179.js" crossorigin="anonymous"></script>
</head>
<body>
<!--TOP HEADER OPEN-->
<div class="topheader">
    <div class="feeling">
        <p style="margin-top: 8px;">Vote your mood today:
            <span class="vote-mood" style="font-size: 18px;">
                <i class="fa-solid fa-face-smile-beam" style="display:inline-block;">
                    <span id="vote-count">47%</span></i>
                <i class="fa-solid fa-face-laugh-wink">
                    <span id="vote-count">33%</span></i>
                <i class="fa-solid fa-face-meh">
                    <span id="vote-count">16%</span></i>
                <i class="fa-solid fa-face-frown">
                    <span id="vote-count">4%</span></i>
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
<!--TOP HEADER CLOSE-->
<!--MAIN TOP CONTAINER OPEN-->
<div class="mh1wrap"> 
    <div class="logo-container">
        <div class="logo">
            <i class="fa-solid fa-infinity" id="infinity"></i>
            INFINITE NE<span class="logo-x">X</span>T
        </div>
    </div> 
    <h1 class="mh1" id="mh1d">
        Recent. Infinite. Viral.
    </h1>
    {{-- <br> --}}
    {{-- <div class="cntry">
        <label for="country" style="font-size:14px; font-weight: 600; color: var(--clr-nav-txt); text-transform: uppercase;">
            Browse News In:
        </label>
        <select id="country" name="country" class="form-control">
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
        </select>
    </div> --}}
    <div class="profile-wrapper">
        {{-- <input type="text" placeholder="your email" name="mail" required style="font-size: 15px; margin-right: .2rem; width:120px;"> --}}
        {{-- <input type="text" placeholder="password" name="mail" required style="font-size: 15px; width:120px;"> --}}
        <button class="login">
            LOGIN
        </button>
        <span style="font-size: 20px; margin:.4px; color: var(--clr-nav-txt);">
            /
        </span>
        <button data-open-modal class="register">
            REGISTER
        </button>


        <dialog data-modal class="modal">
        <x-guest-layout>
            <x-auth-card>
                <x-slot name="logo">
                    <a href="/">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
            <button data-close-modal>
        Close
    </button>
    </x-auth-card>

</x-guest-layout>


        </dialog>

        {{-- <button class="register">
            <a href="{{ route('register') }}">
                REGISTER
            </a>
        </button> --}}
    </div>
</div>
<header id="myHeader">
    <div class="nav-container">
        <div class="nav-logo-container hidden-logo">
            <div class="nav-logo reg-logo">
                <i class="fa-solid fa-infinity" id="infinity"></i>
                INFINITE NE<span class="nav-logo-x">X</span>T
            </div>
        </div>
        <div class="nav">
            <ul class="nav-list">
                <button class="btn-nav hover nav-btn btn-story">
                    <i class="fa-solid fa-upload" style="font-size:16px;"></i>
                            Submit a Story
                </button>
                <button class="btn-nav hover nav-btn btn-recent">
                        <i class="fa-solid fa-spray-can-sparkles" style="font-size:16px;"></i> 
                            Recent Submissions
                </button>
                <button class="btn-nav hover nav-btn btn-exploding">
                        <i class="fa-brands fa-hotjar" style="font-size:16px;"></i> 
                            Exploding Stories
                </button>
                <button class="btn-nav hover nav-btn btn-live">
                        <i class="fa-solid fa-life-ring" style="font-size:16px;"></i> 
                            Live
                </button>
            </ul>
        </div>
    </div>
{{-- <div class="hamburger">
    <div class="menu">
        <div class="line" id="menu_h">
            <span id="nav_h"><i class="fa-solid fa-globe"></i>menu</span>
        </div>
    </div>
</div> --}}
</header>
<!--MAIN TOP CONTAINER END-->
<main>
<!--USER OPTIONS OPEN-->
<br>
 <div class="main-text-wrapper">
    <h1 class="main-text">Check Out Most Viewed Articles In Different Contintents</h1>
 </div>                
<div class="options-container-wrapper">
    <div id="options-container">
        <div class="user-options-2" id="user-option">
            <div class="fit-country-name">
                <span class="text-europe">
                    Europe
                </span>
            </div>
            <img class="continents" src="/img/europe.png" style="width: 200px;">
        </div>
        <div class="user-options-3" id="user-option">
            <div class="fit-country-name">
                <span class="text-n-america">
                    North America
                </span>
            </div>
            <img class="continents north-america" src="/img/north-america.png" style="width: 150px;">
        </div>
        <div class="user-options-4" id="user-option">
            <div class="fit-country-name">
                <span class="text-s-america">
                    South America
                </span>
            </div>
            <img class="continents south-america" src="/img/south-america.png" style="width: 150px;">
        </div>
        <div class="user-options-5" id="user-option">
            <div class="fit-country-name">
                <span class="text-asia">
                    Asia
                </span>
            </div>
            <img class="continents asia" src="/img/asia.png" style="width: 200px;">
        </div>
        <div class="user-options-6" id="user-option">
            <div class="fit-country-name">
                <span class="text-afrika">
                    Afrika
                </span>
            </div>
            <img class="continents africa" src="/img/africa.png" style="width: 150px;">
        </div>
        <div class="user-options-7" id="user-option">
            <div class="fit-country-name">
                <span class="text-australia">
                    Australia
                </span>
            </div>
            <img class="continents australia" src="/img/australia.png" style="width: 150px;">
        </div>    
    </div>
</div>

{{-- <br> --}}
<!--USER OPTIONS CLOSE-->
    <div class="dynamicpost">
        <h3 class="dynamicheading">We only want to show the most relevant content to our readers and writers.<br>
        Help us by clicking on the subjects you would like to see most often on your feed.
        </h3>
        <div class="postHeading">What you're interested in?</div>
            <div class="selectionWrap">
                <p class="culture">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Culture
                </p>
                <p class="random">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Society
                </p>
                <p class="random">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Education
                </p>
                <p class="commonIssues">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Common Issues
                </p>
                <p class="success">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Success Stories
                </p>
                <p class="hero">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Sport
                </p>
                <p class="random">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Economics
                </p>
                <p class="random">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Emerging Markets
                </p>
                <p class="random">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Innovation
                </p>
                <p class="hero">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Animals
                </p>
                <p class="hero">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Food
                </p>
                <p class="hero">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Sea Life
                </p>
                <p class="random">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Lifestyle
                </p>
            </div>
        
            <div class="selectionWrap">
                <p class="culture">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Travel
                </p>
                <p class="culture">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Healthcare
                </p>
                <p class="culture">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Industrial Sector
                </p>
                <p class="culture">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Entertainment
                </p>
                <p class="commonIssues">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Sight
                </p>
                <p class="success">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Games
                </p>
                <p class="hero">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Funny
                </p>
                <p class="hero">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Active Lifestyle
                </p>
                <p class="hero">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Music
                </p>
                <p class="hero">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Local
                </p>
                <p class="random">
                    <i class="fa-solid fa-arrow-right" style="color: var(--clr-down-hover);"></i> Little From Everything
                </p>
            </div>
        </div>
</div>

<!--ARTICLE TYPE OPEN-->
<div id="read-type">
    <div class="people" id="hover-type"><p class="type">People</p></div>
    <div class="nature" id="hover-type"><p class="type">Nature</p></div>
    <div class="tech" id="hover-type"><p class="type">Tech</p></div>
</div>
<!--ARTICLE TYPE CLOSE-->

<div class="container" id="container">
    <h1 id="itro" style="font-size: calc(.5rem + .8vw);">
        <span id="livedot"><img src="/img/livedot.png" style="width: 35px;"></span>
        Community updated Worldwide news feed.<br>
        Scroll trough news, events and discoveries that are happening right now!</h1>
        <p class="suretag">If you have any doubt of any story or article flag it by clicking on the flag 
        ( <i class="fa-solid fa-flag"></i> )
        icon and <button id="report">report it here</button> and we gonna get to it shortly.</p>

    </div>
    
<div class="loading">
	<div class="ball bally"></div>
	<div class="ball ballr"></div>
	<div class="ball ballb"></div>
</div>
</main>
<script src="/infinitewall.js"></script>
<script src="/stickyheader.js"></script>
<script src="fetch.js"></script>
</body>
<!-- `` -->