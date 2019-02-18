// Question no 1 reverse the user entered string
document.getElementById('input-question-1').addEventListener('keyup', function (el) {
    // Make an asyn request to php scrip which will return the reverse of the string
    const xhr = new XMLHttpRequest();

    xhr.open('GET', 'question-1.php?q=' + this.value, true);
    xhr.onreadystatechange = function () {

        if (this.readyState == 2) {
            // We got the response from the server so do something with it.
            document.querySelector('.output').textContent = "Loading...";
        }
        if (this.readyState == 4 && this.status == 200) {
            // We got the response from the server so do something with it.
            document.querySelector('.output').textContent = this.responseText;
        }
    }
    xhr.send();
})