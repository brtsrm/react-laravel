import './bootstrap';
import React from 'react'
import ReactDOM from 'react-dom/client'
import App from "./components/App";
import {BrowserRouter} from "react-router-dom";


// Sweeatalert2
import Swal from "sweetalert2/dist/sweetalert2.min"
import "sweetalert2/dist/sweetalert2.min.css"

window.Swal = Swal

const toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true
})

window.toast = toast

ReactDOM.createRoot(document.getElementById("app")).render(
    <BrowserRouter>
        <App/>
    </BrowserRouter>
)
