<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Reset Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
        <link rel="stylesheet" href="/output.css">
    <script src="/js/general-theme.js"></script>

</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen flex justify-center antialiased">
    <div
        class="relative flex h-full w-full max-w-md flex-col bg-background-light dark:bg-background-dark overflow-hidden shadow-xl sm:rounded-xl sm:my-8 sm:border dark:sm:border-gray-800">
        <!-- Header -->
        <div class="flex items-center bg-background-light dark:bg-background-dark p-4 sticky top-0 z-10">
            <button
                class="text-gray-900 dark:text-white flex size-10 shrink-0 items-center justify-center rounded-full hover:bg-gray-200 dark:hover:bg-gray-800 transition-colors">
                <span class="material-symbols-outlined" style="font-size: 24px;">arrow_back</span>
            </button>
            <h2
                class="text-gray-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                Reset Password</h2>
        </div>
        <div class="flex-1 overflow-y-auto pb-24">
            <!-- Headline & Body -->
            <div class="px-4 pt-4 pb-6">
                <h2
                    class="text-gray-900 dark:text-white tracking-tight text-[28px] font-bold leading-tight text-left mb-2">
                    Create new password</h2>
                <p class="text-gray-500 dark:text-gray-400 text-base font-normal leading-normal">Your new password must
                    be different from previous used passwords.</p>
            </div>
            <!-- New Password Field -->
            <div class="px-4 pb-2">
                <label class="flex flex-col w-full">
                    <p class="text-gray-900 dark:text-white text-base font-medium leading-normal pb-2">New password</p>
                    <div class="relative flex w-full items-center">
                        <input
                            class="flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-gray-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-gray-300 dark:border-[#324467] bg-white dark:bg-[#192233] focus:border-primary h-14 placeholder:text-gray-400 dark:placeholder:text-[#92a4c9] px-4 text-base font-normal leading-normal transition-all"
                            placeholder="Min. 8 characters" type="password" value="Secret123" />
                        <button
                            class="absolute right-0 top-0 bottom-0 px-4 text-gray-400 dark:text-[#92a4c9] hover:text-primary transition-colors flex items-center justify-center">
                            <span class="material-symbols-outlined" style="font-size: 24px;">visibility_off</span>
                        </button>
                    </div>
                </label>
            </div>
            <!-- Password Strength Meter -->
            <div class="px-4 py-3">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Password strength</span>
                    <span class="text-sm font-bold text-yellow-500">Medium</span>
                </div>
                <div class="flex gap-2 h-1.5 w-full">
                    <div class="h-full w-1/4 rounded-full bg-yellow-500"></div>
                    <div class="h-full w-1/4 rounded-full bg-yellow-500"></div>
                    <div class="h-full w-1/4 rounded-full bg-gray-200 dark:bg-gray-700"></div>
                    <div class="h-full w-1/4 rounded-full bg-gray-200 dark:bg-gray-700"></div>
                </div>
            </div>
            <!-- Validation Checklist -->
            <div class="px-4 py-2 space-y-3">
                <div class="flex items-center gap-3">
                    <div
                        class="flex items-center justify-center size-5 rounded-full bg-green-500/20 text-green-600 dark:text-green-400">
                        <span class="material-symbols-outlined" style="font-size: 14px; font-weight: bold;">check</span>
                    </div>
                    <span class="text-sm text-gray-600 dark:text-gray-300">At least 8 characters</span>
                </div>
                <div class="flex items-center gap-3">
                    <div
                        class="flex items-center justify-center size-5 rounded-full bg-green-500/20 text-green-600 dark:text-green-400">
                        <span class="material-symbols-outlined" style="font-size: 14px; font-weight: bold;">check</span>
                    </div>
                    <span class="text-sm text-gray-600 dark:text-gray-300">Contains a number</span>
                </div>
                <div class="flex items-center gap-3">
                    <div
                        class="flex items-center justify-center size-5 rounded-full bg-green-500/20 text-green-600 dark:text-green-400">
                        <span class="material-symbols-outlined" style="font-size: 14px; font-weight: bold;">check</span>
                    </div>
                    <span class="text-sm text-gray-600 dark:text-gray-300">Contains an uppercase letter</span>
                </div>
                <div class="flex items-center gap-3">
                    <div
                        class="flex items-center justify-center size-5 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-400 dark:text-gray-500">
                        <span class="material-symbols-outlined" style="font-size: 14px; font-weight: bold;">close</span>
                    </div>
                    <span class="text-sm text-gray-600 dark:text-gray-300">Contains a special character</span>
                </div>
            </div>
            <!-- Confirm Password Field -->
            <div class="px-4 pt-6 pb-2">
                <label class="flex flex-col w-full">
                    <p class="text-gray-900 dark:text-white text-base font-medium leading-normal pb-2">Confirm password
                    </p>
                    <div class="relative flex w-full items-center">
                        <input
                            class="flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-gray-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-gray-300 dark:border-[#324467] bg-white dark:bg-[#192233] focus:border-primary h-14 placeholder:text-gray-400 dark:placeholder:text-[#92a4c9] px-4 text-base font-normal leading-normal transition-all"
                            placeholder="Re-enter password" type="password" value="" />
                        <button
                            class="absolute right-0 top-0 bottom-0 px-4 text-gray-400 dark:text-[#92a4c9] hover:text-primary transition-colors flex items-center justify-center">
                            <span class="material-symbols-outlined" style="font-size: 24px;">visibility_off</span>
                        </button>
                    </div>
                </label>
            </div>
        </div>
        <!-- Sticky Bottom Button -->
        <div
            class="absolute bottom-0 left-0 right-0 p-4 bg-background-light dark:bg-background-dark border-t border-gray-200 dark:border-gray-800">
            <button
                class="w-full h-12 bg-primary hover:bg-blue-700 text-white font-bold rounded-lg transition-colors flex items-center justify-center">
                Update Password
            </button>
        </div>
    </div>
</body>

</html>