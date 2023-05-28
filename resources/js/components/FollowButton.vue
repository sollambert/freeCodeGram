<template>
    <div>
        <button class="btn btn-primary ms-4" @click="followUser" v-text="buttonText"></button>
    </div>
</template>

<script>
import axios from 'axios';

    export default {

        props: ['userId', 'follows'],

        mounted() {
        },

        computed: {
            buttonText() {
                return(this.status) ? 'Unfollow' : 'Follow';
            }
        },

        data: function() {
            return {
                status: this.follows
            }
        },

        methods: {
            followUser() {
                axios.post('/follow/' + this.userId)
                .then(() => {
                    this.status = !this.status;
                })
                .catch(error => {
                    if (error.response.status === 401) {
                        window.location = '/login';
                    }
                });
            }
        } 
    }
</script>