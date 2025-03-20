<template>
    <PublicLayout title="Impressum">
        <Container class="mt-16 sm:mt-32">
            <header>
                <h1 class="text-4xl font-bold tracking-tight text-brand-headline sm:text-5xl dark:text-brand-headline-dark">
                    Impressum
                </h1>
            </header>

            <h2 class="my-6 text-lg text-brand-headline-text dark:text-brand-headline-dark">
                Angaben gemäß § 5 ECG und § 25 MedienG
            </h2>

            <div class="space-y-2">
                <p class="text-brand-text dark:text-brand-text-dark">
                    {{ contact.firstName }} {{ contact.lastName }}
                </p>
                <p class="text-brand-text dark:text-brand-text-dark">
                    {{ contact.address }}, {{ contact.zipCode }}
                    {{ contact.city }}
                </p>
                <p class="text-brand-text dark:text-brand-text-dark">
                    {{ contact.country }}
                </p>
                <p class="text-brand-text dark:text-brand-text-dark">
                    {{ contact.phoneText }}
                </p>
                <p class="text-brand-text dark:text-brand-text-dark">
                    {{ contact.email }}
                </p>
            </div>

            <h2 class="mt-6 text-lg text-brand-headline-text dark:text-brand-headline-dark">Haftung für Inhalte</h2>

            <p class="text-brand-text dark:text-brand-text-dark">
                Die Inhalte dieser Website wurden mit größter Sorgfalt
                erstellt. Für die Richtigkeit, Vollständigkeit und
                Aktualität der Inhalte kann ich jedoch keine Gewähr
                übernehmen.
            </p>

            <h2 class="mt-6 text-lg text-brand-headline-text dark:text-brand-headline-dark">Haftung für Links</h2>

            <p class="text-brand-text dark:text-brand-text-dark">
                Diese Website enthält Links zu externen Websites, auf deren
                Inhalte ich keinen Einfluss habe. Deshalb kann ich für diese
                fremden Inhalte auch keine Gewähr übernehmen. Für die
                Inhalte der verlinkten Seiten ist stets der jeweilige
                Anbieter oder Betreiber der Seiten verantwortlich.
            </p>
        </Container>
    </PublicLayout>
</template>

<script setup>
import Container from "@/Components/Container.vue";
import PublicLayout from "@/Layouts/Public/PublicLayout.vue";
import contact from "@/contact";
</script>
