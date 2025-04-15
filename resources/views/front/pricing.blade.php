@extends('layouts.app')
@section('title') Biaya Berlangganan @endsection
@section('content')
<x-nav/>
<main id="content" class="relative flex w-full max-w-[1312px] min-h-[970px] h-fit mx-auto mt-[120px] rounded-[32px] bg-[#606DE5] overflow-hidden">
    <img src="assets/images/backgrounds/Illustration BG.svg" class="absolute w-full h-full object-cover" alt="background">
    <div class="relative flex flex-col w-full items-center">
        <div class="flex flex-col gap-4 text-center mx-auto mt-12">
            <h2 class="font-['ClashDisplay-SemiBold'] text-5xl leading-[59px] tracking-05">Subscribe Package</h2>
            <p class="leading-19 tracking-03 opacity-60">Find the perfect plan, explore our subscription packages. Discover the Best Package for You!</p>
        </div>
        <div class="flex gap-8 max-w-[1132px] mx-auto mt-20 mb-[124px]">
            @forelse ($subscribePackage as $itemSubscribe )
            <div class="card flex flex-col w-[356px] rounded-3xl p-8 gap-6 bg-white">
                <div class="flex w-full h-[200px] rounded-3xl overflow-hidden bg-[#606DE5]">
                    <img src="{{ Storage::url($itemSubscribe->icon) }}" class="w-full h-full object-cover" alt="icon">
                </div>
                <div class="flex flex-col gap-2">
                    <p class="font-['ClashDisplay-SemiBold'] leading-19 tracking-05">
                        {{ $itemSubscribe->name }}
                    </p>
                    <p class="text-sm leading-16 tracking-05 opacity-50">Enjoy all subscribe package benefits</p>
                </div>
                @foreach ($itemSubscribe->subscribeBenefits as $itemBenefit )
                <div class="flex items-center gap-4">
                    <img src="assets/images/icons/tick-circle.svg" class="w-8 h-8 flex shrink-0" alt="icon">
                    <p class="leading-19 tracking-05">
                        {{ $itemBenefit->name }}
                    </p>
                </div>
                @endforeach
               
                <div class="flex items-center justify-between mt-auto">
                    <a href="{{ route('front.booking', $itemSubscribe->id) }}" class="w-fit rounded-full py-3 px-6 bg-[#606DE5] font-semibold leading-19 tracking-05 text-white text-center">Subscribe</a>
                    <p class="text-right font-semibold leading-19 tracking-05">
                        Rp  {{ number_format($itemSubscribe->price, 0, '.', ',' ) }}<span class="font-normal opacity-50">/<br>{{ $itemSubscribe->duration }} Days</span>
                    </p>
                </div>
            </div>
            @empty
                
            @endforelse
            
        </div>
    </div>
</main>

<footer class="flex flex-col w-full max-w-[1312px] mx-auto rounded-[32px] bg-black p-[120px] mt-[120px] mb-16">
    <div class="flex justify-between">
        <div class="flex flex-col gap-6 max-w-[306px] text-start">
            <img src="assets/images/logos/Logo-2.svg" class="h-12 w-fit" alt="icon">
            <p class="tracking-03 text-white">Largest gym in Indonesia, top-tier facilities, premium amenities, and nationwide access to all gym location</p>
        </div>
        <nav class="flex gap-16 justify-end text-white">
            <ul class="flex flex-col gap-4">
                <p class="font-semibold tracking-03">More to Know</p>
                <li>
                    <a href="#" class="tracking-03">Blog</a>
                </li>
                <li>
                    <a href="#" class="tracking-03">Subscription</a>
                </li>
                <li>
                    <a href="#" class="tracking-03">Testimonial</a>
                </li>
                <li>
                    <a href="#" class="tracking-03">About</a>
                </li>
            </ul>
            <ul class="flex flex-col gap-4">
                <p class="font-semibold tracking-03">Contact Us</p>
                <li>
                    <a href="#" class="tracking-03">021 543 545 676</a>
                </li>
                <li>
                    <a href="#" class="tracking-03">@fitcamp.bodyfit</a>
                </li>
                <li>
                    <a href="#" class="tracking-03">admin@fitcamp.com</a>
                </li>
            </ul>
        </nav>
    </div>
    <hr class="border-white/50 mt-16">
    <div class="flex items-center justify-between mt-[30px]">
        <p class="font-semibold tracking-03 text-white">© 2024 fitcampcorporation</p>
        <ul class="flex items-center justify-end gap-6 text-white">
            <li>
                <a href="#" class="tracking-03">Term of Services</a>
            </li>
            <li>
                <a href="#" class="tracking-03">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="tracking-03">Cookies</a>
            </li>
            <li>
                <a href="#" class="tracking-03">Legal</a>
            </li>
        </ul>
    </div>
</footer>
@endsection