import $ from 'jquery';
import { createApp } from 'vue';
/** Address vue component */
if ($("#user-addresses").length) {
    const user_addresses = createApp({
        el: '#user-addresses',
        data() {
            return {
                upload: null,
                message: "sdfdfs"
            };
        },
    })
    // user_addresses.component('user-addresses', UserAddresses)
    user_addresses.mount('#user-addresses');
}