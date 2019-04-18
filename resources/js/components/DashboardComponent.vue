<template>
    <div>
        <h1 class="center">Studiemonitor</h1>
        <table class="monitor">
            <thead>
                <th>Toets</th>
                <th>Behaald?</th>
                <th>Cijfer</th>
                <th>EC's</th>
            </thead>
            <tbody>
                <template v-for="blok in bloks">
                    <tr class="blok">
                        <td colspan="4">Blok {{ blok.id }}</td>
                    </tr>
                    <template v-for="course in blok.courses">
                        <tr>
                            <td colspan="4">{{ course.name }}</td>
                        </tr>
                        <tr v-for="test in course.tests">
                            <td>{{ test.name }}</td>
                            <td>{{ test.completed == 1 ? "Ja" : "Nee" }}</td>
                            <td>{{ test.grade }}</td>
                            <td>{{ test.EC }}</td>
                        </tr>
                    </template>
                </template>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        mounted: function() {
            this.fetchBloks();
            this.fetchTests();
            this.countECs();
            console.log(this.ECs);
        },
        data: function() {
            return {
                bloks : {},
                pagination : {},
                tests : {},
                ECs : {
                    minEC : 0,
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
                Array.prototype.forEach.call(this.tests, child => {
                    if (child.completed) {
                        this.ECs.minEC = this.ECs.minEC + child.EC;
                    }
                    this.ECs.maxEC = this.ECs.maxEC + child.EC;
                });
                console.log(this.ECs.minEC);
            },
        },
    }
</script>
