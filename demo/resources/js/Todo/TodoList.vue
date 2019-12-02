<template>
    <div>
		<div class="card">
			<div class="card-header">
				<h4 class="card-title" id="basic-layout-form"><b>Todo List</b></h4>
			</div>
			<div class="card-content collapse show" v-if="list">
				<div class="card-body card-dashboard">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
							<thead class="table_head">
                                <tr>
                                    <th>S/L</th>
                                    <th>Name</th>
                                    <th class="text-center min-width-85">Action</th>
                                </tr>
							</thead>
                            <tbody v-if="tasklist != null">
								<tr v-for="data in tasklist" :key="data.id">
									<td>{{data.id}}</td>
                                    <td>{{data.task}}</td>
									<td class="text-center">
										<a class="btn btn-danger btn-sm" @click="deleteData(data.id)"><i aria-hidden="true" class="fa fa-trash-o btnColor"></i></a>
										<a class="btn btn-warning btn-sm" @click="editData(data.id)"><i aria-hidden="true" class="fa fa-pencil-square-o btnColor"></i></a>
                                        <a class="btn btn-primary btn-sm" @click="viewData(data.id)"><i aria-hidden="true" class="fa fa-eye btnColor"></i></a>
									</td>
								</tr>
							</tbody>
							<tbody v-else>
									<tr>
										<td colspan="11">No Data Available.</td>
									</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
            <AddTodo v-else-if="add_form"></AddTodo>
            <EditTodo v-else-if="edit_form"></EditTodo>
            <ViewTodo v-else-if="view_form"></ViewTodo>
		</div>
	</div>
</template>

<script>
    import AddTodo from './AddTodo.vue';
    import EditTodo from './EditTodo.vue';
    import ViewTodo from './EditTodo.vue';
    import { EventBus } from './../assets';

    export default {
        props:{
            tasklist:{
                type:Array,
                required:true
            }
        },
        components: {AddTodo,EditTodo,ViewTodo},
        data: function(){
            return {
                list: true,
                edit_form: false,
                view_form: false,
                add_form: false,
                resultData: ''
            }
        },

        methods:{
            editData(id){
                var _this = this;
                _this.add_form = false;
                _this.list = false;
                _this.view_form = false;
                _this.edit_form = true;
                _this.edit_id = id;
                $('#addBtn').hide();
                $('#listBtn').show();
                console.log('edit')
            },
            viewData(id){
                var _this = this;
                _this.add_form = false;
                _this.list = false;
                _this.edit_form = false;
                _this.view_form = true;
                _this.edit_id = id;
                $('#addBtn').hide();
                $('#listBtn').show();
                console.log('view')
            },

            showMassage(data){
                if(data.status == 'success'){
                    toastr.success(data.message, 'Success Alert');
                }else if(data.status == 'error'){
                    toastr.error(data.message, 'Error Alert');
                }else{
                    toastr.error(data.message, 'Error Alert');
                }
            },

            deleteData: function(id){
                var _this = this;
                    axios.delete('/todo/delete'+id).then((response) => {
                        // _this.index(1);
                        // _this.showMassage(response.data);
                    }).catch((error)=>{
                        // _this.showMassage(error);
                });
            },
        },

        created(){
            var _this = this;

            // _this.initTableSearch();

            $('body').on('click', '#addBtn', function() {
                _this.add_form = true;
                _this.list = false;
                _this.edit_form = false;
                _this.view_form = false;
				$('#addBtn').hide();
				$('#listBtn').show();
            });

            $('body').on('click', '#listBtn', function() {
                _this.add_form = false;
                _this.list = true;
                _this.edit_form = false;
                _this.view_form = false;
				$('#addBtn').show();
				$('#listBtn').hide();
                // _this.initTableSearch();
            });

            EventBus.$on('data-changed', () => {
                _this.add_form = _this.edit_form =  _this.view_form = false;
                _this.list = true;
                $('#addBtn').show();
                $('#listBtn').hide();
                // _this.index(1);
                // _this.initTableSearch();
            });

            // _this.index(1);
        }
    }
</script>
