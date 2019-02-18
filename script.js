const getXMLInstance = () => new XMLHttpRequest();

function sendAjaxRequest(id) {

    // Question no 1 reverse the user entered string
    document.getElementById(id).addEventListener('keyup', function (el) {
        // Make an asyn request to php scrip which will return the reverse of the string
        const xhr = getXMLInstance();
        const path = id.replace('input-', '');
        const outputPath = `.${path}` + "-output";
        xhr.open('GET', path + '.php?q=' + this.value, true);
        xhr.onreadystatechange = function () {

            if (this.readyState == 2) {
                // We got the response from the server so do something with it.
                document.querySelector(outputPath).textContent = "Loading...";
            }
            if (this.readyState == 4 && this.status == 200) {
                // We got the response from the server so do something with it.
                document.querySelector(outputPath).innerHTML = `${this.responseText}`
            }
        }
        xhr.send();
    })
}
const getFirstInput = () => document.getElementById('input-first').addEventListener('keyup', function () {
    return this.value;
});
const getSecondInput = () => document.getElementById('input-second').addEventListener('keyup', function () {
    return this.value;
});

function ajax(first, second) {
    // Logic goes here for the question including multiple inputs
    console.log(first, second);
    const output = document.getElementById('q3-output');
    const xhr = getXMLInstance();
    if (first && second) {
        const URL = 'question-3.php?first=' + first + '&second=' + second;
        xhr.open('GET', URL, true);
        xhr.onreadystatechange = function () {
            if (this.readyState == 2) {
                output.textContent = 'Loading...';
            } else if (this.readyState === 4 && this.status === 200) {
                output.textContent = this.responseText;
            }
        }
        xhr.send();
    }
}
document.getElementById('substrBtn').addEventListener('click', function (e) {
    e.preventDefault();
    const first = document.getElementById('input-first').value;
    const second = document.getElementById('input-second').value;
    ajax(first, second);
})
sendAjaxRequest('input-question-1');
sendAjaxRequest('input-question-3');