<template>
    <div class="card"  v-if="records.length>0">

    <table class="table table-hover"  >
        <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>Date Birth</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="item in records">
            <td> {{ item.id }} </td>
            <td> {{ item.first_name }} </td>
            <td> {{ item.last_name }} </td>
            <td> {{ item.phone }}</td>
            <td> {{ item.date_birth }}</td>
        </tr>
        </tbody>
    </table>
    </div>
</template>

<script>
    export default {
        props: {
            records: {
                type: Array
            }
        },
    }
</script>
