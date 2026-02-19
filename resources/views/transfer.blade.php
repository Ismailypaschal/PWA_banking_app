<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Transfer Funds</title>

    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="/output.css">
    <script src="/js/general-theme.js"></script>

    <style>
        .pin-input {
            width: 48px;
            height: 48px;
            text-align: center;
            font-size: 1.5rem;
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(0, 0, 0, 0.5);
            border-radius: 0.75rem;
            color: black;
        }

        .active {
            display: none;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display min-h-screen relative flex flex-col overflow-x-hidden text-slate-900 dark:text-white">
    <div id="trans-nav"
        class="sticky top-0 z-50 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-md border-b border-border-light dark:border-border-dark px-4 py-3 flex items-center justify-between">
        <a href="{{ route('user.dashboard') }}"
            class="flex items-center justify-center p-2 -ml-2 rounded-full hover:bg-black/5 dark:hover:bg-white/10 transition-colors">
            <span class="material-symbols-outlined text-slate-900 dark:text-white"
                style="font-size: 24px;">arrow_back</span>
        </a>
        <h2 class="text-lg font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-8">Transfer Funds</h2>
    </div>
    <main class="flex-1 flex flex-col gap-6 p-4 pb-32">
        <section id="upper-header">
            <h3 class="text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-3 px-1">
                Source Account</h3>
            <div
                class="group relative flex items-center gap-4 bg-surface-light dark:bg-surface-dark-transfer p-4 rounded-xl shadow-sm border border-border-light dark:border-transparent cursor-pointer hover:border-primary transition-all">
                <div
                    class="flex items-center justify-center bg-primary/10 rounded-lg h-10 w-16 shrink-0 border border-primary/20">
                    <span class="material-symbols-outlined text-primary"
                        style="font-size: 24px; font-variation-settings: 'FILL' 1">account_balance</span>
                </div>
                <div class="flex flex-col justify-center flex-1 min-w-0">
                    <p class="text-base font-bold leading-normal truncate">Checking Account ...4589</p>
                    <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">$500000
                    </p>
                    {{-- <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Balance: <%=
                            Number(user.balance).toLocaleString('en-US', { style: 'currency' , currency: 'USD' }) %>
                    </p> --}}
                </div>
                <span class="material-symbols-outlined text-slate-400 dark:text-slate-500">expand_more</span>
            </div>
        </section>
        <form class="flex flex-col gap-4" id="transfer-form" method="POST" action="{{ route('user.transfer') }}"
            onsubmit="return checkPin()">
            @csrf
            @if (session('success'))
                <p class="text-green-600 text-center">{{ session('success') }}</p>
            @endif
            {{-- Error msg --}}
            @if ($errors->any())
                <div class="bg-red-100 p-3 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-600 text-center">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- End of error msg --}}
            <div id="upper" class="flex flex-col gap-4">
                <h3 class="text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 px-1">
                    Recipient
                    Details</h3>
                <div
                    class="relative bg-surface-light dark:bg-surface-dark-transfer rounded-xl border border-border-light dark:border-transparent px-4 py-3 focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary transition-all shadow-sm">
                    <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1"
                        for="bank_name">Bank
                        Name</label>
                    <input
                        class="w-full bg-transparent border-none p-0 text-base focus:ring-0 text-slate-900 dark:text-white placeholder:text-slate-400 font-medium"
                        id="bankname" name="bank_name" placeholder="Full name of recipient" type="text" />
                    <div class="flex items-center">

                    </div>
                </div>
                <div
                    class="relative bg-surface-light dark:bg-surface-dark-transfer rounded-xl border border-border-light dark:border-transparent px-4 py-3 focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary transition-all shadow-sm">
                    <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1"
                        for="account_name">Account Name</label>
                    <input
                        class="w-full bg-transparent border-none p-0 text-base focus:ring-0 text-slate-900 dark:text-white placeholder:text-slate-400 font-medium"
                        id="accountname" placeholder="Full name of recipient" type="text" name="bene_account_name" />
                </div>
                <div
                    class="relative bg-surface-light dark:bg-surface-dark-transfer rounded-xl border border-border-light dark:border-transparent px-4 py-3 focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary transition-all shadow-sm">
                    <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1"
                        for="accountnumber">Account Number</label>
                    <input
                        class="w-full bg-transparent border-none p-0 text-base focus:ring-0 text-slate-900 dark:text-white placeholder:text-slate-400 font-medium tracking-wide"
                        id="accountnumber" inputmode="numeric" placeholder="0000 0000 0000" type="number"
                        name="bene_account_number" />
                </div>
                <!-- Transfer Type (Local vs International/Wire) -->
                <div
                    class="relative bg-surface-light dark:bg-surface-dark-transfer rounded-xl border border-border-light dark:border-transparent px-4 py-4 focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary transition-all shadow-sm">
                    <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-2">
                        Transfer Type
                    </label>
                    <div class="flex items-center gap-6">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="transfer_type" value="domestic" class="radio radio-primary"
                                checked />
                            <span class="text-sm font-medium">Local Transfer</span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="transfer_type" value="wire" class="radio radio-primary" />
                            <span class="text-sm font-medium">Wire / International</span>
                        </label>
                    </div>
                </div>

                <!-- Extra fields for International/Wire – hidden by default -->
                <div id="international-fields" class="hidden flex flex-col gap-4 mt-2">
                    <div
                        class="relative bg-surface-light dark:bg-surface-dark-transfer rounded-xl border border-border-light dark:border-transparent px-4 py-3 focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary transition-all shadow-sm">
                        <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1"
                            for="swift_code">
                            SWIFT / BIC Code
                        </label>
                        <input
                            class="w-full bg-transparent border-none p-0 text-base focus:ring-0 text-slate-900 dark:text-white placeholder:text-slate-400 font-medium uppercase tracking-wide"
                            id="swift_code" name="swift_code" placeholder="e.g. BOFAUS3N" type="text" maxlength="11"
                            required />
                    </div>

                    <div
                        class="relative bg-surface-light dark:bg-surface-dark-transfer rounded-xl border border-border-light dark:border-transparent px-4 py-3 focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary transition-all shadow-sm">
                        <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1"
                            for="routing_number">
                            Routing Number / ABA
                        </label>
                        <input
                            class="w-full bg-transparent border-none p-0 text-base focus:ring-0 text-slate-900 dark:text-white placeholder:text-slate-400 font-medium tracking-wide"
                            id="routing_number" name="routing_number" placeholder="e.g. 021000021" type="text"
                            inputmode="numeric" maxlength="9" required />
                    </div>

                    <div
                        class="relative bg-surface-light dark:bg-surface-dark-transfer rounded-xl border border-border-light dark:border-transparent px-4 py-3 focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary transition-all shadow-sm">
                        <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1"
                            for="country">
                            Country
                        </label>
                        <select
                            class="w-full bg-transparent border-none p-0 text-base focus:ring-0 text-slate-900 dark:text-white font-medium appearance-none"
                            id="country" name="country"required>
                            <option value="" selected disabled>Select Country</option>
                            <option value="United States">United States</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Canada">Canada</option>
                            <option value="Australia">Australia</option>
                            <option value="China">China</option>
                            <option value="Germany">Germany</option>
                            <!-- Add more countries as needed -->
                        </select>
                    </div>
                </div>
                <h3
                    class="text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 px-1 mt-2">
                    Transfer Information</h3>
                <div
                    class="relative bg-surface-light dark:bg-surface-dark-transfer rounded-xl border border-border-light dark:border-transparent px-4 py-4 focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary transition-all shadow-sm">
                    <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-2"
                        for="amount">Amount</label>
                    <div class="flex items-center gap-2">
                        <span class="text-2xl font-bold text-slate-400">$</span>
                        <input
                            class="w-full bg-transparent border-none p-0 text-3xl font-bold focus:ring-0 text-slate-900 dark:text-white placeholder:text-slate-300 dark:placeholder:text-slate-700"
                            id="amount" inputmode="decimal" placeholder="0.00" type="number" name="amount" />
                    </div>
                </div>
                <div
                    class="relative bg-surface-light dark:bg-surface-dark-transfer rounded-xl border border-border-light dark:border-transparent px-4 py-3 focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary transition-all shadow-sm">
                    <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1"
                        for="purpose">Account
                        type</label>
                    <select
                        class="w-full bg-transparent border-none p-0 text-base focus:ring-0 text-slate-900 dark:text-white font-medium appearance-none mb-1"
                        id="accounttype" name="account_type">
                        <option value="savings">Savings</option>
                        <option value="current">Current</option>
                        <option value="investment">Investment</option>
                    </select>
                </div>
                <div
                    class="relative bg-surface-light dark:bg-surface-dark-transfer rounded-xl border border-border-light dark:border-transparent px-4 py-3 focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary transition-all shadow-sm">
                    <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1"
                        for="purpose">Purpose
                        of Transfer</label>
                    <select
                        class="w-full bg-transparent border-none p-0 text-base focus:ring-0 text-slate-900 dark:text-white font-medium appearance-none mb-1"
                        id="purpose" name="description">
                        <option value="family">Family &amp; Friends</option>
                        <option value="rent">Rent &amp; Bills</option>
                        <option value="business">Business Service</option>
                        <option value="investment">Investment</option>
                        <option value="food">Food</option>
                        <option value="other">Other</option>
                    </select>
                    <input
                        class="w-full bg-transparent border-none p-0 text-sm focus:ring-0 text-slate-500 dark:text-slate-400 placeholder:text-slate-400"
                        id="memo" placeholder="Add a personal note (optional)" type="text"
                        name="text_description" />
                </div>

            </div>
            <!-- Review section -->
            <div class="bg-background-light dark:bg-background-dark font-display text-white selection:bg-primary/30">
                <div id="lower"
                    class="max-w-[430px] mx-auto min-h-screen flex flex-col active bg-background-light dark:bg-background-dark shadow-2xl relative">
                    <!-- TopAppBar -->
                    <nav
                        class="flex items-center bg-background-light dark:bg-background-dark p-4 pb-2 sticky top-0 z-10 border-b border-white/5">
                        <div
                            class="text-slate-900 dark:text-white flex size-12 shrink-0 items-center justify-start cursor-pointer">
                            <span class="material-symbols-outlined">arrow_back_ios</span>
                        </div>
                        <h2
                            class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-12">
                            Review Transfer</h2>
                    </nav>
                    <div class="flex-1 overflow-y-auto px-4 pb-8">
                        <!-- Amount Section -->
                        <div class="py-8 text-center">
                            <p class="text-slate-500 dark:text-[#92a4c9] text-sm font-medium mb-1">Total Transfer
                                Amount
                            </p>
                            <h1 id="amount_2"
                                class="text-slate-900 dark:text-white text-4xl font-extrabold tracking-tight"></h1>
                        </div>

                        <!-- Transaction Summary List -->
                        <div class="mb-8">
                            <h3
                                class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] mb-4">
                                Transaction Details</h3>
                            <div
                                class="bg-white dark:bg-[#1a2130] rounded-xl p-4 border border-slate-200 dark:border-white/5">
                                <div
                                    class="flex justify-between gap-x-6 py-3 border-b border-slate-100 dark:border-white/5">
                                    <p class="text-slate-500 dark:text-[#92a4c9] text-sm font-medium">Bank Name</p>
                                    <p id="bank_name_2"
                                        class="text-slate-900 dark:text-white text-sm font-semibold text-right"></p>
                                </div>
                                <div
                                    class="flex justify-between gap-x-6 py-3 border-b border-slate-100 dark:border-white/5">
                                    <p class="text-slate-500 dark:text-[#92a4c9] text-sm font-medium">Account Name</p>
                                    <p id="account_name_2"
                                        class="text-slate-900 dark:text-white text-sm font-semibold text-right"></p>
                                </div>
                                <div
                                    class="flex justify-between gap-x-6 py-3 border-b border-slate-100 dark:border-white/5">
                                    <p class="text-slate-500 dark:text-[#92a4c9] text-sm font-medium">Account Number
                                    </p>
                                    <p id="account_number_2"
                                        class="text-slate-900 dark:text-white text-sm font-semibold text-right">
                                    </p>
                                </div>
                                <div
                                    class="flex justify-between gap-x-6 py-3 border-b border-slate-100 dark:border-white/5">
                                    <p class="text-slate-500 dark:text-[#92a4c9] text-sm font-medium">Purpose</p>
                                    <p id="purpose_2"
                                        class="text-slate-900 dark:text-white text-sm font-semibold text-right">
                                    </p>
                                </div>
                                <div class="flex justify-between gap-x-6 py-3">
                                    <p class="text-slate-500 dark:text-[#92a4c9] text-sm font-medium">Transaction Fee
                                    </p>
                                    <p class="text-emerald-500 text-sm font-bold text-right">$1</p>
                                </div>
                            </div>
                        </div>
                        <!-- PIN Input Section -->
                        <div class="flex justify-center gap-3">
                            <input
                                class="pin-input pin text-late-900 dark:text-white dark:border-slate-600 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                                maxlength="1" type="password" inputmode="numeric" />
                            <input
                                class="pin-input pin text-slate-900 dark:text-white dark:border-slate-600 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                                maxlength="1" type="password" inputmode="numeric" />
                            <input
                                class="pin-input pin text-slate-900 dark:text-white dark:border-slate-600 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                                maxlength="1" type="password" inputmode="numeric" />
                            <input
                                class="pin-input pin text-slate-900 dark:text-white dark:border-slate-600 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                                maxlength="1" type="password" inputmode="numeric" />
                        </div>

                        <input class="hidden" id="pin" name="security_pin">

                    </div>
                    <!-- Security Badge -->
                    <div class="flex items-center justify-center gap-2 mb-8 opacity-60">
                        <span class="material-symbols-outlined text-sm">lock</span>
                        <p class="text-slate-500 dark:text-[#92a4c9] text-xs font-semibold uppercase tracking-widest">
                            End-to-End
                            Encrypted</p>
                    </div>
                    <div
                        class="fixed bottom-0 left-0 right-0 max-w-[430px] mx-auto p-4 bg-background-light dark:bg-background-dark/80 backdrop-blur-lg border-t border-slate-200 dark:border-white/5 pb-8">
                        <button id="send" type="submit"
                            class="w-full bg-primary hover:bg-blue-700 text-white font-bold py-4 rounded-xl shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2 active:scale-[0.98]">
                            <span>Send Money</span>
                            <span class="material-symbols-outlined">send</span>
                        </button>
                        <div class="h-1 w-32 bg-slate-300 dark:bg-white/20 rounded-full mx-auto mt-6"></div>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <div id="confirm"
        class="fixed bottom-0 left-0 w-full bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-xl border-t border-border-light dark:border-border-dark p-4 pb-8 z-40">
        <button id="confirm"
            class="w-full bg-primary hover:bg-blue-700 text-white font-bold text-lg py-4 rounded-xl shadow-lg shadow-primary/20 active:scale-[0.98] transition-all flex items-center justify-center gap-2">
            Confirm Transfer
            <span class="material-symbols-outlined" style="font-size: 20px;">check_circle</span>
        </button>
    </div>

    <script></script>
    <script src="/js/review.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const radioButtons = document.querySelectorAll('input[name="transfer_type"]');
            const internationalSection = document.getElementById('international-fields');

            function toggleInternationalFields() {
                if (document.querySelector('input[name="transfer_type"]:checked').value === 'wire') {
                    internationalSection.classList.remove('hidden');
                } else {
                    internationalSection.classList.add('hidden');

                    // Optional: clear the fields when hiding (good UX)
                    internationalSection.querySelectorAll('input, select').forEach(el => {
                        el.value = '';
                    });
                }
            }

            // Run once on load (local is checked by default)
            toggleInternationalFields();

            // Listen for changes
            radioButtons.forEach(radio => {
                radio.addEventListener('change', toggleInternationalFields);
            });

            const fields = internationalSection.querySelectorAll('input, select');
            fields.forEach(field => {
                field.required = !internationalSection.classList.contains('hidden');
            });
        });
    </script>
</body>

</html>
