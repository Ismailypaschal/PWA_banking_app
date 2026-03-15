<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page Title</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Noto+Sans:wght@300..800&display=swap"
        rel="stylesheet" />

    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />

    <!-- Local Tailwind CSS -->
    <link rel="stylesheet" href="/output.css" />

</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white antialiased">

    <div class="relative flex h-full min-h-screen w-full flex-col overflow-x-hidden">
        <!-- Top Bar with Secure Indicator -->
        <div class="flex items-center p-4 pb-2 justify-between">
            <div
                class="text-primary flex size-12 shrink-0 items-center justify-center rounded-lg bg-primary/10 dark:bg-primary/20">
                <span class="material-symbols-outlined text-[24px]">verified_user</span>
            </div>
            <h2
                class="text-lg font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-12 text-slate-900 dark:text-white">
                Secure Banking</h2>
        </div>
        <!-- Headline Area -->
        <div class="flex flex-col items-center justify-center pt-8 pb-6 px-4">
            <h1
                class="tracking-tight text-[32px] font-extrabold leading-tight text-center mb-2 text-slate-900 dark:text-white">
                Welcome back</h1>
            <p class="text-slate-500 dark:text-slate-400 text-sm text-center">Manage your wealth securely.</p>
        </div>
        <!-- Tab Switcher (Segmented Buttons) -->
        {{-- <div class="flex px-6 py-4">
            <div class="flex h-12 flex-1 items-center justify-center rounded-xl bg-slate-200 dark:bg-[#1e2736] p-1">
                <label
                    class="flex cursor-pointer h-full grow items-center justify-center overflow-hidden rounded-lg px-2 has-[:checked]:bg-white dark:has-[:checked]:bg-background-dark has-[:checked]:shadow-sm text-slate-500 dark:text-slate-400 has-[:checked]:text-primary dark:has-[:checked]:text-primary text-sm font-bold leading-normal transition-all duration-200">
                    <span class="truncate" id="sign-up">Login</span>
                    <input checked="" class="invisible w-0" name="auth-tab" type="radio" value="Login" />
                </label>

            </div>
        </div> --}}
        <!-- Form Inputs -->
        <form class="flex flex-col gap-5 px-6 py-2 w-full max-w-[480px] mx-auto" method="POST"
            action="{{ route('user.signin') }}">
            @csrf
            <!-- Email Field -->
            <label class="flex flex-col flex-1">
                <p class="text-slate-900 dark:text-white text-sm font-semibold leading-normal pb-2">Email
                    Address</p>
                <div class="relative flex items-center">
                    <div class="absolute left-4 text-slate-400 dark:text-slate-500">
                        <span class="material-symbols-outlined text-[20px]">mail</span>
                    </div>
                    <input type="email" name="email"
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-200 dark:border-[#324467] bg-white dark:bg-[#192233] focus:border-primary h-14 placeholder:text-slate-400 dark:placeholder:text-[#92a4c9] pl-12 pr-4 text-base font-normal leading-normal transition-colors"
                        placeholder="user@example.com" />
                </div>
                @error('email')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </label>
            <!-- Password Field -->
            <label class="flex flex-col flex-1">
                <div class="flex justify-between items-center pb-2">
                    <p class="text-slate-900 dark:text-white text-sm font-semibold leading-normal">Password</p>
                    <a class="text-primary text-xs font-semibold hover:underline" href="#">Forgot Password?</a>
                </div>
                <div
                    class="flex w-full flex-1 items-stretch rounded-xl overflow-hidden border border-slate-200 dark:border-[#324467] bg-white dark:bg-[#192233] focus-within:ring-2 focus-within:ring-primary/50 focus-within:border-primary transition-all">
                    <div class="pl-4 flex items-center justify-center text-slate-400 dark:text-slate-500">
                        <span class="material-symbols-outlined text-[20px]">lock</span>
                    </div>
                    <input
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden border-none bg-transparent text-slate-900 dark:text-white focus:outline-0 focus:ring-0 h-14 placeholder:text-slate-400 dark:placeholder:text-[#92a4c9] px-3 text-base font-normal leading-normal"
                        placeholder="••••••••" type="password" name="password" />
                    <button
                        class="text-slate-400 dark:text-[#92a4c9] flex items-center justify-center px-4 hover:text-primary transition-colors"
                        type="button">
                        <span class="material-symbols-outlined text-[20px]">visibility_off</span>
                    </button>
                </div>
                @error('password')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </label>

            <!-- Action Buttons -->
            <div class="pt-4 flex flex-col gap-4">
                <button
                    class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl h-14 px-5 bg-primary hover:bg-blue-700 text-white text-base font-bold leading-normal tracking-[0.015em] shadow-lg shadow-blue-900/20 transition-all active:scale-[0.98]"
                    type="submit">
                    <span class="truncate">Log In</span>
                </button>
                <div class="flex items-center justify-center gap-3 py-2">
                    <div class="h-px bg-slate-200 dark:bg-slate-800 flex-1"></div>
                    <span class="text-xs text-slate-400 font-medium">OR</span>
                    <div class="h-px bg-slate-200 dark:bg-slate-800 flex-1"></div>
                </div>
                <button
                    class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl h-14 px-5 bg-white dark:bg-[#1e2736] border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-[#253042] text-slate-900 dark:text-white text-base font-medium leading-normal tracking-[0.015em] transition-all active:scale-[0.98]">
                    <span class="material-symbols-outlined text-[20px] mr-2">face</span>
                    <span class="truncate">Sign in with Account number</span>
                </button>
            </div>
        </form>
        <div class="flex-1"></div>
        <!-- Footer -->
        <div class="flex flex-col items-center justify-center p-6 pb-8 gap-4">
            <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">
                Don't have an account? <a class="text-primary font-bold hover:underline"
                    href="{{ route('user.signup') }}">Register</a>
            </p>
            <div class="flex items-center gap-2 text-slate-400 dark:text-slate-600">
                <span class="material-symbols-outlined text-[16px]">lock</span>
                <span class="text-xs font-medium">Protected by 256-bit encryption</span>
            </div>
        </div>
    </div>
    @if (session('error'))
        <div id="errorModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50">

            <div class="bg-white dark:bg-[#1a2233] w-[90%] max-w-sm rounded-2xl p-6 shadow-2xl text-center">

                <div class="flex justify-center mb-4">
                    <span class="material-symbols-outlined text-red-500 text-4xl">block</span>
                </div>

                <h2 class="text-lg font-bold mb-2">Account Error</h2>

                <p class="text-sm text-slate-500 mb-2 dark:text-slate-400">
                    {{ session('error') }}
                </p>

                <button onclick="document.getElementById('errorModal').remove()"
                    class="mt-5 w-full py-3 bg-primary text-white rounded-xl">
                    OK
                </button>

            </div>

        </div>
    @endif
    <script src="/js/general-theme.js"></script>
</body>

</html>
