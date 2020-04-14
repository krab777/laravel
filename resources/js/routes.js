import AllBooks from './components/AllBooks.vue';
import AddBook from './components/AddBook.vue';
import EditBook from './components/EditBook.vue';

export const routes = [
    {
        name: 'home',
        path: '/blog/public/dashboard/api',
        component: AllBooks
    },
    {
        name: 'add',
        path: '/blog/public/dashboard/api/add',
        component: AddBook
    },
    {
        name: 'edit',
        path: '/blog/public/dashboard/api/edit/:id',
        component: EditBook
    }
];