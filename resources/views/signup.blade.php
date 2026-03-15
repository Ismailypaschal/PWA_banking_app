<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Sign Up - Online Banking</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

    <!-- Local Tailwind CSS -->
    <link rel="stylesheet" href="/output.css" />
    <script src="/js/general-theme.js"></script>

</head>

<body class="antialiased">
    <!-- Main Container -->
    <div
        class="relative flex h-full min-h-screen w-full flex-col bg-background-light dark:bg-background-dark group/design-root overflow-x-hidden font-display text-slate-900 dark:text-white">
        <!-- TopAppBar -->
        <div class="flex items-center bg-transparent p-4 pb-2 justify-between sticky top-0 z-10 backdrop-blur-md">
            <a href="/admin"
                class="text-slate-900 dark:text-white flex size-12 shrink-0 items-center justify-center rounded-full hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors">
                <span class="material-symbols-outlined">arrow_back_ios_new</span>
            </a>
            <h2
                class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-12">
                Create Account</h2>
        </div>
        <!-- Scrollable Content -->
        <form action="{{ route('user.signup') }}" method="POST" class="flex-1 flex flex-col px-4 pb-6 max-w-md mx-auto w-full">
            @csrf
            <!-- HeadlineText -->
            <div class="pt-4 pb-2">
                <h1 class="text-slate-900 dark:text-white tracking-tight text-[32px] font-bold leading-tight text-left">
                    Let's get started</h1>
            </div>
            <!-- BodyText -->
            <div class="pb-6">
                <p class="text-slate-500 dark:text-slate-400 text-base font-normal leading-normal">Create an account to
                    manage your finances securely.</p>
            </div>
            <!-- Form Fields -->
            <div class="flex flex-col gap-5">
                <!-- Full Name -->
                <label class="flex flex-col w-full">
                    <p class="text-slate-900 dark:text-white text-base font-medium leading-normal pb-2">First Name</p>
                    <input
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-[#324467] bg-white dark:bg-[#192233] focus:border-primary h-14 placeholder:text-slate-400 dark:placeholder:text-[#92a4c9] px-[15px] text-base font-normal leading-normal transition-all"
                        placeholder="Enter your firstname" name="first_name" type="text" />
                    @error('first_name')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </label>
                <label class="flex flex-col w-full">
                    <p class="text-slate-900 dark:text-white text-base font-medium leading-normal pb-2">Last Name</p>
                    <input
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-[#324467] bg-white dark:bg-[#192233] focus:border-primary h-14 placeholder:text-slate-400 dark:placeholder:text-[#92a4c9] px-[15px] text-base font-normal leading-normal transition-all"
                        placeholder="Enter your lastname" name="last_name" type="text" />
                    @error('last_name')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror

                </label>
                <!-- Email Address -->
                <label class="flex flex-col w-full">
                    <p class="text-slate-900 dark:text-white text-base font-medium leading-normal pb-2">Email Address
                    </p>
                    <input
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-[#324467] bg-white dark:bg-[#192233] focus:border-primary h-14 placeholder:text-slate-400 dark:placeholder:text-[#92a4c9] px-[15px] text-base font-normal leading-normal transition-all"
                        placeholder="name@example.com" name="email" type="email" />
                    @error('email')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </label>
                <!-- Phone Number -->
                <label class="flex flex-col w-full">
                    <p class="text-slate-900 dark:text-white text-base font-medium leading-normal pb-2">Mobile Number
                    </p>
                    <div class="relative flex items-center">
                        <span
                            class="absolute left-4 text-slate-500 dark:text-[#92a4c9] material-symbols-outlined text-[20px]">smartphone</span>
                        <input
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-[#324467] bg-white dark:bg-[#192233] focus:border-primary h-14 placeholder:text-slate-400 dark:placeholder:text-[#92a4c9] pl-12 pr-[15px] text-base font-normal leading-normal transition-all"
                            placeholder="(555) 000-0000" name="phone" type="tel" />
                        @error('phone')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </label>
                <!-- Date of Birth -->
                <label class="flex flex-col w-full">
                    <p class="text-slate-900 dark:text-white text-base font-medium leading-normal pb-2">Date of Birth
                    </p>
                    <input
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-[#324467] bg-white dark:bg-[#192233] focus:border-primary h-14 placeholder:text-slate-400 dark:placeholder:text-[#92a4c9] px-[15px] text-base font-normal leading-normal transition-all"
                        name="dob" type="date" />
                </label>
                <!-- Gender -->
                <label class="flex flex-col w-full">
                    <p class="text-slate-900 dark:text-white text-base font-medium leading-normal pb-2">Gender
                    </p>
                    <select name="gender" id="gender"
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-[#324467] bg-white dark:bg-[#192233] focus:border-primary h-14 placeholder:text-slate-400 dark:placeholder:text-[#92a4c9] px-[15px] text-base font-normal leading-normal transition-all"
                        required>
                        <option selected disabled>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    @error('gender')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </label>
                <!-- Marital Status -->
                <label class="flex flex-col w-full">
                    <p class="text-slate-900 dark:text-white text-base font-medium leading-normal pb-2">Marital Status
                    </p>
                    <select name="marital_status" id="marital_status"
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-[#324467] bg-white dark:bg-[#192233] focus:border-primary h-14 placeholder:text-slate-400 dark:placeholder:text-[#92a4c9] px-[15px] text-base font-normal leading-normal transition-all"
                        required>
                        <option selected disabled>Select a Marital Status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Widowed">Widowed</option>
                        <option value="Separated">Separated</option>
                    </select>
                    @error('marital_status')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </label>
                <!-- Country -->
                <label class="flex flex-col w-full">
                    <p class="text-slate-900 dark:text-white text-base font-medium leading-normal pb-2">Country
                    </p>
                    <select name="country" id="country"
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-[#324467] bg-white dark:bg-[#192233] focus:border-primary h-14 placeholder:text-slate-400 dark:placeholder:text-[#92a4c9] px-[15px] text-base font-normal leading-normal transition-all"
                        required>
                        <option selected disabled>Select a Country </option>
                        <option value="United States">United States</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda
                        </option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
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
                        <option value="Bosnia and Herzegovina">Bosnia and
                            Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cabo Verde">Cabo Verde</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central
                            African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic
                        </option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea
                        </option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Greece">Greece</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>>Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea">Korea</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Panama">Panama</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and
                            Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Vincent and the Grenadines">
                            Saint Vincent and the Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and
                            Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands
                        </option>
                        <option value="Somalia">>Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Sudan">South Sudan</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">>Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Timor-Leste">Timor-Leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and
                            Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="Uzbekistan">United Arab
                            Emirates</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                    @error('country')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </label>
                <!-- Residential Address -->
                <label class="flex flex-col w-full">
                    <p class="text-slate-900 dark:text-white text-base font-medium leading-normal pb-2">Residential
                        Address
                    </p>
                    <input
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-[#324467] bg-white dark:bg-[#192233] focus:border-primary h-14 placeholder:text-slate-400 dark:placeholder:text-[#92a4c9] px-[15px] text-base font-normal leading-normal transition-all"
                        placeholder="97B Quens Bouleyard" name="address" type="text" />
                    @error('address')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </label>
                <!-- City -->
                <label class="flex flex-col w-full">
                    <p class="text-slate-900 dark:text-white text-base font-medium leading-normal pb-2">Residential
                        City
                    </p>
                    <input
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-[#324467] bg-white dark:bg-[#192233] focus:border-primary h-14 placeholder:text-slate-400 dark:placeholder:text-[#92a4c9] px-[15px] text-base font-normal leading-normal transition-all"
                        placeholder="New York" name="city" type="text" />
                    @error('city')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </label>
                <!-- Postal Code -->
                <label class="flex flex-col w-full">
                    <p class="text-slate-900 dark:text-white text-base font-medium leading-normal pb-2">Postal Code
                    </p>
                    <input
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-[#324467] bg-white dark:bg-[#192233] focus:border-primary h-14 placeholder:text-slate-400 dark:placeholder:text-[#92a4c9] px-[15px] text-base font-normal leading-normal transition-all"
                        placeholder="XXXXX" name="postal_code" type="number" />
                    @error('postal_code')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </label>
                <!-- Password -->
                <div class="flex flex-col w-full">
                    <label class="flex flex-col w-full relative">
                        <div class="flex justify-between items-center pb-2">
                            <p class="text-slate-900 dark:text-white text-base font-medium leading-normal">Password</p>
                            <span class="text-xs text-primary font-medium flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px]">lock</span> Secure
                            </span>
                        </div>
                        <div class="relative flex items-center">
                            <input
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-[#324467] bg-white dark:bg-[#192233] focus:border-primary h-14 placeholder:text-slate-400 dark:placeholder:text-[#92a4c9] px-[15px] pr-12 text-base font-normal leading-normal transition-all"
                                placeholder="Create a password" type="password" name="password" />
                            <button
                                class="absolute right-0 h-full px-4 text-slate-400 dark:text-[#92a4c9] hover:text-primary transition-colors flex items-center justify-center">
                                <span class="material-symbols-outlined">visibility_off</span>
                            </button>
                        </div>
                        @error('password')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </label>
                    <!-- Password Strength Meter -->
                    <div class="mt-2 flex gap-1 h-1 w-full">
                        <div class="h-full bg-green-500 w-1/4 rounded-full"></div>
                        <div class="h-full bg-green-500 w-1/4 rounded-full"></div>
                        <div class="h-full bg-slate-300 dark:bg-slate-700 w-1/4 rounded-full"></div>
                        <div class="h-full bg-slate-300 dark:bg-slate-700 w-1/4 rounded-full"></div>
                    </div>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1.5">Must be at least 8 characters.</p>
                </div>
                <!-- Balance -->
                {{-- <label class="flex flex-col w-full">
                    <p class="text-slate-900 dark:text-white text-base font-medium leading-normal pb-2">Balance</p>
                    <input
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-[#324467] bg-white dark:bg-[#192233] focus:border-primary h-14 placeholder:text-slate-400 dark:placeholder:text-[#92a4c9] px-[15px] text-base font-normal leading-normal transition-all"
                        placeholder="Enter balance" name="balance" type="number" />
                </label> --}}
                <!-- Pin -->
                {{-- <div class="flex flex-col w-full">
                    <label class="flex flex-col w-full relative">
                        <div class="flex justify-between items-center pb-2">
                            <p class="text-slate-900 dark:text-white text-base font-medium leading-normal">Transfer Pin
                            </p>
                            <span class="text-xs text-primary font-medium flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px]">lock</span> Secure
                            </span>
                        </div>
                        <div class="relative flex items-center">
                            <input
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-[#324467] bg-white dark:bg-[#192233] focus:border-primary h-14 placeholder:text-slate-400 dark:placeholder:text-[#92a4c9] px-[15px] pr-12 text-base font-normal leading-normal transition-all"
                                placeholder="Create a pin" type="password" name="pin" />
                            <button
                                class="absolute right-0 h-full px-4 text-slate-400 dark:text-[#92a4c9] hover:text-primary transition-colors flex items-center justify-center">
                                <span class="material-symbols-outlined">visibility_off</span>
                            </button>
                        </div>
                    </label>
                </div> --}}
            </div>
            <!-- Terms and Conditions -->
            <div class="flex items-start gap-3 py-6">
                <div class="flex items-center h-5">
                    <input
                        class="w-5 h-5 rounded border-slate-300 dark:border-slate-600 bg-white dark:bg-[#192233] text-primary focus:ring-primary/50 focus:ring-offset-0 transition-colors"
                        id="terms" type="checkbox" required />
                </div>
                <label class="text-sm text-slate-600 dark:text-slate-400 leading-snug" for="terms">
                    By creating an account, you agree to our
                    <a class="text-primary hover:text-blue-400 font-semibold transition-colors" href="#">Terms
                        of
                        Service</a> and
                    <a class="text-primary hover:text-blue-400 font-semibold transition-colors" href="#">Privacy
                        Policy</a>.
                </label>
            </div>
            <!-- Primary Action -->
            <button
                class="w-full bg-primary hover:bg-blue-700 text-white font-bold text-base h-14 rounded-xl shadow-lg shadow-blue-900/20 active:scale-[0.98] transition-all flex items-center justify-center gap-2"
                type="submit">
                Create Account
            </button>
            <!-- Divider -->
            <div class="flex items-center gap-4 py-6">
                <div class="h-px bg-slate-200 dark:bg-slate-800 flex-1"></div>
                <p class="text-sm text-slate-500 dark:text-slate-400 font-medium">Or sign up with</p>
                <div class="h-px bg-slate-200 dark:bg-slate-800 flex-1"></div>
            </div>
            <!-- Social Login -->
            <div class="grid grid-cols-2 gap-4">
                <button
                    class="flex items-center justify-center gap-3 h-12 rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-[#192233] hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                    <span class="material-symbols-outlined text-[22px]">ios</span>
                    <span class="text-sm font-semibold text-slate-900 dark:text-white">Apple</span>
                </button>
                <button
                    class="flex items-center justify-center gap-3 h-12 rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-[#192233] hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                    <div class="relative w-5 h-5 flex items-center justify-center bg-white rounded-full p-0.5">
                        <!-- Simple Google G representation using text/symbol since no images allowed without complication -->
                        <span class="font-bold text-lg text-slate-900">G</span>
                    </div>
                    <span class="text-sm font-semibold text-slate-900 dark:text-white">Google</span>
                </button>
            </div>
            <!-- Login Redirect -->
            <div class="mt-8 text-center">
                <p class="text-base text-slate-600 dark:text-slate-400">
                    Already have an account?
                    <a class="text-primary font-bold hover:underline" href="/users/login">Log In</a>
                </p>
            </div>
            <div class="h-10"></div>
        </form>
    </div>
</body>

</html>
