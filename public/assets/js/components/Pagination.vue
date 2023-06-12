<template>
    <div class="pagination-container" data-aos="fade-up">
        <ul class="pagination">
            <li v-if="pagination.prev">
                <a href="#" @click="getPosts(pagination.prev_url)">&laquo;</a>
            </li>
            <li v-for="page in pagination.pages" :key="page" :class="{ 'active': page == pagination.current_page }">
                <a href="#" @click="getPosts(pagination.path + '?page=' + page)">{{ page }}</a>
            </li>
            <li v-if="pagination.next">
                <a href="#" @click="getPosts(pagination.next_url)">&raquo;</a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        pagination: {
            type: Object,
            required: true
        }
    },
    methods: {
        getPosts(url) {
            axios.get(url)
                .then(response => {
                    this.$emit('update-posts', response.data);
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
}
</script>
