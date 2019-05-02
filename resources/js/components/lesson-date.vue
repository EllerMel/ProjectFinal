<template>
  <div>
      <div v-for="day in lessonDays" :key="day">
      {{ day.lessonDate }}

      </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
      lessonDays: []
    };
  },
  methods: {
    getDays() {
      axios
        .get("/days")
        .then(Response => {
          this.lessonDay = Response.data;
          for (let i in this.lessonDay) {
            this.lessonDays.push(this.lessonDay[i]);
          }
        })
        .catch(error => console.log(error));
    }
  },
  mounted() {
    this.getDays();
  }
};
</script>