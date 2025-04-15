@extends('layouts.app')
@section('title') Payment complete @endsection
@section('content')
<div id="background" class="absolute w-full h-[345px] top-0 z-0 bg-[#9FDDFF]"></div>
    <x-nav/>
    <div class="relative flex flex-col items-center w-full max-w-[642px] text-center rounded-3xl p-8 py-[85px] gap-6 bg-white mx-auto mt-[120px]">
        <img src="{{asset('assets/images/icons/Success.svg')}}" class="w-[390px] flex shrink-0" alt="icon">
        <div class="flex flex-col items-center gap-4">
            <h1 class="font-['ClashDisplay-SemiBold'] text-[32px] leading-10 tracking-05">Booking Completed</h1>
            <p class="text-xl leading-8 tracking-[1px] opacity-60">
                We will confirm your payment and update <br>
                the status to your email adress
            </p>
        </div>
        <div class="w-fit flex items-center rounded-2xl py-4 px-8 gap-4 bg-[#D0EEFF]">
            <img src="{{asset('assets/images/icons/cart.svg')}}" class="w-10 h-10 flex shrink-0" alt="icon">
            <p class="font-['ClashDisplay-SemiBold'] text-xl leading-[34px] tracking-05">Your Booking ID:<span class="ml-2 text-[#835DFE]">
                {{ $subscribeTransaction->booking_trx_id }}    
            </span></p>
        </div>
        <a href="{{ route('front.check_booking') }}" class="w-fit rounded-full py-3 px-6 bg-[#606DE5] font-semibold leading-19 tracking-05 text-white text-center">View My Subscription</a>
    </div>

    <footer class="flex flex-col w-full max-w-[1312px] mx-auto rounded-[32px] bg-black p-[120px] mt-[120px] mb-16">
        <div class="flex justify-between">
            <div class="flex flex-col gap-6 max-w-[306px] text-start">
                <img src="{{asset('assets/images/logos/Logo-2.svg')}}" class="h-12 w-fit" alt="icon">
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