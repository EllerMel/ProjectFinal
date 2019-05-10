<template>
    <div>
        <button class="btn btn-blue btn-main" @click='toggle = !toggle'>Overall Counts </button>
        <div v-show='toggle'>
            <br>
            <ul>
                <li> Lesson Horses - {{horseActiveObject.length}}</li>
                <li> Inactive Horses - {{horseInactiveObject.length}}</li>
                <li> Students - {{studentObject.length}}</li>
                <li> Instructors - {{instructorObject.length}}</li>
            </ul>
        </div>
        <br>
    </div>
</template>

<script>
export default {
    data() {
        return {
            toggle: false,
            lessonObject: [],
            horseActiveObject: [],
            horseInactiveObject: [],
            instructorObject: [],
            studentObject: [],
        };
    },
    methods: {
        getHorseActiveCount() {
            axios
                .get("/countActiveHorses")
                .then(Response => {
                this.horseActiveObject = Response.data;
            })
            .catch(error => console.log(error));
        },
        getHorseInactiveCount() {
            axios
                .get("/countInactiveHorses")
                .then(Response => {
                this.horseInactiveObject = Response.data;
            })
            .catch(error => console.log(error));
        },
        getInstructorCount() {
            axios
                .get("/countInstructors")
                .then(Response => {
                this.instructorObject = Response.data;
            })
            .catch(error => console.log(error));
        },
        getStudentCount() {
            axios
                .get("/countStudents")
                .then(Response => {
                this.studentObject = Response.data;
            })
            .catch(error => console.log(error));
        }

    },
    mounted() {
        this.getHorseActiveCount();
        this.getHorseInactiveCount();
        this.getInstructorCount();
        this.getStudentCount();
    }
};
</script>