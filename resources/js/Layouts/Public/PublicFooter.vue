<template>
    <footer class="mt-32 flex-none">
        <Container>
            <div class="border-t border-zinc-100 pt-10 pb-16 dark:border-zinc-700/40">
                <div class="relative px-4 sm:px-8 lg:px-12">
                    <div class="mx-auto max-w-2xl lg:max-w-5xl">

                        <div class="flex flex-col items-center justify-between gap-6 md:flex-row">
                            <div
                                class="flex flex-wrap justify-center gap-x-6 gap-y-1 text-sm font-medium text-brand-headline dark:text-zinc-200">
                                <Link class="hover:text-brand" href="/">Home</Link>
                                <Link class="hover:text-brand" href="/about">About</Link>
                                <Link class="hover:text-brand" href="/projects">Projects</Link>
                                <Link class="hover:text-brand" href="/uses">Setup</Link>
                                <Link class="hover:text-brand" href="/impressum">Impressum</Link>
                                <Link class="hover:text-brand" href="/cookies">Cookies</Link>
                            </div>
                            <p class="text-sm text-zinc-400 dark:text-zinc-500">
                                &copy; {{ new Date().getFullYear() }} Ing. Lukas Korbitsch. All rights
                                reserved.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </Container>

    </footer>
</template>
<script setup>
import Container from '@/Components/Container.vue';


</script>