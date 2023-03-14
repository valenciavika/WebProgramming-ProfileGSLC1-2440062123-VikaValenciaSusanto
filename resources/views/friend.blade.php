@extends('template')

@section('konten')
<div>
    <br>
        <h1 class="text2 text-slate-900 font-serif flex justify-center">Hello! Are you sure you want to hire this person?</h1>
        @foreach($user as $u)
                @if($u['key'] == $id)
                    <div class="text2 font-serif font-light flex justify-center text-white">
                        <button class = "bg-slate-900 px-5 m-2 rounded-full"
                        onclick="alert('Thank you for hiring me as your employee!\nYou can call me {{$u['name']}}.\nPlease contact me on {{$u['num']}}.')">
                        YES</button>
                    </div>
                    @break
                @endif
                </div>
            </div>
        </div>
        @endforeach
    


    @switch($id)
        @case(1)
        @section('judul_halaman', 'VVS')  
        <div class="about_section bg-gray-900 flex">
            <div class="about_section_content text-white flex items-center justify-center">
                <div class="text_content">
                    <h1 class="text1 font-bold font-serif">Hello,</h1>
                    <h2 class="text2 font-serif font-light">I'm Vika Valencia</h2>
                    <h2 class="text2 font-serif font-light">Hire me!</h2>
                </div>
            </div>
            <div class="foto">
                <img src="{{url('/images/fotovika.jpg')}}" alt="">
            </div>
        </div>
            
        @break
        @case(2)
        @section('judul_halaman', 'MCH')  
        <div class="about_section bg-lime-900 flex">
            <div class="about_section_content text-white flex items-center justify-center">
                <div class="text_content">
                    <h1 class="text1 font-bold font-serif">Hello,</h1>
                    <h2 class="text2 font-serif font-light">I'm Matthew Christian</h2>
                    <h2 class="text2 font-serif font-light">Hire me!</h2>
                </div>
            </div>
            <div class="foto">
                <img src="{{url('/images/fotomatt.png')}}" alt="">
            </div>
        </div>
        @break
        @case(3)
        @section('judul_halaman', 'VC')  
        <div class="about_section bg-rose-900 flex">
            <div class="about_section_content text-white flex items-center justify-center">
                <div class="text_content">
                    <h1 class="text1 font-bold font-serif">Hello,</h1>
                    <h2 class="text2 font-serif font-light">I'm Vieren Cristian</h2>
                    <h2 class="text2 font-serif font-light">Hire me!</h2>
                </div>
            </div>
            <div class="foto">
                <img src="{{url('/images/fotovieren.png')}}" alt="">
            </div>
        </div>  
        @break
        @case(4)
        @section('judul_halaman', 'JJB') 
        <div class="about_section bg-slate-900 flex">
            <div class="about_section_content text-white flex items-center justify-center">
                <div class="text_content">
                    <h1 class="text1 font-bold font-serif">Hello,</h1>
                    <h2 class="text2 font-serif font-light">I'm Jasons Januard</h2>
                    <h2 class="text2 font-serif font-light">Hire me!</h2>
                </div>
            </div>
            <div class="foto">
                <img src="{{url('/images/foto.png')}}" alt="">
            </div>
        </div>         
        @break
    @endswitch
</div>

@endsection