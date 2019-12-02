<template>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title" id="basic-layout-form"><b>Edit Todo</b></h4>
        </div>
        <form class="form-inline"  method="POST" enctype="multipart/form-data"  @submit.prevent="update()" id="addComponent">
            <div class="form-group">
                <input type="text" class="form-control" v-model="form.task">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</template>

<script>
import { EventBus } from './../assets';
export default {
     data:function(){
        return {
            list:false,
            add_form:true,
            edit_form:false,
            view_form:false,
            form:{
                task:'',
            }
        }
    },
    methods:{
            update:function(){
                axios.put('/todo/edit'+id).then( (response) => {
                    // this.showMassage(response.data);
                    EventBus.$emit('data-changed');
                })
                .catch(error => {
                    if(error.response.status == 422){
                        this.errors = error.response.data.errors;
                    }else{
                        this.showMassage(error);
                        console.log(error);
                    }
                });

            },
    }
}
</script>
