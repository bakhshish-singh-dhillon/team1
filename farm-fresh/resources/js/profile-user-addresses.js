import $ from 'jquery';
import { createApp } from 'vue';
/** Address vue component */
if ($("#profile-user-addresses").length) {
    const mountEl = document.querySelector("#profile-user-addresses");
    const user_addresses = createApp({
        el: '#profile-user-addresses',
        props: {
            addresses: {
                default: null,
                type: [Object, String],
            },
            old_inputs: {
                default: null,
                type: [Object, String],
            },
        },
        data() {
            return {
                user_addresses: "",
                form_old_inputs: "",
                address_id: '',
                address: {
                    address_type: '',
                    address: '',
                    city: '',
                    province: '',
                    country: '',
                    postal_code: '',
                    phone: ''
                }
            };
        },
        watch: {
            address_id(newAddress, oldAddress) {
                if(!$.isEmptyObject(this.form_old_inputs) && this.form_old_inputs.address_options){
                    this.form_old_inputs.address_options = false;
                    return;
                }
                if (newAddress == "add-new") {
                    this.address = {
                        address_type: '',
                        address: '',
                        city: '',
                        province: '',
                        country: '',
                        postal_code: '',
                        phone: ''
                    }
                }
                else {
                    this.address = {
                        address_type: this.user_addresses[this.address_id].address_type,
                        address: this.user_addresses[this.address_id].address,
                        city: this.user_addresses[this.address_id].city,
                        province: this.user_addresses[this.address_id].province,
                        country: this.user_addresses[this.address_id].country,
                        postal_code: this.user_addresses[this.address_id].postal_code,
                        phone: this.user_addresses[this.address_id].phone
                    }
                }
            }
        },
        mounted() {
            if (!$.isEmptyObject(JSON.parse(this.addresses))) {
                this.user_addresses = JSON.parse(this.addresses)
            }
            if (!$.isEmptyObject(JSON.parse(this.old_inputs))) {
                this.form_old_inputs = JSON.parse(this.old_inputs);
                this.address_id = this.form_old_inputs.address_options;
                this.address = {
                    address_type: this.form_old_inputs.address_name,
                    address: this.form_old_inputs.address,
                    city: this.form_old_inputs.city,
                    province: this.form_old_inputs.province,
                    country: this.form_old_inputs.country,
                    postal_code: this.form_old_inputs.postal_code,
                    phone: this.form_old_inputs.phone
                }
            }
        }
    }, { ...mountEl.dataset }).mount('#profile-user-addresses');
}