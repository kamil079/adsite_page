<div class='w-full relative z-20 '>
    <div class='container px-6 text-customBlack flex flex-col pt-10 h-[70vh] bg-[url("/public/images/hero/hero.webp")] bg-contain bg-no-repeat bg-right-bottom tablet:px-[50px] tablet:pt-[120px] tablet:h-[825px]'>
        <div>
            @yield('title')
        </div>
        <div class='pt-8 pb-[42px]'>
            @yield('content')
        </div>
        <div class='flex flex-col gap-4 mobile:flex-row'>
            <x-btn message='Zobacz zdjęcia'/>
            <x-btn message='Zadzwoń do nas' class='bg-white !text-blue border-[1px] border-blue hover:border-black hover:!text-white'/>
        </div>
    </div>
</div>
