<template>
    <div class="max-w-2xl relative">
        <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl dark:text-zinc-100">
            Software Engineer, Plant Lover and Helping Hand.
        </h1>
        <p class="my-6 text-lg text-zinc-600 dark:text-zinc-400">
            Hallo, ich bin Ing. Lukas Korbitsch aus Villach und entwickle maßgeschneiderte Webapps. Schon als Kind
            fasziniert von
            Computern, entdeckte ich meine Leidenschaft fürs Programmieren an der HTL Villach. Neben der
            Softwareentwicklung helfe ich bei technischen Fragen und genieße in meiner Freizeit das Hobby Gärtnern,
            Computerspielen sowie
            Outdoor-Aktivitäten.
        </p>
    </div>

    <div>
        <Link
            class="transition hover:text-teal-500 dark:hover:text-teal-400 border border-transparent hover:bg-zinc-700 dark:text-zinc-200 dark:bg-zinc-800/90 py-2 px-5 rounded-3xl mr-3"
            :href="route('public.about')">
        Über mich
        </Link>
        <Link
            class="transition hover:text-teal-500 dark:hover:text-teal-400 border border-transparent hover:bg-zinc-700 dark:text-zinc-200 dark:bg-zinc-800/90 py-2 px-5 rounded-3xl mr-3"
            :href="route('public.projects')">
        Projekte
        </Link>
    </div>
</template>
<script setup>
</script>