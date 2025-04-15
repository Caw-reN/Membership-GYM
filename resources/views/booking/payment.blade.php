@extends('layouts.app')
@section('title') Daftar gym di  city @endsection
@section('content')

<div id="background" class="absolute w-full h-[345px] top-0 z-0 bg-[#9FDDFF]"></div>
<x-nav/>
<form action="{{ route('front.payment_store') }}" method="POST" enctype="multipart/form-data" id="content" class="relative flex w-full max-w-[1280px] gap-6 mx-auto px-10 mt-[96px]">
    @csrf
    <div class="flex flex-col gap-6 w-full max-w-[820px] shrink-0">
        <div id="account" class="flex flex-col w-full rounded-3xl p-8 gap-6 bg-white">
            <div class="flex flex-col gap-2">
                <p class="font-['ClashDisplay-SemiBold'] text-xl leading-6 tracking-05">Account Details</p>
                <p class="text-sm leading-16 tracking-03 opacity-60">Confirm and make sure your contact before checkout</p>
            </div>
            <hr class="border-black opacity-10">
            <div class="group flex items-center justify-between">
                <p class="flex w-[162px] shrink-0 font-['ClashDisplay-SemiBold'] leading-19 tracking-05">Full Name</p>
                <p class="leading-19 tracking-05">
                    {{ $booking['name'] }}
                </p>
            </div>
            <div class="group flex items-center justify-between">
                <p class="flex w-[162px] shrink-0 font-['ClashDisplay-SemiBold'] leading-19 tracking-05">Phone Number</p>
                <p class="leading-19 tracking-05">{{ $booking['phone'] }}</p>
            </div>
            <div class="group flex items-center justify-between">
                <p class="flex w-[162px] shrink-0 font-['ClashDisplay-SemiBold'] leading-19 tracking-05">Email</p>
                <p class="leading-19 tracking-05">{{ $booking['email'] }}</p>
            </div>
        </div>
        <div id="booking-items" class="flex flex-col w-full rounded-3xl p-8 gap-6 bg-white">
            <div class="flex flex-col gap-2">
                <p class="font-['ClashDisplay-SemiBold'] text-xl leading-6 tracking-05">Booking ID : <span class="text-[#606DE5]">TBD</span></p>
            </div>
            <div class="items flex flex-nowrap gap-4 w-full">
                <img src="{{asset('assets/images/icons/cart.svg')}}" class="w-10 h-10 flex shrink-0" alt="icon">
                <div class="flex flex-col gap-2 w-full">
                    <div class="flex justify-between">
                        <p class="font-['ClashDisplay-SemiBold'] leading-19 tracking-05">
                            {{ $subscribePackage->name }}
                        </p>
                    </div>
                    <p class="text-sm leading-16 tracking-03 opacity-60">{{ $subscribePackage->duration }} days - All Benefits Included</p>
                </div>
            </div>
            <div class="group flex items-center justify-between">
                <p class="flex w-[162px] shrink-0 font-['ClashDisplay-SemiBold'] leading-19 tracking-05">Subtotal</p>
                <p class="leading-19 tracking-05">
                    Rp  {{ number_format($subscribePackage->price, 0, '.', ',' ) }}
                </p>
            </div>
            <div class="group flex items-center justify-between">
                <p class="flex w-[162px] shrink-0 font-['ClashDisplay-SemiBold'] leading-19 tracking-05">PPN 11%</p>
                <p class="leading-19 tracking-05">
                    Rp  {{ number_format($booking['total_ppn'], 0, '.', ',' ) }}
                </p>
            </div>
            <div class="group flex items-center justify-between">
                <p class="flex w-[162px] shrink-0 font-['ClashDisplay-SemiBold'] leading-19 tracking-05">Promo Code</p>
                <p class="leading-19 tracking-05 text-[#EC0307]">-Rp 0</p>
            </div>
            <hr class="border-black border-dashed">
            <div class=" w-full flex justify-between items-center rounded-2xl py-4 px-8 bg-[#D0EEFF]">
                <p class="font-['ClashDisplay-SemiBold'] text-xl leading-[34px] tracking-05">Total Payment</p>
                <p class="font-['ClashDisplay-SemiBold'] text-xl leading-[34px] tracking-05 text-right">    Rp  {{ number_format($booking['total_amount'], 0, '.', ',' ) }}</p>
            </div>
        </div>
        <div class="flex w-full aspect-[820/209]">
            <img src="{{asset('assets/images/thumbnails/banner.png')}}" class="w-full h-full object-contain" alt="banner">
        </div>
    </div>
    <div class="flex flex-col gap-6 w-full">
        <div class="flex flex-col w-full rounded-3xl p-8 gap-6 bg-white">
            <div class="flex flex-col gap-2">
                <p class="font-['ClashDisplay-SemiBold'] text-xl leading-6 tracking-05">Transfer to</p>
                <p class="text-sm leading-16 tracking-03 opacity-60">Select one of the two banks below</p>
            </div>
            <div class="flex items-center gap-4">
                <img src="{{asset('assets/images/logos/BCA.svg')}}" class="w-12 flex shrink-0" alt="logo">
                <div class="flex flex-col gap-2">
                    <p class="font-['ClashDisplay-SemiBold'] leading-19 tracking-05">Fitnesia Corporation</p>
                    <p class="leading-19">129405960495</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <img src="{{asset('assets/images/logos/MANDIRI.svg')}}" class="w-12 flex shrink-0" alt="logo">
                <div class="flex flex-col gap-2">
                    <p class="font-['ClashDisplay-SemiBold'] leading-19 tracking-05">Fitnesia Corporation</p>
                    <p class="leading-19">129405960495</p>
                </div>
            </div>
            <hr class="border-black opacity-10">
            <label id="upload-proof" class="flex flex-col gap-1 font-['Poppins']">
                <p class="font-semibold text-fitcamp-black">Transfer Proof</p>
                <div class="relative w-full rounded-xl border border-[#BFBFBF] py-4 px-3 bg-white">
                    <p id="file-name" class="text-sm leading-[22px] tracking-03 text-[#BFBFBF]">Upload transfer proof</p>
                    <input type="file" name="proof" id="file-input" class="absolute top-0 -z-10">
                </div>
            </label>
            <button type="submit" class="rounded-full py-3 px-6 bg-[#606DE5] font-semibold leading-19 tracking-05 text-white text-center">Confirm</button>
        </div>
    </div>
</form>

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

@push('after-scripts')
    
<script src="{{ asset('js/file-input.js') }}""></script>
@endpush