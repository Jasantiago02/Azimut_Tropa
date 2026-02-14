import { Header } from "./components/header";
import { Main } from "./components/main";
import { pepe } from "./prueba";

document.addEventListener("DOMContentLoaded", ()=>{
    const body = document.querySelector("body");
    body.appendChild(Header());
    body.appendChild(Main());

    if(window.location.pathname==="/dashboard"){
        document.getElementById("main").innerHTML = "DASHBOARD";
    }
});