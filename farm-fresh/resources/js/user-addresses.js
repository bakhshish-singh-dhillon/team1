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
        },
        data() {
            return {
                my_addresses: "",
                billing_address_id : '',
                shipping_address_id : '',
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
                        address_type: this.my_addresses[this.billing_address_id].address_type,
                        address: this.my_addresses[this.billing_address_id].address,
                        city: this.my_addresses[this.billing_address_id].city,
                        province: this.my_addresses[this.billing_address_id].province,
                        country: this.my_addresses[this.billing_address_id].country,
                        postal_code: this.my_addresses[this.billing_address_id].postal_code,
                        phone: this.my_addresses[this.billing_address_id].phone
                    }
                }
            },
            shipping_address_id(newAddress, oldAddress) {
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
                        address_type: this.my_addresses[this.shipping_address_id].address_type,
                        address: this.my_addresses[this.shipping_address_id].address,
                        city: this.my_addresses[this.shipping_address_id].city,
                        province: this.my_addresses[this.shipping_address_id].province,
                        country: this.my_addresses[this.shipping_address_id].country,
                        postal_code: this.my_addresses[this.shipping_address_id].postal_code,
                        phone: this.my_addresses[this.shipping_address_id].phone
                    }
                }
            }
        },
        mounted() {
            if (JSON.parse(this.addresses)) {
                this.my_addresses = JSON.parse(this.addresses)
            }
        }
    }, { ...mountEl.dataset }).mount('#user-addresses');
}