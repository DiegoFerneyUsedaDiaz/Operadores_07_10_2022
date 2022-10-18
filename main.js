addEventListener ("DOMContentLoaded", async(e)=>){
let peticion = await = fetch ("api.php");
let datos = await peticion.tect ();
document. querySelector ("#datos").innerHTML = datos;
}