require('./bootstrap');
require('admin-lte');
require('particles.js');

import 'particles.js/particles';
const particlesJS = window.particlesJS;
import 'datatables.net-bs4';


// JSON file is located in the directory of 'public/js/particlejs-config.json'
particlesJS.load('particles-js', 'demo/particles.json', function() {
    console.log('callback - particles.js config loaded');
  });