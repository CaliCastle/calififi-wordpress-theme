import Vue from 'vue';

/**
 * Bootstrap Vue
 * @type {VueConstructor}
 */
window.Vue = Vue;

new Vue({
    el: '#main',
    data() {
        return {
            since: {
                year: 2016,
                month: 10,
                day: 13
            },
            count: {
                days: 0,
                hours: 0,
                minutes: 0,
                seconds: 0
            }
        }
    },
    methods: {
        countDays() {
            let now = new Date();
            let date = new Date(this.since.year, this.since.month - 1, this.since.day);
            let leftTime = now.getTime() - date.getTime();
            let beenTimeInSeconds = parseInt(leftTime / 1000);

            this.count.days = Math.floor(beenTimeInSeconds / (60 * 60 * 24));
            this.count.hours = Math.floor((beenTimeInSeconds - this.count.days * 24 * 60 * 60) / 3600);
            this.count.minutes = Math.floor((beenTimeInSeconds - this.count.days * 24 * 60 * 60 - this.count.hours * 3600) / 60);
            this.count.seconds = Math.floor(beenTimeInSeconds - this.count.days * 24 * 60 * 60 - this.count.hours * 3600 - this.count.minutes * 60);
        }
    },
    mounted() {
        this.countDays();

        setInterval(() => {
            this.countDays();
        }, 1000);
    }
});