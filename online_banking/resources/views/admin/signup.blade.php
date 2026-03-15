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
        <form action="{{ route('admin.signup') }}" method="POST"
            class="flex-1 flex flex-col px-4 pb-6 max-w-md mx-auto w-full">
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
            {{-- <div class="flex items-center gap-4 py-6">
                <div class="h-px bg-slate-200 dark:bg-slate-800 flex-1"></div>
                <p class="text-sm text-slate-500 dark:text-slate-400 font-medium">Or sign up with</p>
                <div class="h-px bg-slate-200 dark:bg-slate-800 flex-1"></div>
            </div> --}}
            <!-- Login Redirect -->
            <div class="mt-8 text-center">
                <p class="text-base text-slate-600 dark:text-slate-400">
                    Already have an account?
                    <a class="text-primary font-bold hover:underline" href="{{ route('admin.signin') }}">Log In</a>
                </p>
            </div>
            <div class="h-10"></div>
        </form>
    </div>
</body>

</html>
