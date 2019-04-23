<template>
    <div>
        <h1 class="center">Studiemonitor</h1>
        <table class="monitor">
            <thead>
                <th>Cursus</th>
                <th>Toets</th>
                <th>Behaald?</th>
                <th>Cijfer</th>
                <th>EC's</th>
            </thead>
            <tbody>
                <!-- Loop through all of the bloks -->
                <template v-for="blok in bloks">
                    <tr class="blok">
                        <td colspan="5">Blok {{ blok.id }}</td>
                    </tr>
                    <!-- Loop through all of the courses -->
                    <template v-for="course in blok.courses">
                        <!-- Loop through all of the tests -->
                        <tr v-for="(test, index) in course.tests">
                            <!-- Only display the course.name on the
                                first test -->
                            <td v-if="index===0" :rowspan="course.tests.length">
                                {{ course.name }}
                            </td>
                            <td>{{ test.name }}</td>
                            <td>{{ test.completed == 1 ? "Ja" : "Nee" }}</td>
                            <td>{{ test.grade }}</td>
                            <td>{{ test.EC }}</td>
                        </tr>
                    </template>
                </template>
                <tr class="blok">
                    <td colspan="5">Niet aangewezen cursussen</td>
                </tr>
                <tr v-if="course.blok_id===null" v-for="course in courses">
                    <td colspan="5">
                        {{ course.name }}
                    </td>
                </tr>
                <tr class="blok">
                    <td colspan="5">Niet aangewezen toetsen</td>
                </tr>
                <tr v-if="test.course_id===null" v-for="test in tests">
                    <td colspan="2">{{ test.name }}</td>
                    <td>{{ test.completed == 1 ? "Ja" : "Nee" }}</td>
                    <td>{{ test.grade }}</td>
                    <td>{{ test.EC }}</td>
                </tr>
                <!-- If currentEC is above or equal to 60 then give the total
                    row a green colour -->
                <tr v-if="ECs.currentEC>=60" class="blok">
                    <td colspan="4">Totaal</td>
                    <td>{{ ECs.currentEC }}/{{ ECs.totalEC }}</td>
                </tr>
                <!-- If currentEC is above or equal to 45 then give the total
                    row a blue colour -->
                <tr v-else-if="ECs.currentEC>=45" class="blok inprogress">
                    <td colspan="4">Totaal</td>
                    <td>{{ ECs.currentEC }}/{{ ECs.totalEC }}</td>
                </tr>
                <!-- If currentEC is too low then giv the total row a red
                    colour -->
                <tr v-else class="blok failed">
                    <td colspan="4">Totaal</td>
                    <td>{{ ECs.currentEC }}/{{ ECs.totalEC }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        mounted: function() {
            this.fetchBloks();
            this.fetchCourses();
            this.fetchTests();
        },
        data: function() {
            return {
                bloks : [],
                courses : [],
                tests : [],
                pagination : {},
                ECs : {
                    currentEC : 0,
                    totalEC : 0,
                },
            }
        },
        methods: {
            fetchBloks: function() {
                fetch('/api/bloks')
                    .then(res => res.json())
                    .then(data => {
                        this.pagination.current_page = data.current_page;
                        this.pagination.last_page = data.last_page;
                        this.pagination.next_page_url = data.next_page_url;
                        this.pagination.prev_page_url = data.prev_page_url;

                        this.bloks = data.data;

                        this.countECs();
                    })
                    .catch(console.log);
            },
            fetchCourses: function() {
                fetch('/api/courses')
                    .then(res => res.json())
                    .then(data => {
                        this.courses = data.data;
                    })
                    .catch(console.log);
            },
            fetchTests: function() {
                fetch('/api/tests')
                    .then(res => res.json())
                    .then(data => {
                        this.tests = data.data;
                    })
                    .catch(console.log);
            },
            countECs: function() {
                this.bloks.forEach(blok => {
                    blok.courses.forEach(course => {
                        course.tests.forEach(test => {
                            // If test is completed add EC to currentEC
                            if (test.completed == 1) {
                                this.ECs.currentEC += test.EC;
                            }
                            // Add EC to totalEC
                            this.ECs.totalEC += test.EC;
                        })
                    });
                });
                this.tests.forEach(test => {
                    if (test.course_id == null) {
                        if (test.completed == 1) {
                            this.ECs.currentEC += test.EC;
                        }
                        this.ECs.totalEC += test.EC;
                    }
                });
            },
        },
    }
</script>
