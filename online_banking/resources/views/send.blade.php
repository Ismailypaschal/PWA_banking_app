<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Send Money</title>

    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
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
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display min-h-screen relative flex flex-col overflow-x-hidden overflow-y-auto text-slate-900 dark:text-white">
    <div id="trans-nav"
        class="sticky top-0 z-50 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-md border-b border-border-light dark:border-border-dark px-4 py-3 flex items-center justify-between">
        <a href="{{ route('user.dashboard') }}"
            class="flex items-center justify-center p-2 -ml-2 rounded-full hover:bg-black/5 dark:hover:bg-white/10 transition-colors">
            <span class="material-symbols-outlined text-slate-900 dark:text-white"
                style="font-size: 24px;">arrow_back</span>
        </a>
        <h2 class="text-lg font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-8">Send Money</h2>
    </div>

    <main class="flex-1 flex flex-col gap-6 p-4 pb-64 md:pb-80">
        <section id="upper-header">
            <h3 class="text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-3 px-1">From
            </h3>
            <div
                class="group relative flex items-center gap-4 bg-surface-light dark:bg-surface-dark-transfer p-4 rounded-xl shadow-sm border border-border-light dark:border-transparent cursor-pointer hover:border-primary transition-all">
                <div
                    class="flex items-center justify-center bg-primary/10 rounded-lg h-10 w-16 shrink-0 border border-primary/20">
                    <span class="material-symbols-outlined text-primary"
                        style="font-size: 24px; font-variation-settings: 'FILL' 1">account_balance_wallet</span>
                </div>
                <div class="flex flex-col justify-center flex-1 min-w-0">
                    <p class="text-base font-bold leading-normal truncate">Checking Account ...4589</p>
                    <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">
                        ${{ number_format(auth()->user()->balance ?? 0, 2, '.', ',') }}
                    </p>
                </div>
                <span class="material-symbols-outlined text-slate-400 dark:text-slate-500">expand_more</span>
            </div>
        </section>

        <form class="flex flex-col gap-4" id="send-form" method="POST" action="{{ route('user.send') }}">
            @csrf

            <div id="upper" class="flex flex-col gap-4">
                <h3 class="text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 px-1">Send
                    To</h3>

                <!-- Method Selector (Tabs/Cards style) -->
                <div class="grid grid-cols-4 gap-2 px-1">
                    <button type="button" data-method="zelle"
                        class="method-btn active flex flex-col items-center justify-center p-3 bg-surface-light dark:bg-surface-dark rounded-xl border-2 border-primary text-primary font-medium">
                        <span class="material-symbols-outlined text-2xl">payment</span>
                        <span class="text-xs mt-1">Zelle</span>
                    </button>
                    <button type="button" data-method="paypal"
                        class="method-btn flex flex-col items-center justify-center p-3 bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark hover:border-primary transition">
                        <span class="material-symbols-outlined text-2xl">payments</span>
                        <span class="text-xs mt-1">PayPal</span>
                    </button>
                    <button type="button" data-method="crypto"
                        class="method-btn flex flex-col items-center justify-center p-3 bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark hover:border-primary transition">
                        <span class="material-symbols-outlined text-2xl">currency_bitcoin</span>
                        <span class="text-xs mt-1">Crypto</span>
                    </button>
                    <button type="button" data-method="cashapp"
                        class="method-btn flex flex-col items-center justify-center p-3 bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark hover:border-primary transition">
                        <span class="material-symbols-outlined text-2xl">qr_code_scanner</span>
                        <span class="text-xs mt-1">Cash App</span>
                    </button>
                </div>

                <!-- Hidden input for selected method -->
                <input type="hidden" name="send_type" id="send_method" value="zelle">

                <!-- Hidden input for Bene_account_number -->
                <input type="hidden" name="bene_account_number" id="bene_account_number_hidden" value="">

                <!-- Bank Fields (default visible) -->
                <div id="fields-zelle" class="method-fields flex flex-col gap-4">
                    <div
                        class="relative bg-surface-light dark:bg-surface-dark-transfer rounded-xl border border-border-light dark:border-transparent px-4 py-3 focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary transition-all shadow-sm">
                        <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1"
                            for="bank_name">US Based Email / Phone</label>
                        <input
                            class="receiver_id w-full bg-transparent border-none p-0 text-base focus:ring-0 text-slate-900 dark:text-white placeholder:text-slate-400 font-medium"
                            id="bankname" name="" placeholder="example@email.com or +1908746444"
                            type="text" />
                    </div>
                    <div class="relative ..."> <!-- same as original account name --> </div>
                    <div class="relative ..."> <!-- same as original account number --> </div>

                    <!-- Keep your transfer type radio + international fields here -->
                    <!-- ... paste your existing transfer type + #international-fields ... -->
                </div>

                <!-- PayPal Fields -->
                <div id="fields-paypal" class="method-fields hidden flex flex-col gap-4">
                    <div
                        class="relative bg-surface-light dark:bg-surface-dark-transfer rounded-xl border border-border-light dark:border-transparent px-4 py-3 focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary transition-all shadow-sm">
                        <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1"
                            for="paypal_id">PayPal Email / Phone / ID</label>
                        <input
                            class="receiver_id w-full bg-transparent border-none p-0 text-base focus:ring-0 text-slate-900 dark:text-white placeholder:text-slate-400 font-medium"
                            id="paypal_id" name="" placeholder="email@example.com or +1234567890"
                            type="text" />
                    </div>
                    <p class="text-xs text-slate-500 dark:text-slate-400 px-1">Note: Instant for PayPal users. Fee may
                        apply for instant transfer.</p>
                </div>

                <!-- Crypto Fields -->
                <div id="fields-crypto" class="method-fields hidden flex flex-col gap-4">
                    <div
                        class="relative bg-surface-light dark:bg-surface-dark-transfer rounded-xl border border-border-light dark:border-transparent px-4 py-3 focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary transition-all shadow-sm">
                        <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1"
                            for="crypto_address">Wallet Address</label>
                        <input
                            class="receiver_id w-full bg-transparent border-none p-0 text-base focus:ring-0 text-slate-900 dark:text-white placeholder:text-slate-400 font-medium font-mono"
                            id="crypto_address" name="" placeholder="0x... or bc1..." type="text" />
                    </div>
                    <div
                        class="relative bg-surface-light dark:bg-surface-dark-transfer rounded-xl border border-border-light dark:border-transparent px-4 py-3">
                        <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1"
                            for="crypto_network">Network / Coin</label>
                        <select
                            class="w-full bg-transparent border-none p-0 text-base focus:ring-0 text-slate-900 dark:text-white font-medium appearance-none"
                            id="crypto_network" name="crypto_network" required>
                            <option value="">Select</option>
                            <option value="bitcoin">Bitcoin (BTC)</option>
                            <option value="ethereum">Ethereum (ETH)</option>
                            <option value="usdt-trc20">USDT (TRC20)</option>
                            <option value="usdc">USDC</option>
                            <option value="solana">Solana (SOL)</option>
                        </select>
                    </div>
                    <p class="text-xs text-amber-600 dark:text-amber-400 px-1">Double-check address. Crypto transfers
                        are irreversible.</p>
                </div>

                <!-- Cash App Fields -->
                <div id="fields-cashapp" class="method-fields hidden flex flex-col gap-4">
                    <div
                        class="relative bg-surface-light dark:bg-surface-dark-transfer rounded-xl border border-border-light dark:border-transparent px-4 py-3 focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary transition-all shadow-sm">
                        <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1"
                            for="cashtag">Cash App Tag / Phone / Email</label>
                        <input
                            class="receiver_id w-full bg-transparent border-none p-0 text-base focus:ring-0 text-slate-900 dark:text-white placeholder:text-slate-400 font-medium"
                            id="cashtag" name="" placeholder="$username or phone/email" type="text" />
                    </div>
                    <p class="text-xs text-slate-500 dark:text-slate-400 px-1">Fast & low-fee for US users. $Cashtag
                        recommended.</p>
                </div>

                <!-- Common fields: Amount + Purpose -->
                <h3
                    class="text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 px-1 mt-4">
                    Send Details</h3>
                <div
                    class="relative bg-surface-light dark:bg-surface-dark-transfer rounded-xl border border-border-light dark:border-transparent px-4 py-4 ...">
                    <label class="block text-xs font-medium ...">Amount</label>
                    <div class="flex items-center gap-2">
                        <span class="text-2xl font-bold text-slate-400">$</span>
                        <input class="w-full bg-transparent border-none p-0 text-3xl font-bold ..." id="amount"
                            name="amount" placeholder="0.00" type="number" step="0.01" min="1"
                            required />
                    </div>
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
                        <option value="food">Food</option>
                        <option value="investment">Investment</option>
                        <option value="other">Other</option>
                    </select>
                    <input
                        class="w-full bg-transparent border-none p-0 text-sm focus:ring-0 text-slate-500 dark:text-slate-400 placeholder:text-slate-400"
                        id="memo" placeholder="Add a personal note (optional)" type="text"
                        name="text_description" />
                </div>


                <!-- Add this spacer -->
                <div class="h-48 md:h-64 lg:h-80"></div>

            </div>

            <!-- Review section -->
            <div class="bg-background-light dark:bg-background-dark font-display text-white selection:bg-primary/30">
                <div id="lower"
                    class="hidden max-w-[430px] mx-auto min-h-screen flex-col active bg-background-light dark:bg-background-dark shadow-2xl relative">
                    <!-- TopAppBar -->
                    <nav
                        class="flex items-center bg-background-light dark:bg-background-dark p-4 pb-2 sticky top-0 z-10 border-b border-white/5">
                        <button id="showForm">
                            <div
                                class="text-slate-900 dark:text-white flex size-12 shrink-0 items-center justify-start cursor-pointer">
                                <span class="material-symbols-outlined">arrow_back_ios</span>
                            </div>
                        </button>
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
                                {{-- <div
                                    class="flex justify-between gap-x-6 py-3 border-b border-slate-100 dark:border-white/5">
                                    <p class="text-slate-500 dark:text-[#92a4c9] text-sm font-medium">Bank Name</p>
                                    <p id="bank_name_2"
                                        class="text-slate-900 dark:text-white text-sm font-semibold text-right"></p>
                                </div> --}}
                                <div
                                    class="flex justify-between gap-x-6 py-3 border-b border-slate-100 dark:border-white/5">
                                    <p class="text-slate-500 dark:text-[#92a4c9] text-sm font-medium">Reciever's ID</p>
                                    <div class="flex-1 overflow-x-auto">
                                        <p id="receiver_id_2"
                                            class="text-slate-900 dark:text-white text-sm font-semibold text-right whitespace-nowrap">
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="flex justify-between gap-x-6 py-3 border-b border-slate-100 dark:border-white/5">
                                    <p class="text-slate-500 dark:text-[#92a4c9] text-sm font-medium">Send Type
                                    </p>
                                    <p id="send_type_2"
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

            {{-- <!-- Bottom fixed button -->
            <div
                class="fixed bottom-0 left-0 right-0 max-w-[430px] mx-auto p-4 bg-background-light dark:bg-background-dark/80 backdrop-blur-lg border-t ... pb-8 z-40">
                <button id="send-btn" type="submit"
                    class="w-full bg-primary hover:bg-blue-700 text-white font-bold py-4 rounded-xl shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2 active:scale-[0.98]">
                    <span>Send Now</span>
                    <span class="material-symbols-outlined">send</span>
                </button>
            </div> --}}
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

    {{-- Global Alert Modal --}}
    <div id="alertModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden items-center justify-center z-50">

        <div class="bg-white dark:bg-[#1a2130] w-[90%] max-w-sm rounded-2xl p-6 shadow-2xl text-center animate-fadeIn">

            <div id="alertIcon" class="flex justify-center mb-4"></div>

            <h3 id="alertTitle" class="text-lg font-bold mb-2"></h3>

            <p id="alertMessage" class="text-sm text-slate-600 dark:text-slate-300 mb-6"></p>

            <button onclick="closeModal()"
                class="w-full bg-primary hover:bg-blue-700 text-white font-bold py-3 rounded-xl transition-all">
                OK
            </button>
        </div>
    </div>
    <script>
        function showModal(type, message) {
            const modal = document.getElementById('alertModal');
            const title = document.getElementById('alertTitle');
            const text = document.getElementById('alertMessage');
            const icon = document.getElementById('alertIcon');

            modal.classList.remove('hidden');
            modal.classList.add('flex');

            if (type === 'success') {
                title.textContent = "Success";
                text.textContent = message;
                icon.innerHTML = `<span class="material-symbols-outlined text-green-500 text-5xl">check_circle</span>`;
            }

            if (type === 'error') {
                title.textContent = "Error";
                text.textContent = message;
                icon.innerHTML = `<span class="material-symbols-outlined text-red-500 text-5xl">cancel</span>`;
            }
        }

        function closeModal() {
            const modal = document.getElementById('alertModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        document.addEventListener('DOMContentLoaded', function() {

            @if (session('success'))
                showModal('success', @json(session('success')));
            @endif

            @if (session('error'))
                showModal('error', @json(session('error')));
            @endif

            @if ($errors->any())
                showModal('error', @json($errors->first()));
            @endif

        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const methodButtons = document.querySelectorAll('.method-btn');
            const methodFields = document.querySelectorAll('.method-fields');
            const hiddenMethod = document.getElementById('send_method');

            function switchMethod(method) {
                hiddenMethod.value = method;

                methodButtons.forEach(btn => {
                    btn.classList.toggle('active', btn.dataset.method === method);
                    btn.classList.toggle('border-primary', btn.dataset.method === method);
                    btn.classList.toggle('border-border-light', btn.dataset.method !== method);
                    btn.classList.toggle('dark:border-border-dark', btn.dataset.method !== method);
                });

                methodFields.forEach(section => {
                    section.classList.toggle('hidden', section.id !== `fields-${method}`);


                });
            }

            methodButtons.forEach(btn => {
                btn.addEventListener('click', () => switchMethod(btn.dataset.method));
            });

            // Optional: PIN concatenation logic (keep your existing if any)
            // ...
        });
    </script>
    <!-- Removed invalid server-side pseudo-code that was being output into client JS. -->
    <script>
        // Ensure the form's onsubmit handler exists and populates the hidden beneficiary field.
        function validateSend() {
            try {
                const visibleSection = document.querySelector('.method-fields:not(.hidden)');
                let receiverValue = '';
                if (visibleSection) {
                    const inputInSection = visibleSection.querySelector('.receiver_id');
                    if (inputInSection && inputInSection.value.trim()) {
                        receiverValue = inputInSection.value.trim();
                    }
                }
                const beneAccountNumber = document.getElementById('bene_account_number_hidden');
                if (beneAccountNumber) {
                    beneAccountNumber.value = receiverValue;
                }
            } catch (err) {
                // swallow errors and allow the form to submit; log to console for debugging
                console.warn('validateSend error', err);
            }
            return true; // allow submission
        }

        let upper = document.getElementById('upper');
        let transNav = document.getElementById('trans-nav');
        let upperHeader = document.getElementById('upper-header');
        let lower = document.getElementById('lower');
        let confirmBtn = document.getElementById('confirm');
        let amount = document.getElementById('amount');
        let amount2 = document.getElementById('amount_2');
        let purpose = document.getElementById('purpose');
        let purpose2 = document.getElementById('purpose_2');
        let send = document.getElementById('send');

        let receiverId = document.querySelector('.receiver_id');
        let receiverId2 = document.getElementById('receiver_id_2');
        let sendType2 = document.getElementById('send_type_2');
        let beneAccountNumber = document.getElementById('bene_account_number_hidden');

        confirmBtn.addEventListener('click', (e) => {
            e.preventDefault();

            // Find visible method section
            const visibleSection = document.querySelector('.method-fields:not(.hidden)');

            let receiverValue = '';

            if (visibleSection) {
                const inputInSection = visibleSection.querySelector('.receiver_id');
                if (inputInSection && inputInSection.value.trim()) {
                    receiverValue = inputInSection.value.trim();
                }
            }
            // ─── Important: copy to hidden field ────────────────────────
            beneAccountNumber.value = receiverValue;

            // Get send method
            const sendMethod = document.getElementById('send_method')?.value || '—';

            // Update preview
            receiverId2.innerText = receiverValue;
            sendType2.innerText = sendMethod.charAt(0).toUpperCase() + sendMethod
                .slice(1);
            purpose2.innerText = purpose?.value?.trim() || '—';

            // Format amount safely
            const amt = Number(amount?.value || 0);
            amount2.innerText = isNaN(amt) ? '$0.00' : amt.toLocaleString('en-US', {
                style: 'currency',
                currency: 'USD'
            });

            // Make preview visible
            transNav.classList.add('hidden');
            upper.classList.add('hidden');
            upperHeader.classList.add('hidden');
            lower.classList.remove('hidden'); // ← critical fix
            lower.style.display = 'flex'; // force it visible
            confirmBtn.classList.add('hidden');

            console.log('Confirm clicked → Preview should show. Receiver:', receiverValue);
        });

        const showForm = document.getElementById('showForm');

        showForm.addEventListener('click', () => {
            // Make preview visible
            transNav.classList.remove('hidden');
            upper.classList.remove('hidden');
            upperHeader.classList.remove('hidden');
            lower.classList.add('hidden'); // ← critical fix
            lower.style.display = 'none'; // force it visible
            confirmBtn.classList.remove('hidden');
        });

        const pins = document.querySelectorAll('.pin');

        pins.forEach((input, index) => {
            input.addEventListener('input', () => {
                input.value = input.value.replace(/\D/g, '');
                if (input.value && index < pins.length - 1) {
                    pins[index + 1].focus();
                }
            });

            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && !input.value && index > 0) {
                    pins[index - 1].focus();
                }
            });
        });

        send.addEventListener('click', (e) => {
            e.preventDefault();
            const pinFormInput = document.getElementById('pin');
            pinFormInput.value = [...pins].map(p => p.value).join('');
            document.getElementById('send-form').submit();
        });
    </script>
</body>

</html>
