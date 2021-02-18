
function pagoOnChange(sel) {
	if (sel.value == "1") {
		
		divC = document.getElementById("adl");
		divC.style.display = "";

		divC2 = document.getElementById("adl2");
		divC2.style.display = "";

		divC3 = document.getElementById("adl3");
		divC3.style.display = "";

		
		/*divR = document.getElementById("rfc");
		divR.style.display = "";
		divRm = document.getElementById("rfc2");
		divRm.style.display = "none";*/
	} else {
		divC = document.getElementById("adl");
		divC.style.display = "none";

		divC2 = document.getElementById("adl2");
		divC2.style.display = "none";

		divC3 = document.getElementById("adl3");
		divC3.style.display = "none";
		/*divR = document.getElementById("rfc");
		divR.style.display = "none";
		divRm = document.getElementById("rfc2");
		divRm.style.display = "";*/
	}



}