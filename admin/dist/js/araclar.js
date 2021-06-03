function getData(url) {
	var data ="";
	$.ajax({
            type:'POST',                      	// - POST veya GET					// - Yukarıda data değişkenini tanımladık.
            dataType:'json',                    // - JSON Formatında Gönderilmesini Sağladık.
            url: url,
			async: false,
            success:function(gelen){            // - Success, complete ve error Fonksiyonları vardır.
				data = gelen;								// - Gelen Verimizi Sonuc Divinin İçerisine Yazdırdık.
            }
        });
		return data;
}


function JsonTarih(data) {
    if (data == null) return '';

    var pattern = /Date\(([^)]+)\)/;
    var results = pattern.exec(data);
    var dt = new Date(parseFloat(results[1]));
    var day = dt.getDate();
    var month = dt.getMonth() + 1;
    var year = dt.getFullYear();
    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;

    return day + "." + month + "." + year;
}


function TarihIsle(veri, row) {
    return JsonTarih(veri);
}


function Bugun(deger) {
    var date = new Date();
    var today = "";
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();

    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;
    if (deger == "tr") {
        today = day + "-" + month + "-" + year;
    } else {
        today = year + "-" + month + "-" + day;
    }
    return today;
}


function TcKontrol(a) {
    if (a.substr(0, 1) == 0 && a.lenght != 11) {
        return false;
    }
    var i = 9, md = '', mc = '', digit, mr = '';
    while (digit = a.charAt(--i)) {
        i % 2 == 0 ? md += digit : mc += digit;
    }
    if (((eval(md.split('').join('+')) * 7) - eval(mc.split('').join('+'))) % 10 != parseInt(a.substr(9, 1), 10)) {
        return false;
    }
    for (c = 0; c <= 9; c++) {
        mr += a.charAt(c);
    }
    if (eval(mr.split('').join('+')) % 10 != parseInt(a.substr(10, 1), 10)) {
        return false;
    }
    return true;
}
