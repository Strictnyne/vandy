
new Vue({
    el: '#app',

    data: {
        repos: [],
        resource_url: '/api/repos',
        // loading: false
        // options: {
        //     remote_data: 'pagination.data',
        //     remote_current_page: 'pagination.current_page',
        //     remote_last_page: 'pagination.last_page',
        //     remote_next_page_url: 'pagination.next_page_url',
        //     remote_prev_page_url: 'pagination.prev_page_url',
        //     next_button_text: 'Next',
        //     previous_button_text: 'Back'
        // }
    },

    components: {
        VPaginator: VuePaginator
    },

    methods: {
        updateResource(data){
            this.loading = true;
            this.repos = data
        },
        moment: function (date) {
            return moment(date);
        },
        date: function (date) {
            return moment(date).format('MMMM Do YYYY, h:mm:ss a');
        }
    },

    filters: {
        moment: function (date) {
            return moment(date).format('MMMM Do YYYY, h:mm:ss a');
        }
    }

});