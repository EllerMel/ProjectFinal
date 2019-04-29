<template>
  <h4>{{ formatDate }}</h4>
</template>

<script>
export default {
    computed: {
        formatDate() {
            var today = new Date();
            var dd = today.getDate();
            var yyyy = today.getFullYear();

            var day = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            var month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

            return (day[today.getDay()] + ' ' + month[today.getMonth()] + ' ' + dd + ', ' + yyyy);
        }
    }
}
</script>