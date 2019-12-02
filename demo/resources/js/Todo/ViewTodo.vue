<template>
    <div>
		<div class="card">
			<div class="card-header">
				<h4 class="card-title" id="basic-layout-form"><b>View Todo</b></h4>
			</div>
			<div class="card-content collapse show">
				<div class="card-body card-dashboard">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
							<thead class="table_head">
                                <tr>
                                    <th>S/L</th>
                                    <th>Name</th>
                                    <!-- <th class="text-center min-width-85">Action</th> -->
                                </tr>
							</thead>
							<!-- <tbody v-if="resultData.data !=''" id="tableData"> -->
                            <tbody>
								<tr >
									<td>1</td>
                                    <td>Name</td>
									<!-- <td class="text-center">
										<a class="btn btn-danger btn-sm"><i aria-hidden="true" class="fa fa-trash-o btnColor"></i></a>
										<a class="btn btn-primary btn-sm"><i aria-hidden="true" class="fa fa-pencil-square-o btnColor"></i></a>
                                        <a class="btn btn-primary btn-sm"><i aria-hidden="true" class="fa fa-plus btnColor"></i></a>
                                        <a class="btn btn-primary btn-sm"><i aria-hidden="true" class="fa fa-eye btnColor"></i></a>
									</td> -->
								</tr>
							</tbody>
							<!-- <tbody v-else>
									<tr>
										<td colspan="11">No Data Available.</td>
									</tr>
							</tbody> -->
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
    import { EventBus } from './../assets';
    export default {
        // data:function(){
        //     return {
        //         list:false,
        //         add_form:false,
        //         edit_form:false,
        //         view_form:true,
        //         form:{
        //             task:'',
        //         }
        //     }
        // },
        mounted() {
            console.log('Component View.')
        }
    }
</script>
