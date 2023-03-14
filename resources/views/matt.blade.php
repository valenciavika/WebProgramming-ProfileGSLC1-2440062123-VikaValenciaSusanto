
    @extends('template')
    
    @section('judul_halaman', 'PROFILE MCH')        
    @section('konten')
    <div class="flex justify-center bg-lime-100">
            <button type="button" onclick="window.location='{{ url("friend/2") }}'" class="p-4 m-2 text3 font-serif text-white bg-lime-700 rounded-full">
                Hire This Person as Your Employee!
            </button>
        </div>
        <div class="about_section bg-lime-700 flex">
            <div class="about_section_content text-white flex items-center justify-center">
                <div class="text_content">
                    <h1 class="text1 font-bold font-serif">Hello,</h1>
                    <h2 class="text2 font-serif font-light">I'm Matthew Christian</h2>
                </div>
            </div>
            <div class="foto">
                <img src="{{url('/images/fotomatt.png')}}" alt="">
            </div>
        </div>
        <div class="about_me_section">
            <div class="bg-lime-600 sm:py-24 py-10">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto">
                        <h2 class="text2 font-bold font-serif text-white text-center">About Me</h2>
                        <p class="text3 font-serif font-light py-6 text-white text-center">Hi everyone, I'm Matthew, 20 years old Indonesian, currently living in Jakarta. I study in Bina Nusantara University, majoring in Computer Science and Statistics. I like traveling, sports, and music.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile_section bg-lime-400">
            <div class="profile_section_content">
                <div class="overflow-hidden shadow flex sm:p-10 p-5">
                    <div class="detail text3 items-center">
                        <div class="bg-lime-50 px-4 sm:py-5 py-3 grid grid-cols-2 sm:gap-4 sm:px-6 rounded-t-2xl">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">Full name</dt>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">Matthew Christian Hadiprasetya</dd>
                        </div>
                        <div class="bg-white px-4 sm:py-5 py-3 grid grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">Gender</dt>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">Male</dd>
                        </div>
                        <div class="bg-lime-50 px-4 sm:py-5 py-3 grid grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">Date of birth</dt>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">8 August 2002</dd>
                        </div>
                        <div class="bg-white px-4 sm:py-5 py-3 grid grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">Place of birth</dt>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">Jakarta, Indonesia</dd>
                        </div>
                        <div class="bg-lime-50 px-4 sm:py-5 py-3 grid grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">Email address</dt>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">matthew.hadiprasetya@gmail.com</dd>
                        </div>
                        <div class="bg-white px-4 sm:py-5 py-3 grid grid-cols-2 sm:gap-4 sm:px-6 rounded-b-2xl">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">Phone number</dt>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">+62 747 777 44057</dd>
                        </div>
                    </div>
                    <div class="text3 skills_hobbies sm:pl-10 h-full pl-5 self-center">
                        <div class="bg-lime-50 px-4 sm:py-5 py-3 grid grid-cols-4 sm:gap-4 sm:px-6 rounded-t-2xl">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">Soft Skills</dt>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">
                                <p>Networking</p>
                            </dd>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">
                                <p>Creative Thinking</p>
                            </dd>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">
                                <p>Responsible</p>
                            </dd>
                        </div>
                        <div class="bg-white px-4 sm:py-5 py-3 grid grid-cols-4 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">Hard Skills</dt>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">
                                <p>SQL</p>
                            </dd>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">
                                <p>Spark</p>
                            </dd>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">
                                <p>Python</p>
                            </dd>
                        </div>
                        <div class="bg-lime-50 px-4 sm:py-5 py-3 grid grid-cols-4 sm:gap-4 sm:px-6 rounded-b-2xl">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">Hobbies</dt>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">
                                <p>Soccer</p>                              
                            </dd>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">
                                <p>Traveling</p> 
                            </dd>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">
                                <p>Gaming</p>
                            </dd>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="education_section bg-white">
            <h2 class="text2 py-5 font-bold font-serif text-slate-900 text-center">Education</h2>
            <div class="flex justify-center mb-10">
                <div class="education text3 overflow-hidden bg-white shadow rounded-2xl">
                    <div class="border-t">
                        <dl>
                            <div class="education bg-white px-4 sm:py-5 py-3 grid grid-cols-2 gap-4 sm:px-6 text-slate-900">
                                <dt class=" font-serif"><p>Binus University</p>
                                <p>Computer Science & Statistics</p></dt>
                                <dd class="font-serif flex justify-end items-center">2020 - 2024</dd>
                            </div>
                        </dl>
                    </div>
    
                    <div class="px-4 sm:py-5 py-3 sm:px-6">
                        <h3 class="font-semibold font-serif leading-6 text-slate-900 text-lg text3">Favourite Course</h3>
                    </div>
                    <div class="border-t">
                        <dl>
                            <div class="education bg-lime-50 px-4 sm:py-5 py-3 grid grid-cols-2 gap-4 sm:px-6">
                                <dt class="font-serif font-medium text-slate-500 flex items-center">2020, Odd Semester</dt>
                                <dd class="font-serif text-slate-900 flex item-center">Calculus I</dd>
                            </div>
                            <div class="education bg-lime-50 px-4 sm:py-5 py-3 grid grid-cols-2 gap-4 sm:px-6">
                                <dt class="font-serif font-medium text-slate-500 flex items-center">2020, Even Semester</dt>
                                <dd class="font-serif text-slate-900 flex item-center ">Linear Algebra</dd>
                            </div>
                            <div class="education bg-lime-50 px-4 sm:py-5 py-3 grid grid-cols-2 gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">2021, Odd Semester</dt>
                                <dd class="font-serif text-slate-900 flex item-center ">Program Design Method</dd>
                            </div>
                            <div class="education bg-lime-50 px-4 sm:py-5 py-3 grid grid-cols-2 gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">2021, Even Semester</dt>
                                <dd class="font-serif text-slate-900 flex item-center ">Database Systems</dd>
                            </div>
                            <div class="education bg-lime-50 px-4 sm:py-5 py-3 grid grid-cols-2 gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">2022, Odd Semester</dt>
                                <dd class="font-serif text-slate-900 flex item-center ">Data Management and Organization</dd>
                            </div>
                            <div class="education bg-lime-50 px-4 sm:py-5 py-3 grid grid-cols-2 gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">2022, Even Semester</dt>
                                <dd class="font-serif text-slate-900 flex item-center">Web Programming</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    @endsection
