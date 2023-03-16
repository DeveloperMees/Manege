import Luminous, { LuminousGallery } from 'luminous-lightbox';


export default class Facility {
    constructor() {
        this.facilityImage();
    }

    facilityImage() {
        new LuminousGallery(document.querySelectorAll('.facility .luminous'));
    }
}
