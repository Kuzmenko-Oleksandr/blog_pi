import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler';
import { GmapMap, GmapMarker } from '/vue3-google-map';

const app = createApp({});

app.use(VueGoogleMaps, {
    load: {
        key: 'AIzaSyCp2zqcgixe9hlC3dRr5AO6AGMmkSvxom8', // Replace with your Google Maps API key
        libraries: 'places', // Add any additional libraries you need
    },
});
app.component('GmapMap', GmapMap);
app.component('GmapMarker', GmapMarker);

app.mount('#app');
