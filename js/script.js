function calculator() {
    var amount = parseInt(document.getElementById("amount").value)
    var first = parseInt((document.getElementById("first").value = (55 / 100) * amount)).toFixed(2)
    var second = parseInt((document.getElementById("second").value = (10 / 100) * amount)).toFixed(2)
    var third = parseInt(document.getElementById("third").value = (10 / 100) * amount)
    var fourth = parseInt(document.getElementById("fourth").value = (10 / 100) * amount)
    var fifth = parseInt(document.getElementById("fifth").value = (10 / 100) * amount)
    var sixth = parseInt(document.getElementById("sixth").value = (5 / 100) * amount)

}

function displayClock() {
    var date = new Date();
    var h = date.getHours();
    var m = date.getMinutes();
    var s = date.getSeconds();
    var session = "AM";

    if (h == 0) {
        h = 12;
    }

    if (h > 12) {
        h = h - 12;
        session = "PM";
    }

    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;

    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("displayTime").innerText = time;
    document.getElementById("displayTime").textContent = time;

    setTimeout(displayClock, 1000);

}

displayClock();
