@extends('layouts.app')
@section('title') Check Subscription fitcamp @endsection
@section('content')
<div id="background" class="absolute w-full h-[345px] top-0 z-0 bg-[#9FDDFF]"></div>
<x-nav/> 
    <div class="relative flex justify-center w-full max-w-[1280px] gap-6 mx-auto px-10 mt-[96px]">
        <div class="flex flex-col w-full max-w-[665px] shrink-0 rounded-3xl px-[57.5px] py-[46px] gap-6 bg-white">
            <img src="{{asset('assets/images/icons/ticket-lifting.svg')}}" class="w-[350px] mx-auto" alt="icon">
            <h1 class="font-['ClashDisplay-SemiBold'] text-[32px] leading-10 tracking-05 text-center">Transaction Ticket</h1>
            <div class="flex items-center justify-between">
                <p class="font-['ClashDisplay-SemiBold'] leading-19 tracking-05">Booking ID</p>
                <p class="leading-19 tracking-05">{{ $bookingDetails->booking_trx_id }}</p>
            </div>
            <div class="flex items-center justify-between">
                <p class="font-['ClashDisplay-SemiBold'] leading-19 tracking-05">Started At</p>
                <p class="leading-19 tracking-05">{{ $bookingDetails->started_at->format('M d, Y') }}</p>
            </div>
            <div class="flex items-center justify-between">
                <p class="font-['ClashDisplay-SemiBold'] leading-19 tracking-05">Ended At</p>
                <p class="leading-19 tracking-05">{{ $bookingDetails->ended_at->format('M d, Y') }}</p>
            </div>
            <div class="flex items-center justify-between">
                <p class="font-['ClashDisplay-SemiBold'] leading-19 tracking-05">Total Payment</p>
                <p class="leading-19 tracking-05 font-bold">Rp  {{ number_format($bookingDetails->total_amount, 0, '.', ',' ) }}</p>
            </div>
            <div class="flex items-center justify-between">
                <p class="font-['ClashDisplay-SemiBold'] leading-19 tracking-05">Payment Status</p>

                @if ($bookingDetails->is_paid)
                    
                <p class="rounded-full py-3 px-6 bg-[#E56062] w-fit font-semibold leading-19 tracking-05 text-white">Success</p>
                @else
                
                <p class="rounded-full py-3 px-6 bg-[#E56062] w-fit font-semibold leading-19 tracking-05 text-white">Pending</p>
                @endif
            </div>
        </div>
        <div class="flex flex-col w-full max-w-[356px] h-fit rounded-3xl p-8 gap-6 bg-white">
            <div class="flex w-full h-[200px] rounded-3xl overflow-hidden bg-[#606DE5]">
                <img src="{{ Storage::url($bookingDetails->subscribePackage->icon) }}" class="w-full h-full object-cover" alt="icon">
            </div>
            <div class="flex flex-col gap-2">
                <p class="font-['ClashDisplay-SemiBold'] leading-19 tracking-05">
                    {{ $bookingDetails->subscribePackage->name }}
                </p>
                <p class="text-sm leading-16 tracking-05 opacity-50">Starter membership, start your journey</p>
            </div>
            <p class="font-semibold leading-19 tracking-05">
                Rp  {{ number_format($bookingDetails->subscribePackage->price, 0, '.', ',' ) }}<span class="font-normal opacity-50"> / {{ $bookingDetails->subscribePackage->duration }} days</span>
            </p>
        </div>
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