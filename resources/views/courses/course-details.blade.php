@extends('layouts.landing');

@section('content')
    <main class="max-w-screen-2xl min-h-screen mx-auto bg-white">
        <section class="grid lg:grid-cols-6">
            <div class="col-span-4 h-full p-6 flex flex-col gap-5">
                <h2 class="text-5xl font-medium">{{ $course->course_name }}</h2>

                {{-- Tags --}}
                <div class="flex flex-wrap">
                    <div class="p-3 bg-red-200 rounded-md">
                        <p class="text-red-500 font-medium">Technology</p>
                    </div>
                </div>

                <div class="flex flex-wrap gap-10 items-center justify-center">
                    <div class="flex-1 text-center">
                        <p class="text-gray-400">Last Updates</p>
                        <p class="font-medium">Aug 2021</p>
                    </div>

                    <div class="flex-1 text-center">
                        <p class="text-gray-400">Level</p>
                        <p class="font-medium">Advanced</p>
                    </div>

                    <div class="flex-1 text-center">
                        <p class="text-gray-400">Students</p>
                        <p class="font-medium">150,669</p>
                    </div>

                    <div class="flex-1 text-center">
                        <p class="text-gray-400">Language</p>
                        <p class="font-medium">English</p>
                    </div>
                </div>

                <div class="h-[550px]">
                    <iframe src="https://www.youtube.com/embed/S_s3GFGn15I?si=VZX-JVxBUUln1l2g" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="w-full h-full"></iframe>
                </div>

                {{-- Overview --}}
                <div class="border-[1.2px] border-gray-400 rounded-md p-5 flex flex-col gap-7">
                    <p class="text-4xl font-medium">Overview</p>
                    <p class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dolor enim perferendis
                        recusandae.
                        Officiis animi quas labore totam exercitationem, deserunt saepe ab quasi enim? Beatae necessitatibus
                        aspernatur, nesciunt quasi laudantium hic quae, quia quis eum perspiciatis maiores quam voluptates
                        doloribus amet sint illum natus similique harum, ut reprehenderit. Dicta at alias magnam! Autem
                        assumenda consequuntur pariatur error, facere ullam itaque porro maiores neque harum totam voluptas
                        quas quo labore illum dolorum velit quia animi dolores culpa ex obcaecati illo! Fugiat eius nobis
                        doloremque, id quia aut veniam sapiente, quibusdam iste consequatur corporis. Quos voluptate dolorum
                        debitis, ducimus ipsam soluta in, cumque recusandae culpa aspernatur unde quod placeat, quae modi
                        non. Perferendis aliquid adipisci totam aut dolores ducimus eius a nemo voluptatibus quas est
                        architecto facere porro asperiores praesentium excepturi, odit quod sed ad iste tempore cupiditate
                        incidunt. Assumenda fuga ipsum aliquam excepturi dicta autem est a voluptatum perferendis, odit non
                        aliquid, error magni dolorum soluta quaerat reiciendis alias? Cum molestias, iure impedit quis
                        laudantium soluta magnam quo perferendis ullam temporibus ipsa non, illum ad esse. Quisquam possimus
                        eum aliquid repellat ut quos deleniti necessitatibus tempore beatae ducimus unde similique suscipit
                        repellendus ex esse itaque, sed voluptas quae dolorem! Libero, laborum omnis enim deleniti fugiat
                        doloremque veritatis in corporis minus asperiores ratione repellendus quidem voluptatem iste,
                        praesentium explicabo porro autem debitis consectetur officiis natus alias? Aspernatur, excepturi!
                        Omnis aliquid commodi cumque repellendus perferendis obcaecati fuga incidunt, illum debitis ex modi,
                        inventore accusantium facilis distinctio. Laborum quia illum natus. Deserunt quos incidunt
                        laboriosam eaque sequi. Sunt ea hic quos fugit nostrum iste deserunt sit natus libero? Aliquam dicta
                        mollitia itaque aut cum. Perspiciatis iusto magnam itaque voluptates asperiores. Totam voluptatibus
                        illo possimus, laborum dicta eum. Quos, cum. Harum, pariatur recusandae perferendis distinctio,
                        accusamus dolores culpa iure deleniti temporibus repellendus repellat at illum!</p>
                </div>

                {{-- Learning --}}
                <div class="border-[1.2px] border-gray-400 rounded-md p-5 flex flex-col gap-7">
                    <p class="text-4xl font-medium">What you'll learn</p>
                    <p class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dolor enim perferendis
                        recusandae.
                        Officiis animi quas labore totam exercitationem, deserunt saepe ab quasi enim? Beatae necessitatibus
                        aspernatur, nesciunt quasi laudantium hic quae, quia quis eum perspiciatis maiores quam voluptates
                        doloribus amet sint illum natus similique harum, ut reprehenderit. Dicta at alias magnam! Autem
                        assumenda consequuntur pariatur error, facere ullam itaque porro maiores neque harum totam voluptas
                        quas quo labore illum dolorum velit quia animi dolores culpa ex obcaecati illo! Fugiat eius nobis
                        doloremque, id quia aut veniam sapiente, quibusdam iste consequatur corporis. Quos voluptate dolorum
                    </p>
                </div>

                {{-- Requirements --}}
                <div class="border-[1.2px] border-gray-400 rounded-md p-5 flex flex-col gap-7">
                    <p class="text-4xl font-medium">Requirements</p>
                    <ul>
                        <li>PC or Laptop</li>
                        <li>Wifi 10 mb min</li>
                    </ul>
                </div>

            </div>
            <div class=" col-span-2 h-full p-3 ">
                <div class="rounded-md border-[1.2px] border-gray-300">
                    <div class="px-8 py-4 flex flex-col gap-6">
                        <p class="text-4xl font-bold">Rp 220.400</p>
                        <div>
                            <input type="button" value="Add to Cart"
                                class="w-full p-4 bg-blue-700 text-white font-medium rounded-md">
                        </div>
                    </div>

                    <hr>

                    <div class="px-8 py-4 flex flex-col gap-4">
                        <p class="font-medium text-2xl">This course includes</p>
                        <ul class="flex flex-col gap-4">
                            <li>2 Hours on-demand video</li>
                            <li>1 Article</li>
                            <li>50 Downloaded sources</li>
                            <li>Full lifetime access</li>
                            <li>Access on mobile and TV</li>
                            <li>Certificate of completion</li>
                        </ul>
                    </div>

                    <hr class="bg-gray-400">

                    <div class="p-4 flex flex-col gap-4">
                        <p class="text-2xl font-medium">About the instructor</p>
                        <div class="flex gap-3">
                            <a href="">
                                <img src="https://www.wilsoncenter.org/sites/default/files/media/images/person/james-person-1.jpg"
                                    alt="Teacher Picture" class="w-20 h-20 rounded-full">
                            </a>
                            <div class="flex flex-col justify-center">
                                <p class="font-medium">DR. Soman Jumakir</p>
                                <p class="text-gray-400">Founder Naruto Edu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
