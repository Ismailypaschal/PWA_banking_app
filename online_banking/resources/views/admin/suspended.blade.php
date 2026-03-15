<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&amp;display=swap"
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

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 antialiased">
    <div
        class="relative flex min-h-screen w-full flex-col bg-background-light dark:bg-background-dark overflow-x-hidden max-w-md mx-auto border-x border-primary/10">
        <!-- Top App Bar -->
        <div
            class="flex items-center bg-background-light dark:bg-background-dark p-4 pb-2 justify-between sticky top-0 z-10">
            <h2
                class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-12">
                Security Notice</h2>
        </div>
        <!-- Main Content Hero -->
        <div class="flex flex-col px-6 py-8">
            <div class="flex flex-col items-center gap-8">
                <!-- Status Icon with Glow -->
                <div class="relative flex items-center justify-center">
                    <div class="absolute inset-0 bg-primary/20 blur-3xl rounded-full"></div>
                    <div class="relative bg-primary/10 p-8 rounded-full border border-primary/20">
                        <span class="material-symbols-outlined text-primary text-7xl select-none"
                            style="font-variation-settings: 'FILL' 1;">
                            security
                        </span>
                    </div>
                </div>
                <div class="flex flex-col items-center gap-3">
                    <h1
                        class="text-slate-900 dark:text-white text-2xl font-bold leading-tight tracking-[-0.015em] text-center px-4">
                        Your Account is Temporarily Suspended
                    </h1>
                    <p
                        class="text-slate-600 dark:text-slate-400 text-sm font-normal leading-relaxed text-center max-w-[320px]">
                        To protect your funds and personal data, we've restricted access while we investigate recent
                        activity on your profile.
                    </p>
                </div>
            </div>
        </div>
        <!-- Reasons Section -->
        <div class="px-6 space-y-4 mb-8">
            <h3 class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">What
                happened?</h3>
            <!-- Reason Card 1 -->
            <div
                class="flex items-start gap-4 bg-white dark:bg-primary/5 border border-slate-200 dark:border-primary/10 rounded-xl p-4">
                <div class="text-primary flex items-center justify-center rounded-lg bg-primary/10 shrink-0 size-10">
                    <span class="material-symbols-outlined">shield_lock</span>
                </div>
                <div class="flex flex-col justify-center">
                    <p class="text-slate-900 dark:text-white text-base font-semibold leading-normal">Unusual login
                        attempt</p>
                    <p class="text-slate-600 dark:text-slate-400 text-xs font-normal leading-normal mt-1">
                        A login was detected from an unrecognized device in a new location.
                    </p>
                </div>
            </div>
            <!-- Reason Card 2 -->
            <div
                class="flex items-start gap-4 bg-white dark:bg-primary/5 border border-slate-200 dark:border-primary/10 rounded-xl p-4">
                <div class="text-primary flex items-center justify-center rounded-lg bg-primary/10 shrink-0 size-10">
                    <span class="material-symbols-outlined">fingerprint</span>
                </div>
                <div class="flex flex-col justify-center">
                    <p class="text-slate-900 dark:text-white text-base font-semibold leading-normal">Identity
                        verification needed</p>
                    <p class="text-slate-600 dark:text-slate-400 text-xs font-normal leading-normal mt-1">
                        We require updated documentation and an initial deposit to comply with updated banking
                        regulations.
                    </p>
                </div>
            </div>
        </div>
        <!-- Action Area (Spacer) -->
        <div class="flex-grow"></div>
        <!-- Fixed Bottom Actions -->
        <div
            class="px-6 py-6 space-y-3 bg-gradient-to-t from-background-light dark:from-background-dark via-background-light dark:via-background-dark to-transparent">
            <button
                class="flex w-full cursor-pointer items-center justify-center rounded-xl h-14 px-6 bg-primary text-white text-base font-bold transition-all active:scale-[0.98]">
                <span class="truncate">Contact Support</span>
            </button>
            <form action="">
                <a href="{{ route('login') }}"
                    class="flex w-full cursor-pointer items-center justify-center h-12 px-6 text-slate-500 dark:text-slate-400 text-sm font-semibold hover:text-primary transition-colors">
                    <span class="truncate">Sign in</span>
                </a href="{{ route('login') }}">
            </form>
            <!-- Reassuring Footer -->
            <div class="flex items-center justify-center gap-1.5 pt-5">
                <span class="material-symbols-outlined text-[14px] text-slate-400">verified_user</span>
                <p class="text-slate-500 dark:text-slate-500 text-[11px] font-medium tracking-wide uppercase">
                    Bank-level 256-bit encryption
                </p>
            </div>
        </div>
        <!-- Bottom Safe Area Spacer -->
        <div class="h-4 bg-background-light dark:bg-background-dark"></div>
    </div>
</body>

</html>
