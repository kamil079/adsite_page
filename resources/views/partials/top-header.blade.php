<div class='w-full relative z-20'>
    <div class='relative container px-6 flex flex-col gap-4 justify-between py-4 text-customBlack tablet:flex-row text-[15px] tablet:px-[50px] tablet:items-center'>
        <div class='hidden hd:block bg-[url("/public/images/hero/line.webp")] bg-cover bg-no-repeat absolute left-[45%] top-0 z-10 w-[600px] h-[600px] '></div>
        <div class='hidden hd:block bg-[url("/public/images/hero/line-2.webp")] bg-cover bg-no-repeat absolute left-[45%] top-0 z-10 w-[800px] h-[600px] '></div>
        <img loading='lazy' src="/images/logo/logo.webp" alt="" class='max-w-[155px] h-[30px]'>
        <div class='hidden tablet:flex items-center gap-6 font-normal roboto-flex '>
            <p class='cursor-pointer'>Galeria zdjęć</p>
            <p class='cursor-pointer'>FaQ</p>
        </div>
        <x-btn message='Zadzwoń do nas' class="relative z-20"/>
        <div burger class='space-y-1 flex flex-col absolute right-6 top-6 cursor-pointer tablet:hidden'>
            <span class='w-10 h-1 bg-blue rounded-md'></span>
            <span class='w-6 h-1 bg-blue rounded-md'></span>
            <span class='w-8 h-1 bg-blue rounded-md'></span>
        </div>
    </div>
</div>