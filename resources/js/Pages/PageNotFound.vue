<template>
    <PublicLayout title="404 - Seite konnte nicht gefunden werden">
        <div class="py-36 lg:py-48 flex flex-col">
            <main class="flex-grow flex flex-col justify-center max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
                <div class="py-16">
                    <div class="text-center">
                        <p class="text-sm font-semibold text-brand-text dark:text-brand-text-dark uppercase tracking-wide">404 Error</p>
                        <h1 class="mt-2 text-brand-headline  dark:text-brand-headline-dark font-extrabold tracking-tight sm:text-5xl">Seite nicht
                            gefunden.</h1>
                        <p class="mt-2 text-base text-brand-text dark:text-brand-text-dark">Entschuldigung, die gesuchte Seite konnte nicht gefunden werden, überprüfen Sie gegebenenfalls die Adresszeile.</p>
                        <div class="mt-6">
                            <VButton href="/">
                                zur Startseite
                            </VButton>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </PublicLayout>
</template>
<script setup>
import VButton from '@/Components/VButton.vue';
import PublicLayout from '@/Layouts/Public/PublicLayout.vue';

</script>