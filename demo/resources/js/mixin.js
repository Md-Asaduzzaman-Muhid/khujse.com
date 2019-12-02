import { focus } from 'vue-focus';
import moment from 'moment';
export default {
    directives: { focus: focus},
    data: function () {
        return {
            dateFormat: 'yyyy-MM-dd',
        }
    },
    methods: {
        moment: function (date) {
            return moment(date).format('Do MMMM YYYY');
        },
        showMassage(data){
            if(data.status === 'success'){
                toastr.success(data.message, 'Success Alert');
            }else if(data.status === 'error'){
                toastr.error(data.message, 'Error Alert');
            }else{
                toastr.error(data.message, 'Error Alert');
            }
        },

        generateYarnDescriptionString(yarnCount){
            let string = '';
            string += yarnCount.count_name ? ' '+yarnCount.count_name : '';
            string += yarnCount.count_ratio ? ' '+yarnCount.count_ratio : '';
            string += yarnCount.count_type ? ' '+yarnCount.count_type : '';
            string += yarnCount.color ? ' '+yarnCount.color : '';
            string += yarnCount.other ? ' '+yarnCount.other : '';
            return string;
        },

        incrementItem(number) {
            number +=1;
            return number
        },

        changePerPage(){
            var _this = this;
            _this.index(1,_this.perPage);
        },

        getDatesFromShifts(shifts, style = false){
            let dates = [];
            for (let i = 0; i < shifts.length; i++){
                dates.push(shifts[i].date);
            }
            function onlyUnique(value, index, self) {
                return self.indexOf(value) === index;
            }
            let uniqueDates = dates.filter( onlyUnique );

            if (style){
                let string = '';
                for (let i =0; i < uniqueDates.length; i++){
                    string+='<span class="badge badge-primary">'+uniqueDates[i]+'</span>';
                }
                return string;
            }

            return  uniqueDates.join(", ");
        },
    },
}
