<template>

    <div class="card mb-5">
        <div class="card-header">Add  record</div>
    <form action="home" method="post">
        <div class="col-12 mt-4">
        <div class="col-md-6 float-left">
        <div class="form-group">
            <label for="first_name">First name</label>
            <input name="first_name" type="text" id="first_name" class="form-control" required />

        </div>
        </div>
        <div class="col-md-6 float-left">
            <div class="form-group">
                <label for="last_name">Last name</label>
                <input name="last_name" type="text" id="last_name" class="form-control"  required/>

            </div>
        </div>


            <div class="col-md-6 float-left">
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input name="phone" type="number" id="phone" class="form-control" required />

                </div>
            </div>

        <div class="col-md-6 float-left">
                <div class="form-group">
                    <label for="date_birth">Date birth</label>
                    <datepicker  name="date_birth" id="date_birth" format="yyyy-MM-dd" input-class="form-control" value="2020-03-04"></datepicker>

                </div>
            </div>


        <div class="col-md-6 float-left mb-4">
        <input type="hidden" name="_token" :value="csrf">
        <button type="submit" name="submit" class="btn btn-info">Save</button>
        </div>
        </div>
    </form>
    </div>
</template>



<script>
    import Datepicker from 'vuejs-datepicker';

    export default {
        data(){
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        },
        components: {
            Datepicker
        },
        name: "FormComponent"
    }

</script>

<style scoped>


</style>
