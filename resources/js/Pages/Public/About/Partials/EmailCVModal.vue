<template>
    <TransitionRoot as="template" :show="isOpen" @before-leave="closeModal">
        <Dialog as="div" class="fixed inset-0 z-50 overflow-y-auto" @close="closeModal">
            <div class="flex items-center justify-center min-h-screen px-4 text-center sm:block sm:p-0">
                <DialogOverlay class="fixed inset-0 bg-opacity-50 backdrop-blur-lg transition-opacity" />

                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
                <DialogPanel
                    class="inline-block transform bg-white dark:bg-zinc-900 rounded-lg text-left overflow-hidden shadow-xl transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="p-6">
                        <DialogTitle class="text-xl font-semibold text-brand-headline dark:text-brand-headline-dark">Danke für dein
                            Interesse an meinem Lebenslauf!</DialogTitle>
                        <p class="text-brand-headline dark:text-brand-headline-dark text-base">
                            Bitte gib deine E-Mail-Adresse ein, um den Lebenslauf herunterzuladen. Ich freue mich, dass
                            du mehr über mich erfahren möchtest.
                        </p>
                        <div class="mt-4">
                            <input v-model="email" type="email" placeholder="E-Mail"
                                class="w-full bg-white/90 text-brand-headline font-medium shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 hover:text-brand dark:hover:bg-zinc-800 border dark:text-zinc-200 dark:dark:bg-zinc-800/50 border-transparent py-2 px-5 rounded-3xl"
                                required />
                            <p v-if="emailError" class="text-red-500 text-sm mt-2">{{ emailError }}</p>
                        </div>
                        <div class="mt-4 flex gap-2 justify-end">
                            <VButton @click="submitEmail">
                                Download CV
                            </VButton>
                            <VButton @click="closeModal">
                                Schließen
                            </VButton>
                        </div>
                    </div>
                </DialogPanel>
            </div>
        </Dialog>
    </TransitionRoot>
</template>

<script setup>
import { ref } from 'vue';
import { Dialog, DialogOverlay, DialogPanel, DialogTitle, TransitionRoot } from '@headlessui/vue';
import VButton from '@/Components/VButton.vue';
import axios from 'axios';

const props = defineProps({
    isOpen: {
        type: Boolean,
        required: true
    }
});

const emit = defineEmits(['update:isOpen']);

const email = ref('');
const emailError = ref('');

const closeModal = () => {
    emit('update:isOpen', false);
};

const submitEmail = async () => {
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

    if (!email.value)
        emailError.value = 'E-Mail ist erforderlich.';
    else if (!emailPattern.test(email.value))
        emailError.value = 'Bitte gib eine gültige E-Mail-Adresse ein.';
    else {
        try {
            await axios.post(route("api.interest_contact"), { email: email.value });
            downloadCV();
            closeModal();
        } catch (error) {
            console.error("Fehler beim Speichern der E-Mail:", error);
        }
    }
};

const downloadCV = () => {
    const link = document.createElement('a');
    link.href = '/pdf/cv.pdf';
    link.download = 'Ing. Lukas Korbitsch - Lebenslauf.pdf';
    link.click();
};
</script>