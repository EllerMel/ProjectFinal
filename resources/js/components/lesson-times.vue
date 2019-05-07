<template>
    <div>
        <div class="row">
            <div class="col"><h1>Lessons - {{status}}</h1></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"><a href="/lessons/create" class="btn btn-blue btn-main">Add Lesson</a></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"><a href="/locations" class="btn btn-grey btn-main">Add/Edit Arenas</a></div>
        </div>
        <p>Click on date to view lesson</p>
        <br>

        <div class="row">
            <div class="col" style="text-align:right;"><button class="btn btn-outline-dark btn-lesson" @click="getLessons(), activeBtn = 'btnCurrent'" :class="{active: activeBtn === 'btnCurrent' }">Current</button></div>
            <div class="col" style="text-align:center;"><button class="btn btn-outline-dark btn-lesson" @click="getPendingLessons(), activeBtn = 'btnPending'" :class="{active: activeBtn === 'btnPending' }">Pending</button></div>
            <div class="col" style="text-align:center;"><button class="btn btn-outline-dark btn-lesson" @click="getPastLessons(), activeBtn = 'btnPast'" :class="{active: activeBtn === 'btnPast' }">Past</button></div>
            <div class="col" style="text-align:left;"><button class="btn btn-outline-dark btn-lesson" @click="getCancelledLessons(), activeBtn = 'btnCancelled'" :class="{active: activeBtn === 'btnCancelled' }">Cancelled</button></div>
        </div>
        <br>

        <div class="row top">
            <div class="col"><strong>Date</strong></div>
            <div class="col"><strong>Time</strong></div>
            <div class="col"><strong>Student</strong></div>
            <div class="col"><strong>Horse</strong></div>
            <div class="col"><strong>Location</strong></div>
            <div class="col"><strong>Instructor</strong></div>
            <!-- <div class="col"><strong>Canceled</strong></div> -->
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
                <!-- <div class="col center">
                    <input class="form-check-input" type="checkbox" :value="lesson.isCanceled" :id="lesson.id" disabled
                        v-model='lesson.isCanceled' checked="checked" >
                </div> -->
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
            status: 'Current',
            activeBtn: 'btnCurrent'
        };
    },
    methods: {
        getLessons() {
        axios
            .get("/times")
            .then(Response => {
            this.lessonObject = Response.data;
            this.status = 'Current';
            })
            .catch(error => console.log(error));
        },
        getPendingLessons() {
        axios
            .get("/pendingTimes")
            .then(Response => {
            this.lessonObject = Response.data;
            this.status = 'Pending';
            })
            .catch(error => console.log(error));
        },
        getPastLessons() {
        axios
            .get("/pastTimes")
            .then(Response => {
            this.lessonObject = Response.data;
            this.status = 'Past';
            })
            .catch(error => console.log(error));
        },
        getCancelledLessons() {
        axios
            .get("/cancelledTimes")
            .then(Response => {
            this.lessonObject = Response.data;
            this.status = 'Cancelled';
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