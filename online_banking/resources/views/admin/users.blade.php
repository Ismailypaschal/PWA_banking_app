<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin User Management</title>

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="/output.css">
    <script src="/js/general-theme.js"></script>


</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen text-slate-900 dark:text-white">
    <header
        class="sticky top-0 z-50 bg-background-light dark:bg-background-dark border-b border-slate-200 dark:border-slate-800">
        <div class="flex items-center p-4 pb-2 justify-between">
            <div class="flex size-10 shrink-0 items-center justify-center cursor-pointer">
                <!-- <button id="theme-toggle"
                    class="flex items-center justify-center size-10 rounded-full bg-white dark:bg-[#1a2233] text-[#111418] dark:text-white hover:bg-gray-100 dark:hover:bg-[#232f48] transition-colors shadow-sm">
                    <span id="theme-dark-icon" class="material-symbols-outlined text-xl hidden dark:block">
                        light_mode
                    </span>
                    <span id="theme-light-icon" class="material-symbols-outlined text-xl block dark:hidden">
                        dark_mode
                    </span>
                </button> -->
            </div>
            <h2 class="text-lg font-bold leading-tight tracking-tight flex-1 text-center">User Management</h2>
            <% if (message) { %>
                <p class="text-sm pl-6 mt-6 text-green-600" id="msg">
                    <%= message %>
                </p>

                <script>
                    setTimeout(() => {
                        const el = document.getElementById('msg');
                        if (el) el.style.display = 'none';
                    }, 3000);
                </script>
                <% } %>
                    <div class="flex w-10 items-center justify-end">
                        <a href="/admin/sign-up"
                            class="flex items-center justify-center rounded-lg h-10 w-10 bg-primary text-white">
                            <span class="material-symbols-outlined text-xl">person_add</span>
                        </a>
                    </div>

        </div>
        <div class="px-4 py-3">
            <label class="flex flex-col w-full">
                <div
                    class="flex w-full items-stretch rounded-xl h-11 bg-slate-200/50 dark:bg-slate-800/50 border border-transparent focus-within:border-primary transition-all">
                    <div class="flex items-center justify-center pl-4 text-slate-500">
                        <span class="material-symbols-outlined text-xl">search</span>
                    </div>
                    <input
                        class="bg-transparent border-none focus:ring-0 flex-1 px-3 text-sm font-normal placeholder:text-slate-500"
                        placeholder="Search accounts or IDs..." />
                </div>
            </label>
        </div>
        <div class="px-4 pb-4">
            <div class="flex h-11 items-center justify-center rounded-xl bg-slate-200/50 dark:bg-slate-800/50 p-1">
                <label
                    class="flex cursor-pointer h-full grow items-center justify-center rounded-lg px-2 has-[:checked]:bg-white dark:has-[:checked]:bg-slate-700 has-[:checked]:shadow-sm transition-all text-slate-500 has-[:checked]:text-primary dark:has-[:checked]:text-white text-xs font-bold uppercase tracking-wider">
                    <span>All</span>
                    <input checked="" class="hidden" name="status-filter" type="radio" value="all" />
                </label>
                <label
                    class="flex cursor-pointer h-full grow items-center justify-center rounded-lg px-2 has-[:checked]:bg-white dark:has-[:checked]:bg-slate-700 has-[:checked]:shadow-sm transition-all text-slate-500 has-[:checked]:text-primary dark:has-[:checked]:text-white text-xs font-bold uppercase tracking-wider">
                    <span>Active</span>
                    <input class="hidden" name="status-filter" type="radio" value="active" />
                </label>
                <label
                    class="flex cursor-pointer h-full grow items-center justify-center rounded-lg px-2 has-[:checked]:bg-white dark:has-[:checked]:bg-slate-700 has-[:checked]:shadow-sm transition-all text-slate-500 has-[:checked]:text-primary dark:has-[:checked]:text-white text-xs font-bold uppercase tracking-wider">
                    <span>Inactive</span>
                    <input class="hidden" name="status-filter" type="radio" value="inactive" />
                </label>
                <label
                    class="flex cursor-pointer h-full grow items-center justify-center rounded-lg px-2 has-[:checked]:bg-white dark:has-[:checked]:bg-slate-700 has-[:checked]:shadow-sm transition-all text-slate-500 has-[:checked]:text-primary dark:has-[:checked]:text-white text-xs font-bold uppercase tracking-wider">
                    <span>Suspended</span>
                    <input class="hidden" name="status-filter" type="radio" value="suspended" />
                </label>
            </div>
        </div>
    </header>
    <main class="p-4 space-y-4 pb-24">
        <div class="flex items-center justify-between">
            <p class="text-xs font-bold uppercase text-slate-500 tracking-widest">User Accounts 50
            </p>
            <span class="material-symbols-outlined text-slate-400 text-lg">filter_list</span>
        </div>
        <% if (users && users.length) { %>

            <% users.forEach((user)=> { %>
                <div
                    class="bg-white dark:bg-slate-900 rounded-xl p-4 shadow-sm border border-slate-100 dark:border-slate-800">

                    <div class="flex flex-col gap-3 mb-4">
                        <div class="flex justify-between items-start">
                            <div class="flex-1 min-w-0">
                                <p class="font-bold text-base truncate">
                                    <%= user.firstname.toUpperCase() %>
                                        <%= user.lastname.toUpperCase() %>
                                </p>
                                <p class="text-slate-500 text-xs truncate">
                                    ID: ACC-<%= user.id %>-<%= user.firstname.substring(0, 1) %>
                                            <%= user.lastname.substring(0, 1) %>
                                </p>
                            </div>
                            <% if (user.isActive) { %>
                                <div
                                    class="bg-green-100 dark:bg-green-900/30 text-green-600 dark:text-green-400 text-[10px] font-bold px-2 py-1 rounded-full uppercase tracking-tighter">
                                    Active
                                </div>
                                <% } else { %>
                                    <div
                                        class="bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 text-[10px] font-bold px-2 py-1 rounded-full uppercase tracking-tighter">
                                        Suspended
                                    </div>
                                    <% } %>

                        </div>

                        <div class="flex items-center justify-between bg-slate-50 dark:bg-slate-800/50 p-3 rounded-lg">
                            <span class="text-xs text-slate-500 font-medium">Account Balance</span>
                            <span class="text-sm font-bold text-slate-900 dark:text-white">
                                <%= Number(user.balance).toLocaleString('en-US', { style: 'currency' , currency: 'USD'
                                    }) %>
                            </span>
                        </div>
                    </div>
                    <% if (user.isActive) { %>
                        <div class="flex gap-2 pt-3 border-t border-slate-50 dark:border-slate-800">
                            <form action="/admin/users/suspend/<%= user.id %>" method="POST">
                                <button
                                    class="flex-1 flex items-center justify-center gap-2 py-2 px-3 rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 text-xs font-bold hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
                                    <span class="material-symbols-outlined text-sm">front_hand</span> Suspend
                                </button>
                            </form>
                            <form action="/admin/users/delete/<%= user.id %>" method="POST">
                                <button
                                    class="flex-1 flex items-center justify-center gap-2 py-2 px-3 rounded-lg bg-red-50 dark:bg-red-900/20 text-red-600 dark:text-red-400 text-xs font-bold hover:bg-red-100 dark:hover:bg-red-900/40 transition-colors">
                                    <span class="material-symbols-outlined text-sm">block</span> Delete
                                </button>
                            </form>
                        </div>
                        <% } else { %>
                            <form action="/admin/users/activate/<%= user.id %>" method="POST"
                                class="flex gap-2 pt-3 border-t border-slate-50 dark:border-slate-800">
                                <button
                                    class="w-full flex items-center justify-center gap-2 py-2 px-3 rounded-lg bg-primary text-white text-xs font-bold hover:bg-primary/90 transition-colors">
                                    <span class="material-symbols-outlined text-sm">verified</span> Activate User
                                </button>
                            </form>
                            <% } %>
                </div>
                <% }) %>
                    <% } %>

    </main>
    <%- include('./partials/admin-footer-navbar') %>

        <div class="fixed bottom-1 left-1/2 -translate-x-1/2 w-32 h-1 bg-slate-300 dark:bg-slate-700 rounded-full z-50">
        </div>

</body>

</html>