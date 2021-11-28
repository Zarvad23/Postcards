import Main from './components/Main.vue';
import AddPhoto from './components/AddPhoto.vue';
import editor from './components/editor.vue';
import adminPanel from './components/adminPanel.vue';
export default{
    mode: 'history',

    routes: [
        {
            path: '/',
            component: Main
        },
        {
            path: '/addPhoto',
            component: AddPhoto
        },
        {
            path: '/editor',
            component: editor
        },
        {
            path: '/adminPanel',
            component: adminPanel
        },
    ]
}