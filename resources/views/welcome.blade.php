<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-day">
    <header class="ring h-20">
    </header>
    <main class="grid place-content-center ring min-h-dvh">
        <section class="max-w-7xl mx-auto text-center">
            <div class="lg:max-w-[80ch] space-y-4">
                <p>Hi, My Name is Justin Bento</p>
                <h1 class="scroll-m-20 text-4xl font-extrabold tracking-tight lg:text-5xl text-balance">From Designs to Dynamic Websites: Join Me On My Coding Adventure!</h1>
                <p class="leading-7 lg:text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore voluptas amet corrupti quidem obcaecati possimus sed dolorum mollitia delectus ipsum, facilis dolores quod? Mollitia, maxime repudiandae? Voluptatum, quia excepturi. Dolores.</p>
            </div>
            <span class="flex flex-col lg:flex-row gap-4 lg:justify-center mt-4">
                <button type="button" class="rounded-md bg-easternblue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-easternblue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-easternblue-600">Explore My Portfolio</button>
                <button type="button" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Let's Connect</button>
            </span>
        </section>
    </main>
    <footer class="ring h-20">
    </footer>
</body>

</html>