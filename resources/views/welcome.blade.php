<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Profile</title>
    </head>
    <body>
        <div class ="navbar flex items-center justify-between mx-10">
            <h2 class = "text2 font-bold font-serif text-slate-900">PROFILE</h2>
            <div class = "button py-5 font-bold mx font-serif text-slate-900">
                <a class = "textBut mr-10" href="">Jasons</a>
                <a class = "textBut mr-10" href="">Matthew</a>
                <a class = "textBut mr-10" href="">Vieren</a>
                <a class = "textBut" href="">Vika</a>
            </div>

        </div>
        <div class="about_section bg-slate-900 flex">
            <div class="about_section_content text-white flex items-center justify-center">
                <div class="text_content">
                    <h1 class="text1 font-bold font-serif">Hello,</h1>
                    <h2 class="text2 font-serif font-light">I'm Jasons Januard</h2>
                </div>
            </div>
            <div class="foto">
                <img src="{{url('/images/foto.png')}}" alt="">
            </div>
        </div>
        <div class="about_me_section">
            <div class="bg-slate-700 py-24">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto">
                    <h2 class="text2 font-bold font-serif text-white text-center">About Me</h2>
                    <p class="text3 font-serif font-light mt-6 text-lg text-white text-center">You can call me Jeje, I'm from Indonesia living in Jakarta. Dedicated Computer Science student with the ability to work well with others. Interested both in Front-end and Back-end development. Motivated to learn something new when solving problems.  Able to self-manage during independent projects and collaborate as part of a team.</p>
                    </div>
                    <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
                    </div>
                </div>
            </div>
        </div>
        <div class="profile_section bg-slate-500">
            <div class="profile_section_content">
                <div class="overflow-hidden shadow flex p-10">
                    <div class="detail text3">
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 rounded-t-2xl">
                            <dt class="font-serif font-medium text-slate-500">Full name</dt>
                            <dd class="mt-1 font-serif text-slate-900 sm:col-span-2 sm:mt-0">Jasons Januard Bongtari</dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500">Gender</dt>
                            <dd class="mt-1 font-serif text-slate-900 sm:col-span-2 sm:mt-0">Male</dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500">Date of birth</dt>
                            <dd class="mt-1 font-serif text-slate-900 sm:col-span-2 sm:mt-0">16 January 2002</dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500">Place of birth</dt>
                            <dd class="mt-1 font-serif text-slate-900 sm:col-span-2 sm:mt-0">Jakarta, Indonesia</dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500">Email address</dt>
                            <dd class="mt-1 font-serif text-slate-900 sm:col-span-2 sm:mt-0">jejebe112@gmail.com</dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 rounded-b-2xl">
                            <dt class="font-serif font-medium text-slate-500">Phone number</dt>
                            <dd class="mt-1 font-serif text-slate-900 sm:col-span-2 sm:mt-0">+62 818 0123 4567</dd>
                        </div>
                    </div>
                    <div class="text3 skills_hobbies pl-10 h-full self-center">
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 rounded-t-2xl">
                            <dt class="font-serif font-medium text-slate-500">Soft Skills</dt>
                            <dd class="mt-1 font-serif text-slate-900 sm:col-span-2 sm:mt-0">
                                <div class="flex justify-around"><p>Team work</p><p>Time management</p><p>Perseverence</p></div>
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500">Hard Skills</dt>
                            <dd class="mt-1 font-serif text-slate-900 sm:col-span-2 sm:mt-0">
                                <div class="flex justify-around"><p>HTML</p><p>Javascript</p><p>CSS</p></div>
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 rounded-b-2xl">
                            <dt class="font-serif font-medium text-slate-500">Hobbies</dt>
                            <dd class="mt-1 font-serif text-slate-900 sm:col-span-2 sm:mt-0">
                                <div class="flex justify-around"><p>Tennis</p><p>Swim</p><p>Volleyball</p></div>
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
                            <div class="education bg-white px-4 py-5 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6 text-slate-900">
                                <dt class=" font-serif"><p>Binus University</p>
                                <p>Computer Science & Statistics</p></dt>
                                <dd class="mt-1 font-serif flex justify-end">2020 - 2024</dd>
                            </div>
                        </dl>
                    </div>
    
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="font-semibold font-serif leading-6 text-slate-900 text-lg text3">Favourite Course</h3>
                    </div>
                    <div class="border-t">
                        <dl>
                            <div class="education bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                                <dt class="font-serif font-medium text-slate-500">2020, Odd Semester</dt>
                                <dd class="mt-1 font-serif text-slate-900 ">Algorithm and Programming</dd>
                            </div>
                            <div class="education bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                                <dt class="font-serif font-medium text-slate-500">2020, Even Semester</dt>
                                <dd class="mt-1 font-serif text-slate-900 ">Data Structure</dd>
                            </div>
                            <div class="education bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500">2021, Odd Semester</dt>
                                <dd class="mt-1 font-serif text-slate-900 ">Object Oriented Programming</dd>
                            </div>
                            <div class="education bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500">2021, Even Semester</dt>
                                <dd class="mt-1 font-serif text-slate-900 ">Database</dd>
                            </div>
                            <div class="education bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500">2022, Odd Semester</dt>
                                <dd class="mt-1 font-serif text-slate-900 ">Deep Learning</dd>
                            </div>
                            <div class="education bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500">2022, Even Semester</dt>
                                <dd class="mt-1 font-serif text-slate-900">Web Programming</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        

    </body>
</html>
