<template>
    <PublicLayout title="Impressum">
        <Container class="mt-16 sm:mt-32">
            <header>
                <img src="/images/logo.png" alt="Logo" class="h-24 w-auto mb-6" />
                <h1
                    class="text-4xl font-bold tracking-tight text-brand-headline sm:text-5xl dark:text-brand-headline-dark">
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
                    Einzelunternehmer (Kleinstunternehmer)
                </p>

                <p class="text-brand-text dark:text-brand-text-dark">
                    {{ contact.address }}, {{ contact.zipCode }} {{ contact.city }}, {{ contact.country }}
                </p>

                <p class="text-brand-text dark:text-brand-text-dark">
                    {{ contact.phoneText }}
                </p>

                <p class="text-brand-text dark:text-brand-text-dark">
                    {{ contact.email }}
                </p>

                <p class="text-brand-text dark:text-brand-text-dark">
                    Gewerbeart: Freies Gewerbe
                </p>

                <p class="text-brand-text dark:text-brand-text-dark">
                    Gewerbewortlaut: Dienstleistungen in der automatischen Datenverarbeitung und Informationstechnik
                </p>

                <p class="text-brand-text dark:text-brand-text-dark">
                    Gewerbebehörde: Magistrat der Stadt Villach
                </p>

                <p class="text-brand-text dark:text-brand-text-dark">
                    Umsatzsteuer: Kleinunternehmer gemäß § 6 Abs. 1 Z 27 UStG – keine Umsatzsteuer ausgewiesen
                </p>
            </div>

            <h2 class="mt-6 text-lg text-brand-headline-text dark:text-brand-headline-dark">
                Haftung für Inhalte
            </h2>

            <p class="text-brand-text dark:text-brand-text-dark">
                Die Inhalte dieser Website wurden mit größter Sorgfalt erstellt.
                Für die Richtigkeit, Vollständigkeit und Aktualität der Inhalte
                kann ich jedoch keine Gewähr übernehmen.
            </p>

            <h2 class="mt-6 text-lg text-brand-headline-text dark:text-brand-headline-dark">
                Haftung für Links
            </h2>

            <p class="text-brand-text dark:text-brand-text-dark">
                Diese Website enthält Links zu externen Websites, auf deren Inhalte
                ich keinen Einfluss habe. Deshalb kann ich für diese fremden Inhalte
                auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten
                ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich.
            </p>
        </Container>
    </PublicLayout>
</template>

<script setup>
import Container from "@/Components/Container.vue";
import PublicLayout from "@/Layouts/Public/PublicLayout.vue";
import contact from "@/contact";
</script>
