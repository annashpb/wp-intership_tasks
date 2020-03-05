const button = document.querySelector("button");
button.addEventListener("submit", e => e.preventDefault());

const xhr = new XMLHttpRequest();
// xhr.responseType = "json";

xhr.open("GET", "access.php", true);
xhr.send();

function responseHandler() {
    if (xhr.readyState === 4 && xhr.status === 200) {
	
        // выводим в консоль то что ответил сервер
        console.log(xhr.responseText);
      }
}

xhr.addEventListener("readystatechange", responseHandler);
