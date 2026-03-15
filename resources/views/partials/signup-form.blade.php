<div class="flex-auto p-6">
    <form role="form text-left" method="POST" action="/users/signup">
        <div class="mb-4">
            <input type="text" name="firstname" required
                class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                placeholder="Firstame" aria-label="Name" aria-describedby="email-addon" />
        </div>
        <div class="mb-4">
            <input type="text" name="lastname" required
                class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                placeholder="Lastname" aria-label="Name" aria-describedby="email-addon" />
        </div>
        <div class="mb-4">
            <input type="password" name="password" required
                class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                placeholder="Password" aria-label="Password" aria-describedby="password-addon" />
        </div>
        <div class="mb-4">
            <input type="email" required name="email"
                class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                placeholder="Email" aria-label="Email" aria-describedby="email-addon" />
        </div>
        <div class="mb-4">
            <input type="number" name="balance" required
                class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                placeholder="balance" aria-label="Email" aria-describedby="email-addon" />
        </div>
        <div class="mb-4">
            <input type="number" name="pin"
                class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                placeholder="pin" aria-label="Email" aria-describedby="email-addon" />
        </div>
        <div class="min-h-6 pl-7 mb-0.5 block">
            <input
                class="w-4.8 h-4.8 ease -ml-7 rounded-1.4 checked:bg-gradient-to-tl checked:from-blue-500 checked:to-violet-500 after:text-xxs after:font-awesome after:duration-250 after:ease-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-slate-200 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-['\f00c'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100"
                type="checkbox" value="" checked />
            <label class="mb-2 ml-1 font-normal cursor-pointer text-sm text-slate-700" for="flexCheckDefault"> I agree
                the <a href="javascript:;" class="font-bold text-slate-700">Terms and Conditions</a> </label>
        </div>
        <div class="text-center">
            <button type="submit"
                class="inline-block w-full px-5 py-2.5 mt-6 mb-2 font-bold text-center text-white align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:-translate-y-px hover:shadow-xs leading-normal text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-zinc-800 to-zinc-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Sign
                up</button>
        </div>
        <p class="mt-4 mb-0 leading-normal text-sm">Already have an account? <a href="/pages/sign-in.html"
                class="font-bold text-slate-700">Sign in</a></p>
    </form>
</div>