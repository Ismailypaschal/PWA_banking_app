<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Card Details - Fintech App</title>
    <!-- Tailwind CSS v3 with Plugins -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Google Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
        rel="stylesheet" />
    <script src="/js/general-theme.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'background-dark': '#0d1117',
                        'primary-blue': '#2563eb',
                        'card-glass': 'rgba(255, 255, 255, 0.03)',
                        'border-glass': 'rgba(255, 255, 255, 0.1)',
                    },
                    backgroundImage: {
                        'card-gradient': 'linear-gradient(135deg, #1e293b 0%, #0f172a 100%)',
                        'chip-gradient': 'linear-gradient(135deg, #fbbf24 0%, #d97706 100%)',
                    }
                }
            }
        }
    </script>
    <style data-purpose="custom-animations">
        @keyframes slideUp {
            from {
                transform: translateY(100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .animate-slide-up {
            animation: slideUp 0.4s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        .glass-effect {
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
        }
    </style>
</head>

<body class="bg-background-dark min-h-screen flex items-center justify-center p-4 font-sans text-white">
    <!-- BEGIN: Card Details Overlay -->
    <div class=" inset-0 z-50 flex items-end sm:items-center justify-center bg-black/60 backdrop-blur-sm rounded-t-[2.5rem] sm:rounded-[2.5rem]"
        data-purpose="modal-overlay" id="card-details-modal">
        <!-- BEGIN: Main Container -->
        <div class="animate-slide-up w-full max-w-md bg-slate-900/90 border border-white/10 rounded-t-[2.5rem] sm:rounded-[2.5rem] p-8 shadow-2xl glass-effect relative"
            data-purpose="modal-content">
            <!-- Close Button -->
            <a aria-label="Close modal" id="backBtn"
                class="absolute top-6 left-6 p-2 rounded-full hover:bg-white/10 transition-colors">
                <span class="material-symbols-outlined text-slate-400">arrow_back</span>
            </a>
            <header class="mb-8">
                <h2 class="text-xl text-center font-semibold tracking-tight text-white/90">Card Details</h2>
                <p class="text-slate-400 text-sm mt-1">Manage your virtual card information securely.</p>
            </header>
            <!-- BEGIN: Visual Card Preview -->
            <section class="mb-10" data-purpose="virtual-card-preview">
                <div
                    class="w-full aspect-[1.586/1] rounded-2xl bg-card-gradient border border-white/10 p-6 flex flex-col justify-between shadow-xl relative overflow-hidden">
                    <!-- Decorative element -->
                    {{-- <div class="absolute -right-10 -top-10 w-40 h-40 bg-primary-blue/20 rounded-full blur-[60px]"></div> --}}
                    <div class="flex justify-between items-start">
                        <div class="flex -space-x-2">
                            @if ($card->type === 'Mastercard')
                                <img class="w-3/5"
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0NS4wMyIgaGVpZ2h0PSIzNSIgdmlld0JveD0iMCAwIDI1NiAxOTkiPjxwYXRoIGQ9Ik00Ni41NCAxOTguMDExVjE4NC44NGMwLTUuMDUtMy4wNzQtOC4zNDItOC4zNDMtOC4zNDJjLTIuNjM0IDAtNS40ODguODc4LTcuNDY0IDMuNzMyYy0xLjUzNi0yLjQxNS0zLjczMS0zLjczMi03LjAyNC0zLjczMmMtMi4xOTYgMC00LjM5LjY1OC02LjE0NyAzLjA3M3YtMi42MzRoLTQuNjF2MjEuMDc0aDQuNjF2LTExLjYzNWMwLTMuNzMxIDEuOTc2LTUuNDg4IDUuMDUtNS40ODhjMy4wNzIgMCA0LjYxIDEuOTc2IDQuNjEgNS40ODh2MTEuNjM1aDQuNjF2LTExLjYzNWMwLTMuNzMxIDIuMTk0LTUuNDg4IDUuMDQ4LTUuNDg4YzMuMDc0IDAgNC42MSAxLjk3NiA0LjYxIDUuNDg4djExLjYzNXptNjguMjcxLTIxLjA3NGgtNy40NjN2LTYuMzY2aC00LjYxdjYuMzY2aC00LjE3MXY0LjE3aDQuMTd2OS42NmMwIDQuODMgMS45NzYgNy42ODMgNy4yNDUgNy42ODNjMS45NzYgMCA0LjE3LS42NTggNS43MDgtMS41MzZsLTEuMzE4LTMuOTUyYy0xLjMxNy44NzgtMi44NTMgMS4wOTgtMy45NTEgMS4wOThjLTIuMTk1IDAtMy4wNzMtMS4zMTctMy4wNzMtMy41MTN2LTkuNDRoNy40NjN6bTM5LjA3Ni0uNDRjLTIuNjM0IDAtNC4zOSAxLjMxOC01LjQ4OCAzLjA3NHYtMi42MzRoLTQuNjF2MjEuMDc0aDQuNjF2LTExLjg1NGMwLTMuNTEyIDEuNTM2LTUuNDg4IDQuMzktNS40ODhjLjg3OCAwIDEuOTc2LjIyIDIuODU0LjQzOWwxLjMxNy00LjM5Yy0uODc4LS4yMi0yLjE5NS0uMjItMy4wNzMtLjIybS01OS4wNTIgMi4xOTZjLTIuMTk2LTEuNTM3LTUuMjY5LTIuMTk1LTguNTYyLTIuMTk1Yy01LjI2OCAwLTguNzggMi42MzQtOC43OCA2LjgwNWMwIDMuNTEzIDIuNjM0IDUuNDg4IDcuMjQ0IDYuMTQ3bDIuMTk1LjIyYzIuNDE1LjQzOCAzLjczMiAxLjA5NyAzLjczMiAyLjE5NWMwIDEuNTM2LTEuNzU2IDIuNjM0LTQuODMgMi42MzRzLTUuNDg4LTEuMDk4LTcuMDI1LTIuMTk1bC0yLjE5NSAzLjUxMmMyLjQxNSAxLjc1NiA1LjcwOCAyLjYzNCA5IDIuNjM0YzYuMTQ3IDAgOS42Ni0yLjg1MyA5LjY2LTYuODA1YzAtMy43MzItMi44NTQtNS43MDgtNy4yNDUtNi4zNjZsLTIuMTk1LS4yMmMtMS45NzYtLjIyLTMuNTEyLS42NTgtMy41MTItMS45NzVjMC0xLjUzNyAxLjUzNi0yLjQxNSAzLjk1MS0yLjQxNWMyLjYzNSAwIDUuMjY5IDEuMDk3IDYuNTg2IDEuNzU2em0xMjIuNDk1LTIuMTk1Yy0yLjYzNSAwLTQuMzkxIDEuMzE3LTUuNDg5IDMuMDczdi0yLjYzNGgtNC42MXYyMS4wNzRoNC42MXYtMTEuODU0YzAtMy41MTIgMS41MzctNS40ODggNC4zOS01LjQ4OGMuODc5IDAgMS45NzcuMjIgMi44NTUuNDM5bDEuMzE3LTQuMzljLS44NzgtLjIyLTIuMTk1LS4yMi0zLjA3My0uMjJtLTU4LjgzMyAxMC45NzZjMCA2LjM2NiA0LjM5IDEwLjk3NiAxMS4xOTYgMTAuOTc2YzMuMDczIDAgNS4yNjgtLjY1OCA3LjQ2My0yLjQxNGwtMi4xOTUtMy43MzJjLTEuNzU2IDEuMzE3LTMuNTEyIDEuOTc1LTUuNDg4IDEuOTc1Yy0zLjczMiAwLTYuMzY2LTIuNjM0LTYuMzY2LTYuODA1YzAtMy45NTEgMi42MzQtNi41ODYgNi4zNjYtNi44MDVjMS45NzYgMCAzLjczMi42NTggNS40ODggMS45NzZsMi4xOTUtMy43MzJjLTIuMTk1LTEuNzU3LTQuMzktMi40MTUtNy40NjMtMi40MTVjLTYuODA2IDAtMTEuMTk2IDQuNjEtMTEuMTk2IDEwLjk3Nm00Mi41ODggMHYtMTAuNTM3aC00LjYxdjIuNjM0Yy0xLjUzNy0xLjk3NS0zLjczMi0zLjA3My02LjU4Ni0zLjA3M2MtNS45MjcgMC0xMC41MzcgNC42MS0xMC41MzcgMTAuOTc2czQuNjEgMTAuOTc2IDEwLjUzNyAxMC45NzZjMy4wNzMgMCA1LjI2OS0xLjA5NyA2LjU4Ni0zLjA3M3YyLjYzNGg0LjYxem0tMTYuOTA0IDBjMC0zLjczMiAyLjQxNS02LjgwNSA2LjM2Ni02LjgwNWMzLjczMiAwIDYuMzY3IDIuODU0IDYuMzY3IDYuODA1YzAgMy43MzItMi42MzUgNi44MDUtNi4zNjcgNi44MDVjLTMuOTUxLS4yMi02LjM2Ni0zLjA3My02LjM2Ni02LjgwNW0tNTUuMS0xMC45NzZjLTYuMTQ3IDAtMTAuNTM4IDQuMzktMTAuNTM4IDEwLjk3NnM0LjM5IDEwLjk3NiAxMC43NTcgMTAuOTc2YzMuMDczIDAgNi4xNDctLjg3OCA4LjU2Mi0yLjg1M2wtMi4xOTYtMy4yOTNjLTEuNzU2IDEuMzE3LTMuOTUxIDIuMTk1LTYuMTQ2IDIuMTk1Yy0yLjg1NCAwLTUuNzA4LTEuMzE3LTYuMzY3LTUuMDVoMTUuNTg3di0xLjc1NWMuMjItNi44MDYtMy43MzItMTEuMTk2LTkuNjYtMTEuMTk2bTAgMy45NTFjMi44NTMgMCA0LjgzIDEuNzU3IDUuMjY4IDUuMDVoLTEwLjk3NmMuNDM5LTIuODU0IDIuNDE1LTUuMDUgNS43MDgtNS4wNW0xMTQuMzcyIDcuMDI1di0xOC44NzloLTQuNjF2MTAuOTc2Yy0xLjUzNy0xLjk3NS0zLjczMi0zLjA3My02LjU4Ni0zLjA3M2MtNS45MjcgMC0xMC41MzcgNC42MS0xMC41MzcgMTAuOTc2czQuNjEgMTAuOTc2IDEwLjUzNyAxMC45NzZjMy4wNzQgMCA1LjI2OS0xLjA5NyA2LjU4Ni0zLjA3M3YyLjYzNGg0LjYxem0tMTYuOTAzIDBjMC0zLjczMiAyLjQxNC02LjgwNSA2LjM2Ni02LjgwNWMzLjczMiAwIDYuMzY2IDIuODU0IDYuMzY2IDYuODA1YzAgMy43MzItMi42MzQgNi44MDUtNi4zNjYgNi44MDVjLTMuOTUyLS4yMi02LjM2Ni0zLjA3My02LjM2Ni02LjgwNW0tMTU0LjEwNyAwdi0xMC41MzdoLTQuNjF2Mi42MzRjLTEuNTM3LTEuOTc1LTMuNzMyLTMuMDczLTYuNTg2LTMuMDczYy01LjkyNyAwLTEwLjUzNyA0LjYxLTEwLjUzNyAxMC45NzZzNC42MSAxMC45NzYgMTAuNTM3IDEwLjk3NmMzLjA3NCAwIDUuMjY5LTEuMDk3IDYuNTg2LTMuMDczdjIuNjM0aDQuNjF6bS0xNy4xMjMgMGMwLTMuNzMyIDIuNDE1LTYuODA1IDYuMzY2LTYuODA1YzMuNzMyIDAgNi4zNjcgMi44NTQgNi4zNjcgNi44MDVjMCAzLjczMi0yLjYzNSA2LjgwNS02LjM2NyA2LjgwNWMtMy45NTEtLjIyLTYuMzY2LTMuMDczLTYuMzY2LTYuODA1Ii8+PHBhdGggZmlsbD0iI2ZmNWYwMCIgZD0iTTkzLjI5OCAxNi45MDNoNjkuMTV2MTI0LjI1MWgtNjkuMTV6Ii8+PHBhdGggZmlsbD0iI2ViMDAxYiIgZD0iTTk3LjY4OSA3OS4wMjljMC0yNS4yNDUgMTEuODU0LTQ3LjYzNyAzMC4wNzQtNjIuMTI2QzExNC4zNzMgNi4zNjYgOTcuNDcgMCA3OS4wMyAwQzM1LjM0MyAwIDAgMzUuMzQzIDAgNzkuMDI5czM1LjM0MyA3OS4wMjkgNzkuMDI5IDc5LjAyOWMxOC40NCAwIDM1LjM0My02LjM2NiA0OC43MzQtMTYuOTA0Yy0xOC4yMi0xNC4yNjktMzAuMDc0LTM2Ljg4LTMwLjA3NC02Mi4xMjUiLz48cGF0aCBmaWxsPSIjZjc5ZTFiIiBkPSJNMjU1Ljc0NiA3OS4wMjljMCA0My42ODUtMzUuMzQzIDc5LjAyOS03OS4wMjkgNzkuMDI5Yy0xOC40NCAwLTM1LjM0My02LjM2Ni00OC43MzQtMTYuOTA0YzE4LjQ0LTE0LjQ4OCAzMC4wNzUtMzYuODggMzAuMDc1LTYyLjEyNXMtMTEuODU1LTQ3LjYzNy0zMC4wNzUtNjIuMTI2QzE0MS4zNzMgNi4zNjYgMTU4LjI3NyAwIDE3Ni43MTcgMGM0My42ODYgMCA3OS4wMyAzNS41NjMgNzkuMDMgNzkuMDI5Ii8+PC9zdmc+"
                                    alt="logo" />
                            @elseif($card->type === 'Visa')
                                <img class=""
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1NS41MiIgaGVpZ2h0PSIxOCIgdmlld0JveD0iMCAwIDI1NiA4MyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJTVkdjY0xDY2V2ViIgeDE9IjQ1Ljk3NCUiIHgyPSI1NC44NzclIiB5MT0iLTIuMDA2JSIgeTI9IjEwMCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNmZmYiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmYiLz48L2xpbmVhckdyYWRpZW50PjwvZGVmcz48cGF0aCBmaWxsPSJ1cmwoI1NWR2NjTENjZXZWKSIgZD0iTTEzMi4zOTcgNTYuMjRjLS4xNDYtMTEuNTE2IDEwLjI2My0xNy45NDIgMTguMTA0LTIxLjc2M2M4LjA1Ni0zLjkyIDEwLjc2Mi02LjQzNCAxMC43My05Ljk0Yy0uMDYtNS4zNjUtNi40MjYtNy43MzMtMTIuMzgzLTcuODI1Yy0xMC4zOTMtLjE2MS0xNi40MzYgMi44MDYtMjEuMjQgNS4wNWwtMy43NDQtMTcuNTE5YzQuODItMi4yMjEgMTMuNzQ1LTQuMTU4IDIzLTQuMjQzYzIxLjcyNSAwIDM1LjkzOCAxMC43MjQgMzYuMDE1IDI3LjM1MWMuMDg1IDIxLjEwMi0yOS4xODggMjIuMjctMjguOTg4IDMxLjcwMmMuMDY5IDIuODYgMi43OTggNS45MTIgOC43NzggNi42ODhjMi45Ni4zOTIgMTEuMTMxLjY5MiAyMC4zOTUtMy41NzRsMy42MzYgMTYuOTVjLTQuOTgyIDEuODE0LTExLjM4NSAzLjU1MS0xOS4zNTcgMy41NTFjLTIwLjQ0OCAwLTM0LjgzLTEwLjg3LTM0Ljk0Ni0yNi40MjhtODkuMjQxIDI0Ljk2OGMtMy45NjcgMC03LjMxLTIuMzE0LTguODAyLTUuODY1TDE4MS44MDMgMS4yNDVoMjEuNzA5bDQuMzIgMTEuOTM5aDI2LjUyOGwyLjUwNi0xMS45MzlIMjU2bC0xNi42OTcgNzkuOTYzem0zLjAzNy0yMS42MDFsNi4yNjUtMzAuMDI3aC0xNy4xNTh6bS0xMTguNTk5IDIxLjZMODguOTY0IDEuMjQ2aDIwLjY4N2wxNy4xMDQgNzkuOTYzem0tMzAuNjAzIDBMNTMuOTQxIDI2Ljc4MmwtOC43MSA0Ni4yNzdjLTEuMDIyIDUuMTY2LTUuMDU4IDguMTQ5LTkuNTQgOC4xNDlILjQ5M0wwIDc4Ljg4NmM3LjIyNi0xLjU2OCAxNS40MzYtNC4wOTcgMjAuNDEtNi44MDNjMy4wNDQtMS42NTMgMy45MTItMy4wOTggNC45MTItNy4wMjZMNDEuODE5IDEuMjQ1SDYzLjY4bDMzLjUxNiA3OS45NjN6IiB0cmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAtMSAwIDgyLjY2OCkiLz48L3N2Zz4="
                                    alt="logo" />
                            @elseif($card->type === 'American Express')
                                <img class=""
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzNSIgaGVpZ2h0PSIzNSIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBmaWxsPSIjMTQ5NmRmIiBkPSJNMTYuMDE1IDE0LjM3OGMwLS4zMi0uMTM1LS40OTYtLjM0NC0uNjIyYy0uMjEtLjEyLS40NjQtLjEzNS0uODEtLjEzNWgtMS41NDN2Mi44MmguNjc1di0xLjAyN2guNzJjLjI0IDAgLjM5LjAyNC40NzguMTI1Yy4xMi4xMy4xMDQuMzguMTA0LjU1di4zNWguNjZ2LS41NTVjLS4wMDItLjI1LS4wMTctLjM3Ni0uMTA4LS41MTZhLjc1Ljc1IDAgMCAwLS4zMy0uMjM0bC4wMi0uMDA4YS43OC43OCAwIDAgMCAuNDgtLjc0N3ptLS44Ny40MDdsLS4wMjgtLjAwMmMtLjA5LjA1My0uMTk1LjA1OC0uMzMuMDU4aC0uODF2LS42M2guODI0Yy4xMiAwIC4yNCAwIC4zMy4wNWEuMjcuMjcgMCAwIDEgLjE1LjI1NWMwIC4xMi0uMDQ1LjIxNS0uMTM0LjI3em01LjE1MiAxLjA1MkgxOXYuNmgxLjMwNGMuNjc2IDAgMS4wNS0uMjc4IDEuMDUtLjg4NGMwLS4yOC0uMDY2LS40NDgtLjE4Ny0uNTgyYy0uMTUzLS4xMzMtLjM5Mi0uMTkzLS43My0uMjA3bC0uMzc2LS4wMTVjLS4xMDQgMC0uMTggMC0uMjU1LS4wM2EuMjEuMjEgMCAwIDEtLjE1LS4yMWMwLS4wOS4wMTctLjE2Ni4wOS0uMjFhLjUuNSAwIDAgMSAuMjcyLS4wNmgxLjIzdi0uNjAyaC0xLjM1Yy0uNzA0IDAtLjk1OC40MzctLjk1OC44NGMwIC45Ljc3Ni44NTUgMS40MDcuODdjLjEwNCAwIC4xOC4wMTUuMjI1LjA2Yy4wNDYuMDMuMDgyLjEwNi4wODIuMThjMCAuMDc3LS4wMzUuMTUtLjA4LjE4Yy0uMDYuMDUzLS4xNS4wNy0uMjc3LjA3TTAgMHYxMC4wOTZMLjgxIDguMjJoMS43NWwuMjI1LjQ2NFY4LjIyaDIuMDQzbC40NSAxLjAybC40MzctMS4wMTNoNi41MDJjLjI5NSAwIC41Ni4wNTcuNzU2LjIzNnYtLjIzaDEuNzg3di4yM2MuMzA3LS4xNy42ODYtLjIzIDEuMTItLjIzaDIuNjA2bC4yNC40NjZ2LS40NjZoMS45MThsLjI1NC40NjV2LS40NjZoMS44NTh2My45NDhIMjAuODdsLS4zNi0uNnYuNTg1aC0yLjM1M2wtLjI1Ni0uNjNoLS41ODNsLS4yNy42MTRoLTEuMjEzYy0uNDggMC0uODQtLjEwNC0xLjA4LS4yNHYuMjRoLTIuODl2LS44ODRjMC0uMTItLjAzLS4xMi0uMTA1LS4xMzVoLS4xMDV2MS4wMzZINi4wNjd2LS40OGwtLjIxLjQ4SDQuNjlsLS4yMDItLjQ4di40NjVIMi4yMzVsLS4yNTYtLjYyNEgxLjRsLS4yNTYuNjI0SDBWMjRoMjMuNzg2di03LjEwOGMtLjI3LjEzNS0uNjEzLjE4LS45NzMuMThIMjEuMDl2LS4yNTVjLS4yMS4xNjUtLjU3LjI1NS0uOTE0LjI1NUgxNC43MXYtLjljMC0uMTItLjAxOC0uMTItLjEyLS4xMmgtLjA3NXYxLjAyMmgtMS44di0xLjA2NmMtLjI5OC4xMzYtLjY0My4xNS0uOTI4LjEzNmgtLjIxNHYuOTE1aC0yLjE4bC0uNTQtLjYxN2wtLjU3LjZINC43NDJ2LTMuOTNoMy42MWwuNTE4LjYwMmwuNTU0LS42aDIuNDEyYy4yOCAwIC43NC4wMy45NDIuMjI1di0uMjRoMi4xNzdjLjIwMiAwIC42NDQuMDQ1LjkwMy4yMjV2LS4yNGgzLjI2NXYuMjRjLjE2My0uMTY0LjUwOC0uMjQuODAzLS4yNGgxLjg5di4yNGMuMTk0LS4xNS40NjQtLjI0Ljg0LS4yNGgxLjE3NlYwem0yMS4xNTYgMTQuOTU1bC4wMS4wMTZjLjAxLjAxLjAyNC4wMS4wMzIuMDJ6bTIuNjcyLTEuODczaC4wNjV2LjU1NWgtLjA2NXptLjAzNyAxLjk0OHYtLjAwNWMtLjAzLS4wMjUtLjA0Ni0uMDQ4LS4wNzUtLjA3Yy0uMTUtLjE1My0uMzktLjIxNS0uNzY0LS4yMjVsLS4zNi0uMDEyYS45LjkgMCAwIDEtLjI3LS4wM2EuMjEuMjEgMCAwIDEtLjE1LS4yMXEwLS4xMzYuMDktLjIwNGMuMDc2LS4wNDUuMTUtLjA1LjI3LS4wNWgxLjIyM3YtLjU4OGgtMS4yODNjLS42OSAwLS45Ni40MzctLjk2Ljg0YzAgLjkuNzguODU1IDEuNDEuODdjLjEwNCAwIC4xOC4wMTUuMjI0LjA2Yy4wNDYuMDMuMDc2LjEwNi4wNzYuMThjMCAuMDctLjAzNC4xMzgtLjA5LjE4Yy0uMDQ1LjA1Ni0uMTM2LjA3LS4yNy4wN2gtMS4yODh2LjYwNWgxLjI4N2MuNDIgMCAuNzM0LS4xMTguOS0uMzZoLjAzYy4wOS0uMTM0LjEzNS0uMy4xMzUtLjUyM2MwLS4yNC0uMDQ1LS4zOS0uMTM1LS41MjZ6bS01LjI2OC0uODIydi0uNTgzaC0yLjIzNXYyLjgzM2gyLjIzNXYtLjU4NWgtMS41N3YtLjU3aDEuNTMzdi0uNTg0aC0xLjUzMnYtLjUxTTEzLjUxIDguNzg3aC42ODVWMTEuNmgtLjY4NHptLS4zODQuNzU2bC0uMDA3LjAwNmMwLS4zMTQtLjEzLS41LS4zNC0uNjI0Yy0uMjE3LS4xMjUtLjQ3LS4xMzUtLjgxLS4xMzVIMTAuNDN2Mi44MmguNjc0di0xLjAzNGguNzJjLjI0IDAgLjM5LjAzLjQ4Ny4xMmMuMTIyLjEzNi4xMDcuMzc4LjEwNy41NDh2LjM1NGguNjc3di0uNTUzYzAtLjI1LS4wMTYtLjM3NS0uMTEtLjUxNmEuOC44IDAgMCAwLS4zMy0uMjM3Yy4xNzItLjA3LjQ3Mi0uMy40NzItLjc1em0tLjg1NS4zOTZoLS4wMTVjLS4wOS4wNTQtLjE5NS4wNTYtLjMzLjA1NkgxMS4xdi0uNjIzaC44MjVjLjEyIDAgLjI0LjAwNC4zMy4wNWMuMDkuMDQuMTUuMTI4LjE1LjI1cy0uMDQ3LjIyLS4xMzQuMjY2em0zLjY0OS0uNTY2aC42MzJ2LS42aC0uNjQ0Yy0uNDY0IDAtLjgwNC4xMDUtMS4wMi4zM2MtLjI4Ni4zLS4zNjIuNjktLjM2MiAxLjExYzAgLjUxMi4xMjMuODMzLjM2IDEuMDc0Yy4yMzIuMjM4LjY0NS4zMS45Ny4zMWguNzhsLjI1NS0uNjI3aDEuMzlsLjI2Mi42MjdoMS4zNnYtMi4xMWwxLjI3MiAyLjExaC45NWwuMDAyLjAwMlY4Ljc4NmgtLjY4NHYxLjk2M2wtMS4xOC0xLjk2aC0xLjAyVjExLjRMMTguMTEgOC43NDRoLTEuMDA0bC0uOTQzIDIuMjJoLS4zYy0uMTc3IDAtLjM2Mi0uMDMtLjQ2OC0uMTM0Yy0uMTI1LS4xNS0uMTg2LS4zNi0uMTg2LS42NjJjMC0uMjg1LjA4LS41MS4xOTQtLjYzYy4xMzMtLjEzNS4yNzItLjE2NS41MTYtLjE2NXptMS42NjgtLjEwOGwuNDY0IDEuMTE4di4wMDJoLS45M3pNMi4zOCAxMC45N2wuMjU0LjYyOEg0VjkuMzkzbC45NzIgMi4yMDVoLjU4NGwuOTczLTIuMjAybC4wMTUgMi4yMDJoLjY5di0yLjgxSDYuMTE4bC0uODA3IDEuOTA0bC0uODc2LTEuOTA1SDMuMzQzdjIuNjYzTDIuMjA1IDguNzg3aC0uOTk3TC4wMSAxMS41OTdoLjcybC4yNi0uNjI2em0tLjY4OC0xLjcwNWwuNDYgMS4xMThsLS4wMDMuMDAyaC0uOTE1bC40NTctMS4xMnptMTAuMTY0IDQuMzU1SDkuNzE0bC0uODUuOTIzbC0uODI1LS45MjJINS4zNDZ2Mi44Mkg4bC44NTUtLjkzMmwuODI0LjkzaDEuMzAydi0uOTRoLjgzOGMuNiAwIDEuMTctLjE2NCAxLjE3LS45NDVsLS4wMDYtLjAwM2MwLS43OC0uNTk4LS45My0xLjEyOC0uOTN6TTcuNjcgMTUuODUzbC0uMDE0LS4wMDJINi4wMnYtLjU1N2gxLjQ3di0uNTc0SDYuMDJ2LS41MUg3LjdsLjczMy44MmwtLjc2NC44MjR6bTIuNjQyLjMzbC0xLjAzLTEuMTQ3bDEuMDMtMS4xMDh2Mi4yNTN6bTEuNTUzLTEuMjU4aC0uODg1di0uNzE3aC44ODVjLjI0IDAgLjQyLjA5OC40Mi4zNDRjMCAuMjQzLS4xNS4zNzItLjQyLjM3MnpNOS45NjcgOS4zNzN2LS41ODZINy43M1YxMS42aDIuMjM3di0uNThIOC40di0uNTY0aDEuNTI3VjkuODhIOC40di0uNTA3Ii8+PC9zdmc+"
                                    alt="logo" />
                            @else
                                <img class=""
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI3Ny40IiBoZWlnaHQ9IjEzIiB2aWV3Qm94PSIwIDAgNTEyIDg2Ij48ZGVmcz48bGluZWFyR3JhZGllbnQgaWQ9IlNWRzdURHNHZDNsIiB4MT0iMTkuNDE0JSIgeDI9Ijg4LjYwMSUiIHkxPSI5LjA2MyUiIHkyPSI4MC40OTklIj48c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjZjM0ZjI2Ii8+PHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjZjY5ZTM1Ii8+PC9saW5lYXJHcmFkaWVudD48ZmlsdGVyIGlkPSJTVkdoR2xxVGM0TyIgd2lkdGg9IjIwMCUiIGhlaWdodD0iMjAwJSIgeD0iLTUwJSIgeT0iLTUwJSIgZmlsdGVyVW5pdHM9Im9iamVjdEJvdW5kaW5nQm94Ij48ZmVNb3JwaG9sb2d5IGluPSJTb3VyY2VBbHBoYSIgcmFkaXVzPSIxIiByZXN1bHQ9InNoYWRvd1NwcmVhZElubmVyMSIvPjxmZUdhdXNzaWFuQmx1ciBpbj0ic2hhZG93U3ByZWFkSW5uZXIxIiByZXN1bHQ9InNoYWRvd0JsdXJJbm5lcjEiIHN0ZERldmlhdGlvbj0iNCIvPjxmZU9mZnNldCBkeD0iMyIgZHk9IjMiIGluPSJzaGFkb3dCbHVySW5uZXIxIiByZXN1bHQ9InNoYWRvd09mZnNldElubmVyMSIvPjxmZUNvbXBvc2l0ZSBpbj0ic2hhZG93T2Zmc2V0SW5uZXIxIiBpbjI9IlNvdXJjZUFscGhhIiBrMj0iLTEiIGszPSIxIiBvcGVyYXRvcj0iYXJpdGhtZXRpYyIgcmVzdWx0PSJzaGFkb3dJbm5lcklubmVyMSIvPjxmZUNvbG9yTWF0cml4IGluPSJzaGFkb3dJbm5lcklubmVyMSIgdmFsdWVzPSIwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwLjUgMCIvPjwvZmlsdGVyPjxwYXRoIGlkPSJTVkdzRkg1bWJHcSIgZD0iTTI3MC4zNTYuMzY1Yy0yMy45ODIgMC00My40NCAxOC43MzUtNDMuNDQgNDEuODU3YzAgMjQuNTg0IDE4LjYxMyA0Mi45NiA0My40NCA0Mi45NmMyNC4yMDggMCA0My4zMjItMTguNjIgNDMuMzIyLTQyLjQ3N2MwLTIzLjcxNi0xOC45ODYtNDIuMzQtNDMuMzIyLTQyLjM0Ii8+PC9kZWZzPjx1c2UgZmlsbD0idXJsKCNTVkc3VERzR2QzbCkiIGZpbGwtcnVsZT0iZXZlbm9kZCIgaHJlZj0iI1NWR3NGSDVtYkdxIi8+PHVzZSBmaWx0ZXI9InVybCgjU1ZHaEdscVRjNE8pIiBocmVmPSIjU1ZHc0ZINW1iR3EiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMjMuNzQ2IDEuODkxSC4zOTN2ODEuNDU0aDIzLjIzMWMxMi4zMjYgMCAyMS4yNC0yLjkyIDI5LjA2LTkuMzk4YzkuMjc4LTcuNjk1IDE0Ljc4LTE5LjI5OCAxNC43OC0zMS4yOWMwLTI0LjA0OC0xNy45NjUtNDAuNzY2LTQzLjcxOC00MC43NjZtMTguNTcyIDYxLjE3N2MtNS4wMjEgNC41My0xMS40ODYgNi40ODgtMjEuNzYgNi40ODhIMTYuMjlWMTUuNjg0aDQuMjY4YzEwLjI3NCAwIDE2LjQ5MSAxLjgzNCAyMS43NiA2LjU5MmM1LjQ5NSA0Ljg4NiA4Ljc3MiAxMi40NTIgOC43NzIgMjAuMjY1YzAgNy44My0zLjI3NyAxNS42Ni04Ljc3MiAyMC41MjdtMzIuNDggMjAuMjc3SDkwLjY3VjEuODkxSDc0Ljh6bTU0LjcyOC01MC4yMDljLTkuNTM5LTMuNTM0LTEyLjM0Ni01Ljg2NS0xMi4zNDYtMTAuMjQ2YzAtNS4xMzQgNC45OTgtOS4wMzkgMTEuODQ5LTkuMDM5YzQuNzYzIDAgOC42NzEgMS45NTMgMTIuODM2IDYuNThsOC4yOTUtMTAuODUzQzE0My4zMiAzLjU4MSAxMzUuMTM5LjUzMiAxMjYuMjE0LjUzMmMtMTQuMzk4IDAtMjUuMzk5IDEwLjAyLTI1LjM5OSAyMy4zMmMwIDExLjI0NiA1LjEyNiAxNi45ODEgMjAuMDMyIDIyLjM2OWM2LjIzMiAyLjE4NyA5LjQgMy42NDYgMTAuOTkyIDQuNjQzYzMuMTc1IDIuMDc3IDQuNzcgNC45OTggNC43NyA4LjQxNWMwIDYuNjA2LTUuMjU3IDExLjQ4NC0xMi4zNTEgMTEuNDg0Yy03LjU3NCAwLTEzLjY3NC0zLjc4Mi0xNy4zNC0xMC44NjVMOTYuNjcgNjkuODAyYzcuMzE0IDEwLjczMyAxNi4xMSAxNS41MTIgMjguMjE0IDE1LjUxMmMxNi40ODggMCAyOC4wODQtMTEuMDA3IDI4LjA4NC0yNi43NThjMC0xMi45NDktNS4zNi0xOC44MTYtMjMuNDQyLTI1LjQybTI4LjQ0OCA5LjUyMmMwIDIzLjk2NSAxOC44MTYgNDIuNTI1IDQzLjAwNiA0Mi41MjVjNi44MzkgMCAxMi43MDEtMS4zNTIgMTkuOTE1LTQuNzU5VjYxLjcyN2MtNi4zNiA2LjM1OC0xMS45OCA4LjkxNi0xOS4xOSA4LjkxNmMtMTUuOTk2IDAtMjcuMzYzLTExLjYwNi0yNy4zNjMtMjguMTAyYzAtMTUuNjI2IDExLjcyMi0yNy45NjQgMjYuNjM4LTI3Ljk2NGM3LjU2MSAwIDEzLjMxMSAyLjY4NSAxOS45MTUgOS4xNThWNS4wNEMyMTMuOTMzIDEuNTEgMjA4LjE4My4wNTQgMjAxLjM0My4wNTRjLTI0LjA2NyAwLTQzLjM2OSAxOC45MzUtNDMuMzY5IDQyLjYwNG0xOTEuNjUyIDEzLjk0OEwzMjcuODgzIDEuODkxaC0xNy4zNDZsMzQuNTggODMuNTM1aDguNTQzTDM4OC44NDMgMS44OWgtMTcuMjE3em00Ni40NCAyNi43NGg0NS4wNjV2LTEzLjc5aC0yOS4xODlWNDcuNTU1aDI4LjA3MlYzMy43NjNoLTI4LjA3MnYtMTguMDhoMjkuMTg5VjEuODkyaC00NS4wNjZ6TTUwNC4wMiAyNS45M2MwLTE1LjI1OS0xMC40OS0yNC4wMzktMjguODIzLTI0LjAzOUg0NTEuNjJ2ODEuNDU0aDE1Ljg5NVY1MC42MDhoMi4wOGwyMS45NzUgMzIuNzM3aDE5LjU0NGwtMjUuNjY3LTM0LjMxYzExLjk4OC0yLjQ1MiAxOC41NzMtMTAuNjM5IDE4LjU3My0yMy4xMDVtLTMxLjg4MiAxMy40NTJoLTQuNjIzVjE0LjdoNC44NzdjOS45MTUgMCAxNS4yODcgNC4xNjUgMTUuMjg3IDEyLjA5MmMwIDguMTc3LTUuMzcyIDEyLjU5LTE1LjU0MSAxMi41OSIvPjwvc3ZnPg=="
                                    alt="logo" />
                            @endif
                        </div>
                        <div class="text-primary-blue font-bold italic text-xl">GREENWOOD</div>
                    </div>
                    <div class="space-y-4">
                        <div class="text-xl tracking-[0.2em] font-mono text-white/90" id="visual-card-number">
                            {{ '•••• •••• •••• ' . substr($card->card_number, -4) }}
                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-[10px] uppercase tracking-widest text-slate-400">Card Holder</p>
                                <p class="text-sm font-medium tracking-wide uppercase">{{ $card->card_name }}</p>
                            </div>
                            <div>
                                <p class="text-[10px] uppercase tracking-widest text-slate-400">Expiry</p>
                                <p class="text-sm font-medium">
                                    {{ Carbon\Carbon::parse($card->expiry_date)->format('m/y') }}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- END: Visual Card Preview -->
            <!-- BEGIN: Actionable Details -->
            <div class="space-y-6" data-purpose="detail-fields">
                <!-- Card Number Field -->
                <div class="space-y-2">
                    <label class="text-xs font-medium text-slate-400 uppercase tracking-widest ml-1">Card Number</label>
                    <div
                        class="flex items-center justify-between bg-white/5 border border-white/10 rounded-xl px-4 py-3.5 group hover:border-primary-blue/50 transition-colors">
                        <span class="font-mono text-lg tracking-wider text-white"
                            id="full-card-number">{{ $card->card_number }}</span>
                        <button class="flex items-center text-primary-blue hover:text-blue-400 transition-colors p-1"
                            onclick="copyToClipboard('4532881299018824')" title="Copy Number">
                            <span class="material-symbols-outlined text-xl">content_copy</span>
                        </button>
                    </div>
                </div>
                <!-- Expiry & CVV Row -->
                <div class="grid grid-cols-2 gap-4">
                    <!-- Expiry -->
                    <div class="space-y-2">
                        <label class="text-xs font-medium text-slate-400 uppercase tracking-widest ml-1">Expiry
                            Date</label>
                        <div class="bg-white/5 border border-white/10 rounded-xl px-4 py-3.5">
                            <span
                                class="font-mono text-lg text-white">{{ Carbon\Carbon::parse($card->expiry_date)->format('m/y') }}</span>
                        </div>
                    </div>
                    <!-- CVV -->
                    <div class="space-y-2">
                        <label class="text-xs font-medium text-slate-400 uppercase tracking-widest ml-1">CVV</label>
                        <div
                            class="flex items-center justify-between bg-white/5 border border-white/10 rounded-xl px-4 py-3.5 group">
                            <span class="font-mono text-lg text-white tracking-widest" id="cvv-value">***</span>
                            <span class="hidden font-mono text-lg text-white tracking-widest"
                                id="cvv-value2">{{ $card->card_cvv }}</span>
                            <button class="flex items-center text-slate-400 hover:text-white transition-colors p-1"
                                id="cvv-toggle" onclick="toggleCVV()">
                                <span class="material-symbols-outlined text-xl">visibility</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Cardholder Name -->
                <div class="space-y-2">
                    <label class="text-xs font-medium text-slate-400 uppercase tracking-widest ml-1">Cardholder
                        Name</label>
                    <div class="bg-white/5 border border-white/10 rounded-xl px-4 py-3.5">
                        <span class="text-white font-medium">Alexander R. Hamilton</span>
                    </div>
                </div>
                <!-- Cardholder Address -->
                <div class="space-y-2">
                    <label class="text-xs font-medium text-slate-400 uppercase tracking-widest ml-1">Billing Address
                    </label>
                    <div class="bg-white/5 border border-white/10 rounded-xl px-4 py-3.5">
                        <span class="text-white font-medium">654 N Huawei</span>
                    </div>
                </div>
                <!-- Cardholder Zip Code -->
                <div class="space-y-2">
                    <label class="text-xs font-medium text-slate-400 uppercase tracking-widest ml-1">Zip Code
                    </label>
                    <div class="bg-white/5 border border-white/10 rounded-xl px-4 py-3.5">
                        <span class="text-white font-medium">{{ $user->postal_code }}</span>
                    </div>
                </div>
            </div>
            <!-- END: Actionable Details -->
            <!-- BEGIN: Footer Actions -->
            {{-- <footer class="mt-10 flex flex-col gap-3">
<button class="w-full bg-primary-blue hover:bg-blue-600 text-white font-semibold py-4 rounded-2xl transition-all shadow-lg shadow-blue-500/20 active:scale-[0.98]" data-purpose="primary-action">
          Freeze Card
        </button>
<button class="w-full bg-white/5 hover:bg-white/10 text-slate-300 font-medium py-4 rounded-2xl transition-all border border-white/5" data-purpose="secondary-action">
          Report Issue
        </button>
</footer> --}}
            <!-- END: Footer Actions -->
        </div>
        <!-- END: Main Container -->
    </div>
    <!-- END: Card Details Overlay -->
    <script data-purpose="interactive-logic">
        let cvvVisible = false;


        function toggleCVV() {
            const maskedCVV = document.getElementById('cvv-value'); // the *** one
            const realCVV = document.getElementById('cvv-value2'); // the real CVV
            const icon = document.querySelector('#cvv-toggle .material-symbols-outlined');

            if (!maskedCVV || !realCVV || !icon) return;

            cvvVisible = !cvvVisible;

            if (cvvVisible) {
                // Show real CVV, hide masked
                maskedCVV.classList.add('hidden');
                realCVV.classList.remove('hidden');
                icon.textContent = 'visibility_off';
            } else {
                // Show masked ***, hide real
                maskedCVV.classList.remove('hidden');
                realCVV.classList.add('hidden');
                icon.textContent = 'visibility';
            }
        }

        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(() => {
                // Simple visual feedback could be added here
                const btn = document.querySelector('[onclick*="copyToClipboard"] span');
                const originalText = btn.textContent;
                btn.textContent = 'check';
                btn.classList.add('text-green-400');

                setTimeout(() => {
                    btn.textContent = originalText;
                    btn.classList.remove('text-green-400');
                }, 2000);
            });
        }

        const backBtn = document.getElementById('backBtn');
        if (backBtn) {
            backBtn.addEventListener('click', () => {
                window.history.back();
            });
        }
    </script>
</body>

</html>
