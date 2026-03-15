<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Freeze Card Confirmation</title>
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
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 antialiased">
    <!-- Background Screen (Dimmed Card Details) -->
    <div class="relative flex h-screen w-full flex-col bg-white overflow-hidden pointer-events-none opacity-50">
        <div class="layout-container flex h-full grow flex-col">
            <div class="px-4 md:px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <header
                        class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 px-4 py-3">
                        <div class="flex items-center gap-4 text-slate-900">
                            <div class="size-8 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">credit_card</span>
                            </div>
                            <h2 class="text-slate-900 text-lg font-bold leading-tight tracking-[-0.015em]">Card Settings
                            </h2>
                        </div>
                        <button
                            class="flex items-center justify-center rounded-xl h-10 bg-slate-100 text-slate-900 px-2.5">
                            <span class="material-symbols-outlined">more_vert</span>
                        </button>
                    </header>
                    <h2 class="text-slate-900 text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">
                        Card Details</h2>
                    <div class="p-4 @container">
                        <div
                            class="flex flex-col items-stretch justify-start rounded-xl @xl:flex-row @xl:items-start shadow-sm border border-slate-100 bg-white">
                            <div class="w-full bg-primary bg-gradient-to-br from-primary to-blue-900 aspect-video rounded-xl relative overflow-hidden"
                                data-alt="Dark blue premium virtual credit card design">
                                <div class="absolute inset-0 opacity-20">
                                    <svg height="100%" width="100%">
                                        <rect fill="url(#pattern)" height="100%" width="100%"></rect>
                                    </svg>
                                </div>
                                <div class="absolute bottom-4 left-4 text-white font-mono text-lg">**** 1234</div>
                            </div>
                            <div
                                class="flex w-full min-w-72 grow flex-col items-stretch justify-center gap-1 py-4 px-4">
                                <p class="text-slate-500 text-sm font-normal">Active</p>
                                <p class="text-slate-900 text-lg font-bold">Virtual Card</p>
                                <div class="flex items-end gap-3 justify-between">
                                    <p class="text-slate-500 text-base font-normal">**** **** **** 1234</p>
                                    <button
                                        class="flex min-w-[84px] cursor-pointer items-center justify-center rounded-xl h-8 px-4 bg-primary text-white text-sm font-medium">
                                        Manage Card
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 px-4">
                        <div class="flex items-center justify-between p-4 bg-white border border-slate-100 rounded-lg">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-slate-500">lock</span>
                                <span class="font-medium">Freeze Card</span>
                            </div>
                            <div class="w-12 h-6 bg-slate-200 rounded-full relative">
                                <div class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Overlay -->
    <div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm">
        <div
            class="bg-white dark:bg-background-dark w-full max-w-md rounded-xl shadow-2xl overflow-hidden animate-in fade-in zoom-in duration-300">
            <div class="p-6 flex flex-col items-center text-center">
                <!-- Icon Header -->
                <div class="size-16 bg-primary/10 rounded-full flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-primary text-4xl">ac_unit</span>
                </div>
                <h3 class="text-slate-900 dark:text-slate-100 text-2xl font-bold leading-tight mb-3">
                    Are you sure you want to freeze this card?
                </h3>
                <p class="text-slate-600 dark:text-slate-400 text-base font-normal leading-relaxed mb-8">
                    This will temporarily disable all transactions, including recurring payments and subscriptions. You
                    can unfreeze it at any time.
                </p>
                <!-- Action Buttons -->
                <div class="flex flex-col w-full gap-3">
                    <form method="POST" action="{{ route('user.freeze-card.update', $card->id) }}">
                        @csrf

                        @if (session('success'))
                            <p class="text-green-600 text-center font-medium">{{ session('success') }}</p>
                        @endif
                        @if ($errors->any())
                            <div class="bg-red-100 dark:bg-red-900/30 p-4 rounded-xl">
                                <ul class="list-disc pl-5 text-red-700 dark:text-red-300">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <button
                            class="w-full py-4 bg-primary hover:bg-primary/90 text-white font-bold rounded-xl transition-colors">
                            Yes, freeze card
                        </button>
                    </form>
                    <button id="goBtn"
                        class="w-full py-4 bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-900 dark:text-slate-100 font-bold rounded-xl transition-colors">
                        No, cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("goBtn").addEventListener("click", function() {
            window.location.href = "{{ route('user.card') }}";
        });
    </script>
</body>

</html>
