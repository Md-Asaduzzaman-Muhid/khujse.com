require('./../assets');

Vue.component('todo-list', require('./TodoList.vue').default);

const app = new Vue({
    el: '#khujse',
});

