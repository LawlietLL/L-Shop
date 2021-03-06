/**
 * This file produces all the frontend bootstrapping.
 */

import Vue from 'vue'

import './../theme'
import './localization'

import NotificationPlugin from './notification/plugin'

import AxiosPlugin from './http/plugin'
import './http/interceptor'

__webpack_public_path__ = window.baseUrl + '/';

Vue.use(NotificationPlugin);
Vue.use(AxiosPlugin);
import './../components'

// it's a secret ^_^
console.info('\x54\x68\x69\x73\x20\x61\x70\x70\x6C\x69\x63\x61\x74\x69\x6F\x6E\x20\x69\x73\x20\x62\x61\x73\x65\x64\x20\x6F\x6E\x20\x74\x68\x65\x20\x4C\x2D\x53\x68\x6F\x70\x20\x73\x79\x73\x74\x65\x6D\x2E\x0A\x28\x68\x74\x74\x70\x73\x3A\x2F\x2F\x67\x69\x74\x68\x75\x62\x2E\x63\x6F\x6D\x2F\x44\x33\x6C\x70\x68\x31\x2F\x4C\x2D\x73\x68\x6F\x70\x29\x0A\x28\x63\x29\x20\x32\x30\x31\x37\x2D\x32\x30\x31\x38\x20\x4C\x2D\x53\x68\x6F\x70\x20\x62\x79\x20\x44\x33\x6C\x70\x68\x31\x2E'
    .replace(/\\u[\dA-F]{4}/gi,
        (match) => {
        return String.fromCharCode(parseInt(match.replace(/\\u/g, ''), 16));
    })
);

export default Vue;
