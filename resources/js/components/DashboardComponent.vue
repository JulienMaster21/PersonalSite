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
                <template v-for="blok in bloks">
                    <tr class="blok">
                        <td colspan="5">Blok {{ blok.id }}</td>
                    </tr>
                    <template v-for="course in blok.courses">
                        <tr v-for="test in course.tests">
                            <td>
                                {{ course.name }}
                            </td>
                            <td>{{ test.name }}</td>
                            <td>{{ test.completed == 1 ? "Ja" : "Nee" }}</td>
                            <td>{{ test.grade }}</td>
                            <td>{{ test.EC }}</td>
                        </tr>
                    </template>
                </template>
                <tr >
                    <td colspan="4">Totaal</td>
                    <td>{{ ECs.currentEC }}/{{ ECs.maxEC }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        mounted: function() {
            this.fetchBloks();
        },
        data: function() {
            return {
                bloks : [],
                pagination : {},
                ECs : {
                    currentEC : 0,
                    maxEC : 0,
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
            countECs: function() {
                this.bloks.forEach(blok => {
                    blok.courses.forEach(course => {
                        course.tests.forEach(test => {
                            if (test.completed == 1) {
                                this.ECs.currentEC += test.EC;
                            }
                            this.ECs.maxEC += test.EC;
                        })
                    });
                });
            },
        },
    }
</script>
