<template>
    <PublicLayout title="Über mich">
        <Container class="mt-16 sm:mt-32">
            <div class="grid grid-cols-1 gap-y-16 lg:grid-cols-[2fr_1fr] lg:grid-rows-[auto_1fr] lg:gap-y-12">
                <div class="lg:pl-4">
                    <div class="max-w-xs px-2.5 lg:max-w-none">
                        <img src="/images/handshake.jpg" alt="" sizes="(min-width: 1024px) 32rem, 20rem"
                            class="aspect-square rotate-3 rounded-2xl object-cover" />
                    </div>
                </div>
                <div class="lg:order-first lg:row-span-2">
                    <h1
                        class="text-4xl font-bold tracking-tight text-brand-headline sm:text-5xl dark:text-brand-headline-dark">
                        IT-Hilfe direkt bei Ihnen zu Hause<br>
                        
                    </h1>
                    <h2 class="text-2xl font-bold tracking-tight text-brand-headline sm:text-3xl dark:text-brand-headline-dark my-3">
                        Persönlicher Service für PC, Laptop, Smartphone
                    </h2>

                    <div class="mt-6 space-y-7 text-lg text-brand-text dark:text-brand-text-dark">
                        <p>
                            Nichts ist ärgerlicher, als wenn Technik streikt - der Computer startet nicht, das
                            Smartphone hängt oder das Tablet verbindet sich nicht mehr mit dem WLAN. Genau hier komme
                            ich ins Spiel
                        </p>
                        <p>
                            Ich bin Ing. Lukas Korbitsch, Ihr zuverlässiger IT-Dienstleister für Privatkunden und kleine
                            Unternehmen.
                            Mein Ziel: Technik verständlich machen und Probleme direkt bei Ihnen vor Ort lösen -
                            schnell, unkompliziert und persönlich.
                        </p>

                        <h2
                            class="text-2xl font-bold tracking-tight text-brand-headline sm:text-3xl dark:text-brand-headline-dark my-3">
                            🧰 Hausbesuche für alle IT-Probleme
                        </h2>
                        <p>
                            Ob der PC nicht startet, der Laptop immer langsamer wird oder das Smartphone plötzlich keine
                            Verbindung mehr hat - ich komme direkt zu Ihnen nach Hause und kümmere mich darum, dass
                            alles wieder funktioniert.
                            Ich nehme mir Zeit, erkläre verständlich, was ich mache, und sorge dafür, dass Sie Ihre
                            Geräte wieder sorgenfrei und effizient nutzen können.
                        </p>
                        <ul class="list-disc list-inside space-y-2">
                            <li>Fehlerdiagnose und Problembehebung bei PC, Laptop, Smartphone und Tablet</li>
                            <li>Entfernung von Viren, Werbung oder Schadsoftware</li>
                            <li>Systembereinigung und Optimierung für mehr Geschwindigkeit</li>
                            <li>Neuinstallation von Windows</li>
                            <li>Datensicherung</li>
                            <li>WLAN-, Drucker- und Internetprobleme beheben</li>
                            <li>Beratung und Einrichtung neuer Geräte</li>
                            <li>und noch vieles mehr</li>
                        </ul>

                        <h2
                            class="text-2xl font-bold tracking-tight text-brand-headline sm:text-3xl dark:text-brand-headline-dark my-3">
                            🧠 Persönlich. Verständlich. Ohne Fachchinesisch.
                        </h2>
                        <p>
                            Ich weiß, dass Computerprobleme oft frustrierend sind - besonders, wenn man nicht genau
                            weiß, woran es liegt.
                            Deshalb erkläre ich alle Schritte klar und nachvollziehbar, damit Sie verstehen, was getan
                            wird und warum.
                            Kein Technikjargon, keine versteckten Kosten - nur ehrliche und transparente Hilfe.
                        </p>
                        <h2
                            class="text-2xl font-bold tracking-tight text-brand-headline sm:text-3xl dark:text-brand-headline-dark my-3">
                            ⚙️ Beratung & PC-Zusammenstellung
                        </h2>
                        <p>
                            Neben der Fehlerbehebung unterstütze ich Sie auch bei der Auswahl neuer Geräte oder stelle
                            auf Wunsch Ihren individuellen Wunsch-PC zusammen.
                            Ob Office-PC, Multimedia-System oder leistungsstarker Gaming-Rechner - ich plane, baue und
                            richte alles nach Ihren Anforderungen ein, damit Sie ein perfekt abgestimmtes System
                            erhalten.
                        </p>
                        <h2
                            class="text-2xl font-bold tracking-tight text-brand-headline sm:text-3xl dark:text-brand-headline-dark my-3">
                            💡 Mein Versprechen
                        </h2>
                        <ul class="list-disc list-inside space-y-2">
                            <li>Schnelle, zuverlässige Hilfe vor Ort</li>
                            <li>Faire Preise und transparente Kommunikation</li>
                            <li>Keine Lösung - keine Kosten</li>
                            <li>Unterstützung auch außerhalb der üblichen Geschäftszeiten nach Terminvereinbarung</li>
                        </ul>
                    </div>

                    <Faqs></Faqs>

                    <Cta></Cta>
                </div>
                <div class="lg:pl-20">
                    <ul role="list">
                        <ContactLinksVertical />
                        <VButton class="w-full mt-5" @click="downloadVCF">Kontakt speichern</VButton>
                    </ul>
                </div>
            </div>
        </Container>
    </PublicLayout>
</template>
<script setup>
import Container from '@/Components/Container.vue';
import PublicLayout from '@/Layouts/Public/PublicLayout.vue';
import VButton from '@/Components/VButton.vue';
import ContactLinksVertical from '@/Components/ContactLinksVertical.vue';
import Cta from './partials/Cta.vue';
import Faqs from './partials/Faqs.vue';
</script>