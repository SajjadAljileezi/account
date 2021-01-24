<template>
<div class="container mt-5">
<h1> room</h1>
</div>
</template>

<script>
export default {
name: "Room.vue",
    data: function() {
        return {
            domino: [],
        }
    },
    created() {
        axios
            .get("/api/zero")
            .then(response => {
                this.domino = response.data;

            })
            .catch(e => {
                console.error(e);
            });
    }}
</script>


