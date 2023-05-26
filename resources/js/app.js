import "./bootstrap";
import "flowbite";

import { Select, initTE } from "tw-elements";
initTE({ Select });

import jQuery from "jquery";
window.$ = jQuery;

import * as myLibrary from "./library.js";

// Extract all functions from the myLibrary module and add them to the global scope
Object.keys(myLibrary).forEach((key) => {
    window[key] = myLibrary[key];
});
