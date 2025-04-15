@extends('layouts.app')
@section('title') Daftar gym di {{$city->name}} city @endsection
@section('content')

<x-nav/>
<section id="latest" class="flex flex-col w-full max-w-[1280px] gap-8 mx-auto px-10 mt-[120px]">
    <div class="flex items-center justify-between">
        <div class="flex flex-col gap-4">
            <h2 class="font-['ClashDisplay-SemiBold'] text-5xl leading-[59px] tracking-05">
                {{ $city->name }}
            </h2>
            <p class="leading-19 tracking-03 opacity-60">Finding FitCamp gym location nearby “{{ $city->name }}” city</p>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-6">
        @forelse ($city->gyms as $itemNewGym)
        <a href="{{ route('front.details', $itemNewGym->slug) }}" class="card">
            <div class="flex flex-col rounded-3xl p-8 gap-6 bg-white">
                <div class="title flex flex-col gap-2">
                    <h3 class="font-['ClashDisplay-SemiBold'] leading-19 tracking-05">
                        {{ $itemNewGym->name }}
                    </h3>
                    <div class="flex items-center gap-1">
                        <img src="{{asset('assets/images/icons/location.svg')}}" class="flex shrink-0" alt="icon">
                        <p class="text-sm leading-19 tracking-03 opacity-50">
                            {{ $itemNewGym->city->name }}
                        </p>
                    </div>
                </div>
                <div class="thumbnail flex rounded-3xl h-[200px] bg-[#06425E] overflow-hidden">
                    <img src="{{ Storage::url($itemNewGym->thumbnail) }}" class="w-full h-full object-cover" alt="thumbnail">
                </div>
                <div class="flex items-center justify-between">
                    <p class="font-['ClashDisplay-SemiBold']">Facilities</p>
                    <button class="font-semibold text-xs leading-14 tracking-05 text-fitcamp-royal-blue">View all</button>
                </div>
                <div class="grid grid-cols-3 justify-between gap-3">
                    
                    @forelse ($itemNewGym->gymFacilities->take(3) as $itemFacility)
                    <div class="flex flex-col gap-3 items-center text-center">
                        <img src="{{Storage::url($itemFacility->facility->thumbnail)}}" class="w-10 h-10" alt="icon">
                        <div class="flex flex-col gap-1">
                            <p class="font-semibold text-sm leading-16 tracking-05">
                                {{ $itemFacility->facility->name }}
                            </p>
                            <p class="opacity-50 text-sm leading-16 tracking-05">
                                {{ $itemFacility->facility->about }}
                            </p>
                        </div>
                    </div>
                    @empty
                        <p>Belum ada data facilities</p>
                    @endforelse
                </div>
                <hr class="border-black/10">
                <div class="flex items-center gap-3">
                    <img src="{{asset('assets/images/icons/Daily Time.svg')}}" class="w-10 h-10" alt="icon">
                    <div class="flex flex-col gap-2">
                        <p class="font-['ClashDisplay-SemiBold'] text-sm leading-17 tracking-05">Opening Work</p>
                        <p class="text-xs leading-14 tracking-05 opacity-50">
                            {{ $itemNewGym->open_time_at->format('h:i A')}} - {{ $itemNewGym->closed_time_at->format('h:i A') }}
                        </p>
                    </div>
                </div>
            </div>
        </a>
        @empty
            <p>Belum ada data yang tersedia</p>
        @endforelse
    </div>
</section>

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

@push('after-styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
@endpush