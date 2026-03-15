<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Forgot Password</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="/output.css">
    <script src="/js/general-theme.js"></script>

    
</head>

<body class="bg-background-light dark:bg-background-dark font-display antialiased">
    <!-- Main Container: Simulating a mobile view with max-width -->
    <div
        class="relative flex min-h-screen w-full flex-col overflow-x-hidden bg-background-light dark:bg-background-dark max-w-md mx-auto shadow-2xl">
        <!-- Navigation Bar -->
        <div class="flex items-center justify-between p-4 pb-2">
            <button
                class="text-slate-900 dark:text-white flex size-12 shrink-0 items-center justify-center rounded-full hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors">
                <span class="material-symbols-outlined text-[24px]">arrow_back_ios_new</span>
            </button>
            <h2
                class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-12">
                <!-- Centered visually by padding-right equal to the button width -->
            </h2>
        </div>
        <!-- Scrollable Content Area -->
        <div class="flex-1 flex flex-col px-4 pt-4 pb-8">
            <!-- Headline -->
            <div class="mb-2">
                <h1
                    class="text-slate-900 dark:text-white tracking-tight text-[32px] font-extrabold leading-tight text-left">
                    Forgot Password?
                </h1>
            </div>
            <!-- Body Text / Instructions -->
            <div class="mb-8">
                <p class="text-slate-600 dark:text-slate-400 text-base font-normal leading-relaxed">
                    Don't worry, it happens. Please enter the email address or username associated with your account and
                    we'll send you a link to reset it.
                </p>
            </div>
            <!-- Input Field -->
            <div class="mb-6">
                <label class="flex flex-col w-full">
                    <p class="text-slate-900 dark:text-white text-base font-bold leading-normal pb-2">Email or Username
                    </p>
                    <div class="relative flex w-full items-center">
                        <input
                            class="peer flex w-full flex-1 rounded-lg border border-slate-300 dark:border-[#324467] bg-white dark:bg-[#192233] text-slate-900 dark:text-white focus:border-primary focus:ring-1 focus:ring-primary h-14 placeholder:text-slate-400 dark:placeholder:text-[#92a4c9] pl-4 pr-12 text-base font-normal leading-normal transition-all"
                            placeholder="user@example.com" type="text" value="" />
                        <!-- Input Icon -->
                        <div
                            class="absolute right-0 pr-4 flex items-center justify-center text-slate-400 dark:text-[#92a4c9] pointer-events-none">
                            <span class="material-symbols-outlined">mail</span>
                        </div>
                    </div>
                </label>
            </div>
            <!-- Action Button -->
            <div class="mt-4">
                <button
                    class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 bg-primary hover:bg-blue-700 transition-colors text-white text-base font-bold leading-normal tracking-[0.015em] shadow-lg shadow-blue-900/20 active:scale-[0.98]">
                    <span class="truncate">Send Reset Link</span>
                </button>
            </div>
            <!-- Trust Indicator / Secure Note -->
            <div class="flex items-center justify-center mt-8 gap-2 opacity-60">
                <span class="material-symbols-outlined text-slate-500 dark:text-slate-400 text-sm">lock</span>
                <span class="text-xs text-slate-500 dark:text-slate-400 font-medium">Secure Connection</span>
            </div>
            <!-- Spacer to push footer down if content is short -->
            <div class="flex-1"></div>
            <!-- Footer: Contact Support -->
            <div class="flex flex-col items-center justify-end pb-6 pt-10">
                <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">
                    Having trouble?
                    <a class="text-primary hover:text-blue-400 font-bold ml-1 transition-colors" href="#">Contact
                        Support</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>