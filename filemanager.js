// ファイルアップロード
let post = document.getElementById('post');
post.addEventListener('click', execUpload);

function execUpload() {
    let upload = document.getElementById('upload');
    let file1 = upload.files[0];
    // console.log(file1);

    let formData = new FormData();
    formData.append('modelfile', file1);
    for (let value of formData.entries()) {
        console.log(value);
    }

    let xmlHttp = new XMLHttpRequest();
    // console.log("1: " + xmlHttp.readyState);
    xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
            alert(xmlHttp.responseText);
        }
    };
    // console.log("2: " + xmlHttp.readyState);
    xmlHttp.open('POST', 'getForm.php', true);
    // console.log("3: " + xmlHttp.readyState);
    // xmlHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xmlHttp.send(formData);
    // console.log("5: " + xmlHttp.readyState);
}

