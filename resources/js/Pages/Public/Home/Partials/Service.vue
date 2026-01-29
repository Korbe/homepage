<template>
    <h2
        class="mt-10 text-2xl font-bold tracking-tight text-brand-headline sm:text-3xl dark:text-brand-headline-dark my-3">
        Ich biete Ihnen...</h2>

    <div class="bg-zinc-100 dark:bg-zinc-900 flex items-center justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 max-w-5xl w-full">

            <Link href="/homevisits">
            <div
                class="bg-white dark:bg-zinc-800 rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="/images/handshake.jpg" alt="Card 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-zinc-800 dark:text-zinc-100 mb-2">Hausbesuche für PC und
                        Smartphone
                        Probleme</h2>
                    <p class="text-zinc-600 dark:text-zinc-400 mb-4">
                        Ich komme direkt zu Ihnen und löse Hardware- und Softwareprobleme schnell und zuverlässig.
                        Auch bei Neuanschaffungen oder PC-Zusammenstellungen berate ich Sie gern.
                        Und das Beste: Keine Lösung, keine Kosten.
                    </p>
                    <button class="cursor-pointer bg-brand text-white px-4 py-2 rounded-3xl hover:bg-zinc-700 transition">
                        Mehr erfahren
                    </button>
                </div>
            </div>
            </Link>

            <Link href="/webapps">
            <div
                class="bg-white dark:bg-zinc-800 rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="/images/code.jpg" alt="Card 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-zinc-800 dark:text-zinc-100 mb-2">Maßgeschneiderte WebApps
                    </h2>
                    <p class="text-zinc-600 dark:text-zinc-400 mb-4">
                        Ich entwickle moderne Webanwendungen - schnell, intuitiv und auf allen Geräten nutzbar. Von der
                        Idee bis
                        zum fertigen Produkt mit Fokus auf Design, Performance und Benutzerfreundlichkeit.
                    </p>
                    <button class="cursor-pointer bg-brand text-white px-4 py-2 rounded-3xl hover:bg-zinc-700 transition">
                        Mehr erfahren
                    </button>
                </div>
            </div>
            </Link>

        </div>
    </div>

</template>
<script setup>
</script>