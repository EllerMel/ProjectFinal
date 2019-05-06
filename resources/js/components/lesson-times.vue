<template>
    <div>
        <div class="row">
            <div class="col" style="text-align:right;"><button class="btn btn-outline-dark btn-two" @click="getLessons()">Current Lessons</button></div>
            <div class="col" style="text-align:left;"><button class="btn btn-outline-dark btn-two" @click="getPastLessons()">Past Lessons</button></div>
        </div>
        <br>

        <div class="row top">
            <div class="col"><strong>Date</strong></div>
            <div class="col"><strong>Time</strong></div>
            <div class="col"><strong>Student</strong></div>
            <div class="col"><strong>Horse</strong></div>
            <div class="col"><strong>Location</strong></div>
            <div class="col"><strong>Instructor</strong></div>
            <div class="col"><strong>Canceled</strong></div>
            <div class="col"></div> 
        </div>
      
        <div v-for="(lesson, index) in lessonObject" :key="lesson.id">
            <div :class="rowColor(index)">
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
                <div class="col" style="text-align:right;"><a v-bind:href="'/lessons/' + lesson.id + '/edit'" class="btn btn-grey btn-sm">Edit</a></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            lessonObject: [],
        };
    },
    methods: {
        getLessons() {
        axios
            .get("/times")
            .then(Response => {
            this.lessonObject = Response.data;
            })
            .catch(error => console.log(error));
        },
        getPastLessons() {
        axios
            .get("/pastTimes")
            .then(Response => {
            this.lessonObject = Response.data;
            })
            .catch(error => console.log(error));
        },
        rowColor(index) {
            if (index % 2 === 0) {
                return "row not";
            } else {
                return "row shade";
            }
        }
    },
    mounted() {
        this.getLessons();
    }
};
</script>