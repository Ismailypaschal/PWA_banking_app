<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Profile Page - Accordion View</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/output.css">
    <script src="/js/general-theme.js"></script>
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display text-[#111418] dark:text-white antialiased selection:bg-primary/30 overflow-x-hidden">
    <div class="relative flex flex-col min-h-screen pb-[120px]">
        <div
            class="flex items-center justify-between px-4 py-3 sticky top-0 z-20 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-lg border-b border-transparent dark:border-white/5">
            <a href="/users"
                class="flex size-10 shrink-0 items-center justify-center text-[#111418] dark:text-white rounded-full hover:bg-black/5 dark:hover:bg-white/10 transition-colors">
                <span class="material-symbols-outlined text-[24px]">arrow_back</span>
            </a>
            <h2 class="text-lg font-bold leading-tight flex-1 text-center pr-10">Profile</h2>
            <div class="size-10"></div>
        </div>
        <div class="flex flex-col items-center pt-2 pb-8 px-4">
            <div class="relative mb-5 group">
                <div
                    class="bg-center bg-no-repeat bg-cover rounded-full size-28 shadow-xl ring-4 ring-white dark:ring-[#1c2431] overflow-hidden">
                    <img src="<%= user.avatar %>" alt="Profile Picture"
                        class="w-full h-full object-cover rounded-full" />
                </div>

                <form action="/users/update-photo" method="POST" enctype="multipart/form-data"
                    class="absolute bottom-0 right-0">
                    <!-- Hidden file input -->
                    <input id="photo-upload" type="file" name="photo" accept="image/*" class="hidden"
                        onchange="this.form.submit()" />

                    <!-- Edit button -->
                    <label for="photo-upload" class="bg-primary hover:bg-blue-600 text-white rounded-full p-2
             ring-4 ring-background-light dark:ring-background-dark
             flex items-center justify-center cursor-pointer
             transition-transform hover:scale-105 shadow-lg">
                        <span class="material-symbols-outlined text-[18px]">edit</span>
                    </label>
                </form>
            </div>

            <h1 class="text-2xl font-bold leading-tight text-center mb-1 text-[#111418] dark:text-white">
                {{-- <%= user.firstname %>
                    <%= user.lastname %> --}}
            </h1>
            <div class="flex items-center gap-2 mt-1">
                <span class="text-[#637588] dark:text-[#92a4c9] text-sm font-medium">Premier ****4291</span>
            </div>
            <div
                class="mt-4 flex items-center gap-2 px-3 py-1 bg-blue-100 dark:bg-[#1a2333] rounded-full border border-blue-200 dark:border-[#2a3441]">
                <span class="material-symbols-outlined text-primary text-sm fill-1">workspace_premium</span>
                <span class="text-primary text-xs font-bold uppercase tracking-wide">Gold Member</span>
            </div>
        </div>
        <div class="px-4 flex flex-col gap-6 max-w-lg mx-auto w-full">
            <section>
                <h3 class="text-[#637588] dark:text-[#92a4c9] text-xs font-bold tracking-widest uppercase mb-3 pl-2">
                    Personal Info</h3>
                <div
                    class="flex flex-col bg-white dark:bg-[#1c2431] rounded-xl overflow-hidden shadow-sm border border-gray-100 dark:border-white/5">
                    <details class="border-b border-gray-100 dark:border-white/5">
                        <summary
                            class="group flex items-center gap-4 p-4 active:bg-gray-50 dark:active:bg-white/5 transition-colors cursor-pointer list-none">
                            <div
                                class="flex items-center justify-center rounded-lg bg-blue-50 dark:bg-[#232f48] text-primary dark:text-blue-400 shrink-0 size-10">
                                <span class="material-symbols-outlined text-[24px]">person</span>
                            </div>
                            <div class="flex-1 min-w-0 text-left">
                                <p class="text-base font-medium truncate text-[#111418] dark:text-white">Personal
                                    Details</p>
                                <p class="text-[#637588] dark:text-[#92a4c9] text-xs truncate mt-0.5">Contact info &amp;
                                    identification</p>
                            </div>
                            <span
                                class="material-symbols-outlined text-gray-400 dark:text-gray-500 accordion-arrow transition-transform duration-200">expand_more</span>
                        </summary>
                        <div
                            class="p-4 bg-gray-50/50 dark:bg-[#151c2a] border-t border-gray-100 dark:border-white/5 space-y-4">
                            <div class="space-y-1">
                                <label
                                    class="text-[10px] font-bold uppercase tracking-wider text-[#637588] dark:text-[#92a4c9]">Full
                                    Name</label>
                                <p class="text-sm font-medium text-[#111418] dark:text-white">
                                    {{-- <%= user.firstname %>
                                        <%= user.lastname %> --}}
                                </p>
                            </div>
                            <div class="space-y-1">
                                <label
                                    class="text-[10px] font-bold uppercase tracking-wider text-[#637588] dark:text-[#92a4c9]">Email
                                    Address</label>
                                <p class="text-sm font-medium text-[#111418] dark:text-white">
                                    <%= user.email %>
                                </p>
                            </div>
                            <div class="space-y-1">
                                <label
                                    class="text-[10px] font-bold uppercase tracking-wider text-[#637588] dark:text-[#92a4c9]">Phone
                                    Number</label>
                                <p class="text-sm font-medium text-[#111418] dark:text-white">+1 555-0123</p>
                            </div>
                            <!-- <button
                                class="w-full py-2.5 px-4 bg-primary text-white text-sm font-bold rounded-lg mt-2">Edit
                                Details</button> -->
                        </div>
                    </details>
                    <details>
                        <summary
                            class="group flex items-center gap-4 p-4 active:bg-gray-50 dark:active:bg-white/5 transition-colors cursor-pointer list-none">
                            <div
                                class="flex items-center justify-center rounded-lg bg-blue-50 dark:bg-[#232f48] text-primary dark:text-blue-400 shrink-0 size-10">
                                <span class="material-symbols-outlined text-[24px]">description</span>
                            </div>
                            <div class="flex-1 min-w-0 text-left">
                                <p class="text-base font-medium truncate text-[#111418] dark:text-white">Documents</p>
                                <p
                                    class="text-emerald-600 dark:text-emerald-400 text-xs flex items-center gap-1 mt-0.5 font-medium">
                                    <span class="material-symbols-outlined text-[14px] filled">verified</span> Verified
                                </p>
                            </div>
                            <span
                                class="material-symbols-outlined text-gray-400 dark:text-gray-500 accordion-arrow transition-transform duration-200">expand_more</span>
                        </summary>
                        <div
                            class="p-4 bg-gray-50/50 dark:bg-[#151c2a] border-t border-gray-100 dark:border-white/5 space-y-3">
                            <div
                                class="flex items-center justify-between p-3 rounded-lg bg-white dark:bg-[#1c2431] border border-gray-100 dark:border-white/10">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-primary">badge</span>
                                    <span class="text-sm font-medium text-[#111418] dark:text-white">Identity Card
                                        (SSN)</span>
                                </div>
                                <span class="material-symbols-outlined text-[18px] text-emerald-500">check_circle</span>
                            </div>
                            <div
                                class="flex items-center justify-between p-3 rounded-lg bg-white dark:bg-[#1c2431] border border-gray-100 dark:border-white/10 opacity-70">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-[#637588]">home_pin</span>
                                    <span class="text-sm font-medium text-[#111418] dark:text-white">Proof of
                                        Address</span>
                                </div>
                                <span class="material-symbols-outlined text-[18px] text-emerald-500">check_circle</span>
                            </div>
                        </div>
                    </details>
                </div>
            </section>
            <section>
                <h3 class="text-[#637588] dark:text-[#92a4c9] text-xs font-bold tracking-widest uppercase mb-3 pl-2">
                    Security</h3>
                <div
                    class="flex flex-col bg-white dark:bg-[#1c2431] rounded-xl overflow-hidden shadow-sm border border-gray-100 dark:border-white/5">
                    <details class="border-b border-gray-100 dark:border-white/5">
                        <summary
                            class="group flex items-center gap-4 p-4 active:bg-gray-50 dark:active:bg-white/5 transition-colors cursor-pointer list-none">
                            <div
                                class="flex items-center justify-center rounded-lg bg-blue-50 dark:bg-[#232f48] text-primary dark:text-blue-400 shrink-0 size-10">
                                <span class="material-symbols-outlined text-[24px]">lock_reset</span>
                            </div>
                            <div class="flex-1 text-left">
                                <p class="text-base font-medium text-[#111418] dark:text-white">Change Password</p>
                                <p class="text-[#637588] dark:text-[#92a4c9] text-xs mt-0.5">
                                </p>
                                {{-- <p class="text-[#637588] dark:text-[#92a4c9] text-xs mt-0.5"><%= user.passwordUpdatededAt ? 'Last changed on ' + user.passwordUpdatedAt.toDateString() : 'You have not changed your password yet' %>
                                </p> --}}
                            </div>
                            <span
                                class="material-symbols-outlined text-gray-400 dark:text-gray-500 accordion-arrow transition-transform duration-200">expand_more</span>
                        </summary>
                        <div
                            class="p-4 bg-gray-50/50 dark:bg-[#151c2a] border-t border-gray-100 dark:border-white/5 space-y-4">
                            <div class="space-y-3">
                                <div class="space-y-1">
                                    <label
                                        class="text-[10px] font-bold uppercase text-[#637588] dark:text-[#92a4c9]">Current
                                        Password</label>
                                    <input
                                        class="w-full bg-white dark:bg-[#1c2431] border-gray-200 dark:border-white/10 rounded-lg text-sm focus:ring-primary focus:border-primary"
                                        placeholder="••••••••" type="password" />
                                </div>
                                <div class="space-y-1">
                                    <label
                                        class="text-[10px] font-bold uppercase text-[#637588] dark:text-[#92a4c9]">New
                                        Password</label>
                                    <input
                                        class="w-full bg-white dark:bg-[#1c2431] border-gray-200 dark:border-white/10 rounded-lg text-sm focus:ring-primary focus:border-primary"
                                        placeholder="••••••••" type="password" />
                                        <input type="text" value="<%= user.id %>" class="hidden">
                                </div>
                            </div>
                            <button class="w-full py-2.5 bg-primary text-white text-sm font-bold rounded-lg">Update
                                Password</button>
                        </div>
                    </details>
                    <details class="border-b border-gray-100 dark:border-white/5">
                        <summary
                            class="group flex items-center gap-4 p-4 active:bg-gray-50 dark:active:bg-white/5 transition-colors cursor-pointer list-none">
                            <div
                                class="flex items-center justify-center rounded-lg bg-blue-50 dark:bg-[#232f48] text-primary dark:text-blue-400 shrink-0 size-10">
                                <span class="material-symbols-outlined text-[24px]">shield</span>
                            </div>
                            <div class="flex-1 text-left">
                                <p class="text-base font-medium text-[#111418] dark:text-white">Two-Factor Auth</p>
                                <p class="text-[#637588] dark:text-[#92a4c9] text-xs mt-0.5">Enabled (SMS &amp; App)</p>
                            </div>
                            <span
                                class="material-symbols-outlined text-gray-400 dark:text-gray-500 accordion-arrow transition-transform duration-200">expand_more</span>
                        </summary>
                        <div
                            class="p-4 bg-gray-50/50 dark:bg-[#151c2a] border-t border-gray-100 dark:border-white/5 space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-medium text-[#111418] dark:text-white">SMS
                                    Authentication</span>
                                <span
                                    class="text-[10px] font-bold text-emerald-500 bg-emerald-500/10 px-2 py-0.5 rounded">ACTIVE</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-medium text-[#111418] dark:text-white">Authenticator
                                    App</span>
                                <span
                                    class="text-[10px] font-bold text-emerald-500 bg-emerald-500/10 px-2 py-0.5 rounded">ACTIVE</span>
                            </div>
                            <button
                                class="w-full py-2.5 border border-red-500 text-red-500 text-sm font-bold rounded-lg mt-1">Disable
                                2FA</button>
                        </div>
                    </details>
                    <div class="flex items-center gap-4 p-4">
                        <div
                            class="flex items-center justify-center rounded-lg bg-blue-50 dark:bg-[#232f48] text-primary dark:text-blue-400 shrink-0 size-10">
                            <span class="material-symbols-outlined text-[24px]">face</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-base font-medium text-[#111418] dark:text-white">Face ID Login</p>
                            <p class="text-[#637588] dark:text-[#92a4c9] text-xs mt-0.5">Use biometric to sign in</p>
                        </div>
                        <label class="inline-flex items-center cursor-pointer relative z-10">
                            <input checked="" class="sr-only peer" type="checkbox" value="" />
                            <div
                                class="w-12 h-7 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-[#111722] peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-primary border border-gray-300 dark:border-gray-600">
                            </div>
                        </label>
                    </div>
                </div>
            </section>
            <section>
                <h3 class="text-[#637588] dark:text-[#92a4c9] text-xs font-bold tracking-widest uppercase mb-3 pl-2">App
                    Settings</h3>
                <div
                    class="flex flex-col bg-white dark:bg-[#1c2431] rounded-xl overflow-hidden shadow-sm border border-gray-100 dark:border-white/5">
                    <details class="border-b border-gray-100 dark:border-white/5">
                        <summary
                            class="group flex items-center gap-4 p-4 active:bg-gray-50 dark:active:bg-white/5 transition-colors cursor-pointer list-none">
                            <div
                                class="flex items-center justify-center rounded-lg bg-blue-50 dark:bg-[#232f48] text-primary dark:text-blue-400 shrink-0 size-10">
                                <span class="material-symbols-outlined text-[24px]">notifications</span>
                            </div>
                            <div class="flex-1 text-left">
                                <p class="text-base font-medium text-[#111418] dark:text-white">Notifications</p>
                            </div>
                            <span
                                class="material-symbols-outlined text-gray-400 dark:text-gray-500 accordion-arrow transition-transform duration-200">expand_more</span>
                        </summary>
                        <div
                            class="p-4 bg-gray-50/50 dark:bg-[#151c2a] border-t border-gray-100 dark:border-white/5 space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-[#111418] dark:text-white">Push Notifications</span>
                                <input checked=""
                                    class="rounded border-gray-300 dark:border-gray-600 bg-transparent text-primary focus:ring-primary"
                                    type="checkbox" />
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-[#111418] dark:text-white">Email Statements</span>
                                <input checked=""
                                    class="rounded border-gray-300 dark:border-gray-600 bg-transparent text-primary focus:ring-primary"
                                    type="checkbox" />
                            </div>
                        </div>
                    </details>
                    <div
                        class="group flex items-center gap-4 p-4 border-b border-gray-100 dark:border-white/5 active:bg-gray-50 dark:active:bg-white/5 transition-colors cursor-pointer">
                        <div
                            class="flex items-center justify-center rounded-lg bg-blue-50 dark:bg-[#232f48] text-primary dark:text-blue-400 shrink-0 size-10">
                            <span class="material-symbols-outlined text-[24px]">dark_mode</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-base font-medium text-[#111418] dark:text-white">Appearance</p>
                            <p class="text-[#637588] dark:text-[#92a4c9] text-xs mt-0.5">Dark Mode</p>
                        </div>
                    </div>
                    <div
                        class="group flex items-center gap-4 p-4 border-b border-gray-100 dark:border-white/5 active:bg-gray-50 dark:active:bg-white/5 transition-colors cursor-pointer">
                        <div
                            class="flex items-center justify-center rounded-lg bg-blue-50 dark:bg-[#232f48] text-primary dark:text-blue-400 shrink-0 size-10">
                            <span class="material-symbols-outlined text-[24px]">attach_money</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-base font-medium text-[#111418] dark:text-white">Currency</p>
                            <p class="text-[#637588] dark:text-[#92a4c9] text-xs mt-0.5">USD ($)</p>
                        </div>
                    </div>
                    <div
                        class="group flex items-center gap-4 p-4 active:bg-gray-50 dark:active:bg-white/5 transition-colors cursor-pointer">
                        <div
                            class="flex items-center justify-center rounded-lg bg-blue-50 dark:bg-[#232f48] text-primary dark:text-blue-400 shrink-0 size-10">
                            <span class="material-symbols-outlined text-[24px]">help</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-base font-medium text-[#111418] dark:text-white">Help &amp; Support</p>
                        </div>
                    </div>
                </div>
            </section>
            <button
                class="group w-full mt-2 p-4 rounded-xl border border-red-200 dark:border-red-900/30 text-red-600 dark:text-red-400 bg-red-50 dark:bg-[#2d1a1a] font-bold text-base flex items-center justify-center gap-2 hover:bg-red-100 dark:hover:bg-[#3d1f1f] transition-all active:scale-[0.98]">
                <span class="material-symbols-outlined transition-transform group-hover:-translate-x-1">logout</span>
                Log Out
            </button>
            <div class="text-center text-xs text-[#637588] dark:text-[#92a4c9] py-6 opacity-60">
                Version 1.0.2 (234)
            </div>
        </div>
    </div>
    @include('partials.footer-navbar')


</body>

</html>