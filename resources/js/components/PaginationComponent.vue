<template>
    <div class="row">
    <div class="col-md-12">
        <nav aria-label="Naviagtion" class="mt-2 float-right">
            <ul class="pagination" >
                <li class="page-item" :class="pagination.prev_page_url !=null ? '':'disabled'">
                    <a class="page-link" :href="pagination.prev_page_url"  v-if="pagination.prev_page_url">Prev</a>
                </li>

                <li class="page-item" v-for="item in totalPages"  :class="currentPage==item ? 'active': ''">
                    <a class="page-link" :href="'home?page='+item" >{{item}}</a>
                </li>

                <li class="page-item" :class="pagination.next_page_url !=null ? '':'disabled'">
                    <a class="page-link" :href="pagination.next_page_url"  v-if="pagination.next_page_url">Next</a>
                </li>

            </ul>
        </nav>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            pagination: {
                type: Object
            }
        },
        data() {
            return {
                totalPages: 0,
                currentPage:0
            }
        },
        mounted() {
            this.totalPages = this.pagination.last_page
            this.currentPage = this.pagination.current_page
        },
    }
</script>
