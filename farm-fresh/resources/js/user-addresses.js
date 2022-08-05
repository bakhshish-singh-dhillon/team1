import $ from 'jquery';
import { createApp } from 'vue';
/** Address vue component */
if ($("#user-addresses").length) {
    const mountEl = document.querySelector("#user-addresses");
    const user_addresses = createApp({
        el: '#user-addresses',
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
                billing_address_id: '',
                shipping_address_id: '',
                billing_address: {
                    address_type: '',
                    address: '',
                    city: '',
                    province: '',
                    country: '',
                    postal_code: '',
                    phone: ''
                },
                shipping_address: {
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
            billing_address_id(newAddress, oldAddress) {
                if(!$.isEmptyObject(this.form_old_inputs) && this.form_old_inputs.billing_address_options){
                    this.form_old_inputs.billing_address_options = false;
                    return;
                }
                if (newAddress == "add-new") {
                    this.billing_address = {
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
                    this.billing_address = {
                        address_type: this.user_addresses[this.billing_address_id].address_type,
                        address: this.user_addresses[this.billing_address_id].address,
                        city: this.user_addresses[this.billing_address_id].city,
                        province: this.user_addresses[this.billing_address_id].province,
                        country: this.user_addresses[this.billing_address_id].country,
                        postal_code: this.user_addresses[this.billing_address_id].postal_code,
                        phone: this.user_addresses[this.billing_address_id].phone
                    }
                }
            },
            shipping_address_id(newAddress, oldAddress) {
                if(!$.isEmptyObject(this.form_old_inputs) && this.form_old_inputs.shipping_address_options){
                    this.form_old_inputs.shipping_address_options = false;
                    return;
                }
                if (newAddress == "add-new") {
                    this.shipping_address = {
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
                    this.shipping_address = {
                        address_type: this.user_addresses[this.shipping_address_id].address_type,
                        address: this.user_addresses[this.shipping_address_id].address,
                        city: this.user_addresses[this.shipping_address_id].city,
                        province: this.user_addresses[this.shipping_address_id].province,
                        country: this.user_addresses[this.shipping_address_id].country,
                        postal_code: this.user_addresses[this.shipping_address_id].postal_code,
                        phone: this.user_addresses[this.shipping_address_id].phone
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
                this.billing_address_id = this.form_old_inputs.billing_address_options;
                this.shipping_address_id = this.form_old_inputs.shipping_address_options;
                this.shipping_address = {
                    address_type: this.form_old_inputs.shipping_address_name,
                    address: this.form_old_inputs.shipping_address,
                    city: this.form_old_inputs.shipping_city,
                    province: this.form_old_inputs.shipping_province,
                    country: this.form_old_inputs.shipping_country,
                    postal_code: this.form_old_inputs.shipping_postal_code,
                    phone: this.form_old_inputs.shipping_phone
                }
                this.billing_address = {
                    address_type: this.form_old_inputs.billing_address_name,
                    address: this.form_old_inputs.billing_address,
                    city: this.form_old_inputs.billing_city,
                    province: this.form_old_inputs.billing_province,
                    country: this.form_old_inputs.billing_country,
                    postal_code: this.form_old_inputs.billing_postal_code,
                    phone: this.form_old_inputs.billing_phone
                }
            }
        }
    }, { ...mountEl.dataset }).mount('#user-addresses');
}