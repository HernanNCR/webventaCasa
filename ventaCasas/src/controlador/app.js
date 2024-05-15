function errorSesion(){
    var div = document.createElement("div");
    var div2 = document.createElement("div");
    var p1 = document.createElement("p");
    var p2 = document.createElement("p");
    var p3 = document.createElement("p");

    div2.style.width = "100%";
    div2.style.height = "100%";

    div.style.background = "white";
    div.style.width = "300px";
    div.style.height = "180px";
    div.style.textAlign = "center";
    div.style.borderRadius = "20px";
    div.style.border = "1px solid black";
    div.style.position = "fixed";
    div.style.left = "39%";
    div.style.bottom = "290px";
    div.style.overflow = "hidden";


    p1.textContent = "ERROR";
    p1.style.fontSize = "25px";
    p1.style.paddingTop = "50px";

    p2.textContent = "No se ejecuto la accion";
    p2.style.fontSize = "20px";

    p3.textContent = "Intentalo otra vez o mas tarde";
    p3.style.fontSize = "14px";

    div.appendChild(div2);

    div2.appendChild(p1);
    div2.appendChild(p2);
    div2.appendChild(p3);


    document.body.appendChild(div);
}

// errorSesion();