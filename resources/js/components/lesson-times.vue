<template>
  <div>
      <div v-for="lesson in lessonObject" :key="lesson">

        <div class="row shade">
            <div class="col"><a v-bind:href="'/lessons/'+ lesson.id" class="link">{{ lesson.lessonDate }}</a></div>
            <div class="col">{{ lesson.lessonTime }}</div>
            <div class="col">{{ lesson.rider }}</div>
            <div class="col">{{ lesson.horse }}</div>
            <div class="col">{{ lesson.location }}</div>
            <div class="col">{{ lesson.instructor }}</div>
            <div class="col center">
                <input class="form-check-input" type="checkbox" :value="lesson.isCanceled" :id="lesson.id" disabled
                    v-model='lesson.isCanceled' checked="checked" >
            </div>
            <div class="col"><a v-bind:href="'/lessons/' + lesson.id + '/edit'" class="btn btn-grey btn-sm">Edit</a></div>
        </div>

      </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
        fields: {
          lessonDate: {
            label: 'Date',
            sortable: true
          },
          lessonTime: {
            label: 'Time',
            sortable: false
          },
          rider: {
            label: 'Student',
            sortable: true
          },
          horse: {
            label: 'Horse',
            sortable: true
          },
            location: {
            label: 'Location',
            sortable: true
          },
            instructor: {
            label: 'Instructor',
            sortable: true
          },
            isCanceled: {
            label: 'Canceled',
            sortable: false
          },
        },
        lessonObject: [],
        dayObject: [],
        horseObject: [],
        instructorObject: [],
        studentObject: [],
        spotObject: []
    };
  },
  methods: {
    getLessons() {
      axios
        .get("/times")
        .then(Response => {
          this.lessonTime = Response.data;
          for (let i in this.lessonTime) {
            this.lessonObject.push(this.lessonTime[i]);
          }
        })
        .catch(error => console.log(error));
    },
    getDays() {
      axios
        .get("/days")
        .then(Response => {
          this.lessonDay = Response.data;
          for (let i in this.lessonDay) {
            this.dayObject.push(this.lessonDay[i]);
          }
        })
        .catch(error => console.log(error));
    },
    getHorses() {
      axios
        .get("/horses")
        .then(Response => {
          this.lessonHorse = Response.data;
          for (let i in this.lessonHorse) {
            this.horseObject.push(this.lessonHorse[i]);
          }
        })
        .catch(error => console.log(error));
    },
    getInstructors() {
      axios
        .get("/instructors")
        .then(Response => {
          this.lessonInstructor = Response.data;
          for (let i in this.lessonInstructor) {
            this.instructorObject.push(this.lessonInstructor[i]);
          }
        })
        .catch(error => console.log(error));
    },
    getStudents() {
      axios
        .get("/students")
        .then(Response => {
          this.lessonStudent = Response.data;
          for (let i in this.lessonStudent) {
            this.studentObject.push(this.lessonStudent[i]);
          }
        })
        .catch(error => console.log(error));
    },
    getSpots() {
      axios
        .get("/spots")
        .then(Response => {
          this.lessonSpot = Response.data;
          for (let i in this.lessonSpot) {
            this.spotObject.push(this.lessonSpot[i]);
          }
        })
        .catch(error => console.log(error));
    }
  },
  mounted() {
    this.getLessons();
    this.getDays();
    this.getHorses();
    this.getInstructors();
    this.getStudents();
    this.getSpots();
  }
};
</script>