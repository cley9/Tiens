import './bootstrap';
import {createApp} from 'vue';

import box from '../components/home/boxHome.vue';
import layout from '../components/home/layout.vue';
import slayderMain from '../components/home/slayderMain.vue';
const app=createApp();
app.component('box', box);
app.component('layout', layout);
app.component('slayderMain', slayderMain);
app.mount('#app');

// createApp(box).mount('#app');