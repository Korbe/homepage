import contact from './contact';

export async function downloadVCF() {

    const imageUrl = '/images/me-xl.jpg';
    const imageBase64 = await getImageBase64(imageUrl);


    const createVCF = (contact) => {
        const vCard = `BEGIN:VCARD
VERSION:2.1
N:${contact.lastName};${contact.firstName};;${contact.title}
FN:${contact.title} ${contact.lastName};${contact.firstName}
TEL;CELL;PREF:${contact.phone}
EMAIL;PREF;WORK:${contact.email}
ORG:${contact.org}
URL:${contact.website}
PHOTO;ENCODING=BASE64;JPEG:${imageBase64} 
END:VCARD
      `;
        return vCard;
    };

    const vCardData = createVCF(contact);

    const blob = new Blob([vCardData], { type: 'text/vcard' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement("a");
    a.href = url;
    a.download = `${contact.lastName}_${contact.firstName}.vcf`;
    a.click();
}

// Funktion zum Umwandeln eines Bildes in Base64
async function getImageBase64(imageUrl) {
    const response = await fetch(imageUrl);
    const blob = await response.blob();
    const reader = new FileReader();

    return new Promise((resolve, reject) => {
        reader.onloadend = () => {
            resolve(reader.result.split(',')[1]);  // Nur der Base64-String ohne "data:image/jpeg;base64,"
        };
        reader.onerror = reject;
        reader.readAsDataURL(blob);
    });
}