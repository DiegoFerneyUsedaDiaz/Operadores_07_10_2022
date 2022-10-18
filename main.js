addEventListener("DOMContentLoaded", async(e)=>{
    let peticion = await fetch("https://diegoferneyusedadiaz.000webhostapp.com/Operadores_07_10_2022/api.php");
    let data = await peticion.text();
    document.querySelector("pre").innerHTML = data;
}) 