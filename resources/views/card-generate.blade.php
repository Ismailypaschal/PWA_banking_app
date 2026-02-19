<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Create Virtual Card</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="/js/general-theme.js"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1a227f",
                        "background-light": "#f6f6f8",
                        "background-dark": "#121320",
                    },
                    fontFamily: {
                        "display": ["Inter"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .card-gradient {
            background: linear-gradient(135deg, #1a227f 0%, #2a35a5 100%);
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-[#121217] min-h-screen">
    <div class="relative flex h-auto min-screen w-full flex-col group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
            <!-- Top Navigation Bar -->
            <header
                class="flex items-center justify-between whitespace-nowrap border-b border-solid border-[#dcdde4] text-black bg-white dark:bg-[#121320] px-6 md:px-20 py-4">
                <div class="flex items-center gap-2">
                    <a href="{{ route('user.card') }}"
                        class="flex size-10 cursor-pointer items-center justify-center rounded-full bg-background-light text-[#121217] hover:bg-gray-200 transition-colors">
                        <span class="material-symbols-outlined text-[20px]">arrow_back</span>
                    </a>
                    <button
                        class="flex size-10 cursor-pointer items-center justify-center rounded-full bg-background-light text-[#121217] hover:bg-gray-200 transition-colors">
                        <span class="material-symbols-outlined text-[20px]">help</span>
                    </button>
                </div>
                <div class="flex items-center gap-4 text-primary">
                    <div class="size-8 flex items-center justify-center bg-primary/10 rounded-lg">
                        <span class="material-symbols-outlined text-primary">add_card</span>
                    </div>
                    <h2
                        class="text-[#121217] text-xl font-bold leading-tight tracking-tight text-black dark:text-white">
                        Create Virtual Card</h2>
                </div>
            </header>
            <main class="flex-1 flex justify-center py-8 px-4 md:px-10">
                <div class="layout-content-container flex flex-col md:flex-row gap-8 max-w-[1100px] w-full">
                    <!-- Left Column: Form -->
                    <div
                        class="flex-1 flex flex-col gap-8 bg-white p-6 md:p-10 rounded-xl shadow-sm border border-[#dcdde4]">
                        <form method="POST" action="{{ route('user.create-card') }}">
                            @csrf
                            <!-- Section: Card Purpose -->
                            <section>
                                <h3 class="text-lg font-bold text-[#121217] mb-4">What's this card for?</h3>
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                    <!-- Option 1 -->
                                    <label class="relative cursor-pointer group">
                                        <input checked="" class="peer sr-only" name="purpose" type="radio" />
                                        <div
                                            class="flex flex-col items-start p-4 rounded-xl border-2 border-[#dcdde4] bg-white transition-all peer-checked:border-primary peer-checked:bg-primary/5 hover:border-primary/50">
                                            <span class="material-symbols-outlined text-primary mb-2">sync</span>
                                            <span class="font-bold text-sm">Subscription</span>
                                            <span class="text-xs text-[#666985] mt-1 leading-tight">For Netflix,
                                                Spotify, or
                                                recurring bills.</span>
                                        </div>
                                        <div
                                            class="absolute top-3 right-3 opacity-0 peer-checked:opacity-100 transition-opacity">
                                            <span
                                                class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                        </div>
                                    </label>
                                    <!-- Option 2 -->
                                    <label class="relative cursor-pointer group">
                                        <input class="peer sr-only" name="purpose" type="radio" />
                                        <div
                                            class="flex flex-col items-start p-4 rounded-xl border-2 border-[#dcdde4] bg-white transition-all peer-checked:border-primary peer-checked:bg-primary/5 hover:border-primary/50">
                                            <span
                                                class="material-symbols-outlined text-primary mb-2">history_toggle_off</span>
                                            <span class="font-bold text-sm">One-time use</span>
                                            <span class="text-xs text-[#666985] mt-1 leading-tight">Deletes itself after
                                                one
                                                single transaction.</span>
                                        </div>
                                        <div
                                            class="absolute top-3 right-3 opacity-0 peer-checked:opacity-100 transition-opacity">
                                            <span
                                                class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                        </div>
                                    </label>
                                    <!-- Option 3 -->
                                    <label class="relative cursor-pointer group">
                                        <input class="peer sr-only" name="purpose" type="radio" />
                                        <div
                                            class="flex flex-col items-start p-4 rounded-xl border-2 border-[#dcdde4] bg-white transition-all peer-checked:border-primary peer-checked:bg-primary/5 hover:border-primary/50">
                                            <span class="material-symbols-outlined text-primary mb-2">payments</span>
                                            <span class="font-bold text-sm">General</span>
                                            <span class="text-xs text-[#666985] mt-1 leading-tight">Reusable for any
                                                daily
                                                online shopping.</span>
                                        </div>
                                        <div
                                            class="absolute top-3 right-3 opacity-0 peer-checked:opacity-100 transition-opacity">
                                            <span
                                                class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                        </div>
                                    </label>
                                </div>
                            </section>
                            <!-- Section: Details -->
                            <section class="flex flex-col gap-6">
                                <div class="flex flex-col gap-2">
                                    <label class="text-base font-medium text-[#121217]">Card Nickname</label>
                                    <input
                                        class="w-full rounded-xl border-[#dcdde4] focus:border-primary focus:ring-1 focus:ring-primary h-14 px-4 text-base transition-colors"
                                        placeholder="e.g. My Monthly Bills" type="text" name="card_name"
                                        value="New Virtual Card" />
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label class="text-base font-medium text-[#121217]">Card Type</label>
                                    <select
                                        class="w-full rounded-xl border-[#dcdde4] focus:border-primary focus:ring-1 focus:ring-primary h-14 px-4 text-base transition-colors"
                                        id="card_type" name="card_type">
                                        <option value="" selected disabled>Choose Card Type</option>
                                        <option value="Visa">Visa</option>
                                        <option value="Master card">Master Card</option>
                                        <option value="American Express">American Express</option>
                                        <option value="Discover">Discover</option>
                                    </select>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label class="text-base font-medium text-[#121217]">Card Number</label>
                                    <input id="card_number"
                                        class="w-full rounded-xl border-[#dcdde4] focus:border-primary focus:ring-1 focus:ring-primary h-14 px-4 text-base transition-colors"
                                        placeholder="**** **** **** 4219" type="text" name="card_number"
                                        value="" readonly />
                                </div>
                                <input class="hidden" id="card_cvv" name="card_cvv" />
                                <input class="hidden" id="expiry_date" name="expiry_date" />
                                <div class="flex flex-col gap-2">
                                    <label class="text-base font-medium text-[#121217]">Spending Limit</label>
                                    <div class="relative">
                                        <span
                                            class="absolute left-4 top-1/2 -translate-y-1/2 text-[#666985] font-medium">$</span>
                                        <input
                                            class="w-full rounded-xl border-[#dcdde4] focus:border-primary focus:ring-1 focus:ring-primary h-14 pl-8 pr-4 text-base transition-colors"
                                            placeholder="0.00" type="number" name="spending_limit" />
                                        <div class="absolute right-3 top-1/2 -translate-y-1/2 flex gap-1">
                                            <button
                                                class="px-3 py-1 bg-background-light rounded-lg text-xs font-bold text-primary border border-primary/20">Monthly</button>
                                            <button
                                                class="px-3 py-1 bg-white rounded-lg text-xs font-bold text-[#666985] border border-[#dcdde4]">Total</button>
                                        </div>
                                    </div>
                                    <p class="text-xs text-[#666985]">This card will decline transactions over this
                                        limit.
                                    </p>
                                </div>
                            </section>
                            <!-- CTA -->
                            <div class="pt-4">
                                <button
                                    class="w-full bg-primary text-white font-bold py-4 rounded-xl hover:bg-opacity-90 transition-all shadow-lg flex items-center justify-center gap-2">
                                    <span>Create Virtual Card</span>
                                    <span class="material-symbols-outlined">arrow_forward</span>
                                </button>
                                <p class="text-center text-xs text-[#666985] mt-4 italic">Funds will be deducted from
                                    your
                                    primary wallet balance.</p>
                            </div>
                        </form>
                    </div>
                    <!-- Right Column: Live Preview -->
                    <div class="w-full md:w-[380px] flex flex-col gap-6">
                        <div class="sticky top-8">
                            <div class="p-6 bg-white rounded-xl shadow-sm border border-[#dcdde4] flex flex-col gap-6">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-sm font-bold uppercase tracking-widest text-[#666985]">Live Preview
                                    </h3>
                                    <span class="flex h-2 w-2 rounded-full bg-green-500 animate-pulse"></span>
                                </div>
                                <!-- Virtual Card Visual -->
                                <div id="card_preview"
                                    class="card-gradient w-full aspect-[1.58/1] rounded-xl p-6 flex flex-col justify-between text-white relative overflow-hidden shadow-2xl">
                                    <!-- Decorative Elements -->
                                    <div
                                        class="absolute -right-10 -top-10 w-40 h-40 bg-white/10 rounded-full blur-3xl">
                                    </div>
                                    <div
                                        class="absolute -left-10 -bottom-10 w-40 h-40 bg-primary-dark/20 rounded-full blur-3xl">
                                    </div>
                                    <div class="flex justify-between items-start z-10">
                                        <div class="flex flex-col">
                                            <span class="text-[10px] uppercase font-bold opacity-70">Virtual
                                                Card</span>
                                            <span
                                                class="text-lg font-bold truncate max-w-[180px]">{{ $user->first_name }}
                                                {{ $user->last_name }}</span>
                                        </div>
                                        <span class="material-symbols-outlined text-3xl">contactless</span>
                                    </div>
                                    <div class="z-10">
                                        <p id="preview_card_number" class="text-xl tracking-[0.1em] font-small mb-1">
                                            •••• •••• •••• 4219</p>
                                        <div class="flex gap-4 text-[10px] opacity-80 uppercase font-bold">
                                            <div>
                                                <p>Valid Thru</p>
                                                <p id="preview_expiry_date">12/28</p>
                                            </div>
                                            <div>
                                                <p>CVV</p>
                                                <p id="preview_card_cvv">•••</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center  z-10">
                                        <div
                                            class="bg-white/20 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-bold uppercase">
                                            Subscription
                                        </div>
                                        <div class="flex -space-x-2">
                                            <img id="card_type_icon"
                                                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0NS4wMyIgaGVpZ2h0PSIzNSIgdmlld0JveD0iMCAwIDI1NiAxOTkiPjxwYXRoIGQ9Ik00Ni41NCAxOTguMDExVjE4NC44NGMwLTUuMDUtMy4wNzQtOC4zNDItOC4zNDMtOC4zNDJjLTIuNjM0IDAtNS40ODguODc4LTcuNDY0IDMuNzMyYy0xLjUzNi0yLjQxNS0zLjczMS0zLjczMi03LjAyNC0zLjczMmMtMi4xOTYgMC00LjM5LjY1OC02LjE0NyAzLjA3M3YtMi42MzRoLTQuNjF2MjEuMDc0aDQuNjF2LTExLjYzNWMwLTMuNzMxIDEuOTc2LTUuNDg4IDUuMDUtNS40ODhjMy4wNzIgMCA0LjYxIDEuOTc2IDQuNjEgNS40ODh2MTEuNjM1aDQuNjF2LTExLjYzNWMwLTMuNzMxIDIuMTk0LTUuNDg4IDUuMDQ4LTUuNDg4YzMuMDc0IDAgNC42MSAxLjk3NiA0LjYxIDUuNDg4djExLjYzNXptNjguMjcxLTIxLjA3NGgtNy40NjN2LTYuMzY2aC00LjYxdjYuMzY2aC00LjE3MXY0LjE3aDQuMTd2OS42NmMwIDQuODMgMS45NzYgNy42ODMgNy4yNDUgNy42ODNjMS45NzYgMCA0LjE3LS42NTggNS43MDgtMS41MzZsLTEuMzE4LTMuOTUyYy0xLjMxNy44NzgtMi44NTMgMS4wOTgtMy45NTEgMS4wOThjLTIuMTk1IDAtMy4wNzMtMS4zMTctMy4wNzMtMy41MTN2LTkuNDRoNy40NjN6bTM5LjA3Ni0uNDRjLTIuNjM0IDAtNC4zOSAxLjMxOC01LjQ4OCAzLjA3NHYtMi42MzRoLTQuNjF2MjEuMDc0aDQuNjF2LTExLjg1NGMwLTMuNTEyIDEuNTM2LTUuNDg4IDQuMzktNS40ODhjLjg3OCAwIDEuOTc2LjIyIDIuODU0LjQzOWwxLjMxNy00LjM5Yy0uODc4LS4yMi0yLjE5NS0uMjItMy4wNzMtLjIybS01OS4wNTIgMi4xOTZjLTIuMTk2LTEuNTM3LTUuMjY5LTIuMTk1LTguNTYyLTIuMTk1Yy01LjI2OCAwLTguNzggMi42MzQtOC43OCA2LjgwNWMwIDMuNTEzIDIuNjM0IDUuNDg4IDcuMjQ0IDYuMTQ3bDIuMTk1LjIyYzIuNDE1LjQzOCAzLjczMiAxLjA5NyAzLjczMiAyLjE5NWMwIDEuNTM2LTEuNzU2IDIuNjM0LTQuODMgMi42MzRzLTUuNDg4LTEuMDk4LTcuMDI1LTIuMTk1bC0yLjE5NSAzLjUxMmMyLjQxNSAxLjc1NiA1LjcwOCAyLjYzNCA5IDIuNjM0YzYuMTQ3IDAgOS42Ni0yLjg1MyA5LjY2LTYuODA1YzAtMy43MzItMi44NTQtNS43MDgtNy4yNDUtNi4zNjZsLTIuMTk1LS4yMmMtMS45NzYtLjIyLTMuNTEyLS42NTgtMy41MTItMS45NzVjMC0xLjUzNyAxLjUzNi0yLjQxNSAzLjk1MS0yLjQxNWMyLjYzNSAwIDUuMjY5IDEuMDk3IDYuNTg2IDEuNzU2em0xMjIuNDk1LTIuMTk1Yy0yLjYzNSAwLTQuMzkxIDEuMzE3LTUuNDg5IDMuMDczdi0yLjYzNGgtNC42MXYyMS4wNzRoNC42MXYtMTEuODU0YzAtMy41MTIgMS41MzctNS40ODggNC4zOS01LjQ4OGMuODc5IDAgMS45NzcuMjIgMi44NTUuNDM5bDEuMzE3LTQuMzljLS44NzgtLjIyLTIuMTk1LS4yMi0zLjA3My0uMjJtLTU4LjgzMyAxMC45NzZjMCA2LjM2NiA0LjM5IDEwLjk3NiAxMS4xOTYgMTAuOTc2YzMuMDczIDAgNS4yNjgtLjY1OCA3LjQ2My0yLjQxNGwtMi4xOTUtMy43MzJjLTEuNzU2IDEuMzE3LTMuNTEyIDEuOTc1LTUuNDg4IDEuOTc1Yy0zLjczMiAwLTYuMzY2LTIuNjM0LTYuMzY2LTYuODA1YzAtMy45NTEgMi42MzQtNi41ODYgNi4zNjYtNi44MDVjMS45NzYgMCAzLjczMi42NTggNS40ODggMS45NzZsMi4xOTUtMy43MzJjLTIuMTk1LTEuNzU3LTQuMzktMi40MTUtNy40NjMtMi40MTVjLTYuODA2IDAtMTEuMTk2IDQuNjEtMTEuMTk2IDEwLjk3Nm00Mi41ODggMHYtMTAuNTM3aC00LjYxdjIuNjM0Yy0xLjUzNy0xLjk3NS0zLjczMi0zLjA3My02LjU4Ni0zLjA3M2MtNS45MjcgMC0xMC41MzcgNC42MS0xMC41MzcgMTAuOTc2czQuNjEgMTAuOTc2IDEwLjUzNyAxMC45NzZjMy4wNzMgMCA1LjI2OS0xLjA5NyA2LjU4Ni0zLjA3M3YyLjYzNGg0LjYxem0tMTYuOTA0IDBjMC0zLjczMiAyLjQxNS02LjgwNSA2LjM2Ni02LjgwNWMzLjczMiAwIDYuMzY3IDIuODU0IDYuMzY3IDYuODA1YzAgMy43MzItMi42MzUgNi44MDUtNi4zNjcgNi44MDVjLTMuOTUxLS4yMi02LjM2Ni0zLjA3My02LjM2Ni02LjgwNW0tNTUuMS0xMC45NzZjLTYuMTQ3IDAtMTAuNTM4IDQuMzktMTAuNTM4IDEwLjk3NnM0LjM5IDEwLjk3NiAxMC43NTcgMTAuOTc2YzMuMDczIDAgNi4xNDctLjg3OCA4LjU2Mi0yLjg1M2wtMi4xOTYtMy4yOTNjLTEuNzU2IDEuMzE3LTMuOTUxIDIuMTk1LTYuMTQ2IDIuMTk1Yy0yLjg1NCAwLTUuNzA4LTEuMzE3LTYuMzY3LTUuMDVoMTUuNTg3di0xLjc1NWMuMjItNi44MDYtMy43MzItMTEuMTk2LTkuNjYtMTEuMTk2bTAgMy45NTFjMi44NTMgMCA0LjgzIDEuNzU3IDUuMjY4IDUuMDVoLTEwLjk3NmMuNDM5LTIuODU0IDIuNDE1LTUuMDUgNS43MDgtNS4wNW0xMTQuMzcyIDcuMDI1di0xOC44NzloLTQuNjF2MTAuOTc2Yy0xLjUzNy0xLjk3NS0zLjczMi0zLjA3My02LjU4Ni0zLjA3M2MtNS45MjcgMC0xMC41MzcgNC42MS0xMC41MzcgMTAuOTc2czQuNjEgMTAuOTc2IDEwLjUzNyAxMC45NzZjMy4wNzQgMCA1LjI2OS0xLjA5NyA2LjU4Ni0zLjA3M3YyLjYzNGg0LjYxem0tMTYuOTAzIDBjMC0zLjczMiAyLjQxNC02LjgwNSA2LjM2Ni02LjgwNWMzLjczMiAwIDYuMzY2IDIuODU0IDYuMzY2IDYuODA1YzAgMy43MzItMi42MzQgNi44MDUtNi4zNjYgNi44MDVjLTMuOTUyLS4yMi02LjM2Ni0zLjA3My02LjM2Ni02LjgwNW0tMTU0LjEwNyAwdi0xMC41MzdoLTQuNjF2Mi42MzRjLTEuNTM3LTEuOTc1LTMuNzMyLTMuMDczLTYuNTg2LTMuMDczYy01LjkyNyAwLTEwLjUzNyA0LjYxLTEwLjUzNyAxMC45NzZzNC42MSAxMC45NzYgMTAuNTM3IDEwLjk3NmMzLjA3NCAwIDUuMjY5LTEuMDk3IDYuNTg2LTMuMDczdjIuNjM0aDQuNjF6bS0xNy4xMjMgMGMwLTMuNzMyIDIuNDE1LTYuODA1IDYuMzY2LTYuODA1YzMuNzMyIDAgNi4zNjcgMi44NTQgNi4zNjcgNi44MDVjMCAzLjczMi0yLjYzNSA2LjgwNS02LjM2NyA2LjgwNWMtMy45NTEtLjIyLTYuMzY2LTMuMDczLTYuMzY2LTYuODA1Ii8+PHBhdGggZmlsbD0iI2ZmNWYwMCIgZD0iTTkzLjI5OCAxNi45MDNoNjkuMTV2MTI0LjI1MWgtNjkuMTV6Ii8+PHBhdGggZmlsbD0iI2ViMDAxYiIgZD0iTTk3LjY4OSA3OS4wMjljMC0yNS4yNDUgMTEuODU0LTQ3LjYzNyAzMC4wNzQtNjIuMTI2QzExNC4zNzMgNi4zNjYgOTcuNDcgMCA3OS4wMyAwQzM1LjM0MyAwIDAgMzUuMzQzIDAgNzkuMDI5czM1LjM0MyA3OS4wMjkgNzkuMDI5IDc5LjAyOWMxOC40NCAwIDM1LjM0My02LjM2NiA0OC43MzQtMTYuOTA0Yy0xOC4yMi0xNC4yNjktMzAuMDc0LTM2Ljg4LTMwLjA3NC02Mi4xMjUiLz48cGF0aCBmaWxsPSIjZjc5ZTFiIiBkPSJNMjU1Ljc0NiA3OS4wMjljMCA0My42ODUtMzUuMzQzIDc5LjAyOS03OS4wMjkgNzkuMDI5Yy0xOC40NCAwLTM1LjM0My02LjM2Ni00OC43MzQtMTYuOTA0YzE4LjQ0LTE0LjQ4OCAzMC4wNzUtMzYuODggMzAuMDc1LTYyLjEyNXMtMTEuODU1LTQ3LjYzNy0zMC4wNzUtNjIuMTI2QzE0MS4zNzMgNi4zNjYgMTU4LjI3NyAwIDE3Ni43MTcgMGM0My42ODYgMCA3OS4wMyAzNS41NjMgNzkuMDMgNzkuMDI5Ii8+PC9zdmc+">
                                        </div>
                                    </div>
                                </div>
                                <!-- Summary Stats -->
                                <div class="flex flex-col gap-4 pt-2">
                                    <div class="flex justify-between border-b border-[#f1f1f4] pb-3">
                                        <span class="text-sm text-[#666985]">Type</span>
                                        <span id="card_type_name" class="text-sm font-bold">Mastercard® Virtual</span>
                                    </div>
                                    <div class="flex justify-between border-b border-[#f1f1f4] pb-3">
                                        <span class="text-sm text-[#666985]">Status</span>
                                        <span class="text-sm font-bold text-green-600 flex items-center gap-1">
                                            Ready to Issue <span
                                                class="material-symbols-outlined text-sm">verified</span>
                                        </span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-[#666985]">Fee</span>
                                        <span id="card_fee" class="text-sm font-bold">$0.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Additional Tip -->
                            <div class="mt-6 p-4 bg-primary/5 border border-primary/10 rounded-xl flex gap-3">
                                <span class="material-symbols-outlined text-primary">lightbulb</span>
                                <p class="text-xs text-[#121217] leading-relaxed">
                                    <strong>Pro Tip:</strong> Use "One-time use" cards for sites you don't fully trust
                                    to prevent future unauthorized charges.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        @include('partials.footer-navbar')
    </div>
    <script>
        const cardPreview = document.getElementById('card_preview');
        const cardNumber = document.getElementById('card_number');
        const previewCardNumber = document.getElementById('preview_card_number');
        const expiryDate = document.getElementById('expiry_date');
        const previewExpiryDate = document.getElementById('preview_expiry_date');
        const cardCvv = document.getElementById('card_cvv');
        const previewCardCvv = document.getElementById('preview_card_cvv');
        const cardTypeImg = document.getElementById('card_type_icon');
        const cardTypeSelect = document.getElementById('card_type');
        const cardTypeName = document.getElementById('card_type_name');
        const cardFee = document.getElementById('card_fee');

        function generateCardNumber() {
            let digits = '0123456789';
            let card = '';
            let cardCvvValue = '';

            for (let i = 0; i < 16; i++) {
                card += digits[Math.floor(Math.random() * 10)];
                if ((i + 1) % 4 === 0 && i !== 15) {
                    card += ' ';
                }
            }
            // Card Preview
            if (previewCardNumber) {
                previewCardNumber.innerHTML = card;
            }

            // Card Number Input
            if (cardNumber) {
                cardNumber.value = card;
            }



            for (let i = 0; i < 3; i++) {
                cardCvvValue += digits[Math.floor(Math.random() * 10)];
            }

            // Card CVV number
            if (cardCvv) {
                cardCvv.value = cardCvvValue;
            }
            // Card CVV number
            if (previewCardCvv) {
                previewCardCvv.innerHTML = cardCvvValue;
            }

            // Card Fee
            if (cardFee) {
                cardFee.innerHTML = '$5.00';
            }

            // Expiry date
            function setExpiryDate() {
                const today = new Date();
                const twoYearsLater = new Date(today.getFullYear() + 2, today.getMonth());

                // Format MM/YY
                let month = String(twoYearsLater.getMonth() + 1).padStart(2, '0');
                let year = String(twoYearsLater.getFullYear()).slice(-2);

                const expiry = `${month}/${year}`;

                // previewExpiryDate
                if (previewExpiryDate) {
                    previewExpiryDate.innerHTML = expiry;
                }

                // Form Expiry
                if (expiryDate) {
                    expiryDate.innerHTML = expiry;
                }
            }
            setExpiryDate();

            function changeCardLogo() {
                let imgLogo = "";

                const selectedType = cardTypeSelect ? cardTypeSelect.value : '';

                if (selectedType === 'Visa') {
                    imgLogo =
                        'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1NS41MiIgaGVpZ2h0PSIxOCIgdmlld0JveD0iMCAwIDI1NiA4MyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJTVkdjY0xDY2V2ViIgeDE9IjQ1Ljk3NCUiIHgyPSI1NC44NzclIiB5MT0iLTIuMDA2JSIgeTI9IjEwMCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNmZmYiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmYiLz48L2xpbmVhckdyYWRpZW50PjwvZGVmcz48cGF0aCBmaWxsPSJ1cmwoI1NWR2NjTENjZXZWKSIgZD0iTTEzMi4zOTcgNTYuMjRjLS4xNDYtMTEuNTE2IDEwLjI2My0xNy45NDIgMTguMTA0LTIxLjc2M2M4LjA1Ni0zLjkyIDEwLjc2Mi02LjQzNCAxMC43My05Ljk0Yy0uMDYtNS4zNjUtNi40MjYtNy43MzMtMTIuMzgzLTcuODI1Yy0xMC4zOTMtLjE2MS0xNi40MzYgMi44MDYtMjEuMjQgNS4wNWwtMy43NDQtMTcuNTE5YzQuODItMi4yMjEgMTMuNzQ1LTQuMTU4IDIzLTQuMjQzYzIxLjcyNSAwIDM1LjkzOCAxMC43MjQgMzYuMDE1IDI3LjM1MWMuMDg1IDIxLjEwMi0yOS4xODggMjIuMjctMjguOTg4IDMxLjcwMmMuMDY5IDIuODYgMi43OTggNS45MTIgOC43NzggNi42ODhjMi45Ni4zOTIgMTEuMTMxLjY5MiAyMC4zOTUtMy41NzRsMy42MzYgMTYuOTVjLTQuOTgyIDEuODE0LTExLjM4NSAzLjU1MS0xOS4zNTcgMy41NTFjLTIwLjQ0OCAwLTM0LjgzLTEwLjg3LTM0Ljk0Ni0yNi40MjhtODkuMjQxIDI0Ljk2OGMtMy45NjcgMC03LjMxLTIuMzE0LTguODAyLTUuODY1TDE4MS44MDMgMS4yNDVoMjEuNzA5bDQuMzIgMTEuOTM5aDI2LjUyOGwyLjUwNi0xMS45MzlIMjU2bC0xNi42OTcgNzkuOTYzem0zLjAzNy0yMS42MDFsNi4yNjUtMzAuMDI3aC0xNy4xNTh6bS0xMTguNTk5IDIxLjZMODguOTY0IDEuMjQ2aDIwLjY4N2wxNy4xMDQgNzkuOTYzem0tMzAuNjAzIDBMNTMuOTQxIDI2Ljc4MmwtOC43MSA0Ni4yNzdjLTEuMDIyIDUuMTY2LTUuMDU4IDguMTQ5LTkuNTQgOC4xNDlILjQ5M0wwIDc4Ljg4NmM3LjIyNi0xLjU2OCAxNS40MzYtNC4wOTcgMjAuNDEtNi44MDNjMy4wNDQtMS42NTMgMy45MTItMy4wOTggNC45MTItNy4wMjZMNDEuODE5IDEuMjQ1SDYzLjY4bDMzLjUxNiA3OS45NjN6IiB0cmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAtMSAwIDgyLjY2OCkiLz48L3N2Zz4=';
                    cardTypeName.innerHTML = 'Visa® Virtual';
                    cardPreview.style.background = 'linear-gradient(135deg, #1A1F71 0%, #1A1F71 60%, #F7B600 100%)';

                } else if (selectedType === 'Master card') {
                    imgLogo =
                        'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0NS4wMyIgaGVpZ2h0PSIzNSIgdmlld0JveD0iMCAwIDI1NiAxOTkiPjxwYXRoIGQ9Ik00Ni41NCAxOTguMDExVjE4NC44NGMwLTUuMDUtMy4wNzQtOC4zNDItOC4zNDMtOC4zNDJjLTIuNjM0IDAtNS40ODguODc4LTcuNDY0IDMuNzMyYy0xLjUzNi0yLjQxNS0zLjczMS0zLjczMi03LjAyNC0zLjczMmMtMi4xOTYgMC00LjM5LjY1OC02LjE0NyAzLjA3M3YtMi42MzRoLTQuNjF2MjEuMDc0aDQuNjF2LTExLjYzNWMwLTMuNzMxIDEuOTc2LTUuNDg4IDUuMDUtNS40ODhjMy4wNzIgMCA0LjYxIDEuOTc2IDQuNjEgNS40ODh2MTEuNjM1aDQuNjF2LTExLjYzNWMwLTMuNzMxIDIuMTk0LTUuNDg4IDUuMDQ4LTUuNDg4YzMuMDc0IDAgNC42MSAxLjk3NiA0LjYxIDUuNDg4djExLjYzNXptNjguMjcxLTIxLjA3NGgtNy40NjN2LTYuMzY2aC00LjYxdjYuMzY2aC00LjE3MXY0LjE3aDQuMTd2OS42NmMwIDQuODMgMS45NzYgNy42ODMgNy4yNDUgNy42ODNjMS45NzYgMCA0LjE3LS42NTggNS43MDgtMS41MzZsLTEuMzE4LTMuOTUyYy0xLjMxNy44NzgtMi44NTMgMS4wOTgtMy45NTEgMS4wOThjLTIuMTk1IDAtMy4wNzMtMS4zMTctMy4wNzMtMy41MTN2LTkuNDRoNy40NjN6bTM5LjA3Ni0uNDRjLTIuNjM0IDAtNC4zOSAxLjMxOC01LjQ4OCAzLjA3NHYtMi42MzRoLTQuNjF2MjEuMDc0aDQuNjF2LTExLjg1NGMwLTMuNTEyIDEuNTM2LTUuNDg4IDQuMzktNS40ODhjLjg3OCAwIDEuOTc2LjIyIDIuODU0LjQzOWwxLjMxNy00LjM5Yy0uODc4LS4yMi0yLjE5NS0uMjItMy4wNzMtLjIybS01OS4wNTIgMi4xOTZjLTIuMTk2LTEuNTM3LTUuMjY5LTIuMTk1LTguNTYyLTIuMTk1Yy01LjI2OCAwLTguNzggMi42MzQtOC43OCA2LjgwNWMwIDMuNTEzIDIuNjM0IDUuNDg4IDcuMjQ0IDYuMTQ3bDIuMTk1LjIyYzIuNDE1LjQzOCAzLjczMiAxLjA5NyAzLjczMiAyLjE5NWMwIDEuNTM2LTEuNzU2IDIuNjM0LTQuODMgMi42MzRzLTUuNDg4LTEuMDk4LTcuMDI1LTIuMTk1bC0yLjE5NSAzLjUxMmMyLjQxNSAxLjc1NiA1LjcwOCAyLjYzNCA5IDIuNjM0YzYuMTQ3IDAgOS42Ni0yLjg1MyA5LjY2LTYuODA1YzAtMy43MzItMi44NTQtNS43MDgtNy4yNDUtNi4zNjZsLTIuMTk1LS4yMmMtMS45NzYtLjIyLTMuNTEyLS42NTgtMy41MTItMS45NzVjMC0xLjUzNyAxLjUzNi0yLjQxNSAzLjk1MS0yLjQxNWMyLjYzNSAwIDUuMjY5IDEuMDk3IDYuNTg2IDEuNzU2em0xMjIuNDk1LTIuMTk1Yy0yLjYzNSAwLTQuMzkxIDEuMzE3LTUuNDg5IDMuMDczdi0yLjYzNGgtNC42MXYyMS4wNzRoNC42MXYtMTEuODU0YzAtMy41MTIgMS41MzctNS40ODggNC4zOS01LjQ4OGMuODc5IDAgMS45NzcuMjIgMi44NTUuNDM5bDEuMzE3LTQuMzljLS44NzgtLjIyLTIuMTk1LS4yMi0zLjA3My0uMjJtLTU4LjgzMyAxMC45NzZjMCA2LjM2NiA0LjM5IDEwLjk3NiAxMS4xOTYgMTAuOTc2YzMuMDczIDAgNS4yNjgtLjY1OCA3LjQ2My0yLjQxNGwtMi4xOTUtMy43MzJjLTEuNzU2IDEuMzE3LTMuNTEyIDEuOTc1LTUuNDg4IDEuOTc1Yy0zLjczMiAwLTYuMzY2LTIuNjM0LTYuMzY2LTYuODA1YzAtMy45NTEgMi42MzQtNi41ODYgNi4zNjYtNi44MDVjMS45NzYgMCAzLjczMi42NTggNS40ODggMS45NzZsMi4xOTUtMy43MzJjLTIuMTk1LTEuNzU3LTQuMzktMi40MTUtNy40NjMtMi40MTVjLTYuODA2IDAtMTEuMTk2IDQuNjEtMTEuMTk2IDEwLjk3Nm00Mi41ODggMHYtMTAuNTM3aC00LjYxdjIuNjM0Yy0xLjUzNy0xLjk3NS0zLjczMi0zLjA3My02LjU4Ni0zLjA3M2MtNS45MjcgMC0xMC41MzcgNC42MS0xMC41MzcgMTAuOTc2czQuNjEgMTAuOTc2IDEwLjUzNyAxMC45NzZjMy4wNzMgMCA1LjI2OS0xLjA5NyA2LjU4Ni0zLjA3M3YyLjYzNGg0LjYxem0tMTYuOTA0IDBjMC0zLjczMiAyLjQxNS02LjgwNSA2LjM2Ni02LjgwNWMzLjczMiAwIDYuMzY3IDIuODU0IDYuMzY3IDYuODA1YzAgMy43MzItMi42MzUgNi44MDUtNi4zNjcgNi44MDVjLTMuOTUxLS4yMi02LjM2Ni0zLjA3My02LjM2Ni02LjgwNW0tNTUuMS0xMC45NzZjLTYuMTQ3IDAtMTAuNTM4IDQuMzktMTAuNTM4IDEwLjk3NnM0LjM5IDEwLjk3NiAxMC43NTcgMTAuOTc2YzMuMDczIDAgNi4xNDctLjg3OCA4LjU2Mi0yLjg1M2wtMi4xOTYtMy4yOTNjLTEuNzU2IDEuMzE3LTMuOTUxIDIuMTk1LTYuMTQ2IDIuMTk1Yy0yLjg1NCAwLTUuNzA4LTEuMzE3LTYuMzY3LTUuMDVoMTUuNTg3di0xLjc1NWMuMjItNi44MDYtMy43MzItMTEuMTk2LTkuNjYtMTEuMTk2bTAgMy45NTFjMi44NTMgMCA0LjgzIDEuNzU3IDUuMjY4IDUuMDVoLTEwLjk3NmMuNDM5LTIuODU0IDIuNDE1LTUuMDUgNS43MDgtNS4wNW0xMTQuMzcyIDcuMDI1di0xOC44NzloLTQuNjF2MTAuOTc2Yy0xLjUzNy0xLjk3NS0zLjczMi0zLjA3My02LjU4Ni0zLjA3M2MtNS45MjcgMC0xMC41MzcgNC42MS0xMC41MzcgMTAuOTc2czQuNjEgMTAuOTc2IDEwLjUzNyAxMC45NzZjMy4wNzQgMCA1LjI2OS0xLjA5NyA2LjU4Ni0zLjA3M3YyLjYzNGg0LjYxem0tMTYuOTAzIDBjMC0zLjczMiAyLjQxNC02LjgwNSA2LjM2Ni02LjgwNWMzLjczMiAwIDYuMzY2IDIuODU0IDYuMzY2IDYuODA1YzAgMy43MzItMi42MzQgNi44MDUtNi4zNjYgNi44MDVjLTMuOTUyLS4yMi02LjM2Ni0zLjA3My02LjM2Ni02LjgwNW0tMTU0LjEwNyAwdi0xMC41MzdoLTQuNjF2Mi42MzRjLTEuNTM3LTEuOTc1LTMuNzMyLTMuMDczLTYuNTg2LTMuMDczYy01LjkyNyAwLTEwLjUzNyA0LjYxLTEwLjUzNyAxMC45NzZzNC42MSAxMC45NzYgMTAuNTM3IDEwLjk3NmMzLjA3NCAwIDUuMjY5LTEuMDk3IDYuNTg2LTMuMDczdjIuNjM0aDQuNjF6bS0xNy4xMjMgMGMwLTMuNzMyIDIuNDE1LTYuODA1IDYuMzY2LTYuODA1YzMuNzMyIDAgNi4zNjcgMi44NTQgNi4zNjcgNi44MDVjMCAzLjczMi0yLjYzNSA2LjgwNS02LjM2NyA2LjgwNWMtMy45NTEtLjIyLTYuMzY2LTMuMDczLTYuMzY2LTYuODA1Ii8+PHBhdGggZmlsbD0iI2ZmNWYwMCIgZD0iTTkzLjI5OCAxNi45MDNoNjkuMTV2MTI0LjI1MWgtNjkuMTV6Ii8+PHBhdGggZmlsbD0iI2ViMDAxYiIgZD0iTTk3LjY4OSA3OS4wMjljMC0yNS4yNDUgMTEuODU0LTQ3LjYzNyAzMC4wNzQtNjIuMTI2QzExNC4zNzMgNi4zNjYgOTcuNDcgMCA3OS4wMyAwQzM1LjM0MyAwIDAgMzUuMzQzIDAgNzkuMDI5czM1LjM0MyA3OS4wMjkgNzkuMDI5IDc5LjAyOWMxOC40NCAwIDM1LjM0My02LjM2NiA0OC43MzQtMTYuOTA0Yy0xOC4yMi0xNC4yNjktMzAuMDc0LTM2Ljg4LTMwLjA3NC02Mi4xMjUiLz48cGF0aCBmaWxsPSIjZjc5ZTFiIiBkPSJNMjU1Ljc0NiA3OS4wMjljMCA0My42ODUtMzUuMzQzIDc5LjAyOS03OS4wMjkgNzkuMDI5Yy0xOC40NCAwLTM1LjM0My02LjM2Ni00OC43MzQtMTYuOTA0YzE4LjQ0LTE0LjQ4OCAzMC4wNzUtMzYuODggMzAuMDc1LTYyLjEyNXMtMTEuODU1LTQ3LjYzNy0zMC4wNzUtNjIuMTI2QzE0MS4zNzMgNi4zNjYgMTU4LjI3NyAwIDE3Ni43MTcgMGM0My42ODYgMCA3OS4wMyAzNS41NjMgNzkuMDMgNzkuMDI5Ii8+PC9zdmc+';
                    cardTypeName.innerHTML = 'Mastercard® Virtual';
                    cardPreview.style.background = 'linear-gradient(135deg, #000000 0%, #1c1c1c 50%, #000000 100%)';

                } else if (selectedType === 'Discover') {
                    imgLogo =
                        'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI3Ny40IiBoZWlnaHQ9IjEzIiB2aWV3Qm94PSIwIDAgNTEyIDg2Ij48ZGVmcz48bGluZWFyR3JhZGllbnQgaWQ9IlNWRzdURHNHZDNsIiB4MT0iMTkuNDE0JSIgeDI9Ijg4LjYwMSUiIHkxPSI5LjA2MyUiIHkyPSI4MC40OTklIj48c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjZjM0ZjI2Ii8+PHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjZjY5ZTM1Ii8+PC9saW5lYXJHcmFkaWVudD48ZmlsdGVyIGlkPSJTVkdoR2xxVGM0TyIgd2lkdGg9IjIwMCUiIGhlaWdodD0iMjAwJSIgeD0iLTUwJSIgeT0iLTUwJSIgZmlsdGVyVW5pdHM9Im9iamVjdEJvdW5kaW5nQm94Ij48ZmVNb3JwaG9sb2d5IGluPSJTb3VyY2VBbHBoYSIgcmFkaXVzPSIxIiByZXN1bHQ9InNoYWRvd1NwcmVhZElubmVyMSIvPjxmZUdhdXNzaWFuQmx1ciBpbj0ic2hhZG93U3ByZWFkSW5uZXIxIiByZXN1bHQ9InNoYWRvd0JsdXJJbm5lcjEiIHN0ZERldmlhdGlvbj0iNCIvPjxmZU9mZnNldCBkeD0iMyIgZHk9IjMiIGluPSJzaGFkb3dCbHVySW5uZXIxIiByZXN1bHQ9InNoYWRvd09mZnNldElubmVyMSIvPjxmZUNvbXBvc2l0ZSBpbj0ic2hhZG93T2Zmc2V0SW5uZXIxIiBpbjI9IlNvdXJjZUFscGhhIiBrMj0iLTEiIGszPSIxIiBvcGVyYXRvcj0iYXJpdGhtZXRpYyIgcmVzdWx0PSJzaGFkb3dJbm5lcklubmVyMSIvPjxmZUNvbG9yTWF0cml4IGluPSJzaGFkb3dJbm5lcklubmVyMSIgdmFsdWVzPSIwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwLjUgMCIvPjwvZmlsdGVyPjxwYXRoIGlkPSJTVkdzRkg1bWJHcSIgZD0iTTI3MC4zNTYuMzY1Yy0yMy45ODIgMC00My40NCAxOC43MzUtNDMuNDQgNDEuODU3YzAgMjQuNTg0IDE4LjYxMyA0Mi45NiA0My40NCA0Mi45NmMyNC4yMDggMCA0My4zMjItMTguNjIgNDMuMzIyLTQyLjQ3N2MwLTIzLjcxNi0xOC45ODYtNDIuMzQtNDMuMzIyLTQyLjM0Ii8+PC9kZWZzPjx1c2UgZmlsbD0idXJsKCNTVkc3VERzR2QzbCkiIGZpbGwtcnVsZT0iZXZlbm9kZCIgaHJlZj0iI1NWR3NGSDVtYkdxIi8+PHVzZSBmaWx0ZXI9InVybCgjU1ZHaEdscVRjNE8pIiBocmVmPSIjU1ZHc0ZINW1iR3EiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMjMuNzQ2IDEuODkxSC4zOTN2ODEuNDU0aDIzLjIzMWMxMi4zMjYgMCAyMS4yNC0yLjkyIDI5LjA2LTkuMzk4YzkuMjc4LTcuNjk1IDE0Ljc4LTE5LjI5OCAxNC43OC0zMS4yOWMwLTI0LjA0OC0xNy45NjUtNDAuNzY2LTQzLjcxOC00MC43NjZtMTguNTcyIDYxLjE3N2MtNS4wMjEgNC41My0xMS40ODYgNi40ODgtMjEuNzYgNi40ODhIMTYuMjlWMTUuNjg0aDQuMjY4YzEwLjI3NCAwIDE2LjQ5MSAxLjgzNCAyMS43NiA2LjU5MmM1LjQ5NSA0Ljg4NiA4Ljc3MiAxMi40NTIgOC43NzIgMjAuMjY1YzAgNy44My0zLjI3NyAxNS42Ni04Ljc3MiAyMC41MjdtMzIuNDggMjAuMjc3SDkwLjY3VjEuODkxSDc0Ljh6bTU0LjcyOC01MC4yMDljLTkuNTM5LTMuNTM0LTEyLjM0Ni01Ljg2NS0xMi4zNDYtMTAuMjQ2YzAtNS4xMzQgNC45OTgtOS4wMzkgMTEuODQ5LTkuMDM5YzQuNzYzIDAgOC42NzEgMS45NTMgMTIuODM2IDYuNThsOC4yOTUtMTAuODUzQzE0My4zMiAzLjU4MSAxMzUuMTM5LjUzMiAxMjYuMjE0LjUzMmMtMTQuMzk4IDAtMjUuMzk5IDEwLjAyLTI1LjM5OSAyMy4zMmMwIDExLjI0NiA1LjEyNiAxNi45ODEgMjAuMDMyIDIyLjM2OWM2LjIzMiAyLjE4NyA5LjQgMy42NDYgMTAuOTkyIDQuNjQzYzMuMTc1IDIuMDc3IDQuNzcgNC45OTggNC43NyA4LjQxNWMwIDYuNjA2LTUuMjU3IDExLjQ4NC0xMi4zNTEgMTEuNDg0Yy03LjU3NCAwLTEzLjY3NC0zLjc4Mi0xNy4zNC0xMC44NjVMOTYuNjcgNjkuODAyYzcuMzE0IDEwLjczMyAxNi4xMSAxNS41MTIgMjguMjE0IDE1LjUxMmMxNi40ODggMCAyOC4wODQtMTEuMDA3IDI4LjA4NC0yNi43NThjMC0xMi45NDktNS4zNi0xOC44MTYtMjMuNDQyLTI1LjQybTI4LjQ0OCA5LjUyMmMwIDIzLjk2NSAxOC44MTYgNDIuNTI1IDQzLjAwNiA0Mi41MjVjNi44MzkgMCAxMi43MDEtMS4zNTIgMTkuOTE1LTQuNzU5VjYxLjcyN2MtNi4zNiA2LjM1OC0xMS45OCA4LjkxNi0xOS4xOSA4LjkxNmMtMTUuOTk2IDAtMjcuMzYzLTExLjYwNi0yNy4zNjMtMjguMTAyYzAtMTUuNjI2IDExLjcyMi0yNy45NjQgMjYuNjM4LTI3Ljk2NGM3LjU2MSAwIDEzLjMxMSAyLjY4NSAxOS45MTUgOS4xNThWNS4wNEMyMTMuOTMzIDEuNTEgMjA4LjE4My4wNTQgMjAxLjM0My4wNTRjLTI0LjA2NyAwLTQzLjM2OSAxOC45MzUtNDMuMzY5IDQyLjYwNG0xOTEuNjUyIDEzLjk0OEwzMjcuODgzIDEuODkxaC0xNy4zNDZsMzQuNTggODMuNTM1aDguNTQzTDM4OC44NDMgMS44OWgtMTcuMjE3em00Ni40NCAyNi43NGg0NS4wNjV2LTEzLjc5aC0yOS4xODlWNDcuNTU1aDI4LjA3MlYzMy43NjNoLTI4LjA3MnYtMTguMDhoMjkuMTg5VjEuODkyaC00NS4wNjZ6TTUwNC4wMiAyNS45M2MwLTE1LjI1OS0xMC40OS0yNC4wMzktMjguODIzLTI0LjAzOUg0NTEuNjJ2ODEuNDU0aDE1Ljg5NVY1MC42MDhoMi4wOGwyMS45NzUgMzIuNzM3aDE5LjU0NGwtMjUuNjY3LTM0LjMxYzExLjk4OC0yLjQ1MiAxOC41NzMtMTAuNjM5IDE4LjU3My0yMy4xMDVtLTMxLjg4MiAxMy40NTJoLTQuNjIzVjE0LjdoNC44NzdjOS45MTUgMCAxNS4yODcgNC4xNjUgMTUuMjg3IDEyLjA5MmMwIDguMTc3LTUuMzcyIDEyLjU5LTE1LjU0MSAxMi41OSIvPjwvc3ZnPg==';
                    cardTypeName.innerHTML = 'Discover® Virtual';
                    cardPreview.style.background = 'linear-gradient(135deg, #000000 0%, #1c1c1c 50%, #000000 100%)';
                } else if (selectedType === 'American Express') {
                    imgLogo =
                        'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzNSIgaGVpZ2h0PSIzNSIgdmlld0JveD0iMCAwIDMyIDMyIj48cGF0aCBmaWxsPSIjNWNhOWYyIiBkPSJNMjEuMzU1IDE5LjE3MmMwLS40MjctLjE4My0uNjYxLS40NTktLjgyOGMtLjI4MS0uMTYxLS42Mi0uMTgzLTEuMDg0LS4xODNoLTIuMDU3djMuNzZoLjkwMXYtMS4zNjloLjk2NGMuMzE3IDAgLjUxNi4wMzIuNjM1LjE2N2MuMTYxLjE3Mi4xNDEuNTA1LjE0MS43MzV2LjQ2NGguODc1di0uNzRjMC0uMzMzLS4wMi0uNS0uMTQtLjY4OGExLjA1IDEuMDUgMCAwIDAtLjQ0My0uMzEybC4wMjUtLjAxMWMuMjQ1LS4wOTMuNjQxLS4zOTYuNjQxLS45OTV6bS0xLjE2Mi41NDFsLS4wMzctLjAwNWMtLjEyLjA3My0uMjYuMDc5LS40NDMuMDc5aC0xLjA3N3YtLjgzOWgxLjA5OWMuMTYxIDAgLjMxNyAwIC40NDMuMDY4YS4zNS4zNSAwIDAgMSAuMTk3LjMzOWMwIC4xNjEtLjA2My4yODUtLjE3Ny4zNTl6bTYuODcgMS40MDJoLTEuNzI5di44MDNoMS43NGMuOSAwIDEuNC0uMzcxIDEuNC0xLjE3N2MwLS4zNzYtLjA4OC0uNi0uMjQ5LS43NzZjLS4yMDMtLjE3Ny0uNTI3LS4yNjEtLjk3My0uMjc2bC0uNTAxLS4wMjFjLS4xNCAwLS4yMzkgMC0uMzQzLS4wNDFhLjI4NC4yODQgMCAwIDEtLjE5OS0uMjgxYzAtLjEyLjAyMS0uMjE5LjEyLS4yNzZhLjY3LjY3IDAgMCAxIC4zNjUtLjA4NGgxLjYzNXYtLjgwMWgtMS43OTdjLS45MzcgMC0xLjI3Ni41ODMtMS4yNzYgMS4xMmMwIDEuMjAzIDEuMDMyIDEuMTQgMS44NzYgMS4xNjFjLjEzNSAwIC4yMzkuMDIuMjk2LjA3N2MuMDYzLjA0My4xMDkuMTQxLjEwOS4yNGMwIC4xMDQtLjA0Ny4yMDMtLjEwNC4yNGMtLjA3Ny4wNzItLjE5Ny4wOTMtLjM2OS4wOTN6TTAgMHYxMy40NjRsMS4wNzktMi41MDVoMi4zMzNsLjMwMS42MnYtLjYyaDIuNzI0bC41OTkgMS4zNTlsLjU4NC0xLjM0OGg4LjY3MmMuMzkxIDAgLjc0NC4wNzcgMS4wMDUuMzE3di0uMzA4aDIuMzg1di4zMDhjLjQwNS0uMjI5LjkxMS0uMzA4IDEuNDg5LS4zMDhoMy40NzNsLjMyNC42MnYtLjYyaDIuNTU3bC4zMzcuNjJ2LS42MjVoMi40OHY1LjI2N2gtMi41MTZsLS40NzktLjgwM3YuNzgxaC0zLjE0MWwtLjMzOS0uODM5aC0uNzgxbC0uMzU5LjgxN2gtMS42MTVjLS42NDEgMC0xLjEyLS4xMzUtMS40NDMtLjMxN3YuMzE3aC0zLjg1NXYtMS4xNzZjMC0uMTYxLS4wMzYtLjE2MS0uMTM1LS4xODNoLS4xNDF2MS4zOEg4LjA4NXYtLjYzNWwtLjI4MS42MzVINi4yNTJsLS4yNzEtLjYzNXYuNjE5SDIuOTc2bC0uMzM5LS44MzNoLS43NzZsLS4zMzcuODMzSC0uMDAzdjE1Ljc5N0gzMS43MVYyMi41MmMtLjM1OS4xODEtLjgxNy4yMzktMS4yOTcuMjM5aC0yLjI5NnYtLjMzOWMtLjI4MS4yMTktLjc2LjMzOS0xLjIxOS4zMzloLTcuMjg3di0xLjE5N2MwLS4xNjEtLjAyNy0uMTYxLS4xNjEtLjE2MWgtLjA5OXYxLjM2NEgxNi45NXYtMS40MjFjLS4zOTYuMTgzLS44Ni4xOTctMS4yNC4xODNoLS4yODF2MS4yMTloLTIuOTA1bC0uNzI0LS44MjRsLS43NjEuODAzSDYuMzJ2LTUuMjRoNC44MTNsLjY5Mi44MDNsLjc0LS44MDNoMy4yMTNjLjM3NSAwIC45ODQuMDQzIDEuMjU1LjMwM3YtLjMyM2gyLjkwMWMuMjcxIDAgLjg2LjA2MyAxLjIwOC4zMDF2LS4zMTdoNC4zNDl2LjMxN2MuMjE5LS4yMTkuNjgzLS4zMTcgMS4wNzMtLjMxN2gyLjUydi4zMTdjLjI2MS0uMTk3LjYyLS4zMTcgMS4xMi0uMzE3aDEuNTY4Vi4wMDF6bTI4LjIwOCAxOS45MzdjLjAwNS4wMTEuMDA1LjAyMS4wMTEuMDI3Yy4wMTYuMDA5LjAzNi4wMDkuMDQ3LjAyNWwtLjA1Ny0uMDQ3em0zLjU2My0yLjQ5NGguMDg5di43NGgtLjA4OXptLjA0NiAyLjU5OHYtLjAxMWMtLjAzNi0uMDMxLS4wNTctLjA2MS0uMDk5LS4wOTNjLS4xOTctLjIwMy0uNTIxLS4yODctMS4wMTYtLjI5N2wtLjQ4NC0uMDE1Yy0uMTU2IDAtLjI1NS0uMDExLS4zNTktLjA0MWEuMjg1LjI4NSAwIDAgMS0uMTk5LS4yODFjMC0uMTIuMDQxLS4yMTUuMTItLjI3MmMuMDk5LS4wNTcuMTk3LS4wNjcuMzU5LS4wNjdoMS42MzF2LS43ODFoLTEuNzA4Yy0uOTIzIDAtMS4yODEuNTgzLTEuMjgxIDEuMTJjMCAxLjE5NyAxLjA0MSAxLjE0IDEuODggMS4xNjFjLjE0MSAwIC4yNC4wMTUuMjk3LjA3N2MuMDYzLjA0My4xMDQuMTQxLjEwNC4yNGEuMzEuMzEgMCAwIDEtLjEyLjI0Yy0uMDYzLjA3Mi0uMTgzLjA5My0uMzU5LjA5M2gtMS43MnYuODA3aDEuNzE1Yy41NjEgMCAuOTc5LS4xNTYgMS4yMDMtLjQ3OWguMDM2Yy4xMi0uMTgzLjE4My0uNDAxLjE4My0uNjk3YzAtLjMyNC0uMDYzLS41MjEtLjE4My0uNzA0bS03LjAyLTEuMDk4di0uNzc2aC0yLjk4djMuNzc2aDIuOTh2LS43ODFoLTIuMDk1di0uNzU1aDIuMDQzdi0uNzgxaC0yLjA0M3YtLjY3N3ptLTYuNzgxLTcuMjNoLjkxMXYzLjc1NmgtLjkxMXptLS41MTYgMS4wMTFsLS4wMTEuMDExYzAtLjQyMy0uMTcyLS42NjctLjQ1My0uODMzYy0uMjg3LS4xNjctLjYyNC0uMTgzLTEuMDc3LS4xODNoLTIuMDUydjMuNzZoLjl2LTEuMzhoLjk1OWMuMzE3IDAgLjUyMS4wNDEuNjUxLjE2MWMuMTYzLjE4My4xNDEuNTA1LjE0MS43Mjl2LjQ3NWguOTAxdi0uNzM1YzAtLjMzMy0uMDIxLS41LS4xNDctLjY5M2ExLjEgMS4xIDAgMCAwLS40MzctLjMxMmExLjA2IDEuMDYgMCAwIDAgLjYzMS0xem0tMS4xNC41MjdoLS4wMTZjLS4xMjUuMDcyLS4yNjEuMDc3LS40NDMuMDc3aC0xLjA5OXYtLjgzM2gxLjA5OWMuMTYxIDAgLjMxNy4wMDUuNDM3LjA2OGMuMTIuMDUyLjIwMy4xNzIuMjAzLjMzM3MtLjA2My4yOTItLjE4MS4zNTVtNC44NjktLjc1NmguODM5di0uNzk3aC0uODZjLS42MTUgMC0xLjA2OC4xNDEtMS4zNTkuNDM5Yy0uMzguNC0uNDguOTIxLS40OCAxLjQ4NGMwIC42ODMuMTYxIDEuMTA5LjQ4IDEuNDI3Yy4zMDcuMzE3Ljg1OS40MTcgMS4yOTEuNDE3aDEuMDQzbC4zMzktLjgzOWgxLjg1M2wuMzQ5LjgzOWgxLjgxMnYtMi44MTNsMS42OTkgMi44MTNoMS4yNzF2LTMuNzUxaC0uOTE3djIuNjJsLTEuNTcyLTIuNjE1aC0xLjM2djMuNDc5bC0xLjUxMS0zLjU0MWgtMS4zMzlsLTEuMjU1IDIuOTY0aC0uNDAxYy0uMjMzIDAtLjQ4NC0uMDQxLS42MjQtLjE4M2MtLjE2Ny0uMTk3LS4yNDUtLjQ3OS0uMjQ1LS44OGMwLS4zOC4xMDQtLjY4My4yNTUtLjgzOWMuMTc3LS4xODMuMzY1LS4yMjQuNjg4LS4yMjR6bTIuMjI0LS4xNGwuNjE1IDEuNDg5di4wMDVoLTEuMjR6bS0yMC4yODEgMi4yN2wuMzM5LjgzOWgxLjgyM3YtMi45MzdsMS4yOTcgMi45MzdoLjc3NmwxLjI5Ni0yLjkzN2wuMDIxIDIuOTM3aC45MjF2LTMuNzQ1SDguMTU2bC0xLjA3MyAyLjUzNmwtMS4xNzEtMi41NDFINC40NTl2My41NTJsLTEuNTIxLTMuNTUySDEuNjFMLjAxNyAxNS40NjVoLjk1N2wuMzQ0LS44MzNoMS44NTV6bS0uOTE3LTIuMjdsLjYxNSAxLjQ4OWwtLjAwNS4wMDVIMS42NDZ6bTEzLjU1MiA1LjgwNmgtMi44NTNsLTEuMTM2IDEuMjI5bC0xLjA5OS0xLjIyOUg3LjEzMXYzLjc2aDMuNTM2bDEuMTQtMS4yNDRsMS4xIDEuMjRoMS43MzN2LTEuMjUxaDEuMTJjLjc5NyAwIDEuNTU3LS4yMTkgMS41NTctMS4yNmwtLjAwNS0uMDA1YzAtMS4wNDEtLjc5Ni0xLjI0LTEuNTA1LTEuMjRtLTUuNTc4IDIuOTc1SDguMDI2di0uNzQ1aDEuOTU3di0uNzY1SDguMDI2di0uNjc3aDIuMjM5bC45OCAxLjA5M2wtMS4wMjEgMS4wOTl6bTMuNTIuNDQzbC0xLjM3NS0xLjUzMmwxLjM3NS0xLjQ3M3ptMi4wNjgtMS42NzhIMTQuNjR2LS45NTloMS4xNzdjLjMyMyAwIC41NjMuMTMxLjU2My40NTlzLS4xOTcuNS0uNTYzLjVtLTIuNTI1LTcuNDA2di0uNzgxaC0yLjk4NXYzLjc1NmgyLjk4NXYtLjc3NmgtMi4wOTV2LS43NTFoMi4wMzd2LS43NzFoLTIuMDM3di0uNjc3eiIvPjwvc3ZnPg==';
                    cardTypeName.innerHTML = 'American Express® Virtual';
                    cardPreview.style.background = 'linear-gradient(135deg, #016FD0 0%, #0A5BB5 100%)';

                }

                if (cardTypeImg && imgLogo) {
                    cardTypeImg.src = imgLogo;
                }
            }
            changeCardLogo();
        }

        if (cardTypeSelect) {
            cardTypeSelect.addEventListener('change', generateCardNumber);
        }
        // // Call on page load to set initial state
        // document.addEventListener('DOMContentLoaded', function() {
        //     generateCardNumber();
        // });


        // Spending limit + Purpose logic
        const spendingLimitInput = document.querySelector('input[name="spending_limit"]');
        const purposeRadios = document.querySelectorAll('input[name="purpose"]');
        const previewPurposeBadge = document.querySelector('#card_preview .bg-white\\/20');

        function updateByPurpose(purpose) {
            if (!spendingLimitInput) return;

            let defaultLimit = 0;
            let fee = 5;

            switch (purpose) {
                case 'Subscription':
                    defaultLimit = 1000;
                    fee = 5;
                    break;

                case 'One-time use':
                    defaultLimit = 200;
                    fee = 2;
                    break;

                case 'General':
                    defaultLimit = 5000;
                    fee = 7;
                    break;
            }

            // Set spending limit
            spendingLimitInput.value = defaultLimit;
            spendingLimitInput.min = 1;

            // Update fee
            if (cardFee) {
                cardFee.innerHTML = `$${fee.toFixed(2)}`;
            }

            // Update preview badge text
            if (previewPurposeBadge) {
                previewPurposeBadge.innerText = purpose;
            }
        }

        // Attach event listeners
        purposeRadios.forEach(radio => {
            radio.addEventListener('change', () => {
                const labelText = radio.parentElement.querySelector('.font-bold').innerText;
                updateByPurpose(labelText);
            });
        });

        // Trigger default on page load
        window.addEventListener('DOMContentLoaded', () => {
            const checked = document.querySelector('input[name="purpose"]:checked');
            if (checked) {
                const labelText = checked.parentElement.querySelector('.font-bold').innerText;
                updateByPurpose(labelText);
            }
        });
    </script>
</body>

</html>
